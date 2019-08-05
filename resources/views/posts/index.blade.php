@extends('layouts/app');

@section('header')
    /posts
@endsection

@section('content')
    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="height:100 "src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>written on {{$post->created_at}}</small>
                        <br>
                        <small>written by {{$post->user->name}}</small>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>sorry, there are no posts </p>
    @endif
@endsection
