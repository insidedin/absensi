@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data Jabatan</h1>
    <a href="{{ route('absensi.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama Jabatan</th>
                <th>Status</th>
                <th>Gaji</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>
        </thead>
        <tbody>
            @foreach($absensi as $data)
            <tr>
                <td>{{ $data->nama_jabatan }}</td>
                <td>{{ $data->status }}</td>
                <td>{{ 'Rp. ' . number_format($data->gaji, 0, ',', '.') }}</td>
                <td>
                    <a href="{{ route('absensi.edit', $data->id) }}" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <form action="{{ route('absensi.destroy', $data->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
