<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Sign up / Login Form</title>
  <link rel="stylesheet" href="{{ asset('assets/css/login/login.css') }}">

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">


			<div class="signup">
				<form method="POST" action="{{ route('admin.login') }}">

                    @csrf
					<label for="chk" aria-hidden="true">Admin Login</label>
                    @if(Session::get("fail"))
                                <div class="alert alert-danger">
                                    {{ Session::get('fail') }}
                                </div>
                            @endif
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button type="submit">Log In</button>
				</form>
			</div>





	</div>
</body>
</html>
<!-- partial -->

</body>
</html>
