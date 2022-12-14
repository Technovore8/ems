@extends('frontend.master')
@section('content')
<section class="h-100 h-custom pt-9rem" style="background-color: #005555 ;">
  <div class="container py-8 h-10">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-5">
        <div class="card rounded-3">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img3.webp"
            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
            alt="Sample photo">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Info</h3>

            <form action="{{ route('profile.update',auth()->user()->id) }}" method="POST" enctype="multipart/form-data">
                @method('put')
              @csrf
              <div class="form-outline mb-2">
                <label class="form-label" for="form3Example1q">Name</label>
                <input type="text" name="name" value="{{ auth()->user()->name }}" id="form3Example1q" class="form-control" />
              </div>

              <div class="row">
                <div class="col-md-16 mb-4">
                  <div class="form-outline address">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" name="address" value="{{ auth()->user()->address }}" class="form-control" id="address" />
                  </div>  

                <div class="row">
                <div class="col-md-16 mb-4">
                <div class="form-group">
                <label for="image">Upload an Image</label>
                <input type="file" class="form-control"  id="image" name='image'>
                </div>
                </div>
                </div> 

                <div class="row">
                <div class="col-md-16 mb-4">
                  <div class="form-outline">
                    <label class="email" for="email" >Enter your e-mail</label>
                    <input type="email" id="email" value="{{ auth()->user()->email }}" name="email" class="form-control" />
                  </div>
                </div>
              </div>
              <div class="row">
                
                <div class="row">
                <div class="col-md-6 mb-4">
              <button type="submit" class="btn btn-success btn-lg mb-1">Submit</button>
            </div>
        </div>
    </div>
  </div>
</div>
              
    </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection