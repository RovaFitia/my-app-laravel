@extends('base')
@section('title', 'Accueil de mon blog')
@section('content')

    <h1>Mon fichier blog</h1>

    @foreach($posts as $post)

        <h2>{{$post->titre}}</h2>
        <div class="contain">
            {{$post->content}}
        </div>
        <div class="link">
            <a href="{{ route('blog.show', ['slug' => $post->slug, 'id' => $post->id]) }}" class="btn btn-primary">Lire la suite</a>
        </div>
    @endforeach

    {{ $posts->links() }}
@endsection
