@extends('template')
@section('main')
<form action="{{route('produk.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Nama Produk</label>
        <input type="text" class="form-control" name="nama_produk">
    </div>
    <div class="mb-3">
        <label class="form-label">Foto</label>
        <input type="text" class="form-control" name="foto">
    </div>
    <div class="mb-3">
        <label class="form-label">Harga</label>
        <input type="text" class="form-control" name="harga">
    </div>
    <div class="mb-3">
        <label class="form-label">Deskripsi</label>
        <input type="text" class="form-control" name="deskripsi_produk">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
