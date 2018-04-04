@extends('dashboard.lite.index')

@section('content')

	<style>
		
	</style>


	<div class="row">

		<div class="col-lg-12">
			<div class="card">
				<div class="card-block">
					
					<h2 class="card-title text-center"> 
						Actualizar Usuario <i class="fa fa-pencil"></i> 						
					</h2>
					
					
					<div class="row">												
								
						<div class="col-lg-12">

								<form action="{{ route('user.update', ['user' => $user->id]) }}" method="POST" name="form">		
								{{ method_field('PUT') }}
								<input type="hidden" name="_token" value="{{ csrf_token() }}">

					
								<div class="text-center">
								    	
								<div class="col-lg-12 text-center" id="rolAssign">

									@foreach($user->roles as $rol)
									
										@if($rol->slug == "administrator") 
											<button class="btn btn-success"> 
												<i class="fa fa-diamond"></i> Administrador 
											</button> &nbsp; &nbsp; <i class="fa fa-magic"></i> 

											<br><br>

										@elseif($rol->slug == 'geolocator')
											<button class="btn btn-warning"> 
												<i class="fa fa-suitcase"></i> Geolocalizador 
											</button> &nbsp; &nbsp; <i class="fa fa-magic"></i> 
											<br><br>

										@else
											<button class="btn btn-danger previous" data-value="student"> 
												<i class="fa fa-graduation"></i> Invitado 
											</button> &nbsp; &nbsp; <i class="fa fa-magic"></i> 
											
											<br><br>
										@endif

								    @endforeach									

								</div>								    								    
								    

							    	<ul id="assignRole" style="list-style-type: none; display: none; margin-top: 10px; ">
							    		
							    		@foreach($user->roles as $rol)

								    		@if($rol->slug == "administrator")
												
												<li style="display: inline-flex; padding:10px">
									    			<label for="teacher"> 
									    				<i class="fa fa-map-marker" style="margin: 5px"></i> 
									    					Geolocalizador 
									    			</label> &nbsp; &nbsp; 
									    			<input type="radio" name="type" value="2" id="teacher">		
									    		</li>

									    	@else

									    		<li style="display: inline-flex; padding:10px">
									    			<label for="admin"> 
									    				<i class="fa fa-diamond" style="margin: 5px"> </i> 
									    					Administrador 
									    			</label> &nbsp; &nbsp; 
									    			<input type="radio" name="type" value="1" id="admin">	
									    		</li>									    		

									    	@endif

									    @endforeach

							    	</ul>							   
							  	</div>

						</div> <!-- Col-lg-12 -->


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
								    	 <span class="input-group-addon" id="identity"> <i class="fa fa-vcard-o"></i> </span>
								    	 <input type="text" class="form-control col-lg-6" id="identity" name="identity" value="{{ $user->identity }}" />
								    </div>								    								    
							  	</div>		


								<div class="form-group">
						    		<label for="genre">Género</label>
						    		
						    		<div id="genre">

						    			<button class="btn btn-float changeGenre" style="float:left;  margin: 4px 3px; padding: 2px 3px">
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

							<div class="form-group">
								<div class="col-lg-3">

									<button type="submit" class="btn btn-default" style="border-color: #5cb3fd;"> 
										<i class="fa fa-user-plus"></i> Actualizar Usuario 
									</button>								  	

								</div>								
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

			checkStudent();

			$("button .btn-primary, .changeGenre, .changeInstitution, .changeCommunity ").click(function (event){
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

			$("button.changeInstitution").click(function () {
				$("div#institution").hide();

				$("div#selectInstitution").show("true", function(){
					$("select.select2").select2({
						placeholder: "Busque una institucion educativa",  				
					});

				});
			});

			$("button.changeCommunity").click(function(){
				$("div#community").hide();
				
				$("div#selectCommunity").show("true", function () {
					$("select.community").select2({
						placeholder: "Escoga alguna opción",  				
					});
				});
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

			new Cleave('input#parents_1_phone', {
				blocks: [3, 3, 4],
				delimiters: ['-', '-', '-'],
				numeralIntegerScale: 10,			
				numericOnly: true
			});

			new Cleave('input#parents_2_phone', {
				blocks: [3, 3, 4],
				delimiters: ['-', '-', '-'],
				numeralIntegerScale: 10,			
				numericOnly: true
			});								

			$(" :radio[id=studentList]").click(function (){			
				$("select.select2").removeAttr("disabled");
				$("input#parents_1").removeAttr("disabled");
				$("input#parents_1_phone").removeAttr("disabled");
				$("input#parents_2").removeAttr("disabled");
				$("input#parents_2_phone").removeAttr("disabled");
				$("input#eps").removeAttr("disabled");
				$("input#parents_1").removeAttr("disabled");
				$("select#community").removeAttr("disabled");								
				$("button.changeCommunity").removeAttr("disabled");				
				$("button.changeInstitution").removeAttr("disabled");
			});


			$(" :radio[id=teacher] , :radio[id=admin]").click(function () {
				disabledAndHideFields();
			});

			$("")

			function disabledAndHideFields(){
				$("select.select2").attr("disabled", true);
				$("input#parents_1").attr("disabled", true);
				$("input#parents_1_phone").attr("disabled", true);
				$("input#parents_2").attr("disabled", true);
				$("input#parents_2_phone").attr("disabled", true);
				$("input#eps").attr("disabled", true);
				$("input#parents_1").attr("disabled", true);
				$("select#community").attr("disabled", true);				
			}

			

			/*function checkStudent(){
				var b = $(".previous").attr('data-value');
				
				if( b == "student" ) { 
						
				}
			}*/


		});

	</script>

@endsection

