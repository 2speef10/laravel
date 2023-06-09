<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function show($id){
        $post = Post::findOrFail($id);
        return view('posts.show',compact('post'));
    }
    public function index(){
        $posts = Post::orderBy('created_at','desc')->get();
        return view('posts.index',compact('posts'));
    }

}
