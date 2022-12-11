<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\film;
use App\Models\tiket;

class TiketController extends Controller
{
    //
    public function index(){
        return  view('tiket.all', [
            'tikets' => tiket::all()
        ]);
    }

    public function show(tiket $tiket){   
        return view('tiket.detail', [
            'tiket' => $tiket
        ]);
    }

    public function create(){
        return view('tiket.create', [
            'film' => film::all()
        ]);
    }

    public function store(Request $request){
        $validateDate = $request->validate([
            'film_id' => 'required',
            'kursi' => 'required',
            'jam_tayang' => 'required',
            'tanggal' => 'required',
        ]);

        tiket::create($validateDate);
        return redirect('/tiket/all')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(tiket $tiket){
        return view('tiket.edit', [
            'tiket' => $tiket,
            'film' => film::all()
        ]);
    }

    public function update(Request $request, tiket $tiket){
        $validateDate = $request->validate([
            'film_id' => 'required',
            'kursi' => 'required',
            'jam_tayang' => 'required',
            'tanggal' => 'required',
        ]);

        tiket::where('id', $tiket->id)
            ->update($validateDate);
        return redirect('/tiket/all')->with('success', 'Data berhasil diubah');
    }

    public function destroy(tiket $tiket){
        tiket::destroy($tiket->id);
        return redirect('/tiket/all')->with('success', 'Data berhasil dihapus');
    }
}
