@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add  Patient</h1>
    <form action="{{ route('pasien.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Name</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="alamat">Address</label>
            <textarea name="alamat" id="alamat" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="nomor_telepon">No Telephone</label>
            <input type="text" name="nomor_telepon" id="nomor_telepon" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection