@extends('backend.master')
@section('content')


<h1>Create Location</h1>
<form action="{{route('backend.location.store')}}" method="post" enctype="multipart/form-data">
  @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter location">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<a href="{{route('backend.location.index')}}"><button class="btn btn-danger">cancel</button></a>
@endsection