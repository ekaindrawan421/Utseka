@extends('layout.master')

@section('title', 'Ubah Film')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/film') }}">Film</a></li>
    <li class="breadcrumb-item active">Tampilkan</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-header">Tampilkan</div>
            <div class="card-body">
             
           
                  <div class="card-body">
                  <p class="card-text">Kode Film :{{ $datafilm->kodebk }}</p>
                  <p class="card-text">Judul : {{ $datafilm->nama }}</p>
                  <p class="card-text">Nama produser : {{ $datafilm->namaproduser }}</p>
                  <p class="card-text">Jenis Film: {{ $datafilm->jenisfilm_nama }}</p>
                  <a class="btn btn-sm btn-warning" href="{{ url('/film/') }}">Kembali</a>
              </hr>
            </div>
          </div>
@endsection

