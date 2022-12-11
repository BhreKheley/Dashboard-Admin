@extends("layouts.main")

@section("content")
<div class="container mt-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h3 align="center">Beli Tiket</h3>
                        <form action="/tiket/add" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="publisher" class="form-label">Judul Film</label>
                                <select class="form-select" name="film_id" id="">
                                    @foreach ($film as $item)
                                        <option name="film_id" value="{{ $item->id }}">{{ $item->judul }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="exampleInputKursi">Kursi</label>
                                <input required type="number" class="form-control" value="{{ old('merk')}}" id="exampleInputPassword1" placeholder="Masukkan Nomor Kursi" name="kursi">
                            </div>
                            <div class="form-group mb-3">
                                <label for="Time">Jam</label>
                                <input required type="text" class="form-control" value="{{ old('harga')}}" id="price" placeholder="Masukkan Jam Tayang" name="jam_tayang">
                            </div>

                            <div class="form-group mb-3">
                                <label for="release">Tanggal</label>
                                <input required type="date" class="form-control" value="{{ old('release')}}" id="release" placeholder="Masukkan Tanggal Tayang" name="tanggal">
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection