@extends('layout.master')

@section('title', 'Tambah Film')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/film') }}">Film</a></li>
    <li class="breadcrumb-item active">Tambah</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h4 class="card-title">Tambah Film</h4>
            </div>
        </div>
        <form action="{{ url('/film') }}" method="POST">
            <div class="card-body">
                @csrf
                <div>
                    <label class="form-label">Kode Film</label>
                    <input class="form-control" type="text" name="kodebk">
                </div>
                <div>
                    <label class="form-label">Judul</label>
                    <input class="form-control" type="text" name="nama">
                </div>
                <div>
                    <label class="form-label">Nama Produser</label>
                    <input class="form-control" type="text" name="namaproduser">
                </div>
                <div>
                    <label class="form-label">Jenis Film</label>
                    <select class="form-select" name="jenisfilm">
                        @foreach ($jenisfilm as $j)
                            <option value="{{ $j->id }}">{{ $j->nama }}</option>
                        @endforeach
                    </select>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection



