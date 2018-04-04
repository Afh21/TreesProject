@extends('DashboardX.Layout.layout')

@section('content')
	
	<div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-header start -->
                                    <div class="page-header card">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <i class="icofont icofont icofont icofont-file-document bg-c-pink"></i>
                                                    <div class="d-inline">
                                                        <h4>Crear Huella de Carbono CO2</h4>
                                                        <span>Sección exclusiva para la creación de la Huella de Carbono</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item">
                                                            <a href="index.html">
                                                                <i class="icofont icofont-home"></i>
                                                            </a>
                                                        </li>
                                                        <li class="breadcrumb-item">
                                                        	<a href="{{ route('dashboard.index') }}">Dashboard</a>
                                        				</li>
                                        				<li class="breadcrumb-item">
                                        					<a href="{{ route('mark.index') }}">CO2</a>
                                        				</li>
                                        				<li class="breadcrumb-item">
                                        					Crear CO2
                                        				</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->

                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Crear CO2</h5>                                                        
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option" style="width: 35px;">
                                                                <li class=""><i class="icofont icofont-simple-left"></i></li>
                                                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                                                <li><i class="icofont icofont-error close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        
                                                        <div class="col-lg-12">

				<form action="{{ route('mark.store') }}" method="POST">
					{{ csrf_field() }}
					
													
				<div class="col-lg-12" style="padding: 15px 15px"></div>								

					<div class="row">			

							<div class="col-lg-6">

								<div class="form-group">								    
								    <label for="rol"> <i class="fa fa-cog"></i> Rol</label>
								   	<ul style="list-style-type: none" >							    		
							    		@role('administrator')
							    		<li style="display: inline-flex; padding:7px">
							    			<label for="admin"> 
							    				<i class="fa fa-diamond" style="margin: 0px"> </i> Profesor / Administrativo </label>
							    				&nbsp; &nbsp;<input type="radio" name="type" checked="checked" value="1" id="admin">	
							    		</li>							    	
							    		@else
							    		<li style="display: inline-flex; padding:7px">
							    			<label for="student"> 
							    				<i class="fa fa-suitcase" style="margin: 0px"> </i> Invitado </label>
							    				&nbsp; &nbsp;<input type="radio" name="type" checked="checked" value="2" id="student">			
							    		</li>
							    		@endrole
							    	</ul>							   
							  	</div>							


				  				<div class="form-group">						    		
						    		<label for="genre"> <i class="fa fa-intersex"></i> Genero</label>
								   	<ul style="list-style-type: none" >							    		
										@if(Auth::user()->genre == 'm')
								    		<li style="display: inline-flex; padding:7px">
								    			<label for="genre"> 
								    				<i class="fa fa-mars" style="margin: 0px"> </i> Masculino </label>
								    				&nbsp; &nbsp; <input type="radio" name="genre" checked="checked" value="m" checked id="genre">	
								    		</li>
								    	@else							    	
								    		<li style="display: inline-flex; padding:7px">
								    			<label for="genre_f"> 
								    				<i class="fa fa-venus" style="margin: 0px"> </i> Femenino </label>
								    				&nbsp; &nbsp; <input type="radio" name="genre" checked="checked" value="f" id="genre_f">			
								    		</li>
								    	@endif
							    	</ul>
						  		</div>

						  		
					
							</div> <!-- Final col-lg-6 -->


							<div class="col-lg-6">

								<div class="form-group">
								   	<label for="age"> Edad </label>	    
								    <div class="input-group">
								    	 <span class="input-group-addon" id="age"> <i class="fa fa-tags"></i> </span>
								    	 <input 
								    	 	type="text" 
								    	 	class="form-control col-lg-3" 
								    	 	value="{{ Auth::user()->age }}" disabled />
								    	 <span class="input-group-addon" id="age"> años </span>	

								    	 <input type="hidden" id="age" name="age" value="{{ Auth::user()->age }}">
								    </div>							    
								    <span class="red-text"> {{ $errors->markError->first('age') }} </span>
						  		</div>

								<div class="form-group">
								   	<label for="age"> Localidad </label>	    
								    <div class="input-group">
								    	 <span class="input-group-addon" id="local"> <i class="fa fa-map"></i> </span>
								    	 <input 
								    	 	type="text" 
								    	 	class="form-control col-lg-9" 
								    	 	id="local" name="local" 
								    	 	value="{{ old('local') }}" required="" />
								    </div>							    
								    <span class="red-text"> {{ $errors->markError->first('local') }} </span>
						  		</div>

			  					<div class="form-group">
							    	<label for="email"> Email </label>
							    	<div class="input-group">
							    	 <span class="input-group-addon" id="email"> 
							    	 	<i class="fa fa-universal-access"></i> </span>
							    	 	<input 
							    	 		type="email" 
							    	 		class="form-control col-lg-9" 
							    	 		value="{{ Auth::user()->email }}" 
							    	 		disabled /> 
							    	 		
							    	 		<input type="hidden" value="{{ Auth::user()->email }}" id="email" name="email" >
							    	</div>							    
							    	<span class="red-text"> {{ $errors->markError->first('email') }} </span>
								</div>

								
							</div> <!-- Final col-lg-6 -->	

							<div class="table-responsive table-border-style">
								
									<table class="table table-hover">																		
										<thead>
											<tr>
												<th><b>Tipo</b></th>											
												<th><b>Unidad</b></th>
												<th><b>Cantidad</b></th>
												<th colspan="2"> <b> Huella de Carbono </b></th>
											</tr>		
										</thead>
										
										<tbody>
											<tr>
												<td colspan="3"> <i class="fa fa-automobile"></i> &nbsp; &nbsp; Movilidad</td>
												<td>Emisión </td>
												<td>Total</td>
											</tr>
											<tr>
												<td>Bus / Colectivo / Colectivo</td>
												<td>¿Horas al día? <br>
													<small class="advert"> 
														Debe ser <= 24 &nbsp; <i class="fa fa-hand-o-right fa-2x"></i>
													</small>
												</td>
												<td>
													<input 
														type="text" 
														id="bus" name="bus" 
														class="form-control col-lg-8 calculate" 
														value="{{ old('bus') }}" >

														<br><span class="red-text-table"> 
															{{ $errors->markError->first('bus') }} 
														</span>
												</td>
												<td class="text-center">
													<span class="label label-info" style="padding: 7px 10px" value="0.4">0,4</span>
												</td>
												<td><span class="label label-default total"></span></td>
											</tr>
											<tr>
												<td>Transmilenio</td>
												<td>¿Horas al día? <br>
													 <small class="advert"> 
													 	Debe ser <= 24 &nbsp; <i class="fa fa-hand-o-right fa-2x"></i>
													 </small> 
												</td>
												<td>
													<input 
														type="text" 
														id="transmi" name="transmi" 
														class="form-control col-lg-8 calculate" 
														value="{{ old('transmi') }}"/>

														<br><span class="red-text-table"> 
															{{ $errors->markError->first('transmi') }} 
														</span>
												</td>
												<td class="text-center">
													<span class="label label-info" style="padding: 7px 10px" value="0.3">0,3</span>
												</td>
												<td><span class="label label-default total"></span></td>
											</tr>
											<tr>
												<td>Vehículo particular / Taxi / Menos de 2.000 cc</td>
												<td>¿Horas al día? <br>
													<small class="advert"> 
														Debe ser <= 24 &nbsp; <i class="fa fa-hand-o-right fa-2x"></i>
													</small></td>
												<td>
													<input 
														type="text" 
														id="taxi" name="taxi" 
														class="form-control col-lg-8 calculate"
														value="{{ old('taxi') }}" />

														<br><span class="red-text-table"> 
															{{ $errors->markError->first('taxi') }} 
														</span>
												</td>
												<td class="text-center">
													<span class="label label-info" style="padding: 7px 10px" value="2.0">2,0</span>
												</td>
												<td><span class="label label-default total"></span></td>
											</tr>
											<tr>
												<td>Vehículo particular / Taxi / Mas de 2.000 cc</td>
												<td>¿Horas al día? <br>
													<small class="advert">
													 Debe ser <= 24 &nbsp; <i class="fa fa-hand-o-right fa-2x"></i>
													</small>
												</td>
												<td>
													<input 
														type="text" 
														id="taxi_mas" name="taxi_mas" 
														class="form-control col-lg-8 calculate"
														value="{{ old('taxi_mas') }}" />

														<br><span class="red-text-table"> 
															{{ $errors->markError->first('taxi_mas') }} 
														</span>
												</td>
												<td class="text-center">
													<span class="label label-info" style="padding: 7px 10px" value="4.0">4,0</span>
												</td>
												<td><span class="label label-default total"></span></td>
											</tr>
											<tr>
												<td>Moto</td>
												<td>¿Horas al día? <br>
													<small class="advert"> 
														Debe ser <= 24 &nbsp; <i class="fa fa-hand-o-right fa-2x"></i>
													</small>
												</td>
												<td>
													<input 
														type="text" 
														id="moto" name="moto" 
														class="form-control col-lg-8 calculate"
														value="{{ old('moto') }}" />

														<br><span class="red-text-table"> 
															{{ $errors->markError->first('moto') }} 
														</span>
												</td>
												<td class="text-center">
													<span class="label label-info" style="padding: 7px 10px" value="0.6">0,6</span>
												</td>
												<td><span class="label label-default total"></span></td>
											</tr>
											<tr>
												<td>Moto eléctrica</td>
												<td>¿Horas al día? <br>
													<small class="advert"> 
														Debe ser <= 24 &nbsp; <i class="fa fa-hand-o-right fa-2x"></i>
													</small>
												</td>
												<td>
													<input 
														type="text" 
														id="moto_el" name="moto_el" 
														class="form-control col-lg-8 calculate"
														value="{{ old('moto_el') }}" />

														<br><span class="red-text-table"> 
															{{ $errors->markError->first('moto_el') }} 
														</span>
												</td>
												<td class="text-center">
													<span class="label label-info" style="padding: 7px 10px" value="0.2">0,2</span>
												</td>
												<td><span class="label label-default total"></span></td>
											</tr>
											<tr>
												<td>Bicicleta</td>
												<td>¿Horas al día? <br>
													<small class="advert"> 
														Debe ser <= 24 &nbsp; <i class="fa fa-hand-o-right fa-2x"></i>
													</small> 
												</td>
												<td>
													<input 
														type="text" 
														id="bici" name="bici" 
														class="form-control col-lg-8 calculate"
														value="{{ old('bici') }}" />

														<br><span class="red-text-table"> 
															{{ $errors->markError->first('bici') }} 
														</span>
												</td>
												<td class="text-center">
													<span class="label label-info" style="padding: 7px 10px" value="0.01">0,01</span>
												</td>
												<td><span class="label label-default total"></span></td>
											</tr>
											<tr>
												<td>Avión</td>
												<td>¿Horas al día? <br>
													<small class="advert"> 
														Debe ser <= 24 &nbsp; <i class="fa fa-hand-o-right fa-2x"></i>
													</small> 
												</td>
												<td>
													<input 
														type="text" 
														id="avion" name="avion" 
														class="form-control col-lg-8 calculate"
														value="{{ old('avion') }}" />

														<br><span class="red-text-table"> 
															{{ $errors->markError->first('avion') }} 
														</span>
												</td>
												<td class="text-center">
													<span class="label label-info" style="padding: 7px 10px" value="2.0">200</span>
												</td>
												<td><span class="label label-default total"></span></td>
											</tr>
											<tr>
												<td colspan="3"> <i class="fa fa-cutlery"></i> &nbsp; &nbsp; Alimentación </td>
											</tr>
											<tr>
												<td>Porción de 100 gr Carne Roja / Pollo / Pescado</td>
												<td>Porciones por semana</td>
												<td>
													<input 
														type="text" 
														id="carne" name="carne" 
														class="form-control col-lg-8 calculate"
														value="{{ old('carne') }}" />
												</td>
												<td class="text-center">
													<span class="label label-info" style="padding: 7px 10px" value="2.0">2,0</span>
												</td>
												<td><span class="label label-default total"></span></td>
											</tr>
											<tr>
												<td>Frutas import. Pera / Manzana / Durazno, y verduras import. 100 gr</td>
												<td>Cantidad semana</td>
												<td>
													<input 
														type="text" 
														id="frutas" name="frutas" 
														class="form-control col-lg-8 calculate"
														value="{{ old('frutas') }}" />
												</td>
												<td class="text-center">
													<span class="label label-info" style="padding: 7px 10px" value="2.0">2,0</span>
												</td>
												<td><span class="label label-default total"></span></td>
											</tr>
											<tr>
												<td>Frutas locales Mango / Banana / Papaya, y verduras locales 100 gr</td>
												<td>Cantidad semana</td>
												<td>
													<input 
														type="text" 
														id="frutas_loc" name="frutas_loc" 
														class="form-control col-lg-8 calculate"
														value="{{ old('frutas_loc') }}" />
												</td>
												<td class="text-center">
													<span class="label label-info" style="padding: 7px 10px" value="1.0">1,0</span>
												</td>
												<td><span class="label label-default total"></span></td>
											</tr>
											<tr>
												<td>Pasteles o empanadas con Carne Roja / Procesada o Pollo / Comida en paquete</td>
												<td>Porción Semana</td>
												<td>
													<input 
														type="text" 
														id="pasteles" name="pasteles" 
														class="form-control col-lg-8 calculate"
														value="{{ old('pasteles') }}" />
												</td>
												<td class="text-center">
													<span class="label label-info" style="padding: 7px 10px" value="2.0">2,0</span>
												</td>
												<td><span class="label label-default total"></span></td>
											</tr>
											<tr>
												<td>Galletas y otras harinas (sin Carne / Pollo ), comida en paquetes</td>
												<td>Porción Semana</td>
												<td>
													<input 
														type="text" 
														id="galletas" name="galletas" 
														class="form-control col-lg-8 calculate"
														value="{{ old('galletas') }}" />
												</td>
												<td class="text-center">
													<span class="label label-info" style="padding: 7px 10px" value="1.5">1,5</span>
												</td>
												<td><span class="label label-default total"></span></td>
											</tr>
											<tr>
												<td>Bebidas nevera, Agua / Gaseosa / Dispensador Automático</td>
												<td>Porción Semana</td>
												<td>
													<input 
														type="text" 
														id="bebidas" name="bebidas" 
														class="form-control col-lg-8 calculate"
														value="{{ old('bebidas') }}" />
												</td>
												<td class="text-center">
													<span class="label label-info" style="padding: 7px 10px" value="0.2">0,2</span>
												</td>
												<td><span class="label label-default total"></span></td>
											</tr>
											<tr>
												<td>Tasas de café / Té / Vaso de leche</td>
												<td>Tasas o Vasos por semana</td>
												<td>
													<input 
														type="text" 
														id="cafe" name="cafe" 
														class="form-control col-lg-8 calculate"
														value="{{ old('cafe') }}" />
												</td>
												<td class="text-center">
													<span class="label label-info" style="padding: 7px 10px" value="1.0">1,0</span>
												</td>
												<td><span class="label label-default total"></span></td>
											</tr>
											<tr>
												<td colspan="3"> <i class="fa fa-bank"></i> &nbsp; &nbsp; Campus (Horas Semana) </td>
											</tr>
											<tr>
												<td>Horas con luz eléctrica / Lámpara encendida / Oficina</td>
												<td>Cantidad</td>
												<td>
													<input 
														type="text" 
														id="oficina" name="oficina" 
														class="form-control col-lg-8 calculate"
														value="{{ old('oficina') }}" />
												</td>
												<td class="text-center">
													<span class="label label-info" style="padding: 7px 10px" value="0.05">0,05</span>
												</td>
												<td><span class="label label-default total"></span></td>
											</tr>
											<tr>
												<td>Horas con luz eléctrica / Lámpara encendida / Salón de Clase</td>
												<td>Cantidad</td>
												<td>
													<input 
														type="text" 
														id="salon" name="salon" 
														class="form-control col-lg-8 calculate"
														value="{{ old('salon') }}" />
												</td>
												<td class="text-center">
													<span class="label label-info" style="padding: 7px 10px" value="0.01">0,01</span>
												</td>
												<td><span class="label label-default total"></span></td>
											</tr>
											<tr>
												<td>Horas computador encendido</td>
												<td>Cantidad</td>
												<td>
													<input 
														type="text" 
														id="pc" name="pc" 
														class="form-control col-lg-8 calculate"
														value="{{ old('pc') }}" />
												</td>
												<td class="text-center">
													<span class="label label-info" style="padding: 7px 10px" value="0.02">0,02</span>
												</td>
												<td><span class="label label-default total"></span></td>
											</tr>
											<tr>
												<td>Horas celular encencidido</td>
												<td>Cantidad</td>
												<td>
													<input 
														type="text" 
														id="celular" name="celular" 
														class="form-control col-lg-8 calculate"
														value="{{ old('celular') }}" />
												</td>
												<td class="text-center">
													<span class="label label-info" style="padding: 7px 10px" value="0.001">0,001</span>
												</td>
												<td><span class="label label-default total"></span></td>
											</tr>
											<tr>
												<td colspan="3"> <i class="fa fa-bank"></i> &nbsp; &nbsp; Campus (Otras cosas) </td>
											</tr>
											<tr>
												<td>Cuadernos que compra al semestre</td>
												<td>Cantidad</td>
												<td>
													<input 
														type="text" 
														id="cuadernos" name="cuadernos" 
														class="form-control col-lg-8 calculate"
														value="{{ old('cuadernos') }}" />
												</td>
												<td class="text-center">
													<span class="label label-info" style="padding: 7px 10px" value="0.05">0,05</span>
												</td>
												<td><span class="label label-default total"></span></td>
											</tr>
											<tr>
												<td>Libros que compra al semestre</td>
												<td>Cantidad</td>
												<td>
													<input 
														type="text" 
														id="libros" name="libros" 
														class="form-control col-lg-8 calculate"
														value="{{ old('libros') }}" />
												</td>
												<td class="text-center">
													<span class="label label-info" style="padding: 7px 10px" value="1.0">1,0</span>
												</td>
												<td><span class="label label-default total"></span></td>
											</tr>
											<tr>
												<td>Fotocopias que saca al semestre</td>
												<td>Cantidad</td>
												<td>
													<input 
														type="text" 
														id="fotocopias" name="fotocopias" 
														class="form-control col-lg-8 calculate"
														value="{{ old('fotocopias') }}" />
												</td>
												<td class="text-center">
													<span class="label label-info" style="padding: 7px 10px" value="0.001">0,001</span>
												</td>
												<td><span class="label label-default total"></span></td>
											</tr>
											<tr>
												<td>Vestuario que compra al semestre</td>
												<td>Cantidad</td>
												<td>
													<input 
														type="text" 
														id="vestidos" name="vestidos" 
														class="form-control col-lg-8 calculate"
														value="{{ old('vestidos') }}" />
												</td>
												<td class="text-center">
													<span class="label label-info" style="padding: 7px 10px" value="0.01">0,01</span>
												</td>
												<td><span class="label label-default total"></span></td>
											</tr>
											<tr>
												<td>Zapatos que compra al semestre</td>
												<td>Cantidad</td>
												<td>
													<input 
														type="text" 
														id="zapatos" name="zapatos" 
														class="form-control col-lg-8 calculate"
														value="{{ old('zapatos') }}" />
												</td>
												<td class="text-center">
													<span class="label label-info" style="padding: 7px 10px" value="0.02">0,02</span>
												</td>
												<td><span class="label label-default total"></span></td>
											</tr>
											<tr>
												<td>Veces que va al sanitario a la semana</td>
												<td>Cantidad</td>
												<td>
													<input 
														type="text" 
														id="sanitario" name="sanitario" 
														class="form-control col-lg-8 calculate"
														value="{{ old('sanitario') }}" />
												</td>
												<td class="text-center">
													<span class="label label-info" style="padding: 7px 10px" value="0.001">0,001</span>
												</td>
												<td><span class="label label-default total"></span></td>
											</tr>
											<tr>
												<td>Veces que se lava las manos a la semana</td>
												<td>Cantidad</td>
												<td>
													<input 
														type="text" 
														id="lavar" name="lavar" 
														class="form-control col-lg-8 calculate" 
														value="{{ old('lavar') }}" />
												</td>
												<td class="text-center">
													<span class="label label-info" style="padding: 7px 10px" value="0.001">0,001</span>
												</td>
												<td><span class="label label-default total"></span></td>
											</tr>
											<tr>
												<td>Duchas en el gimnasio a la semana de menos de 5 minutos</td>
												<td>Cantidad</td>
												<td>
													<input 
														type="text" 
														id="ducha" name="ducha" 
														class="form-control col-lg-8 calculate"
														value="{{ old('ducha') }}" />
												</td>
												<td class="text-center">
													<span class="label label-info" style="padding: 7px 10px" value="0.001">0,001</span>
												</td>
												<td><span class="label label-default total"></span></td>
											</tr>
											<tr>
												<td>Duchas en el gimnasio a la semana de menos de 5 - 10 minutos</td>
												<td>Cantidad</td>
												<td>
													<input 
														type="text" 
														id="ducha_diez" name="ducha_diez" 
														class="form-control col-lg-8 calculate"
														value="{{ old('ducha_diez') }}" />
												</td>
												<td class="text-center">
													<span class="label label-info" style="padding: 7px 10px" value="0.001">0,001</span>
												</td>
												<td><span class="label label-default total"></span></td>
											</tr>
											<tr >
												<td>Duchas en el gimnasio a la semana de menos de 10 - 15 minutos</td>
												<td>Cantidad</td>
												<td>
													<input 
														type="text" 
														id="ducha_quince" name="ducha_quince" 
														class="form-control col-lg-8 calculate "
														value="{{ old('ducha_quince') }}">
												</td>
												<td class="text-center">
													<span class="label label-info" style="padding: 7px 10px" value="0.001">0,001</span>
												</td>
												<td><span class="label label-default total " ></span></td>
											</tr>

										</tbody>
									</table>
								</div>

							</div>
					</div>				

					<div class="col-lg-12">
						
						<div class="row">

							<div class="col-lg-8" style="margin-top: 20px">
								<button type="button" class="btn btn-md btn-success"> <i class="fa fa-bolt"></i> Crear Huella</button>

								&nbsp; &nbsp; &nbsp; 
								<button type="submit" class="btn btn-md btn-info" disabled> 
									<i class="fa fa-floppy-o"></i> &nbsp; Guardar
								</button>
				
							</div>
						
						<style>
							.resultado { padding: 15px 15px; }	
							#res { font-weight: bold; font-size: 3em; }

						</style>

						<div class="col-lg-4 text-right">
							<span class="label label-default resultado "> Huella Carbono &nbsp; &nbsp; <span id="res"> </span> </span>
							<input type="hidden" class="form-control result" name="hc">
						</div>

						</div>
					
					</div>
				</form>					
			</div>	
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>


@endsection

@section('js')
	
	<script src="{{ asset('js/js_dashboard/cleave/dist/cleave.js') }}"></script>

	<script>
		
		$(document).ready(function () {		

			$('.calculate').attr('value', 0);



			new Cleave('input#bus',           {numeral: true, numeralIntegerScale: 2 });
            new Cleave('input#transmi',       {numeral: true, numeralIntegerScale: 2 });
            new Cleave('input#taxi',          {numeral: true, numeralIntegerScale: 2 });
            new Cleave('input#taxi_mas',      {numeral: true, numeralIntegerScale: 2 });
            new Cleave('input#moto',          {numeral: true, numeralIntegerScale: 2 });
            new Cleave('input#moto_el',       {numeral: true, numeralIntegerScale: 2 });
            new Cleave('input#bici',          {numeral: true, numeralIntegerScale: 2 });
            new Cleave('input#avion' ,        {numeral: true, numeralIntegerScale: 2 });
            new Cleave('input#carne',         {numeral: true, numeralIntegerScale: 2 });
            new Cleave('input#frutas',        {numeral: true, numeralIntegerScale: 2 });
            new Cleave('input#frutas_loc',    {numeral: true, numeralIntegerScale: 2 });
            new Cleave('input#pasteles',      {numeral: true, numeralIntegerScale: 2 });
            new Cleave('input#galletas',      {numeral: true, numeralIntegerScale: 2 });
            new Cleave('input#bebidas',       {numeral: true, numeralIntegerScale: 2 });
            new Cleave('input#cafe',          {numeral: true, numeralIntegerScale: 2 });
            new Cleave('input#oficina',       {numeral: true, numeralIntegerScale: 2 });
            new Cleave('input#salon',         {numeral: true, numeralIntegerScale: 2 });
            new Cleave('input#pc',            {numeral: true, numeralIntegerScale: 2 });
            new Cleave('input#celular',       {numeral: true, numeralIntegerScale: 2 });
            new Cleave('input#cuadernos',     {numeral: true, numeralIntegerScale: 2 });
            new Cleave('input#libros',        {numeral: true, numeralIntegerScale: 2 });
            new Cleave('input#fotocopias',    {numeral: true, numeralIntegerScale: 2 });
            new Cleave('input#vestidos',      {numeral: true, numeralIntegerScale: 2 });
            new Cleave('input#zapatos',       {numeral: true, numeralIntegerScale: 2 });
            new Cleave('input#sanitario',     {numeral: true, numeralIntegerScale: 2 });
            new Cleave('input#lavar',         {numeral: true, numeralIntegerScale: 2 });
            new Cleave('input#ducha',         {numeral: true, numeralIntegerScale: 2 });
            new Cleave('input#ducha_diez',    {numeral: true, numeralIntegerScale: 2 });
            new Cleave('input#ducha_quince',  {numeral: true, numeralIntegerScale: 2 });
            new Cleave('input[name=hc]',      {numeral: true, numeralIntegerScale: 2 });    


			$('.label-default').css({"color":"black"});

			//$('.calculate').attr('value', 0);

			let kg = [];			

			$('.calculate').change((e)=>{

				let v = $(e.currentTarget).val();
				
				if(v > 24){ 
					alert("Debe ser menor a 24 hr"); 						
				} else {					

				let value = $(e.currentTarget).val()

				let type = $('input[name=type]:checked').val();

				let genre = $('input[name=genre]:checked').val();
				
				let row =  $(e.currentTarget).parent().parent()

				let porcentaje =  $(row.children()[3]).children('span').attr('value')

				let resultado =  $(row.children()[4]).children('span')

				if(type==1){
					
					let oper_admin = (value*porcentaje*50*20*type).toFixed(2)

					resultado.text( (value*porcentaje*50*20*type).toFixed(2) )

					kg.push(oper_admin);

				}else{

					resultado.text( (value*porcentaje*36*20*type).toFixed(2) )

					let oper_est = (value*porcentaje*36*20*type).toFixed(2)
					
					kg.push(oper_est)
				}
				}

								

			})


			$('button[type=button]').click((e)=>{				
				let ant = 0;				

				for (var i = 0 ; i < parseInt(kg.length) ; i ++) 
				{										
					console.log("Suma:" + (ant = parseInt(ant) + parseInt(kg[i]) ) )
				}

				let op = (ant / 1000).toFixed(2)
				$('span #res').append( op );
				$('.result').attr('value', op);
				$(e.currentTarget).attr('disabled', true);
				$('button[type=submit]').attr('disabled', false);
			})
			

		});

	</script>

@endsection