@extends('newsportal.master')
<!DOCTYPE html>
<html lang="en">

	<title>Sign up </title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<head>

	</head>
	<body>
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif
	<div class="container-fluid">
		<div class="container"  style="background-image: url('storage/img/002.jpg'); width: 50%; background-size: cover; background-repeat: no-repeat;">
			<h2 class="text-center" id="title"> Signup</h2>

 			<hr>
			<div class="row">
                {{-- <div class="" >
                        <img src="storage/img/001.jpg" alt="..." class="img-thumbnail">
                </div> --}}
				<div class="col-md-6 offset-md-4">
                     <form role="form" method="POST" action="/register">
                        {{ csrf_field() }}
						<fieldset>

 							<div class="form-group">
								<input type="text" name="name" id="name" class="form-control input-lg" placeholder="Name" required>
							</div>

							<div class="form-group">
								<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" required>
							</div>
							<div class="form-group">
								<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" required>
							</div>
								<div class="form-group">
								<input type="password" name="password2" id="password2" class="form-control input-lg" placeholder="Confirm Password" required>
							</div>
							<div class="form-check">
								<label class="form-check-label">
								  <input type="checkbox" class="form-check-input">
								  By Clicking register you're agree to our policy & terms
								</label>
							  </div>
 							<div>
                                 <br>
                                       <input type="submit" href="#" class="btn btn-md btn-primary "  value="Signup" style="cursor:pointer">
                                       <a  href="http://127.0.0.1:8000/login" class="btn btn-md btn-info offset-md-2" >login <i class="fas fa-sign-in-alt"></i></a>
 							</div>
						</fieldset>
					</form>
				</div>



			</div>
		</div>
	</div>
	</body>
</html>
