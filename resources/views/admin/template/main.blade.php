<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title','Default') | Panel de Administración </title>
	 
  	

	<link rel="stylesheet" href="{{ asset('css/cssEstilos.css') }}">
	<link rel="stylesheet" href="{{ asset('css/cssEstilos2.css') }}">
	<link rel="stylesheet" href="{{ asset('css/cssEstilos3.css') }}">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  
 
</head>
<body>

				
	<section>
		<div class="container">
			
			@include('admin.template.partials.nav2')
				@yield('nav')
				<section>
					@include('flash::message')
					@yield('content')
				</section>
			
			<div class="row banda-espacio-3"></div>
		</div>
	</section>
			<script src="{{ asset('js/app.js') }}"></script>
			<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
			<script src="{{ asset('plugins/jquery/js/jquery-3.2.1.min.js') }}"></script>
</body>
</html>