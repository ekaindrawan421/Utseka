@extends('layout.master')

@section('title', 'Ubah Anggota')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/anggota') }}">Anggota</a></li>
    <li class="breadcrumb-item active">Tampilkan</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-header">Tampilkan</div>
            <div class="card-body">
             
           
                  <div class="card-body">
                  <p class="card-text">ID anggota :{{ $data->idanggota }}</p>
                  <p class="card-text">Nama : {{ $data->nama }}</p>
                  <p class="card-text">Alamat : {{ $data->alamat }}</p>
                  <p class="card-text">No Telephone: {{ $data->notelp }}</p>
                  <a class="btn btn-sm btn-warning" href="{{ url('/anggota/') }}">Kembali</a>
              </hr>
            </div>
          </div>
@endsection