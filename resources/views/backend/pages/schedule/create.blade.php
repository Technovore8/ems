<h1>schedule cre</h1>
@extends('backend.master')
@section('content')


<h1>Create an user</h1>
<form action="{{route('backend.user.store')}}" method="post" enctype="multipart/form-data">
  @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">
    </div>
  <div class="form-group">
    <label for="text">Address</label>
    <input type="text" class="form-control" id="address" name='address' placeholder="Enter your address">
  </div> 
  <div class="form-group">
    <label for="image">Upload an Image</label>
    <input type="file" class="form-control" id="image" name='image'>
  </div> 
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<a href="{{route('backend.user.index')}}"><button class="btn btn-danger">cancel</button></a>
@endsection