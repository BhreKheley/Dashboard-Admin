@extends("layouts.main")

@section("content")
    <h1>Detail Tiket</h1>
    <p>Judul Film: {{$tiket->film->judul}}</p>
    <p>Kursi : {{$tiket->kursi}}</p>
    <p>Studio : {{$tiket->film->studio}}</p>        
    <p>Jam Tayang : {{$tiket->jam_tayang}}</p>        
    <p>Tanggal : {{$tiket->tanggal}}</p>
    <a class="btn btn-primary" href="/tiket/all">back</a>
@endsection