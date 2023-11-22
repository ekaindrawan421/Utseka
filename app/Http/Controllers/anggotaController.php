<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class anggotaController extends Controller
{

    public function index()
    {
        $anggota = DB::table('anggota')
        ->select("anggota.id", "idanggota", "anggota.nama", "anggota.alamat", "anggota.notelp")
        ->get();

        return view('anggota.index', ['data' => $anggota]);
    }

    public function create()
    {
        return view('anggota.create');
    }

    public function store(Request $request)
    {
        DB::table('anggota')->insert([
            'idanggota' => $request->idanggota,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'notelp' => $request->notelp
        ]);

        return redirect(url('/anggota'));
    }

    public function update(Request $request, $id)
    {
        DB::table('anggota')
        ->where('id', $id)
        ->update([
            'idanggota' => $request->idanggota,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'notelp' => $request->notelp
        ]);

        return redirect(url('/anggota'));
    }

    public function edit($id)
    {
        $anggota = DB::table('anggota')
        ->select("anggota.id", "idanggota", "anggota.nama", "anggota.alamat", "anggota.notelp")
        ->first();
        return view('anggota.edit', ['data' => $anggota, 'id' => $id]);
    }

    public function show($id)
    {
        $anggota = DB::table('anggota')
        ->select("anggota.id", "idanggota", "anggota.nama", "anggota.alamat", "anggota.notelp")
        ->first();
        return view('anggota.show', ['data' => $anggota, 'id' => $id]);
    }
    public function destroy($id)
    {
        DB::table('anggota')
        ->where('id', $id)
        ->delete();

        return redirect(url('/anggota'));
    }
}
