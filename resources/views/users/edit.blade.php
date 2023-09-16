@extends('template')
@section('main')
<form action="{{route('users.update', $data->id)}}" method="POST">
    @csrf
    @method('put')
    <div class="mb-3">
        <label class="form-label">Nama User</label>
        <input type="text" class="form-control" name="name" value="{{$data->name}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="text" class="form-control" name="email" value="{{$data->email}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Role</label>
        <input type="text" class="form-control" name="role" value="{{$data->role}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
