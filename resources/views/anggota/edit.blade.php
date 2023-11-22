@extends('layout.master')

@section('title', 'Ubah anggota')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/anggota') }}">anggota</a></li>
    <li class="breadcrumb-item active">Ubah</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h4 class="card-title">Form Ubah anggota</h4>
            </div>
        </div>
        <form action="{{ url('/anggota/' . $id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div>
                    <label class="form-label">ID Anggota</label>
                    <input class="form-control" type="text" name="idanggota" value="{{ $data->idanggota }}">
                </div>
                <div>
                    <label class="form-label">Nama</label>
                    <input class="form-control" type="text" name="nama" value="{{ $data->nama }}">
                </div>
                <div>
                    <label class="form-label">alamat</label>
                    <input class="form-control" type="text" name="alamat" value="{{ $data->alamat }}">
                </div>
                <div>
                    <label class="form-label">notelp</label>
                    <input class="form-control" type="text" name="notelp" value="{{ $data->notelp }}">
                </div>
                <div>
                    </select>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection
