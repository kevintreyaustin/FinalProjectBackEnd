@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Barang</h2>
    <form action="{{ route('barang.store') }}" method="POST">
        @csrf
        <input type="text" name="nama" placeholder="Nama Barang" class="form-control">
        <input type="text" name="kategori" placeholder="Kategori" class="form-control">
        <input type="number" name="harga" placeholder="Harga" class="form-control">
        <input type="number" name="jumlah" placeholder="Jumlah" class="form-control">
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
