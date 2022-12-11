@extends('backend.master')
@section('content')


<h1>Create property for booking</h1>
<form action="{{route('backend.booking.store')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
  <label for="user_id">User ID</label>
    <select name="user_id" class="form-control" id="user_id">
    @foreach($users as $data)
    <option value="{{$data->id}}">{{$data->name}}</option>
    @endforeach
    </select>
  </div> 
  <div class="form-group">
  <label for="property_id">Property Id</label>
    <select name="property_id" class="form-control" id="property_id">
    @foreach($properties as $data)
    <option class="form-control" value="{{$data->id}}">{{$data->name}}</option>
    @endforeach
    </select>
  </div>
 
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<a href="{{route('backend.booking.index')}}"><button class="btn btn-danger">cancel</button></a>
@endsection