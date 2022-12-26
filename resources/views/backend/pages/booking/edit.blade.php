@extends('backend.master')
@section('content')

<h1>Update an user</h1>
<form action="{{route('backend.booking.update',$booking->id)}}" method="post" enctype="multipart/form-data">
  @method('put')
  @csrf
    <div class="form-group">
        <label for="user_id">User id</label>
        <input type="user_id" class="form-control" id="user_id" name="user_id" placeholder="Enter user id" value="{{old('user_id',$booking->user_id)}}">
    </div>
    <div class="form-group">
        <label for="property_id">Property id</label>
    <input type="property_id" class="form-control" id="property_id" name="property_id" placeholder="Enter property id"value="{{old('property_id',$booking->property_id)}}">
    </div>
    <div class="form-group">
      <label for="status">Status</label>
      <select name="status" id="status">
        <option value="pending">Pending</option>
        <option value="approved">Approved</option>
        <option value="sold">Sold</option>
        <option value="reject">Reject</option>
      </select>
    </div>
   
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<a href="{{route('backend.booking.index')}}"><button class="btn btn-danger">cancel</button></a>
@endsection