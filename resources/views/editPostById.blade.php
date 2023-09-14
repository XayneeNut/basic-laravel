@extends('layout.master')

@section('title', 'create post')
@section('style')
@section('content')
    <h1>Create Data Tabel Post</h1>
    <form action="/post/{{ $post->id_post }}" method="post">
        @csrf
        @method('PUT')
        <label for="judul">Judul</label>
        <input type="text" name="judul" id="judul" value="{{ $post->judul }}">

        <label for="deskripsi">Deskripsi</label>
        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10">{{ $post->deskripsi }}</textarea>

        <input type="submit" name="submit" value="Create">
    </form>
@endsection
