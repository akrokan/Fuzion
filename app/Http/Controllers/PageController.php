<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function blog()
    {
        $posts = Post::orderBy('created_at', 'desc')->where('state', 1)->get();

        return view('blog', compact('posts'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function dashboard()
    {
        if (! Gate::allows('admin')) {
            abort(403);
        }

        $posts = Post::orderBy('created_at')->withTrashed()->get();

        return view('dashboard.index');
    }

    public function home()
    {
        return view('index');
    }
}