<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
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

        echo 'Create Post';
    }

    public function deletePost()
    {
        //gate
        if (Gate::denies('post.delete'))
        {
            abort(403, 'Voçé nao tem permissão para deleta um post.');
        }

        echo 'Delete Post';
    }
}
