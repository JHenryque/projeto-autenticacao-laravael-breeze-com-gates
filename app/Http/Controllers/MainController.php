<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;


class MainController extends Controller
{
    //
    public function index():View
    {
        // get all posts and the data of the user who craete tje post
        $posts = Posts::with('user')->get();
        return view('dashboard', ['posts' => $posts]);
    }

    public function createPost()
    {
        // gate
        if (Gate::denies('post.create'))
        {
            abort(403, 'Voçé nao tem permissão para criar novo posts.');
        }

        return view('create-post');
    }

    public function storePost(Request $request)
    {
        if (Gate::denies('post.create'))
        {
            abort(403, 'Voçé nao tem permissão para criar novo posts.');
        }
        // validation
        $request->validate([
            'title' => 'required|min:3|max:100',
            'content' => 'required|min:3|max:1000',
        ],
            [
                'title.required' => "O campo :attribute é obrigatorio",
                'title.min' => "o Campo :attribute deve ter no minimo :min caracteres",
                'title.max' => 'O Campo :attribute deve ter no maximo :max caracteres',
                'content.required' => "O campo :attribute é obrigatorio",
                'content.min' => "o Campo :attribute deve ter no minimo :min caracteres",
                'content.max' => 'O Campo :attribute deve ter no maximo :max caracteres',
            ]
        );

        // create the popst
        $post = new Posts();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->user_id = Auth::user()->id;
        $post->save();

//        Posts::create([
//            'title' => $request->title,
//            'content' => $request->content,
//            'user_id' => Auth::user()->id,
//        ]);
        return redirect()->route('dashboard');
    }

    public function deletePost($id)
    {
        $post = Posts::find($id);
        //gate
        if (Gate::denies('post.delete', $post))
        {
            abort(403, 'Voçé nao tem permissão para deleta um post.');
        }

        // delete the post

        $post->delete();

        return redirect()->route('dashboard');
    }
}
