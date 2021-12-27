
	<head>
		<title>Login</title>
		<link rel="icon" type="image/png">
		<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/login.css" />
	</head>
	<body>
		<div class="wrapper fadeInDown">
			<div id="formContent">
				<div class="fadeIn first"><br>
                    <img class="logo" src="{{asset('assets')}}/img/bumn.png" id="icon" alt="User Icon" />
                    <img class="logo" src="{{asset('assets')}}/img/blank.png" id="icon" alt="User Icon" />
                    <img class="logo" src="{{asset('assets')}}/img/Peruri.png" id="icon" alt="User Icon" />
   				</div>
				<div class="fadeIn first">
                    <img class="logo" src="{{asset('assets')}}/img/login_logo.png" id="icon" alt="User Icon" />
   				</div>
				<form  method="post" action="{{ route('login')}}">
					@csrf
					@if(\Session::has('error'))
					<div class="row">
					  <div class="col-md-12">
						<div class="alert alert-danger" style="text-align: center" role="alert">Akun Tidak Ditemukan</div>
					  </div>
					</div>
					@endif
						<input type="text" name="np" class="fadeIn second" placeholder="NP / Username">
						<input type="password" name="password" class="fadeIn third" placeholder="Password">
						<input type="submit" name="btnLogin" class="fadeIn fourth" value="Login">
				</form>
			</div>
		</div>
        <script src="{{ asset('assets') }}/js/core/jquery.min.js"></script>
        <script src="{{ asset('assets') }}/js/core/popper.min.js"></script>
        <script src="{{ asset('assets') }}/js/core/bootstrap.min.js"></script>
	</body>

