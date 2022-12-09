<h1>booking index</h1>
@extends('backend.master')
@section('content')
<h1>User List</h1>
<a href="{{route('backend.user.create')}}"><button class="btn btn-success">Add user +</button></a>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">address</th>
      <th scope="col">email</th>
      <th scope="col">Action</th>   
    </tr>
  </thead>
  <tbody>
    @foreach($users as $data)
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->name}}</td>
      <td><img src="{{url('/uploads/'.$data->image)}}" alt=""></td>
      <td>{{$data->address}}</td>
      <td>{{$data->email}}</td>  
      <td>
      <a href=""><button type="button" class="btn btn-success">View</button></a>
      <a href=""><button type="button" class="btn btn-primary">Edit</button></a>
      <a href=""><button type="button" class="btn btn-danger">Delete</button></a>
      </td> 
    </tr>
  @endforeach
</table>
</tbody>

@endsection