@extends('layouts.app')


@section('content')


    <form action="/posts/{{$post->id}}" method="post">

        {{csrf_field()}}

        <input type="text" name="title" value="{{$post->title}}">

        <input type="hidden" name="_method" value="PUT">

        <input type="submit" name="submit" value="EDIT">

    </form>

    <form action="/posts/{{$post->id}}" method="post">

        {{csrf_field()}}

        <input type="text" name="title" value="{{$post->title}}">

        <input type="hidden" name="_method" value="DELETE">

        <input type="submit" name="submit" value="DELETE">

    </form>
