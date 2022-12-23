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
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter property name" required>
    </div>
  <div class="form-group">
  <label for="location_id">Location Name</label>
    <select name="location_id" class="form-control" id="location_id" required>
    @foreach($location as $data)
    <option value="{{$data->id}}">{{$data->name}}</option>
    @endforeach
    </select>
  </div> 
  <div class="form-group">
  <label for="project_id">Project Name</label>
    <select name="project_id" class="form-control" id="project_id">
    @foreach($project as $data)
    <option class="form-control" value="{{$data->id}}">{{$data->name}}</option>
    @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="text">Property Details</label>
    <input type="text" class="form-control" id="text" name="details" placeholder="Project details" required>
  </div>
  <div class="form-group">
    <label for="price">Price</label>
    <input type="text" class="form-control" id="text" name="price" placeholder="price" required>
  </div>
  <div class="form-group">
    <label for="phone">Phone Number</label>
    <input type="tel" class="form-control" id="phone" name='phone' required>
  </div> 
  <div class="form-group">
    <label for="image">Upload an Image</label>
    <input type="file" class="form-control" id="image" name='image' required>
  </div> 
  <div class="form-group">
    <label for="nid_image">NID</label>
    <input type="file" class="form-control" id="nid_image" name='nid_image' required>
  </div> 
  <div class="form-group">
    <label for="khotian_image">Khotian/Porcha</label>
    <input type="file" class="form-control" id="khotian_image" name='khotian_image' required>
  </div> 
  <div class="form-group">
    <label for="dolil_image">Land doc./Dolil</label>
    <input type="file" class="form-control" id="dolil" name='dolil' required>
  </div> 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<a href="{{route('backend.property.index')}}"><button class="btn btn-danger">cancel</button></a>
@endsection