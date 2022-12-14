<!doctype html>
<html lang="en">
  <head>
  	<title>Log-in</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{url('frontend/login/css/style.css')}}">

	</head>
	<body class="img js-fullheight" style="background-image: url('{{url('frontend/login/images/bg.jpg')}}');">
	<section class="ftco-section">
		<div class="container">
			
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3>
		      	<form action="{{route('login.post')}}" method="POST" class="signin-form">
					@csrf
		      		<div class="form-group">
		      			<input id="email" type="email" name="email" class="form-control" placeholder="Enter your name" required>
		      		</div>
	            <div class="form-group">
	              	<input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
	              <!-- <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span> -->
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
				<div class="form-group">
	            	<a href="{{ route('registration') }}"><button type="button" class="form-control btn btn-success submit px-3">Registration</button></a>
	            </div>
	            
	          </form>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

