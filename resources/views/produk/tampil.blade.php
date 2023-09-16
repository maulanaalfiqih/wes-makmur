@extends('template')
@section('main')
<table class="table">
    <a href="{{route('produk.create')}}" class="btn btn-primary">Tambah Data</a>
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Foto</th>
            <th scope="col">Harga</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$item->nama_produk}}</td>
            <td>{{$item->foto}}</td>
            <td>{{$item->harga}}</td>
            <td>{{$item->deskripsi_produk}}</td>
            <td>
                <a href="{{route('produk.edit', $item->id)}}" class="btn btn-warning">Edit</a>
                <form action="{{route('produk.destroy', $item->id)}}" method="POST">
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
