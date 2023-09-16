@extends('template')
@section('main')
<form action="{{route('post.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Judul</label>
        <input type="text" class="form-control" name="judul">
    </div>
    <div class="mb-3">
        <label class="form-label">Isi</label>
        <input type="text" class="form-control" name="isi">
    </div>
    <div class="mb-3">
        <label class="form-label">Kategori</label>
        <input type="text" class="form-control" name="kategori" value="">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection