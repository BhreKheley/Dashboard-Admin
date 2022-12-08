@extends("layouts.main")

@section("content")
    <h1 class="mt-3">film</h1>
    <table class="table table-striped" style="vertical-align: middle; font-weight: bold; font-size: 20px;">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Studio</th>
                        <th>Harga</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                
                    @foreach ($films as $film)
                        <tr>
                            <td>{{ $film->judul }}</td>
                            <td>{{ $film->studio }}</td>
                            <td>{{ $film->harga }}</td>
                            <!-- <td>
                                @foreach ($film->tiket as $tiket)
                                <ul>
                                    <li>{{$tiket->nama}}</li>
                                </ul>
                                @endforeach
                            </td> -->
                            <td>
                                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalDetail" href="/film/detail/{{$film->id}}">Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
@endsection