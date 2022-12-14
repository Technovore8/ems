<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in Here</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">



    <style>
        @media (min-width: 1025px) {
.h-custom {
height: 100vh !important;
}
}
    </style>
</head>
<body>
    





<section class="h-100 h-custom" style="background-color: #005555 ;">
  <div class="container py-8 h-10">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-5">
        <div class="card rounded-3">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img3.webp"
            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
            alt="Sample photo">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Info</h3>

            <form action="{{ route('reg.post') }}" method="POST">
              @csrf
              <div class="form-outline mb-2">
                <label class="form-label" for="form3Example1q">Name</label>
                <input type="text" name="name" id="form3Example1q" class="form-control" />
              </div>

              <div class="row">
                <div class="col-md-16 mb-4">
                  <div class="form-outline address">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" id="address" />
                  </div>  

                <div class="row">
                <div class="col-md-16 mb-4">
                <div class="form-group">
                <label for="image">Upload an Image</label>
                <input type="file" class="form-control" id="image" name='image'>
                </div>
                </div>
                </div> 

                <div class="row">
                <div class="col-md-16 mb-4">
                  <div class="form-outline">
                    <label class="email" for="email" >Enter your e-mail</label>
                    <input type="email" id="email" name="email" class="form-control" />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-16 mb-6">
                  <div class="form-outline address">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password"  />
                  </div>

                </div>
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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>
