@extends('layout.test')

@section('image')
    <img src="{{ asset('/images/profile-images/rico-tokanto.jpg') }}" alt="ariel sefrian" class="p-14 fullHeight object-cover" style="width: 35rem;">
@endsection

@section('nama')
    <h2>Halaman Artikel Rico</h2>
@endsection

@section('desc1')

    @foreach($Detail as $details)
        <h1>
            <a href="/softskill/rico/{{ $details["slug"] }}">{{ $details["title"]}}</a>
        </h1>
        <p>{{ $details["body"] }}</p>
        <br><br>
    @endforeach
@endsection

@section('prev')
    <a href="/softskill/devin">PREV</a>
@endsection

@section('next')
    <a href="/softskill/ariel">NEXT</a>
@endsection

@section('home')
    <a href="/"><<< Back to Home</a>
@endsection