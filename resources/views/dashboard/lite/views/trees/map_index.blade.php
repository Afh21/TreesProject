@extends('dashboard.layout_dashboard')

@section('content')
		
	<style>
		#map{
			height: 600px;
			width:  550px;
			margin: 0 auto;
			padding: 20 auto;

		}	
	</style>	

	<div class="container">
	
		<h4> Mapa - Arboles  </h4>

		<div id="map"> </div>

	</div>

@endsection

@section('js')


	
<script>

	var map;

	var initMap;

	function initMap() {
    
    	map = new google.maps.Map(document.getElementById('map'), {
    	zoom: 4,
    	center: new google.maps.LatLng(5.446305,-74.664018),
      
  	});

    var labels = 'ABC';	

    $.get('map/coords', function (){							

	}).success(function (data){				
		var array = [];	
		var file = {}

		
		$(data.coord).each(function(key){
			var file = {lat: parseFloat(data.coord[key].latitud), lng:parseFloat(data.coord[key].longitud)}
			array.push(file);						
		});

		var markers = array.map(function(location, i){
			return new google.maps.Marker({
				position:location,
				label: labels[i % labels.length]
			})
		})

		var markerCluster = new MarkerClusterer(map, markers, {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});						
	});

	} 

	</script>
	
	<script src="{!! asset('js/jquery.2.1.1.js') !!}"></script> 
	<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"> </script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBe6Kl0yf2m5NaFbdK_Pt9PThIbmWgrNCw&callback=initMap"> </script>


	
@endsection

