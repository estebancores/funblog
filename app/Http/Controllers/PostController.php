<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getAll()
    {
        $posts = Post::orderBy('id','DESC')->where('status','PUBLISHED')->paginate(10);
        return $posts;
    }
}
