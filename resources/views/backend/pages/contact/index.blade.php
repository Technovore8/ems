@extends('backend.master')
@section('content')
<a href="{{route('backend.contact.index')}}"><button class="btn btn-success"></button></a>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">E-mail</th>
      <th scope="col">Subjectt</th>
      <th scope="col">Message</th> 
    </tr>
  </thead>
  <tbody>
    @foreach($contact as $data)
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->E-mail}}</td>
      <td>{{$data->Subject}}</td>
      <td>{{$data->Message}}</td>
      <td>
      <a href=""><button type="button" class="btn btn-success">View</button></a>
      <a href="{{route('backend.contact.delete',$data->id)}}"><button type="button" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</button></a>
      </td>   
    </tr>
    @endforeach
</table>
</tbody>

@endsection