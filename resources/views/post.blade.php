@extends("layout.master")

@section("title", "post")

@section("content")
@foreach ($posts as $newPost)
        <p>ini adalah judul post {{$newPost -> judul}}</p>
        <p>ini adalah deskripsi post {{$newPost -> deskripsi}}</p>
        <p>ini adalah id post {{$newPost -> id_post}}</p>
        <form action="/post/{{$newPost->id_post}}" method="POST">
            @csrf
            @method("DELETE")

            <input type="submit" name="submit" value="Delete">

        </form>
@endforeach
@endsection
