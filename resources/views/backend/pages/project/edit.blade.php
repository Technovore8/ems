@extends('backend.master')
@section('content')

<h1>Update an user</h1>
<form action="#" method="post" enctype="multipart/form-data">
  @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" value="{{old('name',$project->name)}}">
    </div>
    <div class="form-group">
        <label for="text">Address</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="Enter address"value="{{old('address',$project->address)}}">
    </div>
    <div class="form-group">
        <label for="image">Upload an Image</label>
        <input type="file" class="form-control" id="image" name='image'>
    </div>
    <div class="form-group">
        <label for="text">Details</label>
    <input type="text" class="form-control" id="text" name='address' placeholder="Project details"value="{{old('details',$project->details)}}">
    </div> 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<a href="{{route('backend.project.index')}}"><button class="btn btn-danger">cancel</button></a>
@endsection