@extends("layouts.main")

@section("content")
    <h1>Detail Film</h1>
    <p>Judul Film: {{$film->judul}}</p>
    <p>Harga : {{$film->harga}}</p>
    <p>Studio : {{$film->studio}}</p>
    <a class="btn btn-primary" href="/film/all">back</a>
@endsection