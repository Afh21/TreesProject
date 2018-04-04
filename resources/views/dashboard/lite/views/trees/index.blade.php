@extends('dashboard.lite.index')

@section('content')
	
	<style>
		.table-responsive > table > thead { padding: 0px 0px; font-size: 0.86em; font-weight: bold }
	</style>

<div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-block">

					<h4> Lista de Árboles </h4>

					<div class="table-responsive">
						<table class="table table-hovered">
				  			<thead>  			
				  				<tr>
				  									  			
									<td> # 					</td>
									<td>Nombre Cientifico 	</td>
									<td>Nombre Común      	</td>									
									<td>Localización 		</td>
									<td>Estado       		</td>								
									<td>Latitud  <i class="fa fa-map-marker"></i>  </td>
									<td>Longitud <i class="fa fa-map-marker"></i> </td>
									
								</tr>
										 			
				  			</thead>
				  			
				  			<tbody>		
				  					<?php $n=0; ?>
				  			@foreach($trees as $tree)								  					
								<tr>
									<td> {{ $n+=1 }} </td>
									<td> {{ $tree->name }}</td>
									<td> Almendro </td>
									
									<td> @if($tree->place == 1) Anden 
											@elseif($tree->place == 2) Parque @elseif($tree->place == 3) Rivera 
											@elseif($tree->place == 4) Río @elseif($tree->place == 5) Antejardín
											@elseif($tree->place == 6) Separador @elseif($tree->place == 7) Borde Carretera 
										    @elseif($tree->place == 8) Ferrocarril @else Lugar Inaccesible @endif</td>


									<td> @if($tree->healt==1) Sano <i class="fa fa-heart-o"></i>
											@elseif($tree->healt==2) Enfermo <i class="fa fa-heartbeat"></i> 
											@else Muerto <i class="fa fa-heart"></i> @endif
										</td>


									<td> {{ $tree->latitud }}  </td>
									<td> {{ $tree->longitud }} </td>
									
									<td> 
										
										<a href="{{ route('trees.edit', $tree->id) }}" class="btn btn-sm btn-warning"> 
                                            <i class="fa fa-pencil"></i>  </a>
                                        
                                        @if(Auth::user()->isAdministrator())
	                                        <a href="{{ route('destroy.trees', $tree->id) }}" class="btn btn-sm btn-danger">
	                                             <i class="fa fa-trash-o"></i> 
	                                        </a>
	                                    @endif

									</td>		
								@endforeach															
							</tbody>
						</table>
			
					</div>

			<div class="row" style="padding-left: 20px">
				<a href="{{ route('trees.create') }}"	class="btn btn-success" style="color: white"> <i class="fa fa-map-marker"></i> Crear Árbol </a>
			</div>
				</div>	
			</div>
		</div>
	</div>



	
	
	
	
@endsection