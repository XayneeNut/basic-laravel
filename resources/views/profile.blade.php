@extends('layout.master')

@section('title', ' halaman profile')

@section('style')
@section('content')
    <h1>Ini Halaman Profile</h1>
    @if ($nilai == 1)
        <p>ini adalah halaman 1</p>
    @else
        <p>ini adalah halaman {{ $nilai }}</p>
    @endif
    <div class="container">
        @for ($i = 0; $i <= 5; $i++)
            <p>ini adalah perulangan ke {{ $i }}</p>
        @endfor

        @foreach ($hobi as $hobi)
            <p>hoby saya {{ $hobi-> hoby}}</p>
        @endforeach
    </div>



@endsection
