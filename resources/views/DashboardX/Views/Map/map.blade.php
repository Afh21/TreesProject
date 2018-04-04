@extends('DashboardX.Layout.layout')

@section('content')

					<div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">

								<div class="col-lg-12 col-xl-12">

								    <!-- Markers map start -->
								    <div class="card">
								        <div class="card-header">
								            <h5>Árboles Geolocalizados</h5>
								            <span>Mapa de Google Maps <code> Colombia </code> </span>
								            <div class="card-header-right"> 
								            	<i class="icofont icofont-spinner-alt-5"></i>                                                         
								            </div>
								        </div>
								        <div class="card-block">
								            <!-- <div id="markermap" class="set-map"></div> -->
								             <div id="map" class="set-map"></div>
								        </div>
								    </div>
								    <!-- Markers map end -->                                    

								</div>

							</div>
						</div>
					</div>


@endsection

@section('js')		
		
	<script>
		
		var map;
		var initMap;

		function initMap() {	    
	    	map = new google.maps.Map(document.getElementById('map'), {	    	
	    		zoom: 6,	    	
	    		center: new google.maps.LatLng(5.363535,-74.045434),	      
	  		});
	 	}

	 	$().ready(function(){

	    $.ajax({
	    		method: "GET",
	    		url: "map/coords",
	    		cache: false,	    											
				})
	    			.done(function (data) {				
						
						var markers = [];

						markers = data.coord.map((key, i) => {

							var infowindow = new google.maps.InfoWindow({
    							content: "#"+ key.id+ " Arbol: "+ key.name + " Ubicacion: " + key.place + " Latitud: " +key.latitud + " Longitud: " +key.longitud
  							}) 							


							var mark =  new google.maps.Marker({
								position: new google.maps.LatLng(parseFloat(key.latitud), parseFloat(key.longitud)) ,
								map: map
							})

							mark.addListener('click', () => infowindow.open(map, mark))

							return mark;

						});

						var markerCluster = new MarkerClusterer(map, markers, {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});						
					})
					
					.fail(function(msg){
						alert("Error Ajax");
					});
		});
			
		</script>

 	
	
	<!-- Google map js -->
	
	<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
	<script async defer src="https://maps.google.com/maps/api/js?key=AIzaSyBe6Kl0yf2m5NaFbdK_Pt9PThIbmWgrNCw&callback=initMap"></script> 

@endsection