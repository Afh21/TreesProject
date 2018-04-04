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
                        <h4>Crear Árbol</h4>
                        <span>Sección para crear un árbol, para luego graficarlo en el Mapa.</span>
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
                        	<a href="{{ route('trees.index') }}">Arbolado</a>
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
                        <h5>Crear Árbol</h5>                                                        
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
                                                        
		            	<form action="{{route('trees.store')}}" method="POST">              
		            	{{ csrf_field() }}
		            	              
		            	<div class="col-lg-12">

		                <div class="row">
		                  
		                  <div class="col-lg-6">

		                      <div class="form-group">
		                        <label for="name">Nombre Científico: </label>
		                        <div class="input-group">                    
		                          <span class="input-group-addon"> <i class="fa fa-id-card"></i> </span>                    
		                          <input type="text" class="form-control col-lg-8" id="name" name="name" value="{{ old('name') }}" required="required">
		                        </div>
		                        <span class="red-text"> {{ $errors->TreeError->first('name') }} </span>
		                      </div>

		                      <div class="form-group">
		                        <label for="name">Nombre Común: </label>
		                        <div class="input-group">                    
		                          <span class="input-group-addon"> <i class="fa fa-id-card"></i> </span>                    
		                          <input type="text" class="form-control col-lg-8" id="name_comun" name="name_comun" value="{{ old('name_comun') }}" required="required">
		                        </div>
		                        <span class="red-text"> {{ $errors->TreeError->first('name_comun') }} </span>
		                      </div>
		                  
		                      <div class="form-group">
		                        <label for="local"> Localización: </label>
		                        <div class="input-group">
		                            <span class="input-group-addon"> <i class="fa fa-anchor"></i> </span>                    
		                            <select class="form-control col-lg-8" id="local" name="place">
		                              <option value="1">1. Andén </option>
		                              <option value="2">2. Parque  </option>
		                              <option value="3">3. Rivera  </option>
		                              <option value="4">4. Rio   </option>
		                              <option value="5">5. Antejardin</option>
		                              <option value="6">6. Separador </option>
		                              <option value="7">7. Borde Carretera </option>
		                              <option value="8">8. Ferrocaril    </option>
		                              <option value="9">9. Otro  </option>
		                            </select>  
		                        </div>
		                      </div>
		                  
		                      <div class="form-group">
		                        <label for="healt"> Estado de Vitalidad: </label>
		                          <div class="input-group">
		                            <span class="input-group-addon"><i class="fa fa-heartbeat"></i></span>
		                            <select class="form-control col-lg-8" id="healt" name="healt">
		                      			  <option value="1">1. Vivo y Sano	</option>
		                      			  <option value="2">2. Enfermo o Afectado Fisicamente	</option>
		                      			  <option value="3">3. Muerto	</option>			  
		              			        </select>
		                          </div>
		                      </div>
		          	  	
		                		  <div class="form-group">
		                        <label for="tall"> Altura Total (m): </label>
		                            <div class="input-group">
		                              <span class="input-group-addon"><i class="fas fa-arrows-alt-v"></i></span>
		                              <input type="text" class="form-control col-lg-7 detectarComa" id="tall" name="tall" value="{{ old('tall') }}" required="required">
		                              <span class="input-group-addon">m</span>
		                            </div> 
		                            <span class="red-text"> {{ $errors->TreeError->first('tall') }} </span>                       
		                      </div>
		                  
		                      <div class="form-group">
		                        <label for="tall_branch"> Altura Rama (m): </label>
		                          <div class="input-group">
		                            <span class="input-group-addon"><i class="fas fa-arrows-alt-v"></i></span>                          
		                            <input type="text" class="form-control col-lg-7 detectarComa" id="tall_branch" name="tall_branch" value="{{ old('tall_branch') }}" required="required">
		                            <span class="input-group-addon">m</span>  
		                          </div>
		                          <span class="red-text"> {{ $errors->TreeError->first('tall_branch') }} </span>
		                      </div>

		                  <div class="form-group">
		                    <label for="top"> % Pérdida de Copa: </label>
		                        <div class="input-group">
		                          <span class="input-group-addon"><i class="fa fa-leaf"></i></span>                          
		                          <input type="text" class="form-control col-lg-7 detectarComa" id="top" name="top"  value="{{ old('top') }}" required="required">
		                          <span class="input-group-addon">%</span>  
		                        </div>                    
		                        <span class="red-text"> {{ $errors->TreeError->first('top') }} </span>
		                  </div>  
		        		
		        		      <div class="form-group">
		                    <label for="shown"> Exposición de la Copa: </label>
		                      <div class="input-group">
		                        <span class="input-group-addon"><i class="fa fa-sort-up"></i></span>                          
		                        <input type="text" class="form-control col-lg-7 detectarComa" id="shown" name="shown" value="{{ old('shown') }}" required="required">
		                        <span class="input-group-addon">%</span>  
		                      </div>
		                      <span class="red-text"> {{ $errors->TreeError->first('shown') }} </span>
		                  </div>  

		        		      <div class="form-group">
		                    <label for="shadown"> Sombra de la Copa (m): </label>
		                      <div class="input-group">
		                        <span class="input-group-addon"><i class="fab fa-accusoft"></i></span>                          
		                        <input type="text" class="form-control col-lg-7 detectarComa" id="shadown" name="shadown" value="{{ old('shadown') }}" required="required">
		                        <span class="input-group-addon">m</span>
		                      </div>                                                          
		                      <span class="red-text"> {{ $errors->TreeError->first('shadown') }} </span>
		                  </div>  

		        		      <div class="form-group">
		                    <label for="perimeter"> Perímetro Cuello del Tronco (m): </label>
		                    <div class="input-group">
		                        <span class="input-group-addon"><i class="fas fa-angle-double-right"></i></span>                          
		                        <input type="text" class="form-control col-lg-7 detectarComa" id="perimeter" name="perimeter" value="{{ old('perimeter') }}" required="required">
		                        <span class="input-group-addon">m</span>  
		                    </div>                                                                              
		                    <span class="red-text"> {{ $errors->TreeError->first('perimeter') }} </span>
		                  </div>  

		        		      <div class="form-group">
		                    <label for="perimeter_chest"> Perímetro Altura del Pecho (m): </label>
		                    <div class="input-group">
		                        <span class="input-group-addon"><i class="fa fa-square"></i></span>                          
		                        <input type="text" class="form-control col-lg-7 detectarComa" id="perimeter_chest" name="perimeter_chest" value="{{ old('perimeter_chest') }}" required="required">
		                        <span class="input-group-addon">m</span>  
		                    </div>                                                                                                  
		                    <span class="red-text"> {{ $errors->TreeError->first('perimeter_chest') }} </span>
		                  </div>

		        		      <div class="form-group">
		                    <label for="numbers_trunk"> Número Troncos Presentes: </label>
		                    <div class="input-group">
		                        <span class="input-group-addon"><i class="fa fa-square"></i></span>                          
		                        <input type="text" class="form-control col-lg-7 detectarComa" id="numbers_trunk" name="numbers_trunk" value="{{ old('numbers_trunk') }}" required="required">
		                        <span class="input-group-addon">cant.</span>  
		                    </div>
		                    <span class="red-text"> {{ $errors->TreeError->first('numbers_trunk') }} </span>                                                                                                  
		                  </div>

		                  <div class="form-group">
		                    <label for="diameter_north"> Diámetro N - S Copa: </label>
		                    <div class="input-group">
		                        <span class="input-group-addon"><i class="fa fa-angle-down"></i></span>                          
		                        <input type="text" class="form-control col-lg-7 detectarComa" id="diameter_north" name="diameter_north"  value="{{ old('diameter_north') }}" required="required">
		                        <span class="input-group-addon"><i class="fa fa-angle-double-down"></i></span>  
		                    </div>
		                    <span class="red-text"> {{ $errors->TreeError->first('diameter_north') }} </span>                                                                                                                      
		                  </div>

		                  <div class="form-group">
		                    <label for="diameter_west"> Diámetro E - O Copa: </label>
		                    <div class="input-group">
		                        <span class="input-group-addon"><i class="fa fa-angle-right"></i></span>                          
		                        <input type="text" class="form-control col-lg-7 detectarComa" id="diameter_west" name="diameter_west" value="{{ old('diameter_west') }}" required="required">
		                        <span class="input-group-addon"><i class="fa fa-angle-double-right"></i></span>  
		                    </div>
		                    <span class="red-text"> {{ $errors->TreeError->first('diameter_west') }} </span>                     
		                  </div>

		                  <div class="form-group">
		                    <label for="branch_trunk"> % Ramas Respecto Tronco: </label>
		                    <div class="input-group">
		                        <span class="input-group-addon"><i class="fa fa-leaf"></i></span>                          
		                        <input type="text" class="form-control col-lg-7 detectarComa" id="branch_trunk" name="branch_trunk" value="{{ old('branch_trunk') }}" required="required">
		                        <span class="input-group-addon">%</span>  
		                    </div>
		                    <span class="red-text"> {{ $errors->TreeError->first('branch_trunk') }} </span>                     
		                    
		                  </div>

		                  <div class="form-group">
		                    <label for="nest"> ¿Presencia de Nidos? </label>
		                    <div class="input-group">
		                      <span class="input-group-addon"><i class="fa fa-spinner"></i></span>
		                        <select class="form-control col-lg-6" id="nest" name="nest">
		                  			  <option value="1">1. Ninguno	</option>
		                  			  <option value="2">2. Entre 1 & 2	</option>
		                  			  <option value="3">3. Entre 3 & 5	</option>			  
		                  			  <option value="4">4. Mayor a 5 </option>
		          			         </select>
		                     </div>
		                  </div>                               


		                  <div class="form-group">
		                    <label for="bats"> ¿Presencia de Muercielagos? </label>
		                    <div class="input-group">
		                      <span class="input-group-addon"><i class="fa fa-spinner"></i></span>
		                        <select class="form-control col-lg-6" id="bats" name="bats">
		                  			  <option value="1">1. Si	</option>
		                  			  <option value="2">2. No  </option>
		                  			</select>
		                      </div>
		                  </div>

		                  <div class="form-group">
		                    <label for="iguana"> ¿Presencia de Iguanas? </label>
		                    <div class="input-group">
		                      <span class="input-group-addon"><i class="fa fa-spinner"></i></span>
		                        <select class="form-control col-lg-6" id="iguana" name="iguana">
		                			   <option value="1">1. Si	</option>
		                			   <option value="2">2. No  </option>
		                			 </select>
		                    </div>
		                  </div>

		                  <div class="form-group">
		                    <label for="chipmunk"> ¿Presencia de Ardillas? </label>
		                    <div class="input-group">
		                      <span class="input-group-addon"><i class="fa fa-spinner"></i></span>
		                        <select class="form-control col-lg-6" id="chipmunk" name="chipmunk">
		        			             <option value="1">1. Si	</option>
		        			             <option value="2">2. No  </option>
		        			          </select>
		                      </div>
		                  </div>

		                  <div class="form-group">
		                    <label for="zariguella"> ¿Presencia de Zariguellas? </label>
		                    <div class="input-group">
		                      <span class="input-group-addon"><i class="fa fa-spinner"></i></span>
		                        <select class="form-control col-lg-6" id="zariguella" name="zariguella">
		                  			  <option value="1">1. Si	</option>
		                  			  <option value="2">2. No  </option>
		        			          </select>
		                    </div>
		                  </div>

		                  <div class="form-group">
		                    <label for="nest_insect"> ¿Presencia de Nidos de Insectos? </label>
		                    <div class="input-group">
		                      <span class="input-group-addon"><i class="fa fa-spinner"></i></span>
		                        <select class="form-control col-lg-6" id="nest_insect" name="nest_insect">
		                			     <option value="1">1. Si	</option>
		                			     <option value="2">2. No  </option>
		                			</select>
		                    </div>
		                  </div>

		                  <div class="form-group">
		                    <label for="dove"> ¿Presencia de Palomas? </label>
		                    <div class="input-group">
		                      <span class="input-group-addon"><i class="fa fa-spinner"></i></span>
		                        <select class="form-control col-lg-6" id="dove" name="dove">
		                			    <option value="1">1. Si	</option>
		                			    <option value="2">2. No  </option>
		                			</select>
		                    </div>
		                  </div>

		                  <div class="form-group">
		                    <label for="ants"> ¿Presencia de Hormigas Arrieras? </label>
		                    <div class="input-group">
		                      <span class="input-group-addon"><i class="fa fa-spinner"></i></span>
		                        <select class="form-control col-lg-6" id="ants" name="ants">
		                  			  <option value="1">1. Si	</option>
		                  			  <option value="2">2. No  </option>
		                  			</select>
		                      </div>
		                  </div>

		                  <div class="form-group">
		                    <label for="root_tree"> % Raiz Expuesta </label>
		                    <div class="input-group">
		                      <span class="input-group-addon"><i class="fa fa-chess-pawn "></i></span>
		                        <select class="form-control col-lg-6" id="root_tree" name="root_tree">
		                  			  <option value="1">1. Entre 0  & 25  </option>
		                  			  <option value="2">2. Entre 25 & 50 </option>
		                  			  <option value="3">3. Entre 50 & 75 </option>
		                  			  <option value="4">4. Mayor 75 </option>
		                  			</select>
		                    </div>
		                  </div>

		                  <div class="form-group">
		                    <label for="trunk_distorted"> % Tronco Torcido </label>
		                    <div class="input-group">
		                      <span class="input-group-addon"><i class="fa fa-compass"></i></span>
		                        <select class="form-control col-lg-6" id="trunk_distorted" name="trunk_distorted">
		                  			  <option value="1">1. Entre 0  & 25  </option>
		                  			  <option value="2">2. Entre 25 & 50 </option>
		                  			  <option value="3">3. Entre 50 & 75 </option>
		                  			  <option value="4">4. Mayor 75 </option>
		                  			</select>
		                    </div>
		                  </div>          
		        		
		              
		              </div> <!-- Finalizacion primer conjunto de inputs -->



		        		  <div class="col-lg-6"> <!-- Segundo conjunto de inputs -->
		              
		                    <div class="form-group">
		                      <label for="angle_tree"> Inclinación del Árbol: </label>
		                      <div class="input-group">
		                        <span class="input-group-addon"><i class="fa fa-angle-down"></i></span>
		                        <input type="text" class="form-control col-lg-7 detectarComa" id="angle_tree" name="angle_tree" value="{{ old('angle_tree') }}" required="required">
		                      </div>
		                      <span class="red-text"> {{ $errors->TreeError->first('angle_tree') }} </span>
		                    </div>

		                    <div class="form-group">
		                      <label for="branch_dry"> Ramas Secas </label>
		                      <div class="input-group">
		                        <span class="input-group-addon"><i class="fa fa-percent"></i></span>
		                        <select class="form-control  col-lg-7" id="branch_dry" name="branch_dry">
		                          <option value="1">1. Entre 0  & 25  </option>
		                          <option value="2">2. Entre 25 & 50 </option>
		                          <option value="3">3. Entre 50 & 75 </option>
		                          <option value="4">4. Mayor 75 </option>
		                        </select>
		                      </div>
		                    </div>

		                                      

		                    <div class="form-group">
		                      <label for="root_healt"> Raiz con Plaga o Enfermedades </label>
		                      <div class="input-group">
		                        <span class="input-group-addon"><i class="fa fa-percent"></i></span>
		                        <select class="form-control  col-lg-7" id="root_healt" name="root_healt">
		                          <option value="1">1. Entre 0  & 25  </option>
		                          <option value="2">2. Entre 25 & 50 </option>
		                          <option value="3">3. Entre 50 & 75 </option>
		                          <option value="4">4. Mayor 75 </option>
		                        </select>
		                      </div>
		                    </div>

		                    <div class="form-group">
		                      <label for="trunk_healt"> Tronco Plaga o Enfermedades </label>
		                      <div class="input-group">
		                        <span class="input-group-addon"><i class="fa fa-percent"></i></span>
		                        <select class="form-control  col-lg-7" id="trunk_healt" name="trunk_healt">
		                          <option value="1">1. Entre 0  & 25  </option>
		                          <option value="2">2. Entre 25 & 50 </option>
		                          <option value="3">3. Entre 50 & 75 </option>
		                          <option value="4">4. Mayor 75 </option>
		                        </select>
		                      </div>
		                    </div>

		                    <div class="form-group">
		                      <label for="cup_healt"> Copa Plaga o Enfermedades </label>
		                      <div class="input-group">
		                        <span class="input-group-addon"><i class="fa fa-percent"></i></span>
		                        <select class="form-control  col-lg-7" id="cup_healt" name="cup_healt">
		                          <option value="1">1. Entre 0  & 25  </option>
		                          <option value="2">2. Entre 25 & 50 </option>
		                          <option value="3">3. Entre 50 & 75 </option>
		                          <option value="4">4. Mayor 75 </option>
		                        </select>
		                      </div>
		                    </div>          

		                    <div class="form-group">
		                      <label for="root_wounds"> Heridas en Raices </label>
		                      <div class="input-group">
		                        <span class="input-group-addon"><i class="fa fa-medkit"></i></span>
		                        <select class="form-control  col-lg-7" id="root_wounds" name="root_wounds">
		                          <option value="1">1. Entre 0  & 25  </option>
		                          <option value="2">2. Entre 25 & 50 </option>
		                          <option value="3">3. Entre 50 & 75 </option>
		                          <option value="4">4. Mayor 75 </option>
		                        </select>
		                      </div>
		                    </div>          

		                    <div class="form-group">
		                      <label for="steam_wounds"> Heridas en Tallo </label>
		                      <div class="input-group">
		                        <span class="input-group-addon"><i class="fa fa-medkit"></i></span>
		                        <select class="form-control  col-lg-7" id="steam_wounds" name="steam_wounds">
		                          <option value="1">1. Entre 0  & 25  </option>
		                          <option value="2">2. Entre 25 & 50 </option>
		                          <option value="3">3. Entre 50 & 75 </option>
		                          <option value="4">4. Mayor 75 </option>
		                        </select>
		                      </div>
		                    </div>          

		                    <div class="form-group">
		                      <label for="steam_wounds"> Heridas en Ramas </label>
		                      <div class="input-group">
		                        <span class="input-group-addon"><i class="fa fa-medkit"></i></span>
		                        <select class="form-control  col-lg-7" id="steam_wounds" name="branch_wounds">
		                          <option value="1">1. Entre 0  & 25  </option>
		                          <option value="2">2. Entre 25 & 50 </option>
		                          <option value="3">3. Entre 50 & 75 </option>
		                          <option value="4">4. Mayor 75 </option>
		                        </select>                        
		                      </div>
		                    </div>          

		                    <div class="form-group">
		                      <label for="cut_tecnic"> Podas Anti-Tecnicas </label>
		                      <div class="input-group">
		                        <span class="input-group-addon"><i class="fa fa-cut"></i></span>
		                        <select class="form-control  col-lg-7" id="cut_tecnic" name="cut_tecnic">
		                          <option value="1">1. Entre 0  & 25  </option>
		                          <option value="2">2. Entre 25 & 50 </option>
		                          <option value="3">3. Entre 50 & 75 </option>
		                          <option value="4">4. Mayor 75 </option>
		                        </select>
		                      </div>
		                    </div>

		                    <div class="form-group">
		                      <label for="trunk_wounds"> Termita en Tronco </label>
		                      <div class="input-group">
		                        <span class="input-group-addon"><i class="fa fa-percent"></i></span>
		                        <select class="form-control  col-lg-7" id="trunk_wounds" name="trunk_wounds">
		                          <option value="1">1. Entre 0  & 25  </option>
		                          <option value="2">2. Entre 25 & 50 </option>
		                          <option value="3">3. Entre 50 & 75 </option>
		                          <option value="4">4. Mayor 75 </option>
		                        </select>
		                      </div>
		                    </div> 

		                    <div class="form-group">
		                      <label for="parasite"> Pajarita (Parásitos, Injerto) </label>
		                      <div class="input-group">
		                        <span class="input-group-addon"><i class="fa fa-percent"></i></span>
		                        <select class="form-control  col-lg-7" id="parasite" name="parasite">
		                          <option value="1">1. Entre 0  & 25  </option>
		                          <option value="2">2. Entre 25 & 50 </option>
		                          <option value="3">3. Entre 50 & 75 </option>
		                          <option value="4">4. Mayor 75 </option>
		                        </select>
		                      </div>
		                    </div>          

		                    <div class="form-group">
		                      <label for="cup_land"> Bajo Copa en Tierra </label>
		                      <div class="input-group">
		                        <span class="input-group-addon"><i class="fa fa-percent"></i></span>
		                        <input type="text" class="form-control  col-lg-7 detectarComa" id="cup_land" name="cup_land"  value="{{ old('cup_land') }}" required="required">
		                      </div>
		                      <span class="red-text"> {{ $errors->TreeError->first('cup_land') }} </span>
		                    </div>

		                    <div class="form-group">
		                      <label for="cup_floor"> Bajo Copa en Pasto </label>
		                      <div class="input-group">
		                        <span class="input-group-addon"><i class="fa fa-percent"></i></span>
		                        <input type="text" class="form-control  col-lg-7 detectarComa" id="cup_floor" name="cup_floor"  value="{{ old('cup_floor') }}" required="required">
		                      </div>
		                      <span class="red-text"> {{ $errors->TreeError->first('cup_floor') }} </span>
		                    </div>

		                    <div class="form-group">
		                      <label for="cup_bush"> Bajo Copa en Arbustos </label>
		                      <div class="input-group">
		                        <span class="input-group-addon"><i class="fa fa-percent"></i></span>
		                        <input type="text" class="form-control  col-lg-7 detectarComa" id="cup_bush" name="cup_bush"  value="{{ old('cup_bush') }}" required="required">
		                      </div>
		                      <span class="red-text"> {{ $errors->TreeError->first('cup_bush') }} </span>
		                    </div>

		                    <div class="form-group">
		                      <label for="cup_pavement"> Bajo Copa en Pavimento </label>
		                      <div class="input-group">
		                        <span class="input-group-addon"><i class="fa fa-percent"></i></span>
		                        <input type="text" class="form-control  col-lg-7 detectarComa" id="cup_pavement" name="cup_pavement"  value="{{ old('cup_pavement') }}" required="required">
		                      </div>
		                      <span class="red-text"> {{ $errors->TreeError->first('cup_pavement') }} </span>
		                    </div>

		                    <div class="form-group">
		                      <label for="structure_floor"> Conflicto Actual Infraest. en Suelo </label>
		                      <div class="input-group">
		                        <span class="input-group-addon"><i class="fa fa-home"></i></span>
		                        <select class="form-control  col-lg-7" id="structure_floor" name="structure_floor">
		                          <option value="1">1. No existente o Sin evidencia </option>
		                          <option value="2">2. Moderado, en contacto con infraest. sin afectación</option>
		                          <option value="3">3. Severo, pisos levantadas o cuarteados </option>         
		                        </select>
		                      </div>
		                    </div>          

		                    <div class="form-group">
		                      <label for="infraestructure_private"> Conflicto Actual Infraest. Privada Fachadas o Techos </label>
		                      <div class="input-group">
		                        <span class="input-group-addon"><i class="fa fa-home"></i></span>
		                        <select class="form-control  col-lg-7" id="infraestructure_private" name="infraestructure_private">
		                          <option value="1">1. No existente o Sin evidencia </option>
		                          <option value="2">2. Moderado, en contacto con infraest. sin afectación</option>
		                          <option value="3">3. Severo, Paredes o Techos afectados </option>          
		                        </select>
		                      </div>
		                    </div>          

		                    <div class="form-group">
		                      <label for="infraestructure_public"> Conflicto Actual Infraest. Publica </label>
		                      <div class="input-group">
		                        <span class="input-group-addon"><i class="fa fa-home"></i></span>
		                        <select class="form-control  col-lg-7" id="infraestructure_public" name="infraestructure_public">
		                          <option value="1">1. No existente o Sin evidencia </option>
		                          <option value="2">2. Moderado, en contacto con infraest. sin afectación</option>
		                          <option value="3">3. Severo, Paredes o Techos afectados </option>          
		                        </select>
		                      </div>
		                    </div>          

		                    <div class="form-group">
		                      <label for="cable_light"> Conflicto Actual Cuerdas de Luz </label>
		                      <div class="input-group">
		                        <span class="input-group-addon"><i class="fa fa-exchange-alt"></i></span>
		                        <select class="form-control  col-lg-7" id="cable_light" name="cable_light">
		                          <option value="1">1. No existente o Sin evidencia </option>
		                          <option value="2">2. Moderado, en contacto con infraest. sin afectación</option>
		                          <option value="3">3. Severo, las cuerdas de luz estan entre las ramas </option>          
		                        </select>
		                      </div>
		                    </div>          

		                    <div class="form-group">
		                      <label for="distance_gas"> Distancia Tubería Gas a Raíces </label>
		                      <div class="input-group">
		                        <span class="input-group-addon"><i class="fa fa-fire"></i></span>
		                        <input type="text" class="form-control  col-lg-7 detectarComa" id="distance_gas" name="distance_gas"  value="{{ old('distance_gas') }}" required="required">
		                      </div>
		                      <span class="red-text"> {{ $errors->TreeError->first('distance_gas') }} </span>
		                    </div>

		                    <div class="form-group">
		                      <label for="distance_floor"> Distancia Infraestructura Piso a Tronco </label>
		                      <div class="input-group">
		                        <span class="input-group-addon"><i class="fa fa-angle-down"></i></span>
		                        <input type="text" class="form-control  col-lg-7 detectarComa" id="distance_floor" name="distance_floor" value="{{ old('distance_floor') }}" required="required">
		                      </div>
		                      <span class="red-text"> {{ $errors->TreeError->first('distance_floor') }} </span>
		                    </div>

		                    <div class="form-group">
		                      <label for="distance_wall"> Distancia Infraestructura Paredes o Techos </label>
		                      <div class="input-group">
		                        <span class="input-group-addon"><i class="fa fa-angle-up"></i></span>
		                        <input type="text" class="form-control  col-lg-7 detectarComa" id="distance_wall" name="distance_wall" value="{{ old('distance_wall') }}" required="required">
		                      </div>
		                      <span class="red-text"> {{ $errors->TreeError->first('distance_wall') }} </span>
		                    </div>

		                    <div class="form-group">
		                      <label for="distance_horizontal"> Distancia Horizontal Cuerdas a Ramas </label>
		                      <div class="input-group">
		                        <span class="input-group-addon"><i class="fa fa-angle-right"></i></span>
		                        <input type="text" class="form-control  col-lg-6 detectarComa " id="distance_horizontal" name="distance_horizontal" value="{{ old('distance_horizontal') }}" required="required">
		                        <span class="input-group-addon"><i class="fa fa-angle-right"></i></span>
		                      </div>
		                      <span class="red-text"> {{ $errors->TreeError->first('distance_horizontal') }} </span>
		                    </div>

		                    <div class="form-group">
		                      <label for="distance_vertical"> Distancia Vertical Cuerdas a Ramas </label>
		                      <div class="input-group">
		                        <span class="input-group-addon"><i class="fa fa-angle-up"></i></span>
		                        <input type="text" class="form-control  col-lg-6 detectarComa" id="distance_vertical" name="distance_vertical" value="{{ old('distance_vertical') }}" required="required">
		                        <span class="input-group-addon"><i class="fa fa-angle-up"></i></span>
		                      </div>
		                      <span class="red-text"> {{ $errors->TreeError->first('distance_vertical') }} </span>
		                    </div>

		                    <div class="col-lg-12">                      
		                        <div class="row">
		                                                  
		                        <div class="col-lg-6"> 
		                      
		                        <label for="latitud"> Latitud </label>                        
		                        <div class="input-group">
		                          <span class="input-group-addon"><i class="fa fa-map-marker-alt"></i></span>
		                          <input type="text" class="form-control  col-lg-9 detectarComa" id="latitud" name="latitud" value="{{ old('latitud') }}" required="required">
		                        </div>
		                        <span class="red-text"> {{ $errors->TreeError->first('latitud') }} </span>  
		                      </div>
		                        

		                        <div class="col-lg-6"> 
		                          <label for="longitud"> Longitud </label>
		                          <div class="input-group">
		                            <span class="input-group-addon"><i class="fa fa-map-marker-alt"></i></span>
		                            <input type="text" class="form-control  col-lg-9 detectarComa" id="longitud" name="longitud" value="{{ old('longitud') }}" required="required">
		                          </div>
		                          <span class="red-text"> {{ $errors->TreeError->first('longitud') }} </span>
		                        </div>  

		                      </div>
		                    </div>                

		              </div> <!-- fin segundo conjunto de inputs -->  		  
		        			
		              </div> <!-- fin div-col-lg-12 -->

		              </div>
		        	
		              <div class="col-lg-2">
		                  <button type="submit" class="btn btn-success btn-md btn-round"> 
		                  	<i class="fa fa-tree"> </i> &nbsp; Crear Árbol</button>
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

  <script>
    
      $(document).ready(function () {
      
        $('.detectarComa').keyup((e)=>{

			let v = $(e.currentTarget).val();        						

			if( v.indexOf(',') != -1 ){
				//alert("Hay una (,) , Por favor quítela y ponga un (.). Gracias");
				v = v.replace(',', '.')
				$(e.currentTarget).val(v);   
			}
    	})		

      });

  </script>

@endsection