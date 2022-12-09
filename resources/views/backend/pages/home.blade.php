@extends('backend.master')

@section('content')


<a class="btn btn-secondary m-3" href="{{route('home')}}">Create a Property</a>
<table class="table table-dark table-striped">

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
 
</table>
@endsection