<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index():Paginator
    {
        return \App\Models\Post::paginate(25) ;
    }

    public function show(string $slug, string $id):RedirectResponse | Post
    {
        $posts = \App\Models\Post::findOrfail($id) ;

        if($posts->slug !== $slug) {
            return to_route('blog.show', ['slug' => $posts->slug, 'id' => $posts->id]) ;
        }

        return $posts ;
    }
}
