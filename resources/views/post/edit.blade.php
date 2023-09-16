@extends('template')
@section('main')
<form action="{{route('post.update', $data->id)}}" method="POST">
    @csrf
    @method('put')
    <div class="mb-3">
        <label class="form-label">Judul</label>
        <input type="text" class="form-control" name="judul" value="{{$data->judul}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Isi</label>
        <input type="text" class="form-control" name="isi" value="{{$data->isi}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
