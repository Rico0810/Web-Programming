@extends('layout.test')

@section('image')
    <img src="{{ asset('/images/profile-images/ariel-sefrian.jpg') }}" alt="ariel sefrian" class="p-14 fullHeight object-cover" style="width: 35rem;">
@endsection

@section('nama')
    <h2>Halaman Artikel Ariel</h2>
@endsection

@section('desc1')
    @foreach($Detail as $details)
        <h1>
            <a href="/softskill/ariel/{{ $details["slug"] }}">{{ $details["title"]}}</a>
        </h1>
        <p>{{ $details["body"] }}</p>
        <br><br>
    @endforeach
@endsection

@section('prev')
    <a href="/softskill/rico">PREV</a>
@endsection

@section('next')
    <a href="/softskill/devin">NEXT</a>
@endsection

@section('home')
    <a href="/"><<< Back to Home</a>
@endsection