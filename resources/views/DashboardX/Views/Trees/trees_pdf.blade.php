<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Trees - PDF </title>	

</head>
<body>
	
	<img src="DashboardX/Images/logo.png" alt="">

	
	<h1 style="text-align: center">REPORTE ÁRBOLES GENERAL</h1>		
	Aquí hay {{ count($tree) }} árboles.
	
	<br><br>
	
	<table class="table table-hovered">
		<thead>  			
			<tr>
						  									  			
					<td><strong> # 					</strong> </td>
					<td><strong> Nombre Cientifico 	</strong> </td>
					<td><strong> Nombre Común      	</strong> </td>				 					
					<td><strong> Localización 		</strong> </td>
					<td><strong> Vitalidad       	</strong> </td>	
                    <td><strong> Estado             </strong> </td>	
					<td><strong> Latitud            </strong> </td>
					<td><strong> Longitud           </strong> </td>
					<td><strong> Causa 				</strong> </td>	
												
			</tr>									 			
		</thead>
							  			
		<tbody>		
			<?php $n=0; ?>
			@foreach($tree as $trees)								  					
				<tr>
						<td> {{ $n+=1 }} </td>
						<td> {{ $trees->name }}</td>
						<td> {{ $trees->name_comun }} </td>
													
						<td> 
						@if($trees->place == 1) Anden 
						@elseif($trees->place == 2) Parque @elseif($trees->place == 3) Rivera 
						@elseif($trees->place == 4) Río @elseif($trees->place == 5) Antejardín
						@elseif($trees->place == 6) Separador @elseif($trees->place == 7) Borde Carretera 
						@elseif($trees->place == 8) Ferrocarril @else Lugar Inaccesible @endif
					</td>

					<td> 
						@if($trees->healt==1) Sano 
						@elseif($trees->healt==2) Enfermo  
						@else Muerto 
						@endif
					</td>

	                <td>
	                    @if($trees->state == 1) Activo 
	                    @else Inactivo 
	                    @endif
	                </td>                                                  

					<td> {{ $trees->latitud }}  </td>
					<td> {{ $trees->longitud }} </td>

					<td>
						@if($trees->cause == null ) "N/A"
						@else {{ $trees->cause }}
						@endif
	             	</td>
				</tr>
			@endforeach
		</tbody>

</table>
	

</body>
</html>

