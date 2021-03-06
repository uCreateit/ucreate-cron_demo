<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{ asset('/theme') }}/global_assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="{{ asset('/theme') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="{{ asset('/theme') }}/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="{{ asset('/theme') }}/assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="{{ asset('/theme') }}/assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="{{ asset('/theme') }}/assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{ asset('/theme') }}/global_assets/js/main/jquery.min.js"></script>
	<script src="{{ asset('/theme') }}/global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="{{ asset('/theme') }}/global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<script src="{{ asset('/theme') }}/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>

	<!-- Theme JS files -->
	<script src="{{ asset('/theme') }}/assets/js/app.js"></script>
	<!-- /theme JS files -->

</head>

<body class=""> 
	
	<!-- Main navbar -->
		@include('inc.admin_nav') 
	<!-- /main navbar -->

	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
			@include('inc.admin_sidebar') 
		<!-- /main sidebar -->

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content">
				@yield('content')
			</div>
			<!-- /content content -->

			<!-- Footer -->
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; {{ date('Y') }} {{config('app.name', 'Laravel')}}
					</span>

					<!-- <ul class="navbar-nav ml-lg-auto">
						<li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
						<li class="nav-item"><a href="http://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
						<li class="nav-item"><a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-cart2 mr-2"></i> Purchase</span></a></li>
					</ul> -->
				</div>
			</div>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<script src="{{ asset('/js/custom.js') }}"></script>
</body>
</html>
