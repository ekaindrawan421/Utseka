<?php

namespace App\Http\Controllers;

use App\Models\film;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class filmController extends Controller
{

    public function index()
    {
        $film = DB::table('film')
        ->select("film.id", "kodebk", "film.nama", "film.namaproduser","jenisfilm_id", "jenisfilm.nama AS jenisfilm_nama")
        ->join('jenisfilm', 'jenisfilm.id', '=', 'film.jenisfilm_id')
        ->get();

        return view('film.index', ['datafilm' => $film]);
    }

    public function create()
    {
        $jenisfilm = DB::table('jenisfilm')->get();
       
        return view('film.create', ['jenisfilm' => $jenisfilm]);
    }

    public function store(Request $request)
    {
        DB::table('film')->insert([
            'kodebk' => $request->kodebk,
            'nama' => $request->nama,
            'namaproduser' => $request->namaproduser,
            'jenisfilm_id' => $request->jenisfilm,
        ]);

        return redirect(url('/film'));
    }

    public function update(Request $request, $id)
    {
        DB::table('film')
        ->where('id', $id)
        ->update([
            'kodebk' => $request->kodebk,
            'nama' => $request->nama,
            'namaproduser' => $request->namaproduser,
            'jenisfilm_id' => $request->jenisfilm,
        ]);

        return redirect(url('/film'));
    }

    public function edit($id)
    {
        $film = DB::table('film')
        ->select("film.id", "kodebk", "film.nama", "film.nama","film.namaproduser", "jenisfilm_id", "jenisfilm.nama AS jenisfilm_nama")
        ->join('jenisfilm', 'jenisfilm.id', '=', 'film.jenisfilm_id')
        ->where('film.id', $id)
        ->first();

        $jenisfilm = DB::table('jenisfilm')->get();

        return view('film.edit', ['datafilm' => $film, 'id' => $id, 'jenisfilm' => $jenisfilm]);
    }

    public function show(String $id)
    {
        $film = DB::table('film')
        ->select("film.id", "kodebk", "film.nama", "film.nama","film.namaproduser", "jenisfilm_id", "jenisfilm.nama AS jenisfilm_nama")
        ->join('jenisfilm', 'jenisfilm.id', '=', 'film.jenisfilm_id')
        ->where('film.id', $id)
        ->first();

        $jenisfilm = DB::table('jenisfilm')->get();

        return view('film.show', ['datafilm' => $film, 'id' => $id, 'jenisfilm' => $jenisfilm]);
    }
    public function destroy($id)
    {
        DB::table('film')
        ->where('id', $id)
        ->delete();

        return redirect(url('/film'));
}
}

