<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" href="{{ asset('admin/assets/images/favicon-32x32.png') }}" type="image/png" />

	@yield("style")
	<link href="{{ asset('admin/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ asset('admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset('admin/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />

	<link href="{{ asset('admin/assets/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('admin/assets/js/pace.min.js') }}"></script>

	<link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('admin/assets/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('admin/assets/css/icons.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('admin/assets/css/dark-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/semi-dark.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/header-colors.css') }}" />
    <title>@yield('title')</title>
</head>

<body>
	
	<div class="wrapper">
	
		@include("Admin.layouts.header")
		
		@include("Admin.layouts.nav")
		
		<div class="page-wrapper">
			<div class="page-content">
				
				@yield("wrapper")
		
			</div>
		</div>
		
		<div class="overlay toggle-icon"></div>
		
		<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2021. All right reserved.</p>
		</footer>
	</div>
	<script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>

	<script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('admin/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('admin/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    
	<script src="{{ asset('admin/assets/js/app.js') }}"></script>
	<script src="{{ asset('admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	@yield("script")
</body>

</html>
