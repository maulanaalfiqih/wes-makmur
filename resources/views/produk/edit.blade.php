@extends('template')
@section('main')
<form action="{{route('produk.update', $data->id)}}" method="POST">
    @csrf
    @method('put')
    <div class="mb-3">
        <label class="form-label">Nama Produk</label>
        <input type="text" class="form-control" name="nama_produk" value="{{$data->nama_produk}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Foto</label>
        <input type="text" class="form-control" name="foto" value="{{$data->foto}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Harga</label>
        <input type="text" class="form-control" name="harga" value="{{$data->harga}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Deskripsi Produk</label>
        <input type="text" class="form-control" name="deskripsi_produk" value="{{$data->deskripsi_produk}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
