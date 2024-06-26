@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Patient</h1>
    <form action="{{ route('pasien.update', $pasien) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Name</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ $pasien->nama }}" required>
        </div>
        <div class="form-group">
            <label for="alamat">Addres</label>
            <textarea name="alamat" id="alamat" class="form-control" required>{{ $pasien->alamat }}</textarea>
        </div>
        <div class="form-group">
            <label for="nomor_telepon">No Telephone</label>
            <input type="text" name="nomor_telepon" id="nomor_telepon" class="form-control" value="{{ $pasien->nomor_telepon }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
@endsection