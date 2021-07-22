<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function create()
    {
        return view('dashboard.create');
    }

    public function index()
    {
        $posts = Post::withTrashed()->get();

        return view('dashboard.posts', compact('posts', $posts));
    }

    public function store(Request $request)
    {
        /*
            Check if $request exist
        */
        if (!$request->file) {
            return back()->with([
                'title'     => 'File not found',
                'content'   => 'You have to choose a file to import'
            ]);
        }

        /*
            Prepare the file for process
        */
        $file = $request->file;
        $path = $file->getRealPath();
        $file = fopen($path, 'r');
        $content = fread($file, filesize($path));
        fclose($file);

        /*
            Extract $header from $content
        */
        preg_match("#---[\s\S]*?---#i", $content, $header);
        if (!empty($header[0])) {
            $header = trim($header[0]);
            $content = preg_replace("#---[\s\S]*?---\s*#i", "", $content);
        } else {
            return back()->with([
                'title'     => 'File not valid',
                'content'   => 'The post need a proper header'
            ]);
        }

        /*
            Extract $title from $header
            Set $slug from $title
        */
        $title = "#(title):\s*(.*)#i";
        preg_match($title, $header, $title);
        if (!empty($title)) {
            $title = trim($title[2]);
            $slug = str::slug($title);
        }

        /*
            Extract $author from $header
        */
        $author = "#(author):\s*(.*)#i";
        preg_match($author, $header, $author);
        if (!empty($author)) {
            $author = trim($author[2]);
        }

        /*
            Store post with extracted values
        */
        Post::create([
            'title' =>      $title,
            'slug' =>       $slug,
            'content' =>    $content
        ]);

        return redirect()->route('dashboard');        
    }

    public function switchState($id)
    {
        $post = Post::find($id);

        /*
            Switch post state
            online <--> offline
        */
        if ($post->state == 0) {
            $post->state = 1;
        } else {
            $post->state = 0;
        }

        $post->save();

        return back();
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->with('comments')->firstOrFail();

        return view('show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::withTrashed()->where('id', $id)->first();

        return view('edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {

    }

    public function destroy($id)
    {
        $post = Post::withTrashed()->where('id', $id)->first();
        
        /*
            if destroyed then forceDelete it
        */
        if ($post->deleted_at != NULL) {
            $post->forceDelete();
        } else {
            Post::destroy($id);
        }

        return back();
    }
}
