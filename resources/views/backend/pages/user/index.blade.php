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
      <th scope="col">NID</th>
      <th scope="col">Role</th>   
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
     
      <td><img src="{{url('/uploads/'.$data->nid_image)}}" alt=""></td>
      <td>{{$data->role}}</td>
      
      <td>
      <a href=""><button type="button" class="btn btn-success">View</button></a>
      <a href="{{route('backend.user.edit',$data->id)}}"><button type="button" class="btn btn-primary">Edit</button></a>
      <a href="{{route('backend.user.delete',$data->id)}}"><button type="button" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</button></a>
      </td>
    </tr>
  @endforeach
</table>
</tbody>

@endsection