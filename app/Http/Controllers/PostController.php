<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\SavePostRequest;
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
        
        $post = Post::get();
        return view('posts.create',['post'=>New Post]);
    }

    public function store(SavePostRequest $request)
    {
        /*
        $validated = $request->validate([
                    'title'=>['required', 'min:4'],
                    'body'=>['required']
                ]); */

        /*$post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();*/
        Post::create($request->validated());//$validated);
        //session()->flash('status','Post created');//CAMBIADO POR ->with
        return to_route('posts.index')->with('status','Post created!!');
    }

    public function edit(Post $post)
    {
        return view('posts.edit',['post'=>$post]);
        //return 'mandando a editar';
    }

    public function update(SavePostRequest $request,Post $post)
    {

        $post->update($request->validated());
        //session()->flash('status','Post updated!');
        return to_route('posts.show',$post)->with('status','Post updated!!!!');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return to_route('posts.index',$post)->with('status','Post Deleted!!!!');
    }


}

