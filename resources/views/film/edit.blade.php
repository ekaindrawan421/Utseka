@extends('layout.master')

@section('title', 'Ubah Film')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/film') }}">Film</a></li>
    <li class="breadcrumb-item active">Ubah</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h4 class="card-title">Form Ubah Film</h4>
            </div>
        </div>
        <form action="{{ url('/film/' . $id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div>
                    <label class="form-label">Kode Film</label>
                    <input class="form-control" type="text" name="kodebk" value="{{ $datafilm->kodebk }}">
                </div>
                <div>
                    <label class="form-label">Judul</label>
                    <input class="form-control" type="text" name="nama" value="{{ $datafilm->nama }}">
                </div>
                <div>
                    <label class="form-label">Nama Produser</label>
                    <input class="form-control" type="text" name="namaproduser" value="{{ $datafilm->namaproduser }}">
                </div>
                <div>
                    <label class="form-label">Jenis Film</label>
                    <select class="form-select" name="jenisfilm">
                        @foreach ($jenisfilm as $j)
                            <option {{ $datafilm->jenisfilm_id == $j->id ? 'selected' : '' }} value="{{ $j->id }}">{{ $j->nama }}</option>
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


