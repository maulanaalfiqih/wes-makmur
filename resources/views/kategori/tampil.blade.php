@extends('template')
@section('main')
<table class="table">
    <a href="{{route('kategori.create')}}" class="btn btn-primary">Tambah Data</a>
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Kategori</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$item->nama_kategori}}</td>
            <td>{{$item->deskripsi_kategori}}</td>
            <td>
                <a href="{{route('kategori.edit', $item->id)}}" class="btn btn-warning">Edit</a>
                <form action="{{route('kategori.destroy', $item->id)}}" method="POST">
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
