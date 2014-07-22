
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fitch - Project 3</title>

    <link href= '{{ asset('css/bootstrap.min.css') }}' rel='stylesheet'>
    <link href='{{ asset('css/style.css') }}' rel="stylesheet">

    @yield('head')

  </head>

  <body>

  	
  	<div class="container">
  		@yield('header')
  	<!--
    <div class="container">
	  <div class="header">
	    <h3 class="text-muted">Developer's Best Friend</h3>
	  </div>
	-->

	  <div class="jumbotron">
	    <h2 class = "randomWords">@yield('title')</h2>
	    <p class="lead">@yield('description')</p>
	    
	  </div>

	  @yield('content')

    </div> <!-- /container -->


    <!-- JavaScript -->
    <script src='js/bootstrap.min.js'></script>

  </body>
</html>
