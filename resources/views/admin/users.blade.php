@extends('layouts.head')
@section('content')
@auth
    @include('navbar-logged-in')
@endauth
@guest
    @include('navbar-logged-out')
@endguest
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
            <div class="form-check">
              <div class="d-flex flex-row bd-highlight mb-3">
                <div>
                  <input class="form-check-input" type="radio" name="0" id="flexRadioDefault1" style="margin-right:4px;">
                  <label class="radio-inline control-label px-3">User</label>
                </div>
                <div>
                  <input class="form-check-input" type="radio" name="1" id="flexRadioDefault1" style="margin-right:4px;">
                  <label class="radio-inline control-label px-3">Admin</label>
                </div>
                <div>
                  {{ csrf_field() }}
                  <div class="form-check">
                    <button type="submit" class="btn btn-dark p1">Update</button>
                  </div>
                </div>
              </div>  
            </div>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection