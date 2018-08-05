@extends('layouts.app')


@section('content')


    <form action="/posts" method="post">
        <input type="text" name="title" value="Enter Title">


        {{ csrf_field() }}
        <input type="submit" name="submit" value="Submit">





    </form>