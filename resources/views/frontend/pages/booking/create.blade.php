<h1>Create property for booking</h1>
<form action="{{route('backend.booking.store')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
  <div class="form-group">
  <label for="property_id">Property Id</label>
    <select name="property_id" class="form-control" id="property_id">
    <option class="form-control" value="{{$property->id}}">{{$property->name}}</option>
    </select>
  </div>
 
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<a href="{{route('backend.booking.index')}}"><button class="btn btn-danger">cancel</button></a>