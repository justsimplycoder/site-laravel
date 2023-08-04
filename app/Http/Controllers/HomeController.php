<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $posts = Post::orderBy("created_at", "DESC")->limit(3)->get();
        return view('home', ["posts" => $posts]);
    }
}
