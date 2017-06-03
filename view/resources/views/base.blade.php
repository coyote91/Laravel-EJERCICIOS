<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> @yield('title') </title>

<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

</head>
<body>

<section>
	
	@yield('titulo')
</section>

	<h1>Hola</h1>



{{ $mundo." ".$exito }}

{{ 2*3 }}


<h1>
    
    @if($mundo) 
	   que buena noticia 
	@else 
	   que mala noticia
	@endif

</h1>

</body>
</html>