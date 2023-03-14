@extends('layout.test')

@section('desc1')
    <h2>{{ $post["title"] }}</h2>
    <p>{{ $post["body"] }}</p>
@endsection

@section('home')
    <a href="/softskill/ariel"><<< Back</a>
@endsection