@extends('layouts.main')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">User</h1>
</div>
<div class="row">
    <div class="card mx-auto">
        <div>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
            @endif
        </div>
    <div class="card-header">
        <div class="row">
            <div class="col">
                <form  method ="GET "action="{{route('users.index')}}">
                    <div class="form-row align-items-center">
                        <div class="col">
                            <input type="search" name="search" class="form-control mb-2" id="inlineFormInput" placeholder="Username & Email">
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary mb-2">search</button>
                        </div>
                    </div>
                </form>
            </div>
            <div>
                <a href="{{route('users.create')}}" class="btn btn-primary mb-2 float-right">Create</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#Id</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Manage</th>
              </tr>
            </thead>
            <tbody>
             @foreach ($user as $users )
             <tr>
                <th scope="row">{{$users->id}}</th>
                <td>{{$users->username}}</td>
                <td>{{$users->email}}</td>
                <td>
                    <a href="{{route('users.edit',$users->id)}}" class="btn btn-success">Edit</a>
                </td>
              </tr>
             @endforeach
            </tbody>
          </table>
    </div>
</div>
</div>
@endsection
