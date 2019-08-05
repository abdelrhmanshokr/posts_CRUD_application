@extends('layouts/app')

@section('header')
    /show post
@endsection

@section('content')
    <h1>{{$post->title ?? 'there is an error in the show function'}}</h1>
    <img src="/storage/cover_images/{{$post->cover_image}}">
    <small>written at {{$post->created_at ?? 'there is an error in the show function'}}<br>written by {{$post->user->name}}</small>
    <p class="well">{!!$post->body ?? 'there is an error in the show function'!!}</p>
    <hr>
    <table class="table-striped">
        <tr>
            <td>
                <button class="btn btn-default"><a href="/posts">back</a></button>
            </td>
            @if(!Auth::guest())
                @if(Auth::user()->id==$post->user_id)
                    <td>
                        <button class="btn btn-default"><a href="/posts/{{$post->id}}/edit" >edit</a></button>
                    </td>
                    <td>
                        <form action="/posts/{{$post->id}}" method="Post">
                            <input type="hidden" name="_method" value="delete" />
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger">delete</button>
                        </form>
                    </td>
                @endif
            @endif
        </tr>
    </table>
@endsection
