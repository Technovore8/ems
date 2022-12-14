@extends('frontend.master')
@section('content')
<section class="features-1">
    <div class="container">
      <div class="row">
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          @foreach ($projects as $data)
          <div class="box-feature">
            <span class="flaticon-house"></span>
            <h3 class="mb-3">{{ $data->name }}</h3>
            <p>
              {{ $data->details }}
            </p>
            <p><a href="{{ route('front.project.view',$data->id) }}" class="learn-more">view More</a></p>
          </div>
          @endforeach
        </div> 
      </div>
    </div>
  </section>
@endsection