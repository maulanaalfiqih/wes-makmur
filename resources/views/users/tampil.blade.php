@extends('template')
@section('main')
<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama User</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->role}}</td>
            <td>
                <a href="{{route('users.edit', $item->id)}}" class="btn btn-warning">Edit</a>
                <form action="{{route('users.destroy', $item->id)}}" method="POST">
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
