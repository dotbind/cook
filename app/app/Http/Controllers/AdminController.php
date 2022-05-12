<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostImage;

use App\Consts;

class AdminController extends Controller
{
    public function index(Request $request){
        //並び順の指定が無い時はidの降順とする
        if(!$request->sort_asc && !$request->sort_desc) {
            $sort = 'id';
            $order = 'desc';
        }
        if(isset($request->sort_asc)) {
            $sort = $request->sort_asc;
            $order = 'asc';
        }
        if(isset($request->sort_desc)) {
            $sort = $request->sort_desc;
            $order = 'desc';
        }
        
        //年月日の検索条件があるとき
        if(isset($request->year)){
            //Viewでのselectタグ用
            $year = $request->year;
            $month = $request->month;
            $day = $request->day;

            //year、month、day、いずれも検索条件が設定されている
            if($request->year !== "--" && $request->month !== "--" && $request->day !== "--"){
                $posts = Post::whereYear('date', $request->year)->whereMonth('date', $request->month)->whereDay('date', $request->day)->orderBy($sort, $order)->paginate(20);   
            }
            //いずれも設定されていない
            else if($request->year === "--" && $request->month === "--" && $request->day === "--"){
                $posts = Post::orderBy($sort, $order)->paginate(20);    
            }
            
            else if($request->year === "--" && $request->month !== "--" && $request->day !== "--"){
                $posts = Post::whereMonth('date', $request->month)->whereDay('date', $request->day)->orderBy($sort, $order)->paginate(20);
            }
            else if($request->year === "--" && $request->month === "--" && $request->day !== "--"){
                $posts = Post::whereDay('date', $request->day)->orderBy($sort, $order)->paginate(20);
            }
            else if($request->year === "--" && $request->month !== "--" && $request->day === "--"){
                $posts = Post::whereMonth('date', $request->month)->orderBy($sort, $order)->paginate(20);
            }

            else if($request->year !== "--" && $request->month === "--" && $request->day !== "--"){
                $posts = Post::whereYear('date', $request->year)->whereDay('date', $request->day)->orderBy($sort, $order)->paginate(20);
            }
            else if($request->year !== "--" && $request->month === "--" && $request->day === "--"){
                $posts = Post::whereYear('date', $request->year)->orderBy($sort, $order)->paginate(20);
            }
            else if($request->year !== "--" && $request->month !== "--" && $request->day === "--"){
                $posts = Post::whereYear('date', $request->year)->whereMonth('date', $request->month)->orderBy($sort, $order)->paginate(20);
            }else{
                $posts = Post::orderBy($sort, $order)->paginate(20);
            }
        }else{
            //Viewでのselected用
            $year = "";
            $month = "";
            $day = "";

            $posts = Post::orderBy($sort, $order)->paginate(20);
        }
        
        $param = ['posts' => $posts, 'sort' => $sort, 'order' => $order, 'year' => $year, 'month' => $month, 'day' => $day];
        return view('admin.index', $param);
    }
}
