@extends('backend.master')
@section('content')

<h1>Update an user</h1>
<form action="{{route('backend.project.update',$project->id)}}" method="post" enctype="multipart/form-data">
@method('put')  
@csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" value="{{old('name',$project->name)}}">
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
        <label for="image">Upload an Image</label>
        <input type="file" class="form-control" id="image" name='image'>
    </div>
    <div class="form-group">
        <label for="text">Details</label>
    <input type="text" class="form-control" id="text" name="details" placeholder="Project details"value="{{old('details',$project->details)}}">
    </div> 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<a href="{{route('backend.project.index')}}"><button class="btn btn-danger">cancel</button></a>
@endsection