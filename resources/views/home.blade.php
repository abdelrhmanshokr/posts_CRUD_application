@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    you are logged in !
                    <br>
                    <button class="btn btn-primary">
                        <a href="/posts/create" style="color:white">
                            Create a new post
                        </a>
                    </button>
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($posts as $post)
                            <tr>
                                <th>{{$post->title}}</th>
                                <th><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a> </th>
                                <th>
                                    <form action="/posts/{{$post->id}}" method="Post">
                                        <input type="hidden" name="_method" value="delete" />
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger">delete</button>
                                    </form>
                                </th>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
