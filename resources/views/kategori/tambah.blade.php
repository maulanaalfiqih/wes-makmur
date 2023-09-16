@extends('template')
@section('main')
<form action="{{route('kategori.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Kategori</label>
        <input type="text" class="form-control" name="nama_kategori">
    </div>
    <div class="mb-3">
        <label class="form-label">Deskripsi</label>
        <input type="text" class="form-control" name="deskripsi_kategori">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
