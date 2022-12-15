@extends('frontend.master')
@section('content')
<section class="features-1">
    <div class="container">
      <div class="row">
        @foreach ($projects as $data)
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <div class="box-feature">
            <span ><img width="120px" src="{{ url('/uploads/',$data->image) }}" alt="" srcset=""></span>
            <h3 class="mb-3">{{ $data->name }}</h3>
            <p>
              {{ $data->details }}
            </p>
            <p><a href="{{ route('front.project.view',$data->id) }}" class="learn-more">view More</a></p>
          </div>
        </div> 
        @endforeach
      </div>
    </div>
  </section>
@endsection