@extends('backend.master')
@section('content')

<h1>Update a property</h1>
<form action="{{route('backend.property.update',$property->id)}}" method="post" enctype="multipart/form-data">
@method('put')  
@csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" value="{{old('name',$property->name)}}">
    </div>
    <div class="form-group">
  <label for="location_id">Location Id</label>
    <select name="location_id" class="form-control" id="location_id">
    @foreach($location as $data)
    <option value="{{$data->id}}">{{$data->name}}</option>
    @endforeach
    </select>
  </div> 
  <div class="form-group">
  <label for="project">Project Id</label>
    <select name="project_id" class="form-control" id="project_id">
    @foreach($project as $data)
    <option class="form-control" value="{{$data->id}}">{{$data->name}}</option>
    @endforeach
    </select>
  </div>
    <div class="form-group">
        <label for="text">Details</label>
    <input type="text" class="form-control" id="text" name='etails' placeholder="Enter project details"value="{{old('details',$property->details)}}">
    </div> 
    <div class="form-group">
        <label for="image">Upload an Image</label>
        <input type="file" class="form-control" id="image" name='image'>
    </div> 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<a href="{{route('backend.property.index')}}"><button class="btn btn-danger">cancel</button></a>
@endsection