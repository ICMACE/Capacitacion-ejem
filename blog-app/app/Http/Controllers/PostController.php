<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    private $post=[];
    public function index()
    {
        return view('posts.index',[
            'posts'=>$this->post
        ]);
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        //dd($request->all());
        $a['id']= rand(1,1000);
        $a['title']= $request->title;
        $a['content']= $request->content;
        array_push($this->post,$a);
        $posts = $this->post;
        //return view('posts.index', compact('posts'))->with('success', 'Post creado.');
        return view('posts.index', [
            'posts' => $posts,
            'success' => 'Post creado.'
        ]);
        

    }
    public function show(string $id)
    {
        //dd($this->post);

        $a['id']= rand(1,1000);
        $a['title']= 'Aqui deberia de ir un titulo';
        $a['content']= 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        array_push($this->post,$a);
        $posts = $this->post;

        return view('posts.show', compact('posts'));
    }
}
