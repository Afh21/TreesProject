@extends('dashboard.lite.index')

@section('content')
	
	<div class="row">

		<div class="col-lg-12">
			<div class="card">
				<div class="card-block">
					
					<h2 class="card-title text-center"> Crear Usuario <i class="fa fa-user-plus"></i> </h2>
					<br><br>
				
								
						<div class="col-lg-12">

								<form action="{{ route('user.store') }}" method="POST" >	
								<input type="hidden" name="_token" value="{{ csrf_token() }}">

					
								<div class="text-center">
								    
								    <h3 class="text-center"> ..: Tipo Usuario :.. </h3> 
								    
							    	<ul style="list-style-type: none" >
							    		
							    		<li style="display: inline-flex; padding:10px">
							    			<label for="admin"> <i class="fa fa-diamond" style="margin: 5px"> </i> Administrador </label>
							    			&nbsp; &nbsp;<input type="radio" name="type" value="1" checked id="admin">	
							    		</li>
							    		
							    		<li style="display: inline-flex; padding:10px">
							    			<label for="teacher"> 
							    				<i class="fa fa-suitcase" style="margin: 5px"> </i> Geolocalizador </label>
							    				&nbsp; &nbsp;<input type="radio" name="type" value="2" id="teacher">			
							    		</li>

							    	</ul>							   
							  	</div>
							  	
								
								<div class="row">

								<div class="col-lg-6">

									<div class="form-group">
									    <label for="name">Nombres Completos</label>
									    <div class="input-group">
									    	 <span class="input-group-addon"> <i class="fa fa-user"></i> </span>
									    	 <input type="text" class="form-control col-lg-9" id="name" name="name"  />
									    </div>								    
								  	</div>							  									

									<div class="form-group">
									    <label for="lastname">Apellidos Completos</label>
									    <div class="input-group">
									    	 <span class="input-group-addon"> <i class="fa fa-user"></i> </span>
									    	 <input type="text" class="form-control col-lg-9" id="lastname" name="lastname"  />
									    </div>								    
								  	</div>

									<div class="form-group">
									    <label for="identity">Número Identificación</label>								    
									    <div class="input-group">
									    	 <span class="input-group-addon" id="identity"> <i class="fa fa-vcard-o"></i> </span>
									    	 <input type="text" class="form-control col-lg-6" id="identity" name="identity"  />
									    </div>								    								    
								  	</div>		


									<div class="form-group">
							    		<label for="genre">Género</label> <br>
							    		<div style="margin-left: 20px">
							    			Femenino <input type="radio" value="f" name="genre"> &nbsp; &nbsp;
							    			Masculino <input type="radio" value="m" name="genre">	
							    		</div>							    
							  		</div>


									<div class="form-group">
									    <label for="date"> Fecha de Nacimiento </label>								    
									    <div class="input-group ">
									    	 <span class="input-group-addon" id="date"> 
									    	 	<i class="fa fa-birthday-cake"></i> </span>
									    	 <input type="date" class="form-control col-lg-6" id="date" placeholder="y / m / d" name="date"   />
									    </div>								    								    
								  	</div>

								</div>

							  	<div class="col-lg-6">

							  		<div class="form-group">
									   	<label for="age"> Edad </label>	    
									    <div class="input-group">
									    	 <span class="input-group-addon" id="age"> <i class="fa fa-tags"></i> </span>
									    	 <input type="text" class="form-control col-lg-3" id="age" name="age" />
									    	 <span class="input-group-addon" id="age"> años </span>
									    </div>							    
							  		</div>	

								  	<div class="form-group">
									    <label for="phone"> Teléfono </label>    
									    <div class="input-group">
									    	 <span class="input-group-addon" id="phone"> 
									    	 	<i class="fa fa-phone"></i> </span>
									    	 <input type="text" class="form-control col-lg-6" id="phone" placeholder="" name="phone" /> 
									    </div>								    								    
								  	</div>	

								  	<div class="form-group">
									    <label for="email"> Email </label>    
									    <div class="input-group">
									    	 <span class="input-group-addon" id="email"> 
									    	 	<i class="fa fa-universal-access"></i> </span>
									    	 <input type="email" class="form-control" id="email" placeholder="" name="email" /> 
									    </div>								    								    
								  	</div>

							  	<div class="form-group">
								    <label for="password"> Password </label>    
								    <div class="input-group">
								    	 <span class="input-group-addon" id="password"> 
								    	 	<i class="fa fa-user-secret"></i> </span>
								    	 <input type="password" class="form-control" id="password" name="password" />
								    </div>								    								    
							  	</div>		

							  	
							</div>

							 </div>
							  	
						  	<div class="form-group">								
								<button type="submit" class="btn btn-default" style="border-color: #5cb3fd;"> 
									<i class="fa fa-user-plus"></i> Crear Usuario 
								</button>								  								
							</div>	

							</form>

								
														

						</div> <!-- Row -->
								
					</div> <!--  Card-block -->
												
				</div> <!-- Card -->
			</div>
		</div>
	</div>
	
@endsection



@section('js')
	
	<script src="{{ asset('js/js_dashboard/cleave/dist/cleave.js') }}"></script>


	<script>
		
		$(document).ready( function() {							

			new Cleave('input#identity', {			
				numeral: true,
	    		numeralDecimalMark: ',',
	    		delimiter: '.',
				numeralIntegerScale: 10				
			});

			/*new Cleave('input#date', {
				date: true,
				datePattern: ['d', 'm', 'Y']
			});*/

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

