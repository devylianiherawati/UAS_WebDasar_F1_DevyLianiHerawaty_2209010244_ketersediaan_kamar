@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Level Room</h1>
    <form action="{{ route('tipe_kamar.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Name</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="harga">Price</label>
            <input type="number" name="harga" id="harga" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection