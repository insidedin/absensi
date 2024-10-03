@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Data Jabatan</h1>
    <form action="{{ route('absensi.update', $absensi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_jabatan">Nama Jabatan</label>
            <input type="text" class="form-control" name="nama_jabatan" value="{{ $absensi->nama_jabatan }}" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-select" name="status" id="status">
                <option value="Tetap" {{ $absensi->status == 'Tetap' ? 'selected' : '' }}>Tetap</option>
                <option value="Kontrak" {{ $absensi->status == 'Kontrak' ? 'selected' : '' }}>Kontrak</option>
            </select>
        </div>
        <div class="form-group">
            <label for="gaji">Gaji</label>
            <input type="number" class="form-control" name="gaji" value="{{ $absensi->gaji }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
