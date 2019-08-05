@extends('layouts/app')

@section('header')
    /edit this post
@endsection

@section('content')
    <h1>edit a post</h1>
    <form method="POST" action="/posts/{{$post->id}}" enctype="multipart/form-data" >
        <input type="hidden" name="_method" value="PUT" />
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">title</label>
            <input type="text" class="form-control"  placeholder="title" id="title" name="title" value="{{$post->title}}">
        </div>
        <div class="form-group">
            <label for="body">Post</label>
            <textarea type="text" class="form-control"  placeholder="body" id="body" name="body" value="{{$post->body}}">{{$post->body}}</textarea>
        </div>
        <div class="form-group">
            <label for="cover_image">cover image</label>
            <input type="file" class="form-control"  placeholder="cover_image" id="cover_image" name="cover_image" value="{{$post->cover_image}}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
