@extends('frontend.master')
@section('content')
    @foreach ($properties as $data)
        <img src="{{url('/uploads/',$data->image)}}" alt="Image" class="img-fluid" />
        <span>{{ $data->price }}</span>
          <span class="city d-block mb-3">{{ $data->location->name }}</span>
          <a href="{{ route('property.singleView',$data->id) }}"
            class="btn btn-primary py-2 px-3">See details</a>
        
    @endforeach
@endsection