@extends('backend.master')
@section('content')
<h1>Booking List</h1>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">User</th>
      <th scope="col">Property</th>
      <th scope="col">Status</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($book as $data)
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->user->name}}</td>
      <td>{{$data->property->name}}</td>
      <td>{{$data->status}}</td>
      <td>{{ $data->created_at }}</td>
      <td>
      <a href="{{route('backend.booking.view',$data->id)}}"><button type="button" class="btn btn-success">View</button></a>
      <a href="{{route('backend.booking.edit',$data->id)}}"><button type="button" class="btn btn-primary">Edit</button></a>
      <a href="{{route('backend.booking.delete',$data->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
      </td> 
    </tr>
  @endforeach
</table>
</tbody>

@endsection