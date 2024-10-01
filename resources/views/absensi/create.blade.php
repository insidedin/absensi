@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Data Jabatan</h1>
    <form action="{{ route('absensi.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_jabatan">Nama Jabatan</label>
            <input type="text" class="form-control" name="nama_jabatan" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" name="status" required>
        </div>
        <div class="form-group">
            <label for="gaji">Gaji</label>
            <input type="number" class="form-control" name="gaji" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
