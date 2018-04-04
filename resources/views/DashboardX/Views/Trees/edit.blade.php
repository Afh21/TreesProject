@extends('DashboardX.Layout.layout')

@section('content')

<style>
     .fa-magic{
		color:#DB4439;
     }

     .btn-icon {
      padding: 0px 0px;
      margin: 0px 0px;
     }
	
</style>

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
                                    <h4>Editar</h4>
                                    <span>Sección para editar Árboles</span>
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
                                    	<a href="{{ asset('dashboard.index') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                    	<a href="{{ route('trees.index') }}">Arboles</a>
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
                                    <h5>Editar Árbol, &nbsp; { {{ $tree->name }} }</h5>                                    
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
                                    
               	<form action="{{ route('trees.update', ['trees' => $tree->id ]) }}" method="POST">              
            	{{ method_field('PUT') }}
            	{{ csrf_field() }}
            	              
            	<div class="col-lg-12">

                <div class="row">
                  
                  <div class="col-lg-6">

                      <div class="form-group">
                        <label for="name">Nombre Científico: </label>
                        <div class="input-group">                    
                          <span class="input-group-addon"> <i class="fa fa-id-card"></i> </span>                    
                          <input type="text" class="form-control col-lg-8" id="name" name="name" value="{{ $tree->name }}">
                        </div>
                        <span class="red-text"> {{ $errors->TreeError->first('name') }} </span>
                      </div>

                      <div class="form-group">
                        <label for="name">Nombre Común: </label>
                        <div class="input-group">                    
                          <span class="input-group-addon"> <i class="fa fa-id-card"></i> </span>                    
                          <input type="text" class="form-control col-lg-8" id="name_comun" name="name_comun" value="{{ $tree->name_comun }}">
                        </div>
                        <span class="red-text"> {{ $errors->TreeError->first('name_comun') }} </span>
                      </div>
                  
                      <div class="form-group">
                        <label for="local"> Localización: </label>
                        <div class="input-group" id="place_n">                    
                          <span class="input-group-addon"> <i class="fa fa-id-card"></i> </span>                    
                          <input type="text" class="form-control col-lg-6"
                          	value=" @if ($tree->place == 1) Anden @elseif($tree->place == 2) Parque @elseif($tree->place == 3) Rivera 
                          			@elseif($tree->place == 4) Rio @elseif($tree->place == 5) Antejardin @elseif($tree->place == 6) Separador
                          			@elseif($tree->place == 7) Borde Carretera @elseif($tree->place == 8) Ferrocarril @elseif($tree->place == 9) Otro @endif"
                          			disabled >
                          
                          	<span class="input-group-addon"> 
                          		 <i class="fa fa-magic" id="place"></i>
                          	</span>                    
                        </div>


                         <div class="input-group" style="display: none" id="place" style="display: none"> 
                            <span class="input-group-addon"> <i class="fa fa-anchor"></i> </span>                   
                            <select class="form-control col-lg-8" id="place" name="place" style="display: none">
                              <option value=""> Seleccione alguna por favor</option>                                                 
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
                          
                          <div class="input-group" id="vitality">                    
                          		<span class="input-group-addon"> <i class="fa fa-id-card"></i> </span>                    
                          		<input type="text" class="form-control col-lg-6"
                          			value=" @if ($tree->healt == 1) Vivo y Sano 
                          					@elseif($tree->healt == 2) Enfermo o Afectado Fisicamente 
                          					@elseif($tree->healt == 3) Muerto @endif" disabled>
                          
	                          	<span class="input-group-addon"> 
	                          	 <i class="fa fa-magic" id="vitality"></i>
	                          	</span>                    
                        	</div>

                          <div class="input-group" id="healt" style="display: none">
                            <span class="input-group-addon"><i class="fa fa-heartbeat"></i></span>
                            <select class="form-control col-lg-8" id="healt" name="healt">
                            	<option value=""> Seleccione alguna por favor</option>
                      			  <option value="1"> Vivo y Sano	</option>
                      			  <option value="2"> Enfermo o Afectado Fisicamente	</option>
                      			  <option value="3"> Muerto	</option>	  
              			        </select>
                          </div>
                      </div>

          	  	
                	  <div class="form-group">
                        <label for="tall"> Altura Total (mts): </label>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fas fa-arrows-alt-v"></i></span>
                              <input type="text" class="form-control col-lg-7" id="tall" name="tall" value="{{ $tree->tall }}">
                              <span class="input-group-addon">mts</span>
                            </div> 
                            <span class="red-text"> {{ $errors->TreeError->first('tall') }} </span>                       
                      </div>
                  
                      <div class="form-group">
                        <label for="tall_branch"> Altura Rama (mts): </label>
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fas fa-arrows-alt-v"></i></span>                          
                            <input type="text" class="form-control col-lg-7" id="tall_branch" name="tall_branch" value="{{ $tree->tall_branch }}">
                            <span class="input-group-addon">mts</span>  
                          </div>
                          <span class="red-text"> {{ $errors->TreeError->first('tall_branch') }} </span>
                      </div>

                  <div class="form-group">
                    <label for="top"> % Pérdida de Copa: </label>
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-leaf"></i></span>                          
                          <input type="text" class="form-control col-lg-7" id="top" name="top"  value="{{ $tree->top }}">
                          <span class="input-group-addon">%</span>  
                        </div>                    
                        <span class="red-text"> {{ $errors->TreeError->first('top') }} </span>
                  </div>  
        		
        		      <div class="form-group">
                    <label for="shown"> Exposición de la Copa: </label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-sort-up"></i></span>                          
                        <input type="text" class="form-control col-lg-7" id="shown" name="shown" value="{{ $tree->shown }}">
                        <span class="input-group-addon">%</span>  
                      </div>
                      <span class="red-text"> {{ $errors->TreeError->first('shown') }} </span>
                  </div>  

        		      <div class="form-group">
                    <label for="shadown"> Sombra de la Copa (mts): </label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-sort-up"></i></span>                          
                        <input type="text" class="form-control col-lg-7" id="shadown" name="shadown" value="{{ $tree->shadown }}">
                        <span class="input-group-addon">mts</span>
                      </div>                                                          
                      <span class="red-text"> {{ $errors->TreeError->first('shadown') }} </span>
                  </div>  

        		      <div class="form-group">
                    <label for="perimeter"> Perímetro Cuello del Tronco (mts): </label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-square"></i></span>                          
                        <input type="text" class="form-control col-lg-7" id="perimeter" name="perimeter" value="{{ $tree->perimeter }}">
                        <span class="input-group-addon">mts</span>  
                    </div>                                                                              
                    <span class="red-text"> {{ $errors->TreeError->first('perimeter') }} </span>
                  </div>  

        		      <div class="form-group">
                    <label for="perimeter_chest"> Perímetro Altura del Pecho (mts): </label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-square"></i></span>                          
                        <input type="text" class="form-control col-lg-7" id="perimeter_chest" name="perimeter_chest" value="{{ $tree->perimeter_chest }}">
                        <span class="input-group-addon">mts</span>  
                    </div>                                                                                                  
                    <span class="red-text"> {{ $errors->TreeError->first('perimeter_chest') }} </span>
                  </div>

        		      <div class="form-group">
                    <label for="numbers_trunk"> Número Troncos Presentes: </label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-square"></i></span>                          
                        <input type="text" class="form-control col-lg-7" id="numbers_trunk" name="numbers_trunk" value="{{ $tree->numbers_trunk }}">
                        <span class="input-group-addon">cant.</span>  
                    </div>
                    <span class="red-text"> {{ $errors->TreeError->first('numbers_trunk') }} </span>                                                                                                  
                  </div>

                  <div class="form-group">
                    <label for="diameter_north"> Diámetro N - S Copa: </label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-arrows-h"></i></span>                          
                        <input type="text" class="form-control col-lg-7" id="diameter_north" name="diameter_north"  value="{{ $tree->diameter_north }}">
                        <span class="input-group-addon"><i class="fa fa-angle-double-down"></i></span>  
                    </div>
                    <span class="red-text"> {{ $errors->TreeError->first('diameter_north') }} </span>                                                                                                                      
                  </div>

                  <div class="form-group">
                    <label for="diameter_west"> Diámetro E - O Copa: </label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-arrows-h"></i></span>                          
                        <input type="text" class="form-control col-lg-7" id="diameter_west" name="diameter_west" value="{{ $tree->diameter_west }}">
                        <span class="input-group-addon"><i class="fa fa-angle-double-right"></i></span>  
                    </div>
                    <span class="red-text"> {{ $errors->TreeError->first('diameter_west') }} </span>                     
                  </div>

                  <div class="form-group">
                    <label for="branch_trunk"> % Ramas Respecto Tronco: </label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-leaf"></i></span>                          
                        <input type="text" class="form-control col-lg-7" id="branch_trunk" name="branch_trunk" value="{{ $tree->branch_trunk }}">
                        <span class="input-group-addon">%</span>  
                    </div>
                    <span class="red-text"> {{ $errors->TreeError->first('branch_trunk') }} </span>                     
                    
                  </div>

                  <div class="form-group">
                    <label for="nest"> ¿Presencia de Nidos? </label>                    
                    <div class="input-group" id="nest_n">                    
                  		<span class="input-group-addon"> <i class="fa fa-id-card"></i> </span>                    
                  		<input type="text" class="form-control col-lg-6"  
                  			value=" @if ($tree->nest == 1) Ninguno
                  					@elseif($tree->nest == 2) Entre 1 & 2
                  					@elseif($tree->nest == 3) Entre 3 & 5 
                  					@elseif($tree->nest) Mayor a 5 @endif" disabled>
                  
                      	<span class="input-group-addon"> 
                      		<i class="fa fa-magic" id="nest" ></i> 
                      	</span>                    
                	</div>

					
                    <div class="input-group" id="nest" style="display: none">
                      <span class="input-group-addon"><i class="fa fa-simplybuilt"></i></span>
                        <select class="form-control col-lg-6" id="nest" name="nest">
                        	<option value=""> Seleccione alguna por favor</option>
                  			  <option value="1"> Ninguno	</option>
                  			  <option value="2"> Entre 1 & 2	</option>
                  			  <option value="3"> Entre 3 & 5	</option>			  
                  			  <option value="4"> Mayor a 5 </option>
          			         </select>
                     </div>
                  </div>                               


                  <div class="form-group">
                    <label for="bats"> ¿Presencia de Muercielagos? </label>
                    <div class="input-group" id="bats_n">                    
                  		<span class="input-group-addon"> <i class="fa fa-id-card"></i> </span>                    
                  		<input type="text" class="form-control col-lg-6"  
                  			value=" @if ($tree->bats == 1) Si
                  					@elseif($tree->bats == 2) No
                  					@endif" disabled>
                  
                      	<span class="input-group-addon"> 
                      		<i class="fa fa-magic" id="bats"></i> 
                      	</span>                    
                	</div>

                    <div class="input-group" id="bats" style="display: none">
                      <span class="input-group-addon"><i class="fa fa-simplybuilt"></i></span>
                        <select class="form-control col-lg-6" id="bats" name="bats">
                        	<option value=""> Seleccione alguna por favor</option>
                  			  <option value="1">Si	</option>
                  			  <option value="2">No  </option>
                  			</select>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="iguana"> ¿Presencia de Iguanas? </label>
                    <div class="input-group" id="iguana_n">                    
                  		<span class="input-group-addon"> <i class="fa fa-id-card"></i> </span>                    
                  		<input type="text" class="form-control col-lg-6"  
                  			value=" @if ($tree->iguana == 1) Si
                  					@elseif($tree->iguana == 2) No
                  					@endif" disabled>
                  
                      	<span class="input-group-addon"> 
                      		<i class="fa fa-magic" id="iguana"></i>
                      	</span>                    
                	</div>

                    <div class="input-group" style="display: none" id="iguana">
                      <span class="input-group-addon"><i class="fa fa-simplybuilt"></i></span>
                        <select class="form-control col-lg-6" id="iguana" name="iguana">
                        	<option value=""> Seleccione alguna por favor</option>
                			   <option value="1">Si	</option>
                			   <option value="2">No </option>
                		</select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="chipmunk"> ¿Presencia de Ardillas? </label>
                    <div class="input-group" id="chipmunk_n">                    
                  		<span class="input-group-addon"> <i class="fa fa-id-card"></i> </span>                    
                  		<input type="text" class="form-control col-lg-6"  
                  			value=" @if ($tree->chipmunk == 1) Si
                  					@elseif($tree->chipmunk == 2) No
                  					@endif" disabled>
                  
                      	<span class="input-group-addon"> 
                      		<i class="fa fa-magic" id="chipmunk"></i>
                      	</span>                    
                	</div>

                    <div class="input-group" style="display: none" id="chipmunk">
                      <span class="input-group-addon"><i class="fa fa-simplybuilt"></i></span>
                        <select class="form-control col-lg-6" id="chipmunk" name="chipmunk">
                        	<option value=""> Seleccione alguna por favor</option>
        			             <option value="1">Si	</option>
        			             <option value="2">No  </option>
        			          </select>
                      </div>
                  </div>


                  <div class="form-group">
                    <label for="zariguella"> ¿Presencia de Zariguellas? </label>
                    <div class="input-group" id="zariguella_n">                    
                  		<span class="input-group-addon"> <i class="fa fa-id-card"></i> </span>                    
                  		<input type="text" class="form-control col-lg-6"  
                  			value=" @if ($tree->zariguella == 1) Si
                  					@elseif($tree->zariguella == 2) No
                  					@endif" disabled>
                  
                      	<span class="input-group-addon"> 
                      		<i class="fa fa-magic" id="zariguella"></i> 
                      	</span>                    
                	</div>


                    <div class="input-group" style="display: none" id="zariguella">
                      <span class="input-group-addon"><i class="fa fa-simplybuilt"></i></span>
                        <select class="form-control col-lg-6" id="zariguella" name="zariguella">
                        	<option value=""> Seleccione alguna por favor</option>
                  			  <option value="1">Si	</option>
                  			  <option value="2">No  </option>
        			          </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="nest_insect"> ¿Presencia de Nidos de Insectos? </label>
                    <div class="input-group" id="nest_insect_n">                    
                  		<span class="input-group-addon"> <i class="fa fa-id-card"></i> </span>                    
                  		<input type="text" class="form-control col-lg-6"  
                  			value=" @if ($tree->nest_insect == 1) Si
                  					@elseif($tree->nest_insect == 2) No
                  					@endif" disabled>
                  
                      	<span class="input-group-addon"> 
                      		 <i class="fa fa-magic" id="nest_insect"></i> 
                      	</span>                    
                	</div>

                    <div class="input-group" style="display: none" id="nest_insect">
                      <span class="input-group-addon"><i class="fa fa-simplybuilt"></i></span>
                        <select class="form-control col-lg-6" id="nest_insect" name="nest_insect">
                        	<option value=""> Seleccione alguna por favor</option>
                			     <option value="1">Si	</option>
                			     <option value="2">No  </option>
                			</select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="dove"> ¿Presencia de Palomas? </label>
                    <div class="input-group" id="dove_n">                    
                  		<span class="input-group-addon"> <i class="fa fa-id-card"></i> </span>                    
                  		<input type="text" class="form-control col-lg-6"  
                  			value=" @if ($tree->dove == 1) Si
                  					@elseif($tree->dove == 2) No
                  					@endif" disabled>
                  
                      	<span class="input-group-addon"> 
                      		 <i class="fa fa-magic" id="dove"></i> 
                      	</span>                    
                	</div>

                    <div class="input-group" style="display: none" id="dove">
                      <span class="input-group-addon"><i class="fa fa-simplybuilt"></i></span>
                        <select class="form-control col-lg-6" id="dove" name="dove">
                        	<option value=""> Seleccione alguna por favor</option>
                			    <option value="1">Si	</option>
                			    <option value="2">No  </option>
                			</select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="ants"> ¿Presencia de Hormigas Arrieras? </label>
                    <div class="input-group" id="ants_n">                    
                  		<span class="input-group-addon"> <i class="fa fa-id-card"></i> </span>                    
                  		<input type="text" class="form-control col-lg-6"  
                  			value=" @if ($tree->ants == 1) Si
                  					@elseif($tree->ants == 2) No
                  					@endif" disabled>
                  
                      	<span class="input-group-addon"> 
                      	 <i class="fa fa-magic" id="ants" ></i> 
                      	</span>                    
                	</div>

                    <div class="input-group" style="display: none" id="ants">
                      <span class="input-group-addon"><i class="fa fa-simplybuilt"></i></span>
                        <select class="form-control col-lg-6" id="ants" name="ants">
                        	<option value=""> Seleccione alguna por favor</option>
                  			  <option value="1">Si	</option>
                  			  <option value="2">No  </option>
                  			</select>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="root_tree"> % Raiz Expuesta </label>
                    <div class="input-group" id="root_tree_n">                    
                  		<span class="input-group-addon"> <i class="fa fa-id-card"></i> </span>                    
                  		<input type="text" class="form-control col-lg-6"  
                  			value=" @if ($tree->root_tree == 1) Entre 0 & 25
                  					@elseif($tree->root_tree == 2) Entre 25 & 50
                  					@elseif($tree->root_tree == 3) Entre 50 & 75
                  					@elseif($tree->root_tree == 4) Mayor 75
                  					@endif" disabled>
                  
                      	<span class="input-group-addon"> 
                      		<i class="fa fa-magic" id="root_tree"></i> 
                      	</span>                    
                	</div>

					<div class="input-group" style="display: none" id="root_tree">
						<span class="input-group-addon"><i class="fa fa-xing"></i></span>
                        	<select class="form-control col-lg-6" id="root_tree" name="root_tree">
                        		<option value=""> Seleccione alguna por favor</option>
                  			  <option value="1">Entre 0  & 25  </option>
                  			  <option value="2">Entre 25 & 50 </option>
                  			  <option value="3">Entre 50 & 75 </option>
                  			  <option value="4">Mayor 75 </option>
                  			</select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="trunk_distorted"> % Tronco Torcido </label>
                    <div class="input-group" id="trunk_distorted_n">                    
                  		<span class="input-group-addon"> <i class="fa fa-id-card"></i> </span>                    
                  		<input type="text" class="form-control col-lg-6"  
                  			value=" @if ($tree->trunk_distorted == 1) Entre 0 & 25
                  					@elseif($tree->trunk_distorted == 2) Entre 25 & 50
                  					@elseif($tree->trunk_distorted == 3) Entre 50 & 75
                  					@elseif($tree->trunk_distorted == 4) Mayor 75
                  					@endif" disabled>
                  
                      	<span class="input-group-addon"> 
                      		 <i class="fa fa-magic" id="trunk_distorted"></i>
                      	</span>                    
                	</div>

                    <div class="input-group" style="display: none" id="trunk_distorted">
                      	<span class="input-group-addon"><i class="fa fa-xing"></i></span>
                        	<select class="form-control col-lg-6" id="trunk_distorted" name="trunk_distorted">
                        		<option value=""> Seleccione alguna por favor</option>
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
                        <input type="text" class="form-control col-lg-7" id="angle_tree" name="angle_tree" value="{{ $tree->angle_tree }}">
                      </div>
                      <span class="red-text"> {{ $errors->TreeError->first('angle_tree') }} </span>
                    </div>


                    <div class="form-group">
                      <label for="branch_dry"> Ramas Secas </label>
                      <div class="input-group" id="branch_dry_n">                    
                  		<span class="input-group-addon"> <i class="fa fa-id-card"></i> </span>                    
                  		<input type="text" class="form-control col-lg-6"  
                  			value=" @if ($tree->branch_dry == 1) Entre 0 & 25
                  					@elseif($tree->branch_dry == 2) Entre 25 & 50
                  					@elseif($tree->branch_dry == 3) Entre 50 & 75
                  					@elseif($tree->branch_dry == 4) Mayor 75
                  					@endif" disabled>
                  
	                      	<span class="input-group-addon"> 
	                      	 <i class="fa fa-magic" id="branch_dry"></i>
	                      	</span>                    
                		</div>

                      <div class="input-group" style="display: none" id="branch_dry">
                        <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                        <select class="form-control  col-lg-7" id="branch_dry" name="branch_dry">
                        	<option value=""> Seleccione alguna por favor</option>
                          <option value="1">Entre 0  & 25  </option>
                          <option value="2">Entre 25 & 50 </option>
                          <option value="3">Entre 50 & 75 </option>
                          <option value="4">Mayor 75 </option>
                        </select>
                      </div>
                    </div>

                                      

                    <div class="form-group">
                      <label for="root_healt"> Raiz con Plaga o Enfermedades </label>
                      <div class="input-group" id="root_healt_n">                    
                  		<span class="input-group-addon"> <i class="fa fa-id-card"></i> </span>                    
                  		<input type="text" class="form-control col-lg-6"  
                  			value=" @if ($tree->root_healt == 1) Entre 0 & 25
                  					@elseif($tree->root_healt == 2) Entre 25 & 50
                  					@elseif($tree->root_healt == 3) Entre 50 & 75
                  					@elseif($tree->root_healt == 4) Mayor 75
                  					@endif" disabled>
                  
	                      	<span class="input-group-addon"> 
	                      		<i class="fa fa-magic" id="root_healt"></i>
	                      	</span>                    
                		</div>

                      <div class="input-group" style="display: none" id="root_healt">
                        <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                        <select class="form-control  col-lg-7" id="root_healt" name="root_healt">
                        	<option value=""> Seleccione alguna por favor</option>
                          <option value="1">Entre 0  & 25  </option>
                          <option value="2">Entre 25 & 50 </option>
                          <option value="3">Entre 50 & 75 </option>
                          <option value="4">Mayor 75 </option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="trunk_healt"> Tronco Plaga o Enfermedades </label>
                      <div class="input-group" id="trunk_healt_n">                    
                  		<span class="input-group-addon"> <i class="fa fa-id-card"></i> </span>                    
                  		<input type="text" class="form-control col-lg-6"  
                  			value=" @if ($tree->trunk_healt == 1) Entre 0 & 25
                  					@elseif($tree->trunk_healt == 2) Entre 25 & 50
                  					@elseif($tree->trunk_healt == 3) Entre 50 & 75
                  					@elseif($tree->trunk_healt == 4) Mayor 75
                  					@endif" disabled>
                  
	                      	<span class="input-group-addon"> 
	                      		<i class="fa fa-magic" id="trunk_healt"></i>
	                      	</span>                    
                		</div>

                      <div class="input-group" style="display: none" id="trunk_healt">
                        <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                        <select class="form-control  col-lg-7" id="trunk_healt" name="trunk_healt">
                        	<option value=""> Seleccione alguna por favor</option>
                          <option value="1">Entre 0  & 25  </option>
                          <option value="2">Entre 25 & 50 </option>
                          <option value="3">Entre 50 & 75 </option>
                          <option value="4">Mayor 75 </option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="cup_healt"> Copa Plaga o Enfermedades </label>
                      <div class="input-group" id="cup_healt_n">                    
                  		<span class="input-group-addon"> <i class="fa fa-id-card"></i> </span>                    
                  		<input type="text" class="form-control col-lg-6"  
                  			value=" @if ($tree->cup_healt == 1) Entre 0 & 25
                  					@elseif($tree->cup_healt == 2) Entre 25 & 50
                  					@elseif($tree->cup_healt == 3) Entre 50 & 75
                  					@elseif($tree->cup_healt == 4) Mayor 75
                  					@endif" disabled>
                  
	                      	<span class="input-group-addon"> 
	                      		 <i class="fa fa-magic" id="cup_healt"></i> 
	                      	</span>                    
                		</div>

                      <div class="input-group" style="display: none" id="cup_healt">
                        <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                        <select class="form-control  col-lg-7" id="cup_healt" name="cup_healt">
                        	<option value=""> Seleccione alguna por favor</option>
                          <option value="1">Entre 0  & 25  </option>
                          <option value="2">Entre 25 & 50 </option>
                          <option value="3">Entre 50 & 75 </option>
                          <option value="4">Mayor 75 </option>
                        </select>
                      </div>
                    </div>          

                    <div class="form-group">
                      <label for="root_wounds"> Heridas en Raices </label>
                      <div class="input-group" id="root_wounds_n">                    
                  		<span class="input-group-addon"> <i class="fa fa-id-card"></i> </span>                    
                  		<input type="text" class="form-control col-lg-6"  
                  			value=" @if ($tree->root_wounds == 1) Entre 0 & 25
                  					@elseif($tree->root_wounds == 2) Entre 25 & 50
                  					@elseif($tree->root_wounds == 3) Entre 50 & 75
                  					@elseif($tree->root_wounds == 4) Mayor 75
                  					@endif" disabled>
                  
	                      	<span class="input-group-addon"> 
	                      		 <i class="fa fa-magic" id="root_wounds" ></i>
	                      	</span>                    
                		</div>

                      <div class="input-group" style="display: none" id="root_wounds">
                        <span class="input-group-addon"><i class="fa fa-medkit"></i></span>
                        <select class="form-control  col-lg-7" id="root_wounds" name="root_wounds">
                        	<option value=""> Seleccione alguna por favor</option>
                          <option value="1">Entre 0  & 25  </option>
                          <option value="2">Entre 25 & 50 </option>
                          <option value="3">Entre 50 & 75 </option>
                          <option value="4">Mayor 75 </option>
                        </select>
                      </div>
                    </div>          

                    <div class="form-group">
                      <label for="steam_wounds"> Heridas en Tallo </label>
                      <div class="input-group" id="steam_wounds_n">                    
                  		<span class="input-group-addon"> <i class="fa fa-id-card"></i> </span>                    
                  		<input type="text" class="form-control col-lg-6"  
                  			value=" @if ($tree->steam_wounds == 1) Entre 0 & 25
                  					@elseif($tree->steam_wounds == 2) Entre 25 & 50
                  					@elseif($tree->steam_wounds == 3) Entre 50 & 75
                  					@elseif($tree->steam_wounds == 4) Mayor 75
                  					@endif" disabled>
                  
	                      	<span class="input-group-addon"> 
	                      	 <i class="fa fa-magic" id="steam_wounds"></i>
	                      	</span>                    
                		</div>

                      <div class="input-group" style="display: none" id="steam_wounds">
                        <span class="input-group-addon"><i class="fa fa-medkit"></i></span>
                        <select class="form-control  col-lg-7" id="steam_wounds" name="steam_wounds">
                        	<option value=""> Seleccione alguna por favor</option>
                          <option value="1">Entre 0  & 25  </option>
                          <option value="2">Entre 25 & 50 </option>
                          <option value="3">Entre 50 & 75 </option>
                          <option value="4">Mayor 75 </option>
                        </select>
                      </div>
                    </div>          

                    <div class="form-group">
                      <label for="steam_wounds"> Heridas en Ramas </label>
                      <div class="input-group" id="branch_wounds_n">                    
                  		<span class="input-group-addon"> <i class="fa fa-id-card"></i> </span>                    
                  		<input type="text" class="form-control col-lg-6"  
                  			value=" @if ($tree->branch_wounds == 1) Entre 0 & 25
                  					@elseif($tree->branch_wounds == 2) Entre 25 & 50
                  					@elseif($tree->branch_wounds == 3) Entre 50 & 75
                  					@elseif($tree->branch_wounds == 4) Mayor 75
                  					@endif" disabled>
                  
	                      	<span class="input-group-addon"> 
	                      	 <i class="fa fa-magic" id="branch_wounds"></i> 
	                      	</span>                    
                		</div>

                      <div class="input-group" style="display: none" id="branch_wounds">
                        <span class="input-group-addon"><i class="fa fa-medkit"></i></span>
                        <select class="form-control  col-lg-7" id="steam_wounds" name="branch_wounds">
                        	<option value=""> Seleccione alguna por favor</option>
                          <option value="1">Entre 0  & 25  </option>
                          <option value="2">Entre 25 & 50 </option>
                          <option value="3">Entre 50 & 75 </option>
                          <option value="4">Mayor 75 </option>
                        </select>                        
                      </div>
                    </div>          

                    <div class="form-group">
                      <label for="cut_tecnic"> Podas Anti-Tecnicas </label>
                      <div class="input-group" id="cut_tecnic_n">                    
                  		<span class="input-group-addon"> <i class="fa fa-id-card"></i> </span>                    
                  		<input type="text" class="form-control col-lg-6"  
                  			value=" @if ($tree->cut_tecnic == 1) Entre 0 & 25
                  					@elseif($tree->cut_tecnic == 2) Entre 25 & 50
                  					@elseif($tree->cut_tecnic == 3) Entre 50 & 75
                  					@elseif($tree->cut_tecnic == 4) Mayor 75
                  					@endif" disabled>
                  
	                      	<span class="input-group-addon"> 
	                      		<i class="fa fa-magic" id="cut_tecnic" ></i> 
	                      	</span>                    
                		</div>

                      <div class="input-group" style="display: none" id="cut_tecnic">
                        <span class="input-group-addon"><i class="fa fa-scissors"></i></span>
                        <select class="form-control  col-lg-7" id="cut_tecnic" name="cut_tecnic">
                        	<option value=""> Seleccione alguna por favor</option>
                          <option value="1">Entre 0  & 25  </option>
                          <option value="2">Entre 25 & 50 </option>
                          <option value="3">Entre 50 & 75 </option>
                          <option value="4">Mayor 75 </option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="trunk_wounds"> Termita en Tronco </label>                      
                      <div class="input-group" id="trunk_wounds_n">                    
                  		<span class="input-group-addon"> <i class="fa fa-id-card"></i> </span>                    
                  		<input type="text" class="form-control col-lg-6"  
                  			value=" @if ($tree->trunk_wounds == 1) Entre 0 & 25
                  					@elseif($tree->trunk_wounds == 2) Entre 25 & 50
                  					@elseif($tree->trunk_wounds == 3) Entre 50 & 75
                  					@elseif($tree->trunk_wounds == 4) Mayor 75
                  					@endif" disabled>
                  
	                      	<span class="input-group-addon"> 
	                      		<i class="fa fa-magic" id="trunk_wounds"></i> 
	                      	</span>                    
                		</div>

                      <div class="input-group" style="display: none" id="trunk_wounds">
                        <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                        <select class="form-control  col-lg-7" id="trunk_wounds" name="trunk_wounds">
                        	<option value=""> Seleccione alguna por favor</option>
                          <option value="1">Entre 0  & 25  </option>
                          <option value="2">Entre 25 & 50 </option>
                          <option value="3">Entre 50 & 75 </option>
                          <option value="4">Mayor 75 </option>
                        </select>
                      </div>
                    </div> 

                    <div class="form-group">
                      <label for="parasite"> Pajarita (Parásitos, Injerto) </label>
                      <div class="input-group" id="parasite_n">                    
                  		<span class="input-group-addon"> <i class="fa fa-id-card"></i> </span>                    
                  		<input type="text" class="form-control col-lg-6"  
                  			value=" @if ($tree->parasite == 1) Entre 0 & 25
                  					@elseif($tree->parasite == 2) Entre 25 & 50
                  					@elseif($tree->parasite == 3) Entre 50 & 75
                  					@elseif($tree->parasite == 4) Mayor 75
                  					@endif" disabled>
                  
	                      	<span class="input-group-addon"> 
	                      		 <i class="fa fa-magic"  id="parasite"></i> 
	                      	</span>                    
                		</div>

                      <div class="input-group" style="display: none" id="parasite">
                        <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                        <select class="form-control  col-lg-7" id="parasite" name="parasite">
                        	<option value=""> Seleccione alguna por favor</option>
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
                        <input type="text" class="form-control  col-lg-7" id="cup_land" name="cup_land"  value="{{ $tree->cup_land }}">
                      </div>
                      <span class="red-text"> {{ $errors->TreeError->first('cup_land') }} </span>
                    </div>

                    <div class="form-group">
                      <label for="cup_floor"> Bajo Copa en Pasto </label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                        <input type="text" class="form-control  col-lg-7" id="cup_floor" name="cup_floor"  value="{{ $tree->cup_floor }}">
                      </div>
                      <span class="red-text"> {{ $errors->TreeError->first('cup_floor') }} </span>
                    </div>

                    <div class="form-group">
                      <label for="cup_bush"> Bajo Copa en Arbustos </label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                        <input type="text" class="form-control  col-lg-7" id="cup_bush" name="cup_bush"  value="{{ $tree->cup_bush }}">
                      </div>
                      <span class="red-text"> {{ $errors->TreeError->first('cup_bush') }} </span>
                    </div>

                    <div class="form-group">
                      <label for="cup_pavement"> Bajo Copa en Pavimento </label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                        <input type="text" class="form-control  col-lg-7" id="cup_pavement" name="cup_pavement"  value="{{ $tree->cup_pavement }}">
                      </div>
                      <span class="red-text"> {{ $errors->TreeError->first('cup_pavement') }} </span>
                    </div>

                    <div class="form-group">
                      <label for="structure_floor"> Conflicto Actual Infraest. en Suelo </label>
                      <div class="input-group" id="structure_floor_n">                    
                  		<span class="input-group-addon"> <i class="fa fa-id-card"></i> </span>                    
                  		<input type="text" class="form-control col-lg-6"  
                  			value=" @if ($tree->structure_floor == 1) No existente o Sin evidencia
                  					@elseif($tree->structure_floor == 2) Moderado, en contacto con Infraest. sin afectacion
                  					@elseif($tree->structure_floor == 3) Severo, pisos levantados o cuarteados                   					
                  					@endif" disabled>
                  
	                      	<span class="input-group-addon"> 
	                      		 <i class="fa fa-magic" id="structure_floor"></i>
	                      	</span>                    
                		</div>

                      <div class="input-group" style="display: none" id="structure_floor">
                        <span class="input-group-addon"><i class="fa fa-building-o"></i></span>
                        <select class="form-control  col-lg-7" id="structure_floor" name="structure_floor">
                        	<option value=""> Seleccione alguna por favor</option>
                          <option value="1">No existente o Sin evidencia </option>
                          <option value="2">Moderado, en contacto con infraest. sin afectación</option>
                          <option value="3">Severo, pisos levantadas o cuarteados </option>         
                        </select>
                      </div>
                    </div>          

                    <div class="form-group">
                      <label for="infraestructure_private"> Conflicto Actual Infraest. Privada Fachadas o Techos </label>
                      <div class="input-group" id="infraestructure_private_n">                    
                  		<span class="input-group-addon"> <i class="fa fa-id-card"></i> </span>                    
                  		<input type="text" class="form-control col-lg-6"  
                  			value=" @if ($tree->infraestructure_private == 1) No existente o sin evidencia
                  					@elseif($tree->infraestructure_private == 2) Moderado, en contacto con Infraest. sin afectacion
                  					@elseif($tree->infraestructure_private == 3) Severo, Paredes o Techos afectados                  					
                  					@endif" disabled>
                  
	                      	<span class="input-group-addon"> 
	                      		 <i class="fa fa-magic" id="infraestructure_private"></i>
	                      	</span>                    
                		</div>

                      <div class="input-group" style="display: none" id="infraestructure_private">
                        <span class="input-group-addon"><i class="fa fa-building-o"></i></span>
                        <select class="form-control  col-lg-7" id="infraestructure_private" name="infraestructure_private">
                        	<option value=""> Seleccione alguna por favor</option>
                          <option value="1">No existente o Sin evidencia </option>
                          <option value="2">Moderado, en contacto con infraest. sin afectación</option>
                          <option value="3">Severo, Paredes o Techos afectados </option>          
                        </select>
                      </div>
                    </div>          

                    <div class="form-group">
                      <label for="infraestructure_public"> Conflicto Actual Infraest. Publica </label>
                      <div class="input-group" id="infraestructure_public_n">                    
                  		<span class="input-group-addon"> <i class="fa fa-id-card"></i> </span>                    
                  		<input type="text" class="form-control col-lg-6"  
                  			value=" @if ($tree->infraestructure_public == 1) No existente o sin evidencia
                  					@elseif($tree->infraestructure_public == 2) Moderado, en contacto con Infraest. sin afectacion
                  					@elseif($tree->infraestructure_public == 3) Severo, Paredes o Techos afectados                  					
                  					@endif" disabled>
                  
	                      	<span class="input-group-addon"> 
	                      		<i class="fa fa-magic" id="infraestructure_public"></i> 
	                      	</span>                    
                		</div>

                      <div class="input-group" style="display: none" id="infraestructure_public">
                        <span class="input-group-addon"><i class="fa fa-institution"></i></span>
                        <select class="form-control  col-lg-7" id="infraestructure_public" name="infraestructure_public">
                        	<option value=""> Seleccione alguna por favor</option>
                          <option value="1">No existente o Sin evidencia </option>
                          <option value="2">Moderado, en contacto con infraest. sin afectación</option>
                          <option value="3">Severo, Paredes o Techos afectados </option>          
                        </select>
                      </div>
                    </div>          

                    <div class="form-group">
                      <label for="cable_light"> Conflicto Actual Cuerdas de Luz </label>
                      <div class="input-group" id="cable_light_n">                    
                  		<span class="input-group-addon"> <i class="fa fa-id-card"></i> </span>                    
                  		<input type="text" class="form-control col-lg-6"  
                  			value=" @if ($tree->cable_light == 1) No existente o sin evidencia
                  					@elseif($tree->cable_light == 2) Moderado, en contacto con Infraest. sin afectacion
                  					@elseif($tree->cable_light == 3) Severo, las cuerdas de luz estan entre las ramas                  					
                  					@endif" disabled>
                  
	                      	<span class="input-group-addon"> 
	                      		<i class="fa fa-magic" id="cable_light"></i>
	                      	</span>                    
                		</div>

                      <div class="input-group" style="display: none" id="cable_light">
                        <span class="input-group-addon"><i class="fa fa-stumbleupon"></i></span>
                        <select class="form-control  col-lg-7" id="cable_light" name="cable_light">
                        	<option value=""> Seleccione alguna por favor</option>
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
                        <input type="text" class="form-control  col-lg-7" id="distance_gas" name="distance_gas"  value="{{ $tree->distance_gas }}">
                      </div>
                      <span class="red-text"> {{ $errors->TreeError->first('distance_gas') }} </span>
                    </div>

                    <div class="form-group">
                      <label for="distance_floor"> Distancia Infraestructura Piso a Tronco </label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-yen"></i></span>
                        <input type="text" class="form-control  col-lg-7" id="distance_floor" name="distance_floor" value="{{ $tree->distance_floor }}">
                      </div>
                      <span class="red-text"> {{ $errors->TreeError->first('distance_floor') }} </span>
                    </div>

                    <div class="form-group">
                      <label for="distance_wall"> Distancia Infraestructura Paredes o Techos </label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-building-o"></i></span>
                        <input type="text" class="form-control  col-lg-7" id="distance_wall" name="distance_wall" value="{{ $tree->distance_wall }}">
                      </div>
                      <span class="red-text"> {{ $errors->TreeError->first('distance_wall') }} </span>
                    </div>

                    <div class="form-group">
                      <label for="distance_horizontal"> Distancia Horizontal Cuerdas a Ramas </label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-stumbleupon"></i></span>
                        <input type="text" class="form-control  col-lg-6" id="distance_horizontal" name="distance_horizontal" value="{{ $tree->distance_horizontal }}">
                        <span class="input-group-addon"><i class="fa fa-envira"></i></span>
                      </div>
                      <span class="red-text"> {{ $errors->TreeError->first('distance_horizontal') }} </span>
                    </div>

                    <div class="form-group">
                      <label for="distance_vertical"> Distancia Vertical Cuerdas a Ramas </label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-stumbleupon"></i></span>
                        <input type="text" class="form-control  col-lg-6" id="distance_vertical" name="distance_vertical" value="{{ $tree->distance_vertical }}">
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
                          <input type="text" class="form-control  col-lg-9" id="latitud" name="latitud" value="{{ $tree->latitud }}">
                        </div>
                        <span class="red-text"> {{ $errors->TreeError->first('latitud') }} </span>  
                      </div>
                        

                        <div class="col-lg-6"> 
                          <label for="longitud"> Longitud </label>
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                            <input type="text" class="form-control  col-lg-9" id="longitud" name="longitud" 
                            	value="{{ $tree->longitud }}">
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
                  	<i class="fa fa-tree"> </i> &nbsp; Actualizar </button>
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
    	$(document).ready(function (){    		
    		
    		$('#place').click(function () {
    			$('div#place_n').hide(); 
    			$('select#place').show();   			
    			$('div#place').show();    			
    		});

    		$('#vitality').click(function (){
    			$('div#vitality').hide();
    			$('div#healt').show();
    		});

    		$('#nest').click(function (){
    			$('div#nest_n').hide();
				$('div#nest').show();

    		});

    		$('#bats').click(function (){
    			$('div#bats_n').hide();
                $('div#bats').show();
    		});

    		$('#iguana').click(function (){
    			$('div#iguana_n').hide();
    			$('div#iguana').show();
    		});

    		$('#chipmunk').click(function (){
    			$('div#chipmunk_n').hide();
    			$('div#chipmunk').show();
    		});

    		$('#zariguella').click(function (){
    			$('div#zariguella_n').hide();
    			$('div#zariguella').show();
    		});

    		$('#nest_insect').click(function (){
    			$('div#nest_insect_n').hide();
    			$('div#nest_insect').show();
    		});

    		$('#dove').click(function (){
    			$('div#dove_n').hide();
    			$('div#dove').show();
    		});

    		$('#ants').click(function (){
    			$('div#ants_n').hide();
    			$('div#ants').show();
    		});

    		$('#root_tree').click(function (){
    			$('div#root_tree_n').hide();
    			$('div#root_tree').show();
    		});

    		$('#trunk_distorted').click(function (){
    			$('div#trunk_distorted_n').hide();
    			$('div#trunk_distorted').show();
    		});

    		$('#branch_dry').click(function (){
    			$('div#branch_dry_n').hide();
    			$('div#branch_dry').show();
    		});

    		$('#root_healt').click(function (){
    			$('div#root_healt_n').hide();
    			$('div#root_healt').show();
    		});

    		$('#trunk_healt').click(function (){
    			$('div#trunk_healt_n').hide();
    			$('div#trunk_healt').show();
    		});

    		$('#root_wounds').click(function (){
    			$('div#root_wounds_n').hide();
    			$('div#root_wounds').show();
    		});

    		$('#steam_wounds').click(function (){
    			$('div#steam_wounds_n').hide();
    			$('div#steam_wounds').show();
    		});

    		$('#cut_tecnic').click(function (){
    			$('div#cut_tecnic_n').hide();
    			$('div#cut_tecnic').show();
    		});

    		$('#trunk_wounds').click(function (){
    			$('div#trunk_wounds_n').hide();
    			$('div#trunk_wounds').show();
    		});

			$('#parasite').click(function (){
    			$('div#parasite_n').hide();
    			$('div#parasite').show();
    		});

    		$('#structure_floor').click(function (){
    			$('div#structure_floor_n').hide();
    			$('div#structure_floor').show();
    		});

    		$('#infraestructure_private').click(function (){
    			$('div#infraestructure_private_n').hide();
    			$('div#infraestructure_private').show();
    		});

    		$('#infraestructure_public').click(function (){
    			$('div#infraestructure_public_n').hide();
    			$('div#infraestructure_public').show();
    		});

    		$('#cable_light').click(function (){
    			$('div#cable_light_n').hide();
    			$('div#cable_light').show();
    		});

    		$('#branch_wounds').click(function (){
    			$('div#branch_wounds_n').hide();
    			$('div#branch_wounds').show();
    		});


    		$('#cup_healt').click(function (){
    			$('div#cup_healt_n').hide();
    			$('div#cup_healt').show();
    		});


    	new Cleave('input#tall', {            
            numeral: true        
        });
      
        new Cleave('input#tall_branch', {            
            numeral: true        
        });

        new Cleave('input#top', {            
            numeral: true        
        });

        new Cleave('input#shown', {            
            numeral: true        
        });

        new Cleave('input#shadown', {
            numeral: true        
        });

        new Cleave('input#perimeter', {
            numeral: true        
        });

        new Cleave('input#perimeter_chest', {
            numeral: true        
        });

        new Cleave('input#numbers_trunk', {
            numeral: true        
        });

        new Cleave('input#diameter_north', {
            numeral: true        
        });

        new Cleave('input#diameter_west', {
            numeral: true        
        });

        new Cleave('input#branch_trunk', {
            numeral: true        
        });

        new Cleave('input#angle_tree', {
            numeral: true        
        });

        new Cleave('input#cup_land', {
            numeral: true        
        });

        new Cleave('input#cup_floor', {
            numeral: true        
        });

        new Cleave('input#cup_bush', {
            numeral: true        
        });

        new Cleave('input#cup_pavement', {
            numeral: true        
        });

        new Cleave('input#distance_gas', {
            numeral: true        
        });

        new Cleave('input#distance_floor', {
            numeral: true        
        });

        new Cleave('input#distance_wall', {
            numeral: true        
        });

        new Cleave('input#distance_vertical', {
            numeral: true        
        });

        new Cleave('input#distance_horizontal', {            
            numeral: true        
        });
        

    	})
    </script>

@endsection