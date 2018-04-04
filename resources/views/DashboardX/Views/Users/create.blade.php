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
	                                <h4>Crear Usuario</h4>
	                                <span>Aquí podrás crear solo usuario Administradores ó Geolocalizadores.</span>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-lg-4">
	                        <div class="page-header-breadcrumb">
	                            <ul class="breadcrumb-title">
	                                <li class="breadcrumb-item">                                                            
	                                    <i class="icofont icofont-home"></i>                     
	                                </li>
	                                <li class="breadcrumb-item">
	                                	<a href="{{ route('dashboard.index') }}">Dashboard</a>
	                                </li>
	                                <li class="breadcrumb-item">
	                                	<a href="{{ route('user.index') }}">Usuarios</a>
	                                </li>
	                                <li class="breadcrumb-item">
	                                	Crear
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
	                            	<form action="{{ route('user.store') }}" method="POST" >	
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
							
										<div class="text-center">									    
										    <h3 class="text-center"> ¿ Usuario a crear ? </h3> 									    
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
											    	 <input type="text" class="form-control col-lg-9" id="name" name="name" required="" />
											    </div>								    
										  	</div>							  									

											<div class="form-group">
											    <label for="lastname">Apellidos Completos</label>
											    <div class="input-group">
											    	 <span class="input-group-addon"> <i class="fa fa-user"></i> </span>
											    	 <input type="text" class="form-control col-lg-9" id="lastname" name="lastname" required="" />
											    </div>								    
										  	</div>

											<div class="form-group">
											    <label for="identity">Número Identificación</label>								    
											    <div class="input-group">
											    	 <span class="input-group-addon" id="identity"> <i class="fas fa-wrench"></i></span>
											    	 <input type="text" class="form-control col-lg-6" id="identity" name="identity" required="" />
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
											    	 <input type="date" class="form-control col-lg-6" id="date" placeholder="y / m / d" name="date"  required="" />
											    </div>								    								    
										  	</div>

										</div>

									  	<div class="col-lg-6">

									  		<div class="form-group">
											   	<label for="age"> Edad </label>	    
											    <div class="input-group">
											    	 <span class="input-group-addon" id="age"> <i class="fa fa-tags"></i> </span>
											    	 <input type="text" class="form-control col-lg-3" id="age" name="age" required=""/>
											    	 <span class="input-group-addon" id="age"> años </span>
											    </div>							    
									  		</div>	

										  	<div class="form-group">
											    <label for="phone"> Teléfono </label>    
											    <div class="input-group">
											    	 <span class="input-group-addon" id="phone"> 
											    	 	<i class="fa fa-phone"></i> </span>
											    	 <input type="text" class="form-control col-lg-6" id="phone" placeholder="" name="phone" required=""/> 
											    </div>								    								    
										  	</div>	

										  	<div class="form-group">
											    <label for="email"> Email </label>    
											    <div class="input-group">
											    	 <span class="input-group-addon" id="email"> 
											    	 	<i class="fa fa-universal-access"></i> </span>
											    	 <input type="email" class="form-control" id="email" placeholder="" name="email" required=""/> 
											    </div>								    								    
										  	</div>

									  	<div class="form-group">
										    <label for="password"> Password </label>    
										    <div class="input-group">
										    	 <span class="input-group-addon" id="password"> 
										    	 	<i class="fa fa-user-secret"></i> </span>
										    	 <input type="password" class="form-control" id="password" name="password" required=""/>
										    </div>								    								    
									  	</div>		

									  	
									</div>

									 </div>
									  	
								  	<div class="form-group">								
										<button type="submit" class="btn btn-round btn-outline-primary" style="border-color: #5cb3fd;"> 
											<i class="fa fa-user-plus"></i> Crear Usuario 
										</button>								  								
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

@endsection()                  
