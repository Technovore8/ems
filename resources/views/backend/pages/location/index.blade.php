@extends('backend.master')
@section('content')
<h1>Location List</h1>
<a href="{{route('backend.location.create')}}"><button class="btn btn-success">Add location +</button></a>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">Actions</th>
   
    </tr>
  </thead>
  <tbody>
    @foreach($Location as $data)
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->status}}</td>
      <td>
      <a href=""><button type="button" class="btn btn-success">View</button></a>
      <a href="{{route('backend.location.edit',$data->id)}}"><button type="button" class="btn btn-primary">Edit</button></a>
      <a href=""><button type="button" class="btn btn-danger">Delete</button></a>
      </td>
    </tr>
  @endforeach
</table>
</tbody>

@endsection