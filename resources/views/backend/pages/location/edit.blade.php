@extends('backend.master')
@section('content')

<h1>Update an user</h1>
<form action="#" method="post" enctype="multipart/form-data">
  @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" value="{{old('name',$location->name)}}">
    </div>
   
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<a href="{{route('backend.location.index')}}"><button class="btn btn-danger">cancel</button></a>
@endsection