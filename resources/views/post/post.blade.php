@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="jumbotron">
            <h1>{{ $post->title }}</h1>
            <p style="color: maroon">By {{ $post->user->name }}</p>
            <p>{{ $post->post }}</p>
            <img src="{{ $post->image }}" class="img-responsive" alt="">
            <br>
            <p>
                <a class="btn btn-primary btn-lg" href="/posts" role="button">back To Posts</a>
            </p>
        </div>
    </div>
@endsection