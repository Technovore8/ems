@extends('backend.master')
@section('content')


<h1>Create a property</h1>

@if($errors->any())
  @foreach($errors as $error)
    <div class="alert alert-danger">{{$error}}</div>
  @endforeach
@endif
<form action="{{route('backend.property.store')}}" method="post" enctype="multipart/form-data">
  @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter property name">
    </div>
  <div class="form-group">
  <label for="location_id">Location Id</label>
    <select name="location_id" class="form-control" id="location_id">
    @foreach($location as $data)
    <option value="{{$data->name}}">{{$data->name}}</option>
    @endforeach
    </select>
  </div> 
  <div class="form-group">
  <label for="project_id">Project Id</label>
    <select name="project_id" class="form-control" id="project_id">
    @foreach($project as $data)
    <option class="form-control" value="{{$data->id}}">{{$data->name}}</option>
    @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="text">Property Details</label>
    <input type="text" class="form-control" id="text" name="details" placeholder="Project details">
  </div>
  <div class="form-group">
    <label for="price">Price</label>
    <input type="text" class="form-control" id="text" name="price" placeholder="Property ">
  </div>
  <div class="form-group">
    <label for="image">Upload an Image</label>
    <input type="file" class="form-control" id="image" name='image'>
  </div> 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<a href="{{route('backend.property.index')}}"><button class="btn btn-danger">cancel</button></a>
@endsection