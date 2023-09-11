<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
/* use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
 */

class PostController extends Controller
{
    //use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        /*$posts = [
            ['title'=>'First post'],
            ['title'=>'Second post'],
            ['title'=>'Third post'],
            ['title'=>'Fourth post']
            ];
        return view('blog',['posts'=>$posts ]);*/
        //$posts = DB::table('posts')->get();


        $posts = Post::get();
        return view('posts.index',['posts'=>$posts ]);
    }

    public function show(Post $post)
    {
        return view('posts.show',['post'=>$post]);
    }

    public function create()
    {
        $posts = Post::get();
        return view('posts.create',['posts'=>$posts ]);
    }

    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();
        session()->flash('status','Post created');
        return to_route('posts.index');
    }
}

