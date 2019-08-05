@extends('layouts/app')

@section('header')
    /services
@endsection

@section('content')
    this is services<br> 
        <ul class='list-group'>
            @foreach($services as $service)
                <li class='list-group-item'>{{$service}}</li>
            @endforeach
        </ul>
@endsection
