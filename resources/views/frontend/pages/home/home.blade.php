@extends('frontend.master')
@section('content')
<div class="section">
  <div class="container">
    <div class="row mb-5 align-items-center">
      <div class="col-lg-6">
        <h2 class="font-weight-bold text-primary heading">
          Popular Properties
        </h2>
      </div>
      <div class="col-lg-6 text-lg-end">
        <p>
          <a
            href="{{ route('frontend.properties') }}"
            target="_blank"
            class="btn btn-primary text-white py-3 px-4"
            >View all properties</a
          >
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="property-slider-wrap">
          <div class="property-slider">
            @foreach ($properties as $data)
            <div class="property-item">
              <a href="property-single.html" class="img">
                <img src="{{url('/uploads/',$data->image)}}" alt="Image" class="img-fluid" />
              </a>
              <div class="property-content">
                <div class="price mb-2"><span>{{ $data->price }}</span></div>
                <div>
                  <span class="city d-block mb-3">{{ $data->location->name }}</span>
                  <a href="{{ route('property.singleView',$data->id) }}"
                    class="btn btn-primary py-2 px-3">See details</a>
                </div>
              </div>
            </div>
            @endforeach
          </div>

          <div
            id="property-nav"
            class="controls"
            tabindex="0"
            aria-label="Carousel Navigation"
          >
            <span
              class="prev"
              data-controls="prev"
              aria-controls="property"
              tabindex="-1"
              >Prev</span
            >
            <span
              class="next"
              data-controls="next"
              aria-controls="property"
              tabindex="-1"
              >Next</span
            >
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

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



<div class="section section-4 bg-light">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-5">
        <h2 class="font-weight-bold heading text-primary mb-4">
          Let's find home that's perfect for you
        </h2>
        <p class="text-black-50">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
          enim pariatur similique debitis vel nisi qui reprehenderit.
        </p>
      </div>
    </div>
    <div class="row justify-content-between mb-5">
      <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
        <div class="img-about dots">
          <img src="images/hero_bg_3.jpg" alt="Image" class="img-fluid" />
        </div>
      </div>
      <div class="col-lg-4">
        <div class="d-flex feature-h">
          <span class="wrap-icon me-3">
            <span class="icon-home2"></span>
          </span>
          <div class="feature-text">
            <h3 class="heading">2M Properties</h3>
            <p class="text-black-50">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Nostrum iste.
            </p>
          </div>
        </div>

        <div class="d-flex feature-h">
          <span class="wrap-icon me-3">
            <span class="icon-person"></span>
          </span>
          <div class="feature-text">
            <h3 class="heading">Top Rated Agents</h3>
            <p class="text-black-50">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Nostrum iste.
            </p>
          </div>
        </div>

        <div class="d-flex feature-h">
          <span class="wrap-icon me-3">
            <span class="icon-security"></span>
          </span>
          <div class="feature-text">
            <h3 class="heading">Legit Properties</h3>
            <p class="text-black-50">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Nostrum iste.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row section-counter mt-5">
      <div
        class="col-6 col-sm-6 col-md-6 col-lg-3"
        data-aos="fade-up"
        data-aos-delay="300"
      >
        <div class="counter-wrap mb-5 mb-lg-0">
          <span class="number"
            ><span class="countup text-primary">3298</span></span
          >
          <span class="caption text-black-50"># of Buy Properties</span>
        </div>
      </div>
      <div
        class="col-6 col-sm-6 col-md-6 col-lg-3"
        data-aos="fade-up"
        data-aos-delay="400"
      >
        <div class="counter-wrap mb-5 mb-lg-0">
          <span class="number"
            ><span class="countup text-primary">2181</span></span
          >
          <span class="caption text-black-50"># of Sell Properties</span>
        </div>
      </div>
      <div
        class="col-6 col-sm-6 col-md-6 col-lg-3"
        data-aos="fade-up"
        data-aos-delay="500"
      >
        <div class="counter-wrap mb-5 mb-lg-0">
          <span class="number"
            ><span class="countup text-primary">9316</span></span
          >
          <span class="caption text-black-50"># of All Properties</span>
        </div>
      </div>
      <div
        class="col-6 col-sm-6 col-md-6 col-lg-3"
        data-aos="fade-up"
        data-aos-delay="600"
      >
        <div class="counter-wrap mb-5 mb-lg-0">
          <span class="number"
            ><span class="countup text-primary">530</span></span
          >
          <span class="caption text-black-50"># of Agents</span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section">
  <div class="row justify-content-center footer-cta" data-aos="fade-up">
    <div class="col-lg-7 mx-auto text-center">
      <h2 class="mb-4">Be a part of our growing real state agents</h2>
      <p>
        <a
          href="#"
          target="_blank"
          class="btn btn-primary text-white py-3 px-4"
          >Apply for Real Estate agent</a
        >
      </p>
    </div>
    <!-- /.col-lg-7 -->
  </div>
  <!-- /.row -->
</div>

@endsection