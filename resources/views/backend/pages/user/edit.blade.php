@extends('backend.master')
@section('content')

<h1>Update an user</h1>
<form action="{{route('backend.user.update',$user->id)}}" method="post" enctype="multipart/form-data">
  @method('put')
  @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" value="{{old('name',$user->name)}}">
    </div>
    <div class="form-group">
        <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com"value="{{old('email',$user->email)}}">
    </div>
    <div class="form-group">
        <label for="text">Address</label>
    <input type="text" class="form-control" id="address" name='address' placeholder="Enter your address"value="{{old('address',$user->address)}}">
    </div> 
   
    <div class="form-group">
        <label for="image">Upload an Image</label>
        <input type="file" class="form-control" id="image" name='image'>
    </div> 
    <div class="form-group">
        <label for="nid_image">NID</label>
        <input type="file" class="form-control" id="nid_image" name='nid_image' placeholder="Enter your NID image">
    </div> 
    <div class="form-group">
        <label for="role">Role</label>
    <input type="role" class="form-control" id="role" name='role' value="{{old('role',$user->role)}}">
    </div> 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<a href="{{route('backend.user.index')}}"><button class="btn btn-danger">cancel</button></a>
@endsection