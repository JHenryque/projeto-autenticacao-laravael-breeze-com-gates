<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
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
}
