@extends('layouts.head')
@section('content')
<div><a href="/admin/create">Create</a></div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Joined</th>
      <th scope="col">Role</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->created_at}}</td>
      <td scope="col">
        <form action="/admin/users" method="POST">
          {{ csrf_field() }}
          <div name="{{$user->id}}"></div>
          <select class="form-select" id="role" name="role">
            <option value="0">User</option>
            <option value="1">Admin</option>
          </select>
          <div class="form-check form-check-inline">
              <button type="submit" class="btn btn-dark mx-3 py-0">Update</button>
          </div>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection