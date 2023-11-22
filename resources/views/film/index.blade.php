@extends('layout.master')

@section('title', 'Film')

@section('breadcrumb')
    <li class="breadcrumb-item active">Film</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-10">
                    <h4 class="card-title">Data Film</h4>
                </div>
                <div class="col-2">
                    <a class="btn btn-sm btn-primary float-end" href="{{ url('/film/create') }}">Tambah</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Kode Film</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Nama Produser</th>
                        <th scope="col">Jenis Film</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datafilm as $db)
                        <tr>
                            <td>{{ $db->kodebk }}</td>
                            <td>{{ $db->nama }}</td>
                            <td>{{ $db->namaproduser }}</td>
                            <td>{{ $db->jenisfilm_nama }}</td>
                            <td class="float-end">
                                <a class="btn btn-sm btn-warning"
                                    href="{{ url('/film/' . $db->id . '/edit') }}">Ubah</a>
                                    <a class="btn btn-sm btn-info"
                                    href="{{ url('/film/' . $db->id) }}">View</a>
                                <form style="display: inline;" action="{{ url('/film/' . $db->id) }}" method ="POST">
                                    @csrf
                                    @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection



