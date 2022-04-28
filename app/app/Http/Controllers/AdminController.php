<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostImage;

class AdminController extends Controller
{
    public function index(){
        $posts = Post::has('post_images')->get();
        
        return view('admin.index', ['posts' => $posts]);
    }
}
