@extends('layouts/app')

@section('header')
    /create a new post
@endsection

@section('content')
    <h1>create a new post</h1>
    <form method="POST" action="/posts" enctype="multipart/form-data" >
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">title</label>
            <input type="text" class="form-control"  placeholder="title" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="body">Post</label>
            <textarea type="text" class="form-control"  placeholder="body" id="body" name="body"></textarea>
        </div>
        <div class="form-group">
            <label for="cover_image">cover image</label>
            <input type="file" class="form-control"  placeholder="cover_image" id="cover_image" name="cover_image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
