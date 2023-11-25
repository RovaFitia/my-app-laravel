@extends('base')
@section('title', $posts->titre)
@section('content')

    <h2>{{$posts->titre}}</h2>
    <div class="contain">
        {{$posts->content}}
    </div>
@endsection
