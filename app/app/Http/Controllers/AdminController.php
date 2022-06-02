<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostImage;
use Illuminate\Support\Facades\Auth;

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
        // if(isset($request->year)){
        //     //Viewでのselectタグ用
        //     $year = $request->year;
        //     $month = $request->month;
        //     $day = $request->day;

        //     //year、month、day、いずれも検索条件が設定されている
        //     if($request->year !== "--" && $request->month !== "--" && $request->day !== "--"){
        //         $posts = Post::whereYear('date', $request->year)->whereMonth('date', $request->month)->whereDay('date', $request->day)->orderBy($sort, $order)->paginate(20);   
        //     }
        //     //いずれも設定されていない
        //     else if($request->year === "--" && $request->month === "--" && $request->day === "--"){
        //         $posts = Post::orderBy($sort, $order)->paginate(20);    
        //     }
            
        //     else if($request->year === "--" && $request->month !== "--" && $request->day !== "--"){
        //         $posts = Post::whereMonth('date', $request->month)->whereDay('date', $request->day)->orderBy($sort, $order)->paginate(20);
        //     }
        //     else if($request->year === "--" && $request->month === "--" && $request->day !== "--"){
        //         $posts = Post::whereDay('date', $request->day)->orderBy($sort, $order)->paginate(20);
        //     }
        //     else if($request->year === "--" && $request->month !== "--" && $request->day === "--"){
        //         $posts = Post::whereMonth('date', $request->month)->orderBy($sort, $order)->paginate(20);
        //     }

        //     else if($request->year !== "--" && $request->month === "--" && $request->day !== "--"){
        //         $posts = Post::whereYear('date', $request->year)->whereDay('date', $request->day)->orderBy($sort, $order)->paginate(20);
        //     }
        //     else if($request->year !== "--" && $request->month === "--" && $request->day === "--"){
        //         $posts = Post::whereYear('date', $request->year)->orderBy($sort, $order)->paginate(20);
        //     }
        //     else if($request->year !== "--" && $request->month !== "--" && $request->day === "--"){
        //         $posts = Post::whereYear('date', $request->year)->whereMonth('date', $request->month)->orderBy($sort, $order)->paginate(20);
        //     }else{
        //         $posts = Post::orderBy($sort, $order)->paginate(20);
        //     }
        // }else{
        //     //Viewでのselected用
        //     $year = "";
        //     $month = "";
        //     $day = "";

        //     $posts = Post::orderBy($sort, $order)->paginate(20);
        // }

        $posts = Post::orderBy($sort, $order)->paginate(20);
        $param = ['posts' => $posts, 'sort' => $sort, 'order' => $order];
        //$param = ['posts' => $posts, 'sort' => $sort, 'order' => $order, 'year' => $year, 'month' => $month, 'day' => $day];
        return view('admin.index', $param);
    }

    public function delete(Request $request){
        Post::find($request->delete_post_id)->delete();
        return redirect('/admin/');
    }

    public function add(Request $request){
        $cook_type = config('const');
        return view('admin.add', compact('cook_type'));
    }

    public function create(Request $request){
        $post = new Post;
        $form = $request->all();
        unset($form['_token']);
        $post->user_id = Auth::id();
        $post->date = $request->date;
        $post->cook_type = $request->cook_type;
        $post->comment = $request->comment;
        $post->like_count = 0;
        $post->save();
        if($request->file('file') !== null) {
            $last_insert_post_id = $post->id;
            if(is_array($request->file('file'))){
                $files = $request->file('file');
                foreach($files as $file){
                    $post_image = new PostImage;
                    $file_name = $file->getClientOriginalName();
                    $file->storeAS('names',$file_name);
                    $post_image->post_id = $last_insert_post_id;    
                    $post_image->url = $file_name;
                    $post_image->save();
                }
            }else{
                $post_image = new PostImage;
                $file_name = $file->getClientOriginalName();
                $file->storeAS('names',$file_name);
                $post_image->post_id = $last_insert_post_id;    
                $post_image->url = $file_name;
                $post_image->save();
            }
        }
        
    return redirect('/admin/');
    }

    public function edit(Request $request,$id){
        $posts = Post::find($id);
        $post_images = PostImage::where('post_id', $id)->get();
        
        $cook_type = config('const');
        $param = ['id' => $id, 'posts' => $posts, 'post_images' => $post_images, 'cook_type' => $cook_type];
        return view('admin.edit', $param);
    }


}
