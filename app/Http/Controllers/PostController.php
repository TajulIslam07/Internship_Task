<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    public function index(){


        // get here all post with who user created this post with eager loading.
       $posts=DB::table('posts')
           ->join('users','posts.user_id','=','users.id')
            ->get();
        // compact the post data to welcome view.

        return view('welcome', compact('posts'));
    }
}
