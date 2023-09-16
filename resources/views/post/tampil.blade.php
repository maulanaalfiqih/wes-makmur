@extends('template')
@section('main')
<table class="table">
    <a href="{{route('post.create')}}" class="btn btn-primary">Tambah Data</a>
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Judul</th>
            <th scope="col">Isi</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$item->judul}}</td>
            <td>{{$item->isi}}</td>
            <td>
                <a href="{{route('post.edit', $item->id)}}" class="btn btn-warning">Edit</a>
                <form action="{{route('post.destroy', $item->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
