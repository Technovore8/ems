<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="favicon.png" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="{{url('fonts/icomoon/style.css')}}" />
    <link rel="stylesheet" href="{{url('fonts/flaticon/font/flaticon.css')}}" />

    <link rel="stylesheet" href="{{url('css/tiny-slider.css')}}" />
    <link rel="stylesheet" href="{{url('css/aos.css')}}" />
    <link rel="stylesheet" href="{{url('css/style.css')}}" />
    <link rel="stylesheet" href="{{url('http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css')}}">
    <title>
      EverNEST
    </title>

    <style>

      .mt-9rem{
        margin-top:9rem !important;
      }
    </style>
  </head>
  <body>
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    @if (Route::is('home'))
    <div class="hero">
      <div class="hero-slide">
        <div
          class="img overlay"
          style="background-image: url('images/hero_bg_3.jpg')"></div>
        <div class="img overlay"
          style="background-image: url('images/hero_bg_2.jpg')"
        ></div>
        <div
          class="img overlay"
          style="background-image: url('images/hero_bg_1.jpg')"
        ></div>
      </div>

      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center">
            <h1 class="heading" data-aos="fade-up">
              Easiest way to find your dream land
            </h1>
            <form
              action="#"
              class="narrow-w form-search d-flex align-items-stretch mb-3"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <input
                type="text"
                class="form-control px-4"
                placeholder="Search your land in Dhaka"
              />
              <button type="submit" class="btn btn-primary">Search</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    @endif

   @include('frontend.fixed.navbar')
    <div class="main">
      <div class="container" style="min-height:80vh">
        @yield('content')
      </div>
    </div>
  </div>
    {{-- #agents --}}

    @includeIf('frontend.fixed.footer')
    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>

    <script src="{{url('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('js/tiny-slider.js')}}"></script>
    <script src="{{url('js/aos.js')}}"></script>
    <script src="{{url('js/navbar.js')}}"></script>
    <script src="{{url('js/counter.js')}}"></script>
    <script src="{{url('js/custom.js')}}"></script>
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
  </body>
</html>
