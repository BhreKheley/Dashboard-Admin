@extends("layouts.main")

@section("content")
    <h1 class="mt-3">tiket</h1>
    <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalDetail" href="/tiket/create">add</a>
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-12" role='alert'>
            {{ session()->get('success') }}
        </div>
    @endif
        <table class="table table-striped" style="vertical-align: middle; font-weight: bold; font-size: 20px;">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Studio</th>
                        <th>Kursi</th>
                        <th>Jam Tayang</th>
                        <th>Tanggal Tayang</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                
                    @foreach ($tikets as $tiket)
                        <tr>
                            <td>{{ $tiket->film->judul }}</td>
                            <td>{{ $tiket->film->studio }}</td>
                            <td>{{ $tiket->kursi }}</td>
                            <td>{{ $tiket->jam_tayang }}</td>
                            <td>{{ $tiket->tanggal }}</td>
                            <td>
                                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalDetail" href="/tiket/detail/{{$tiket->id}}">Detail</a>
                                <a type="button" class="btn btn-warning" data-toggle="modal" href="/tiket/edit/{{ $tiket->id }}">Edit</a>
                                <form action="/tiket/delete/{{ $tiket->id }}" method="post" style="display: inline;">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger" onClick="return confirm('Are you sure ?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
@endsection