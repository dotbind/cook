<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostImage;

use App\Consts;

class AdminController extends Controller
{
    public function index(Request $request){
        if(!$request->sort_asc && !$request->sort_desc) {
            $sort = 'id';
            $order = 'desc';
        }elseif(isset($request->sort_asc) && isset($request->sort_asc)){
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
       
        
        $posts = Post::orderBy($sort, $order)->paginate(20);
        $param = ['posts' => $posts, 'sort' => $sort];
        return view('admin.index', $param);
    }
}
