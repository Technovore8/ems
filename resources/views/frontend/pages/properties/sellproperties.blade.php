@extends('frontend.master')   
@section('content')
<div class="mt-10">
@if($errors->any())
  @foreach($errors as $error)
    <div class="alert alert-danger">{{$error}}</div>
  @endforeach
@endif
<h1 class="m-5">Sell a Property</h1>
<section class="m-5">
  <form action="{{route('sell.post')}}" method="post" enctype="multipart/form-data">
    @csrf
      <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter property name">
      </div>
    <div class="form-group">
    <label for="location_id">Location Name</label>
      <select name="location_id" class="form-control" id="location_id">
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
      <input type="text" class="form-control" id="text" name="details" placeholder="Project details">
    </div>
    <div class="form-group">
      <label for="price">Finencial Details</label>
      <input type="text" class="form-control" id="text" name="price" placeholder="Property ">
    </div>
    <div class="form-group">
      <label for="phone">Phone</label>
      <input type="text" class="form-control" id="phone" name="phone" placeholder="Property ">
    </div>
    
    
    <div class="form-group">
      <label for="image">Upload an Image</label>
      <input type="file" class="form-control" id="image" name='image'>
    </div>
    <div class="form-group">
      <label for="nid_image">NID</label>
      <input type="file" class="form-control" id="nid_image" name='nid_image'>
   
    <div class="form-group">
        <label for="khotian_image">Khotian/porha no</label>
        <input type="file" class="form-control" id="khotian_image" name='khotian_image'>
    </div>
    <div class="form-group">
      <label for="dolil">Land doc./Dolil</label>
      <input type="file" class="form-control" id="dolil" name='dolil'>
  </div> 
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <a href="{{route('home')}}"><button class="btn btn-danger">cancel</button></a>
  </div> 
</section>   
  @endsection
























