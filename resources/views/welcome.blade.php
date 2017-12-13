<!DOCTYPE html>
<html lang="es">
<head>
	<title>admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="./bootstrap-3/css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
     <link rel="stylesheet" href="{{ asset('bootstrap-3/css/nexim.css') }}" >
</head>
<body >
	 @include('home')

     <section>
     @yield('content');
     </section>  


     	
	<!--====== Scripts -->
	<script src="./bootstrap-3/js/jquery-3.1.1.min.js"></script>
	<script src="./bootstrap-3/js/bootstrap.min.js"></script>
	<script src="./bootstrap-3/js/material.min.js"></script>
	<script src="./bootstrap-3/js/ripples.min.js"></script>
	<script src="./bootstrap-3/js/sweetalert2.min.js"></script>
	<script src="./bootstrap-3/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./bootstrap-3/js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>