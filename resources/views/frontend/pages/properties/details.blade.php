@extends('frontend.master')
@section('content')

    <div
      class="hero page-inner overlay"
      style="background-image: url('images/hero_bg_1.jpg')"
    >
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up">Properties</h1>

            <nav
              aria-label="breadcrumb"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <ol class="breadcrumb text-center justify-content-center">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li
                  class="breadcrumb-item active text-white-50"
                  aria-current="page"
                >
                  Properties
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

   

    <div class="section section-properties">
      <div class="container">
        <div class="row">


          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="property-item mb-30">
              <a href="property-single.html" class="img">
                <img src="images/img_1.jpg" alt="Image" class="img-fluid" />
              </a>

              <div class="property-content">
                <div class="price mb-2"><span>{{$property->price}} Taka</span></div>
                <div>
                  <span class="d-block mb-2 text-black-50"
                    >{{$property->location}}</span
                  >
                  <span class="city d-block mb-3">{{$property->name}}</span>

                  

                  <a
                    href="{{route('buyproperties.singleView',$property->id)}}"
                    class="btn btn-primary py-2 px-3"
                    >See Details</a
                  >
                </div>
              </div>
            </div>
            <!-- .item -->
          </div>
          
        </div>
        
      </div>
    </div>
@endsection