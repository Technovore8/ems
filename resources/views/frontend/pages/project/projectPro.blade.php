@extends('frontend.master')
@section('content')
  <div class="row" style="margin-top:9rem !important">
    @foreach ($properties as $data)
    <div class="col-md-4">
        <img src="{{url('/uploads/',$data->image)}}" alt="Image" class="img-fluid" style="height:200px; "/>
          <div class="py-3">
            <span style="font-weight:bold;">{{ $data->price }} BDT  {{-- ({{$data->negotiable}}) --}} </span>
          <span class="city d-block mb-3">{{ $data->location->name }}</span>
          <a href="{{ route('property.singleView',$data->id) }}"
            class="btn btn-primary py-2 px-3">See details</a>
          </div>
          </div>
    @endforeach
  </div>
@endsection

