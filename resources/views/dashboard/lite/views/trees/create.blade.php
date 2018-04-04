@extends('dashboard.lite.index')

@section('content')
	<style>
    .red-text { color: red; font-weight: thin; font-size: 0.55em }  
  </style>


  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-block">

      	   <h3> <i class="fa fa-map-marker"></i> &nbsp; Crear Árbol </h3> <br>

          	 <form action="{{route('trees.store')}}" method="POST">              
            	{{ csrf_field() }}
            	              
            	<div class="col-lg-12">

                <div class="row">
                  
                  <div class="col-lg-6">

                      <div class="form-group">
                        <label for="name">Nombre Científico: </label>
                        <div class="input-group">                    
                          <span class="input-group-addon"> <i class="fa fa-id-card"></i> </span>                    
                          <input type="text" class="form-control col-lg-8" id="name" name="name" value="{{ old('name') }}">
                        </div>
                        <span class="red-text"> {{ $errors->TreeError->first('name') }} </span>
                      </div>

                      <div class="form-group">
                        <label for="name">Nombre Común: </label>
                        <div class="input-group">                    
                          <span class="input-group-addon"> <i class="fa fa-id-card"></i> </span>                    
                          <input type="text" class="form-control col-lg-8" id="name_comun" name="name_comun" value="{{ old('name_comun') }}">
                        </div>
                        <span class="red-text"> {{ $errors->TreeError->first('name_comun') }} </span>
                      </div>
                  
                      <div class="form-group">
                        <label for="local"> Localización: </label>
                        <div class="input-group">
                            <span class="input-group-addon"> <i class="fa fa-anchor"></i> </span>                    
                            <select class="form-control col-lg-8" id="local" name="place">
                              <option value="1">Andén </option>
                              <option value="2">Parque  </option>
                              <option value="3">Rivera  </option>
                              <option value="4">Rio   </option>
                              <option value="5">Antejardin</option>
                              <option value="6">Separador </option>
                              <option value="7">Borde Carretera </option>
                              <option value="8">Ferrocaril    </option>
                              <option value="9">Otro  </option>
                            </select>  
                        </div>
                      </div>
                  
                      <div class="form-group">
                        <label for="healt"> Estado de Vitalidad: </label>
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-heartbeat"></i></span>
                            <select class="form-control col-lg-8" id="healt" name="healt">
                      			  <option value="1">Vivo y Sano	</option>
                      			  <option value="2">Enfermo o Afectado Fisicamente	</option>
                      			  <option value="3">Muerto	</option>			  
              			        </select>
                          </div>
                      </div>
          	  	
                		  <div class="form-group">
                        <label for="tall"> Altura Total (mts): </label>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-arrows-v"></i></span>
                              <input type="text" class="form-control col-lg-7" id="tall" name="tall" value="{{ old('tall') }}">
                              <span class="input-group-addon">mts</span>
                            </div> 
                            <span class="red-text"> {{ $errors->TreeError->first('tall') }} </span>                       
                      </div>
                  
                      <div class="form-group">
                        <label for="tall_branch"> Altura Rama (mts): </label>
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-arrows-v"></i></span>                          
                            <input type="text" class="form-control col-lg-7" id="tall_branch" name="tall_branch" value="{{ old('tall_branch') }}">
                            <span class="input-group-addon">mts</span>  
                          </div>
                          <span class="red-text"> {{ $errors->TreeError->first('tall_branch') }} </span>
                      </div>

                  <div class="form-group">
                    <label for="top"> % Pérdida de Copa: </label>
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-leaf"></i></span>                          
                          <input type="text" class="form-control col-lg-7" id="top" name="top"  value="{{ old('top') }}">
                          <span class="input-group-addon">%</span>  
                        </div>                    
                        <span class="red-text"> {{ $errors->TreeError->first('top') }} </span>
                  </div>  
        		
        		      <div class="form-group">
                    <label for="shown"> Exposición de la Copa: </label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-sort-asc"></i></span>                          
                        <input type="text" class="form-control col-lg-7" id="shown" name="shown" value="{{ old('shown') }}">
                        <span class="input-group-addon">%</span>  
                      </div>
                      <span class="red-text"> {{ $errors->TreeError->first('shown') }} </span>
                  </div>  

        		      <div class="form-group">
                    <label for="shadown"> Sombra de la Copa (mts): </label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-sort-asc"></i></span>                          
                        <input type="text" class="form-control col-lg-7" id="shadown" name="shadown" value="{{ old('shadown') }}">
                        <span class="input-group-addon">mts</span>
                      </div>                                                          
                      <span class="red-text"> {{ $errors->TreeError->first('shadown') }} </span>
                  </div>  

        		      <div class="form-group">
                    <label for="perimeter"> Perímetro Cuello del Tronco (mts): </label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-square"></i></span>                          
                        <input type="text" class="form-control col-lg-7" id="perimeter" name="perimeter" value="{{ old('perimeter') }}">
                        <span class="input-group-addon">mts</span>  
                    </div>                                                                              
                    <span class="red-text"> {{ $errors->TreeError->first('perimeter') }} </span>
                  </div>  

        		      <div class="form-group">
                    <label for="perimeter_chest"> Perímetro Altura del Pecho (mts): </label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-square"></i></span>                          
                        <input type="text" class="form-control col-lg-7" id="perimeter_chest" name="perimeter_chest" value="{{ old('perimeter_chest') }}">
                        <span class="input-group-addon">mts</span>  
                    </div>                                                                                                  
                    <span class="red-text"> {{ $errors->TreeError->first('perimeter_chest') }} </span>
                  </div>

        		      <div class="form-group">
                    <label for="numbers_trunk"> Número Troncos Presentes: </label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-square"></i></span>                          
                        <input type="text" class="form-control col-lg-7" id="numbers_trunk" name="numbers_trunk" value="{{ old('numbers_trunk') }}">
                        <span class="input-group-addon">cant.</span>  
                    </div>
                    <span class="red-text"> {{ $errors->TreeError->first('numbers_trunk') }} </span>                                                                                                  
                  </div>

                  <div class="form-group">
                    <label for="diameter_north"> Diámetro N - S Copa: </label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-arrows-h"></i></span>                          
                        <input type="text" class="form-control col-lg-7" id="diameter_north" name="diameter_north"  value="{{ old('diameter_north') }}">
                        <span class="input-group-addon"><i class="fa fa-angle-double-down"></i></span>  
                    </div>
                    <span class="red-text"> {{ $errors->TreeError->first('diameter_north') }} </span>                                                                                                                      
                  </div>

                  <div class="form-group">
                    <label for="diameter_west"> Diámetro E - O Copa: </label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-arrows-h"></i></span>                          
                        <input type="text" class="form-control col-lg-7" id="diameter_west" name="diameter_west" value="{{ old('diameter_west') }}">
                        <span class="input-group-addon"><i class="fa fa-angle-double-right"></i></span>  
                    </div>
                    <span class="red-text"> {{ $errors->TreeError->first('diameter_west') }} </span>                     
                  </div>

                  <div class="form-group">
                    <label for="branch_trunk"> % Ramas Respecto Tronco: </label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-leaf"></i></span>                          
                        <input type="text" class="form-control col-lg-7" id="branch_trunk" name="branch_trunk" value="{{ old('branch_trunk') }}">
                        <span class="input-group-addon">%</span>  
                    </div>
                    <span class="red-text"> {{ $errors->TreeError->first('branch_trunk') }} </span>                     
                    
                  </div>

                  <div class="form-group">
                    <label for="nest"> ¿Presencia de Nidos? </label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-simplybuilt"></i></span>
                        <select class="form-control col-lg-6" id="nest" name="nest">
                  			  <option value="1">Ninguno	</option>
                  			  <option value="2">Entre 1 & 2	</option>
                  			  <option value="3">Entre 3 & 5	</option>			  
                  			  <option value="4">Mayor a 5 </option>
          			         </select>
                     </div>
                  </div>                               


                  <div class="form-group">
                    <label for="bats"> ¿Presencia de Muercielagos? </label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-simplybuilt"></i></span>
                        <select class="form-control col-lg-6" id="bats" name="bats">
                  			  <option value="1">Si	</option>
                  			  <option value="2">No  </option>
                  			</select>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="iguana"> ¿Presencia de Iguanas? </label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-simplybuilt"></i></span>
                        <select class="form-control col-lg-6" id="iguana" name="iguana">
                			   <option value="1">Si	</option>
                			   <option value="2">No  </option>
                			 </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="chipmunk"> ¿Presencia de Ardillas? </label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-simplybuilt"></i></span>
                        <select class="form-control col-lg-6" id="chipmunk" name="chipmunk">
        			             <option value="1">Si	</option>
        			             <option value="2" selected >No  </option>
        			          </select>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="zariguella"> ¿Presencia de Zariguellas? </label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-simplybuilt"></i></span>
                        <select class="form-control col-lg-6" id="zariguella" name="zariguella">
                  			  <option value="1">Si	</option>
                  			  <option value="2">No  </option>
        			          </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="nest_insect"> ¿Presencia de Nidos de Insectos? </label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-simplybuilt"></i></span>
                        <select class="form-control col-lg-6" id="nest_insect" name="nest_insect">
                			     <option value="1">Si	</option>
                			     <option value="2">No  </option>
                			</select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="dove"> ¿Presencia de Palomas? </label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-simplybuilt"></i></span>
                        <select class="form-control col-lg-6" id="dove" name="dove">
                			    <option value="1">Si	</option>
                			    <option value="2">No  </option>
                			</select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="ants"> ¿Presencia de Hormigas Arrieras? </label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-simplybuilt"></i></span>
                        <select class="form-control col-lg-6" id="ants" name="ants">
                  			  <option value="1">Si	</option>
                  			  <option value="2">No  </option>
                  			</select>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="root_tree"> % Raiz Expuesta </label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-renren"></i></span>
                        <select class="form-control col-lg-6" id="root_tree" name="root_tree">
                  			  <option value="1">Entre 0  & 25  </option>
                  			  <option value="2">Entre 25 & 50 </option>
                  			  <option value="3">Entre 50 & 75 </option>
                  			  <option value="4">Mayor 75 </option>
                  			</select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="trunk_distorted"> % Tronco Torcido </label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-xing"></i></span>
                        <select class="form-control col-lg-6" id="trunk_distorted" name="trunk_distorted">
                  			  <option value="1">Entre 0  & 25  </option>
                  			  <option value="2">Entre 25 & 50 </option>
                  			  <option value="3">Entre 50 & 75 </option>
                  			  <option value="4">Mayor 75 </option>
                  			</select>
                    </div>
                  </div>          
        		
              
              </div> <!-- Finalizacion primer conjunto de inputs -->



        		  <div class="col-lg-6"> <!-- Segundo conjunto de inputs -->
              
                    <div class="form-group">
                      <label for="angle_tree"> Inclinación del Árbol: </label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-angle-down"></i></span>
                        <input type="text" class="form-control col-lg-7" id="angle_tree" name="angle_tree" value="{{ old('angle_tree') }}">
                      </div>
                      <span class="red-text"> {{ $errors->TreeError->first('angle_tree') }} </span>
                    </div>

                    <div class="form-group">
                      <label for="branch_dry"> Ramas Secas </label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                        <select class="form-control  col-lg-7" id="branch_dry" name="branch_dry">
                          <option value="1">Entre 0  & 25  </option>
                          <option value="2">Entre 25 & 50 </option>
                          <option value="3">Entre 50 & 75 </option>
                          <option value="4">Mayor 75 </option>
                        </select>
                      </div>
                    </div>

                                      

                    <div class="form-group">
                      <label for="root_healt"> Raiz con Plaga o Enfermedades </label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                        <select class="form-control  col-lg-7" id="root_healt" name="root_healt">
                          <option value="1">Entre 0  & 25  </option>
                          <option value="2">Entre 25 & 50 </option>
                          <option value="3">Entre 50 & 75 </option>
                          <option value="4">Mayor 75 </option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="trunk_healt"> Tronco Plaga o Enfermedades </label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                        <select class="form-control  col-lg-7" id="trunk_healt" name="trunk_healt">
                          <option value="1">Entre 0  & 25  </option>
                          <option value="2">Entre 25 & 50 </option>
                          <option value="3">Entre 50 & 75 </option>
                          <option value="4">Mayor 75 </option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="cup_healt"> Copa Plaga o Enfermedades </label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                        <select class="form-control  col-lg-7" id="cup_healt" name="cup_healt">
                          <option value="1">Entre 0  & 25  </option>
                          <option value="2">Entre 25 & 50 </option>
                          <option value="3">Entre 50 & 75 </option>
                          <option value="4">Mayor 75 </option>
                        </select>
                      </div>
                    </div>          

                    <div class="form-group">
                      <label for="root_wounds"> Heridas en Raices </label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-medkit"></i></span>
                        <select class="form-control  col-lg-7" id="root_wounds" name="root_wounds">
                          <option value="1">Entre 0  & 25  </option>
                          <option value="2">Entre 25 & 50 </option>
                          <option value="3">Entre 50 & 75 </option>
                          <option value="4">Mayor 75 </option>
                        </select>
                      </div>
                    </div>          

                    <div class="form-group">
                      <label for="steam_wounds"> Heridas en Tallo </label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-medkit"></i></span>
                        <select class="form-control  col-lg-7" id="steam_wounds" name="steam_wounds">
                          <option value="1">Entre 0  & 25  </option>
                          <option value="2">Entre 25 & 50 </option>
                          <option value="3">Entre 50 & 75 </option>
                          <option value="4">Mayor 75 </option>
                        </select>
                      </div>
                    </div>          

                    <div class="form-group">
                      <label for="steam_wounds"> Heridas en Ramas </label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-medkit"></i></span>
                        <select class="form-control  col-lg-7" id="steam_wounds" name="branch_wounds">
                          <option value="1">Entre 0  & 25  </option>
                          <option value="2">Entre 25 & 50 </option>
                          <option value="3">Entre 50 & 75 </option>
                          <option value="4">Mayor 75 </option>
                        </select>                        
                      </div>
                    </div>          

                    <div class="form-group">
                      <label for="cut_tecnic"> Podas Anti-Tecnicas </label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-scissors"></i></span>
                        <select class="form-control  col-lg-7" id="cut_tecnic" name="cut_tecnic">
                          <option value="1">Entre 0  & 25  </option>
                          <option value="2">Entre 25 & 50 </option>
                          <option value="3">Entre 50 & 75 </option>
                          <option value="4">Mayor 75 </option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="trunk_wounds"> Termita en Tronco </label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                        <select class="form-control  col-lg-7" id="trunk_wounds" name="trunk_wounds">
                          <option value="1">Entre 0  & 25  </option>
                          <option value="2">Entre 25 & 50 </option>
                          <option value="3">Entre 50 & 75 </option>
                          <option value="4">Mayor 75 </option>
                        </select>
                      </div>
                    </div> 

                    <div class="form-group">
                      <label for="parasite"> Pajarita (Parásitos, Injerto) </label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                        <select class="form-control  col-lg-7" id="parasite" name="parasite">
                          <option value="1">Entre 0  & 25  </option>
                          <option value="2">Entre 25 & 50 </option>
                          <option value="3">Entre 50 & 75 </option>
                          <option value="4">Mayor 75 </option>
                        </select>
                      </div>
                    </div>          

                    <div class="form-group">
                      <label for="cup_land"> Bajo Copa en Tierra </label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                        <input type="text" class="form-control  col-lg-7" id="cup_land" name="cup_land"  value="{{ old('cup_land') }}">
                      </div>
                      <span class="red-text"> {{ $errors->TreeError->first('cup_land') }} </span>
                    </div>

                    <div class="form-group">
                      <label for="cup_floor"> Bajo Copa en Pasto </label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                        <input type="text" class="form-control  col-lg-7" id="cup_floor" name="cup_floor"  value="{{ old('cup_floor') }}">
                      </div>
                      <span class="red-text"> {{ $errors->TreeError->first('cup_floor') }} </span>
                    </div>

                    <div class="form-group">
                      <label for="cup_bush"> Bajo Copa en Arbustos </label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                        <input type="text" class="form-control  col-lg-7" id="cup_bush" name="cup_bush"  value="{{ old('cup_bush') }}">
                      </div>
                      <span class="red-text"> {{ $errors->TreeError->first('cup_bush') }} </span>
                    </div>

                    <div class="form-group">
                      <label for="cup_pavement"> Bajo Copa en Pavimento </label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                        <input type="text" class="form-control  col-lg-7" id="cup_pavement" name="cup_pavement"  value="{{ old('cup_pavement') }}">
                      </div>
                      <span class="red-text"> {{ $errors->TreeError->first('cup_pavement') }} </span>
                    </div>

                    <div class="form-group">
                      <label for="structure_floor"> Conflicto Actual Infraest. en Suelo </label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-building-o"></i></span>
                        <select class="form-control  col-lg-7" id="structure_floor" name="structure_floor">
                          <option value="1">No existente o Sin evidencia </option>
                          <option value="2">Moderado, en contacto con infraest. sin afectación</option>
                          <option value="3">Severo, pisos levantadas o cuarteados </option>         
                        </select>
                      </div>
                    </div>          

                    <div class="form-group">
                      <label for="infraestructure_private"> Conflicto Actual Infraest. Privada Fachadas o Techos </label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-building-o"></i></span>
                        <select class="form-control  col-lg-7" id="infraestructure_private" name="infraestructure_private">
                          <option value="1">No existente o Sin evidencia </option>
                          <option value="2">Moderado, en contacto con infraest. sin afectación</option>
                          <option value="3">Severo, Paredes o Techos afectados </option>          
                        </select>
                      </div>
                    </div>          

                    <div class="form-group">
                      <label for="infraestructure_public"> Conflicto Actual Infraest. Publica </label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-institution"></i></span>
                        <select class="form-control  col-lg-7" id="infraestructure_public" name="infraestructure_public">
                          <option value="1">No existente o Sin evidencia </option>
                          <option value="2">Moderado, en contacto con infraest. sin afectación</option>
                          <option value="3">Severo, Paredes o Techos afectados </option>          
                        </select>
                      </div>
                    </div>          

                    <div class="form-group">
                      <label for="cable_light"> Conflicto Actual Cuerdas de Luz </label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-stumbleupon"></i></span>
                        <select class="form-control  col-lg-7" id="cable_light" name="cable_light">
                          <option value="1">No existente o Sin evidencia </option>
                          <option value="2">Moderado, en contacto con infraest. sin afectación</option>
                          <option value="3">Severo, las cuerdas de luz estan entre las ramas </option>          
                        </select>
                      </div>
                    </div>          

                    <div class="form-group">
                      <label for="distance_gas"> Distancia Tubería Gas a Raíces </label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-fire"></i></span>
                        <input type="text" class="form-control  col-lg-7" id="distance_gas" name="distance_gas"  value="{{ old('distance_gas') }}">
                      </div>
                      <span class="red-text"> {{ $errors->TreeError->first('distance_gas') }} </span>
                    </div>

                    <div class="form-group">
                      <label for="distance_floor"> Distancia Infraestructura Piso a Tronco </label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-yen"></i></span>
                        <input type="text" class="form-control  col-lg-7" id="distance_floor" name="distance_floor" value="{{ old('distance_floor') }}">
                      </div>
                      <span class="red-text"> {{ $errors->TreeError->first('distance_floor') }} </span>
                    </div>

                    <div class="form-group">
                      <label for="distance_wall"> Distancia Infraestructura Paredes o Techos </label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-building-o"></i></span>
                        <input type="text" class="form-control  col-lg-7" id="distance_wall" name="distance_wall" value="{{ old('distance_wall') }}">
                      </div>
                      <span class="red-text"> {{ $errors->TreeError->first('distance_wall') }} </span>
                    </div>

                    <div class="form-group">
                      <label for="distance_horizontal"> Distancia Horizontal Cuerdas a Ramas </label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-stumbleupon"></i></span>
                        <input type="text" class="form-control  col-lg-6" id="distance_horizontal" name="distance_horizontal" value="{{ old('distance_horizontal') }}">
                        <span class="input-group-addon"><i class="fa fa-envira"></i></span>
                      </div>
                      <span class="red-text"> {{ $errors->TreeError->first('distance_horizontal') }} </span>
                    </div>

                    <div class="form-group">
                      <label for="distance_vertical"> Distancia Vertical Cuerdas a Ramas </label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-stumbleupon"></i></span>
                        <input type="text" class="form-control  col-lg-6" id="distance_vertical" name="distance_vertical" value="{{ old('distance_vertical') }}">
                        <span class="input-group-addon"><i class="fa fa-envira"></i></span>
                      </div>
                      <span class="red-text"> {{ $errors->TreeError->first('distance_vertical') }} </span>
                    </div>

                    <div class="col-lg-12">                      
                        <div class="row">
                                                  
                        <div class="col-lg-6"> 
                      
                        <label for="latitud"> Latitud </label>                        
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                          <input type="text" class="form-control  col-lg-9" id="latitud" name="latitud" value="{{ old('latitud') }}">
                        </div>
                        <span class="red-text"> {{ $errors->TreeError->first('latitud') }} </span>  
                      </div>
                        

                        <div class="col-lg-6"> 
                          <label for="longitud"> Longitud </label>
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                            <input type="text" class="form-control  col-lg-9" id="longitud" name="longitud" value="{{ old('longitud') }}">
                          </div>
                          <span class="red-text"> {{ $errors->TreeError->first('longitud') }} </span>
                        </div>                      
                      </div>
                    </div>                

              </div> <!-- fin segundo conjunto de inputs -->  		  
        			
              </div> <!-- fin div-col-lg-12 -->

              </div>
        	
              <div class="col-lg-2">
                  <button type="submit" class="btn btn-success btn-md"> <i class="fa fa-tree"> </i> &nbsp; Crear </button>
              </div>

          </form> 
      
      
        </div> <!-- card-block -->
      </div> <!-- card -->
    </div> <!-- col-lg-12 -->
  </div> <!-- row -->

@endsection

@section('js')

  <script src="{{ asset('js/js_dashboard/cleave/dist/cleave.js') }}"></script>

  <script>
    
      $(document).ready(function () {
      
        new Cleave('input#tall', {            
            blocks: [2],  
            numeral: true,
            //numericOnly: true,            
        });
      
        new Cleave('input#tall_branch', {            
            blocks: [2],  
            numeral: true,
            //numericOnly: true,            
        });

        new Cleave('input#top', {            
            blocks: [2],  
            numeral: true,
            //numericOnly: true,            
        });

        new Cleave('input#shown', {            
            blocks: [2],  
            numeral: true,
            //numericOnly: true,            
        });

        new Cleave('input#shadown', {
            blocks: [2],  
            numeral: true,
            //numericOnly: true,            
        });

        new Cleave('input#perimeter', {
            blocks: [2],  
            numeral: true,
            //numericOnly: true,            
        });

        new Cleave('input#perimeter_chest', {
            blocks: [2],  
            numeral: true,
            //numericOnly: true,            
        });

        new Cleave('input#numbers_trunk', {
            blocks: [2],  
            numeral: true,
            //numericOnly: true,            
        });

        new Cleave('input#diameter_north', {
            blocks: [2],  
            numeral: true,
            //numericOnly: true,            
        });

        new Cleave('input#diameter_west', {
            blocks: [2],  
            numeral: true,
            //numericOnly: true,            
        });

        new Cleave('input#branch_trunk', {
            blocks: [2],  
            numeral: true,
            //numericOnly: true,            
        });

        new Cleave('input#angle_tree', {
            blocks: [2],  
            numeral: true,
            //numericOnly: true,            
        });

        new Cleave('input#cup_land', {
            blocks: [2],  
            numeral: true,
            //numericOnly: true,            
        });

        new Cleave('input#cup_floor', {
            blocks: [2],  
            numeral: true,
            //numericOnly: true,            
        });

        new Cleave('input#cup_bush', {
            blocks: [2],  
            numeral: true,
            //numericOnly: true,            
        });

        new Cleave('input#cup_pavement', {
            blocks: [2],  
            numeral: true,
            //numericOnly: true,            
        });

        new Cleave('input#distance_gas', {
            blocks: [2],  
            numeral: true,
            //numericOnly: true,            
        });

        new Cleave('input#distance_floor', {
            blocks: [2],  
            numeral: true,
            //numericOnly: true,            
        });

        new Cleave('input#distance_wall', {
            blocks: [2],  
            numeral: true,
            //numericOnly: true,            
        });

        new Cleave('input#distance_vertical', {
            blocks: [2],  
            numeral: true,
            //numericOnly: true,            
        });

        new Cleave('input#distance_horizontal', {            
            blocks: [2],  
            numeral: true,
            //numericOnly: true,            
        });

        new Cleave('input#latitud', {
            delimiter: '.',
            //blocks: [2, 6],

            //uppercase: true,            
            numeralDecimalScale: 6
        });

        new Cleave('input#longitud', {
            delimiter: '.',
            //blocks: [2, 6],            
            //numericOnly: true,
            numeralDecimalScale: 6
        });

      });

  </script>

@endsection