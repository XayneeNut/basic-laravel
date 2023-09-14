@extends('layout.master')

@section('title', 'data diri')

@section('style')
@section('content')
    <h1>Ini data diri saya</h1>
    <p>alamat saya adalah {{ $alamat }}</p>
    <p>nama saya adalah {{ $nama }}</p>
    <p>kelas saya adalah {{ $kelas }}</p>
    <p>hobi saya adalah {{ $hobi }}</p>
    <p>sekolah saya adalah {{ $sekolah }}</p>
    <p>umur saya adalah {{ $umur }}</p>
    <p>agama saya adalah {{ $agama }}</p>
@endsection
