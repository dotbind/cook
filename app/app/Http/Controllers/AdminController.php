<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostImage;

use App\Consts;

class AdminController extends Controller
{
    public function index(){
        $posts = Post::all();
        $test = (config('const.1'));
        dump($test);
        return view('admin.index', ['posts' => $posts]);
    }
}
