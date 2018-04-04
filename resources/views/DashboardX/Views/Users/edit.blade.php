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
                                        <h4>Editar Usuario, { {{ $user->name }} } </h4>
                                        <span>Sección de actualización de información.</span>
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
                                        	<a href="{{ route('user.index') }}">Usuarios</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                        	Editar
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
                                        <h5 style="text-transform: capitalize;">{{ $user->name }} , {{ $user->lastname }}</h5>
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
                                        
											<form action="{{ route('user.update', ['user' => $user->id]) }}" method="POST" name="form">		
											{{ method_field('PUT') }}
											<input type="hidden" name="_token" value="{{ csrf_token() }}">

								
											<div class="text-center">
											    	
											<div class="col-lg-12 text-center" id="rolAssign">

												@foreach($user->roles as $rol)
												
													@if($rol->slug == "administrator") 
														<button type="button" class="btn btn-success btn-round"> 
															<i class="far fa-gem"></i> Soy Administrador 
														</button> &nbsp; &nbsp; 
															@role('administrator') 
																<i class="fa fa-magic"></i> 
															@endrole

														<br><br>

													@elseif($rol->slug == 'geolocator')
														<button type="button" class="btn btn-warning"> 
															<i class="fas fa-map-marker-alt"></i> Soy Geolocalizador 
														</button> &nbsp; &nbsp; 
														@role('administrator') 
															<i class="fa fa-magic"></i> 
														@endrole
														<br><br>

													@else
														<button type="button" class="btn btn-danger previous"> 
															<i class="fa fa-graduation"></i> Soy Invitado/Estudiante 
														</button> &nbsp; &nbsp; 
														@role('administrator') 
															<i class="fa fa-magic"></i> 
														@endrole														
														<br><br>
													@endif

											    @endforeach									

											</div>								    								    
											    

										    	<ul id="assignRole" style="list-style-type: none; display: none; margin-top: 10px; ">
										    		
										    		@foreach($user->roles as $rol)

											    		@if($rol->slug == "administrator")
															
															<li style="display: inline-flex; padding:10px">
												    			<label for="teacher"> 
												    				<i class="fas fa-2x fa-map-marker-alt" style="margin: 5px"></i> 
												    					Convertir en Geolocalizador 
												    			</label> &nbsp; &nbsp; 
												    			<input type="radio" name="type" value="2" id="teacher">		
												    		</li>

												    	@else

												    		<li style="display: inline-flex; padding:10px">
												    			<label for="admin"> 
												    				<i class="fa fa-diamond" style="margin: 5px"> </i> 
												    					<i class="far fa-gem"></i> Convertir en Administrador 
												    			</label> &nbsp; &nbsp; 
												    			<input type="radio" name="type" value="1" id="admin">	
												    		</li>									    		

												    	@endif

												    @endforeach

										    	</ul>							   
										  	</div>

									</div> <!-- Col-lg-12 -->
									

										<div class="row">
										<div class="col-lg-6">

											<div class="form-group">
											    <label for="name">Nombres Completos</label>
											    <div class="input-group">
											    	 <span class="input-group-addon"> <i class="fa fa-user"></i> </span>
											    	 <input type="text" class="form-control col-lg-9" id="name" name="name"  value="{{ $user->name }}" />
											    </div>								    
										  	</div>		

											<div class="form-group">
											    <label for="lastname">Apellidos Completos</label>
											    <div class="input-group">
											    	 <span class="input-group-addon"> <i class="fa fa-user"></i> </span>
											    	 <input type="text" class="form-control col-lg-9" id="lastname" name="lastname" value="{{ $user->lastname }}" />
											    </div>								    
										  	</div>

											<div class="form-group">
											    <label for="identity">Número Identificación</label>								    
											    <div class="input-group">
											    	 <span class="input-group-addon" id="identity"> <i class="fas fa-wrench"></i> </span>
											    	 <input type="text" class="form-control col-lg-6" id="identity" name="identity" value="{{ $user->identity }}" />
											    </div>								    								    
										  	</div>		


											<div class="form-group">
									    		<label for="genre">Género</label>
									    		
									    		<div id="genre">

									    			<button class="btn changeGenre " style="float:left;  margin: 4px 3px; padding: 2px 3px">
											    		<i class="fa fa-magic"></i>
											    	</button>

													<div class="input-group" style="float:left; margin-bottom: 25px; width: 90%" >							
														 <span class="input-group-addon" id="genre_i"> 
												    	 	<i class="fa @if($user->genre == "f") fa-venus @else fa-mars @endif "></i> 
												    	 </span>
												    	 <input type="text" class="form-control col-lg-7" 
												    	 		value="@if($user->genre == "f") Femenino @else Masculino @endif" />										
												    </div>
											   									   
											    </div>
											    

									    		<select class="form-control" name="genre" id="genre" style="display: none">
									    		  <option value=""> Selecciona alguno por favor </option>
												  <option value="m" >Masculino</option>
												  <option value="f">Femenino</option>									  
												</select>

									  		</div>


											<div class="form-group">
											    <label for="date"> Fecha de Nacimiento </label>								    
											    <div class="input-group">
											    	 <span class="input-group-addon" id="date"> <i class="fa fa-birthday-cake"></i> </span>
											    	 <input type="date" class="form-control col-lg-6" id="date" name="date"  value="{{ $user->date }}"  />
											    </div>								    								    
										  	</div>

										  									
										</div> <!-- Col-lg-6 -->
									
										
										<div class="col-lg-6">

											<div class="form-group">
											    <label for="age"> Edad </label>								    								    
											    <div class="input-group">
											    	 <span class="input-group-addon" id="age"> <i class="fa fa-tags"></i> </span>
											    	 <input type="text" class="form-control col-lg-3" id="age" name="age" value="{{ $user->age }}" />
											    	 <span class="input-group-addon" id="age"> años </span>
											    </div>								    								    
										  	</div>	

										  	<div class="form-group">
											    <label for="phone"> Teléfono Personal </label>    
											    <div class="input-group">
											    	 <span class="input-group-addon" id="phone"> <i class="fa fa-phone"></i> </span>
											    	 <input type="text" class="form-control col-lg-6" id="phone" name="phone" value="{{ $user->phone }}" /> 
											    </div>								    								    
										  	</div>	

										  	<div class="form-group">
											    <label for="email"> Email </label>    
											    <div class="input-group">
											    	 <span class="input-group-addon" id="email"> <i class="fa fa-universal-access"></i> </span>
											    	 <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}" /> 
											    </div>								    								    
										  	</div>

										  	<div class="form-group">
											    <label for="password"> Password </label>    
											    <div class="input-group">
											    	 <span class="input-group-addon" id="password"> <i class="fa fa-user-secret"></i> </span>
											    	 <input type="password" class="form-control" id="password" name="password" />
											    </div>								    								    
										  	</div>		

										</div>
										</div>

										<div class="form-group">
											<div class="col-lg-3">

												<button type="submit" class="btn btn-round btn-outline-warning" > 
													<i class="fa fa-user-plus"></i> Actualizar Usuario 
												</button>								  	

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


@endsection

@section('js')
	
	<script src="{{ asset('js/js_dashboard/cleave/dist/cleave.js') }}"></script>


	<script>
		
		$(document).ready( function() {										

			$("button .btn-primary, .changeGenre, .changeInstitution, .changeCommunity .btn").click(function (event){
				event.preventDefault();
			});

			$('i.fa-magic')

				.click(function (){
					$('div#rolAssign').fadeOut(2000);
			  		$('ul#assignRole').fadeIn(5000);
				});			

			$("button.changeGenre").click(function (){
				$("div#genre").hide();
				$("select#genre").fadeIn(2500);				
			});						

			new Cleave('input#identity', {			
				numeral: true,
	    		numeralDecimalMark: ',',
	    		delimiter: '.',
				numeralIntegerScale: 10				
			});

			/*new Cleave('input#date', {
				date: true,
				datePattern: ['d', 'm', 'Y']
			}); */

			new Cleave('input#age', {
				numeral: true,
				numeralIntegerScale: 2
			});

			new Cleave('input#phone', {
				blocks: [3, 3, 4],
				delimiters: ['-', '-', '-'],
				numeralIntegerScale: 10,			
				numericOnly: true
			});
						

		});

	</script>

@endsection