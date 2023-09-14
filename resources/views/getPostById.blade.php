@extends('layout.master')

@section('title', 'read by id')

@section('style')
@section('content')
    <h1>ini adalah data post {{$post -> judul}}</h1>
@endsection
