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
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<a href="{{route('backend.user.index')}}"><button class="btn btn-danger">cancel</button></a>
@endsection