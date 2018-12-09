<!DOCTYPE html>
<html>
<head>
	<title>Laravel Myanmar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	@include('frontend.template.partials.style')
</head>
<body>
	@include('frontend.template.partials.header')
	<div class="site-body uk-container uk-container-center">
		<div class="uk-grid uk-grid-divider uk-grid-preserve" data-uk-grid-match>
			@yield('content')
		</div>
	</div>
	@include('frontend.template.partials.footer')
	@include('frontend.template.partials.script')
</body>
</html>