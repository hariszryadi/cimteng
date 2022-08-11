<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kec. Cimahi Tengah - Admin</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/admin/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/admin/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/admin/css/core.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/admin/css/components.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/admin/css/colors.css')}}" rel="stylesheet" type="text/css">

	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="{{asset('assets/admin/js/plugins/loaders/pace.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/admin/js/core/libraries/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/admin/js/core/libraries/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/admin/js/plugins/loaders/blockui.min.js')}}"></script>
	<!-- /core JS files -->


	<!-- Theme JS files -->
	<script type="text/javascript" src="{{asset('assets/admin/js/core/app.js')}}"></script>
	<!-- /theme JS files -->

</head>

<body class="login-container" style="background-image: linear-gradient(#fff, #5A8F7B)">

	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

					<!-- Simple login form -->
					<form action="{{ route('login') }}" method="post">
						{{ csrf_field() }}
						<div class="panel panel-body login-form">
							<div class="text-center">
								{{-- <div class="icon-object border-slate-300 text-slate-300"><i class="icon-user"></i></div> --}}
								<img src="{{asset('images/icon.png')}}" alt="" style="width: 180px; margin: 12px;">
								{{-- <h5 class="content-group">Login to your account <small class="display-block">Enter your credentials below</small></h5> --}}
								<h5 class="content-group">Login ke akun anda <small class="display-block">Masukkan kredensial Anda di bawah ini</small></h5>
								@if($errors->any())
									<h6 class="text-danger">{{$errors->first()}}</h6>
								@endif
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="text" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                                <div class="form-control-feedback">
                                    <i class="icon-user text-muted"></i>
                                </div>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="password" class="form-control" placeholder="Password" name="password">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

							<div class="form-group">
								<button type="submit" class="btn bg-teal-400 btn-block">Sign in <i class="icon-circle-right2 position-right"></i></button>
							</div>

						</div>
					</form>
					<!-- /simple login form -->

					<!-- Footer -->
					<div class="footer text-muted text-center">
						<a href="#" style="color: #ffffff;">&copy; {{ date('Y') }}. Admin - Kec. Cimahi Tengah</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
