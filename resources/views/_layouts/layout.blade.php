<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">	
        <meta name="csrf-token" content="{{ csrf_token() }}" />

	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

		@section('meta_description')	

		@show
		@section('meta_keywords')		

		@show		
		
		@include('_layouts.style')
		<script>
		window.Laravel = {!! json_encode([
		'csrfToken' => csrf_token(),
		]) !!};
		</script>	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>	
	</head>
	<body>	
		<?php
			if(!isset($_COOKIE['temp_user_id'])) {
			     	$cookie_name = "temp_user_id";
					$cookie_value = rand();
					setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
			} 
		?>
            
            @include('_layouts.navbar')          

                @section('slider')                    

                @show
                @section('heading')

                @show
                @section('content')                		

                @show		

            @include('_layouts.footer')

	        @include('_layouts.script')

	</body>
</html>