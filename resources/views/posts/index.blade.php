@extends('layouts.app')

@section('content')


    @foreach($posts as $posts)

        <h1><a href="/posts/{{$posts->id}}">{{$posts->title}}</a></h1>

     @endforeach


