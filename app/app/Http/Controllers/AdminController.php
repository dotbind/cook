<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostImage;

class AdminController extends Controller
{
    public function index(){
        $posts = Post::all());
        
        return view('admin.index', ['posts' => $posts]);
    }
}
