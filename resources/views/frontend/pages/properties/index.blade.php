@extends('frontend.master')
@section('content')

<section class="container">
  <div class="container">
    <div class="container">
      <div class="row">
        @foreach ($properties as $data)
          <div class="col-md-4">
            <div class="box-feature">
              <span ><img width="200px" src="{{url('/uploads/',$data->image)}}" alt="" srcset=""></span>
              <h3 class="mb-3">{{ $data->location->name }}</h3>
              <p>
                {{ $data->details }}
              </p>
              <p><a href="{{ route('property.singleView',$data->id) }}" class="learn-more">view More</a></p>
            </div>
             
              
          </div>
                @endforeach
      </div>
    </div>
  </div>
</section>

@endsection