<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function mainPage()
    {
        $posts = DB::table('posts')->get();
        return view('sites.mainPage',[
            'posts'=>$posts
        ]);
    }

    public function login()
    {
        return view('auth.login');
    }

    public function addPost()
    {
        return view('sites.addPost');
    }

    public function savePost(Request $request)
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->author = $request->input('author');
        $post->save();
        $posts = DB::table('posts')->get();
        return view('sites.mainPage',[
            'posts'=>$posts
        ]);
    }

}
