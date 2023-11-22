@extends('layout.master')

@section('title', 'Tambah anggota')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/anggota') }}">anggota</a></li>
    <li class="breadcrumb-item active">Tambah</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h4 class="card-title">Tambah anggota</h4>
            </div>
        </div>
        <form action="{{ url('/anggota') }}" method="POST">
            <div class="card-body">
                @csrf
                <div>
                    <label class="form-label">ID Anggota</label>
                    <input class="form-control" type="text" name="idanggota">
                </div>
                <div>
                    <label class="form-label">Nama</label>
                    <input class="form-control" type="text" name="nama">
                </div>
                <div>
                    <label class="form-label">Alamat</label>
                    <input class="form-control" type="text" name="alamat">
                </div>
                <div>
                    <label class="form-label">No Telephone</label>
                    <input class="form-control" type="text" name="notelp">
                </div>
                <div>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection
