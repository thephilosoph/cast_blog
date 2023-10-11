<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        DB::listen(function ($query) {
            logger($query->sql);
        });
        $posts = Post::latest()->filter(request(['search', 'category', 'author']))->simplePaginate(6)->withQueryString();

        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post

        ]);
    }


    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            "title"=>"required",
            "excerpt"=>"required",
            "thumbnail"=>"required|image",
            "slug"=>"required|unique:posts,slug",
            "body"=>"required",
            "category_id"=>"required|exists:categories,id",
        ]);



        $attributes["user_id"]=auth()->id();
        $attributes['thumbnail']=request()->file("thumbnail")->store("thumbnails");
        Post::create($attributes);
        return redirect('/');

    }
}
