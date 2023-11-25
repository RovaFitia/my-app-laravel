<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    //
    public function index():view
    {
        return view('blog.index', [
            'posts' => Post::paginate(3)
        ]) ;
    }

    public function show(string $slug, string $id):RedirectResponse | view
    {
        $posts = Post::findOrfail($id) ;

        if($posts->slug !== $slug) {
            return to_route('blog.show', ['slug' => $posts->slug, 'id' => $posts->id]) ;
        }

        return view('blog.show', [
            'posts' => $posts
        ]) ;
    }
}
