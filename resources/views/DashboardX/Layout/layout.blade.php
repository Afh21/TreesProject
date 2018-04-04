<!DOCTYPE html>
<html lang="en">

<head>


    <title> Arbolado Urbanos - Honda </title>
	
	@include('DashboardX.Links.Css.partials_css')	
	
</head>
<body>

	@include('DashboardX.Layout.Partials.preloader') 

	<!-- Menú -->
	<div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        	<div class="pcoded-container navbar-wrapper">

        		@include('DashboardX.Layout.Partials.navbar-top')

					<div class="pcoded-main-container">
		                <div class="pcoded-wrapper">							

							@include('DashboardX.Layout.Partials.navbar-left')							

							@yield('content')


						</div>
					</div>
			</div>
	</div>	
	
	@include('DashboardX.Links.Js.partial_js')  
	
	@yield('js')

	
</body>
</html>