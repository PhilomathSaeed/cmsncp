<!DOCTYPE html>
<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Clickpiper</title>

        
	        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
	        <link href="http://fonts.googleapis.com/css?family=Droid+Sans">
	        <link href="http://fonts.googleapis.com/css?family=Lobster">
	        <link rel="stylesheet" href="{{ URL::asset('frontend/bootstrap/css/bootstrap.min.css') }}">
	        <link rel="stylesheet" href="{{ URL::asset('frontend/font-awesome/css/font-awesome.min.css') }}" >
	        <link rel="stylesheet" href="{{ URL::asset('frontend/css/animate.css') }}">
	        <link rel="stylesheet" href="{{ URL::asset('frontend/bootstrap/css/bootstrap.min.css') }}">
	        <link rel="stylesheet" href="{{ URL::asset('frontend/css/magnific-popup.css') }}">
	        <link rel="stylesheet" href="{{ URL::asset('frontend/css/form-elements.css') }}">
	        <link rel="stylesheet" href="{{ URL::asset('frontend/css/style.css') }}">
	        <link rel="stylesheet" href="{{ URL::asset('frontend/css/media-queries.css') }}">

	        <link rel="shortcut icon" href="{{ URL::asset('frontend/ico/favicon.png') }}">
	        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
	        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
	        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
	        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>
    <body>
        
        <!-- Top menu -->
		<nav class="navbar" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/">clickpiper</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					
					<ul class="nav navbar-nav navbar-right">
					
                    	
						@foreach($menus as $menu)
                        	<?php 
							if($menu->menu_url!="")
                            	$url = $menu->menu_url;
                            else
                           	   $url = 'pages/'.$menu->slug;
							?>
						<li class="dropdown">
							<a href="{{ url($url)  }}">{{ $menu->menuname }}</a>
						</li>
						@endforeach
					</ul>					
				</div>
			</div>
		</nav>
		