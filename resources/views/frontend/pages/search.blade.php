@extends('frontend.master')
@section('content')
<div class="col-lg-9 text-center">
            <h1 class="heading" data-aos="fade-up">
              Easiest way to find your dream home
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
                placeholder="Search your suitable Home"
              />
              <button type="submit" class="btn btn-primary">Search</button>
            </form>
          </div>
          @endsection