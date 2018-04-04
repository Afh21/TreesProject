@extends('DashboardX.Layout.layout')

@section('content')

	<div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">

                    <!-- Page-header start -->
                    <div class="page-header card">
                        <div class="row align-items-end">
                            <div class="col-lg-5">
                                <div class="page-header-title">
                                    <i class="icofont icofont icofont icofont-file-document bg-c-pink"></i>
                                    <div class="d-inline">
                                        <h4>Arbolado</h4>
                                        <span>Esta sección es exclusiva para la lista de árboles</span>
                                    </div>
                                </div>
                            </div>
                            &nbsp; &nbsp;                                        
                            
                            <div class="col-lg-2">
                                <a href="{{ route('treePdf') }}" 
                                    class="btn btn-outline-primary btn-round" style="color: black" > 
                                    <i class="fa fa-file-pdf"></i> Generar PDF 
                                </a>
                            </div>
                            

                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="index.html">
                                                <i class="icofont icofont-home"></i>
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item">Arbolado
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
                                        <h5>Árboles</h5>                                                        
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
                                                                                
										<table class="table table-hovered">
								  			<thead>  			
								  				<tr>
								  									  			
													<td><strong>#</strong> 					</td>
													<td><strong> Nombre Cientifico 	</strong> </td>
													<td><strong> Nombre Común      	</strong></td>				 					
													<td><strong> Localización 		</strong> </td>
													<td><strong> Vitalidad       		</strong> </td>	
                                                    <td><strong> Estado             </strong></td>							
													<td><strong> Latitud  <i class="fas fa-map-marker-alt"></i>  </strong> </td>
													<td><strong> Longitud <i class="fas fa-map-marker-alt"></i> </strong> </td>
													
												</tr>
														 			
								  			</thead>
								  			
								  			<tbody>		
								  					<?php $n=0; ?>
								  			@foreach($trees as $tree)								  					
												<tr>
													<td> {{ $n+=1 }} </td>
													<td> {{ $tree->name }}</td>
													<td> {{ $tree->name_comun }} </td>
													
													<td> @if($tree->place == 1) Anden 
															@elseif($tree->place == 2) Parque @elseif($tree->place == 3) Rivera 
															@elseif($tree->place == 4) Río @elseif($tree->place == 5) Antejardín
															@elseif($tree->place == 6) Separador @elseif($tree->place == 7) Borde Carretera 
														    @elseif($tree->place == 8) Ferrocarril @else Lugar Inaccesible @endif</td>


													<td> @if($tree->healt==1) Sano <i class="fas fa-heart"></i>
															@elseif($tree->healt==2) Enfermo <i class="fas fa-heartbeat"></i> 
															@else Muerto <i class="fa fa-heart"></i> @endif
														</td>
                                                    <td>
                                                        <span class="label @if($tree->state==1) label-primary @else label-danger @endif">@if($tree->state == 1) Activo @else Inactivo @endif
                                                        </span>
                                                    </td>


													<td> {{ $tree->latitud }}  </td>
													<td> {{ $tree->longitud }} </td>
													
													<td> 
														
														<a href="{{ route('trees.edit', $tree->id) }}" class="btn btn-sm btn-warning btn-round"> 
				                                            <i class="fas fa-edit"></i> Editar </a>
				                                        
				                                        @if(Auth::user()->isAdministrator())
					                                        <button type="button" 
                                                                class="btn btn-sm btn-danger btn-round"
                                                                data-toggle="modal" data-target="#myModal" >
					                                             <i class="fas fa-trash"></i> Eliminar
					                                        </button>
					                                    @endif

                                                        <!--- Modal -->
                                                        <div class="modal fade modal-md" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                              <div class="modal-dialog" role="document">
                                                                <div class="modal-content" style="border-radius: .8rem; border-color: #FC6180">
                                                                  
                                                                  <div class="modal-header" style="background-color: #FC6180; border-top-right-radius:.7rem; border-top-left-radius: .7rem" >
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                    <h5 class="modal-title" id="myModalLabel">Causa de la Eliminación:</h5>
                                                                  </div>

                                                                <form action="{{ route('destroy.trees', $tree->id) }}">   

                                                                  <div class="modal-body">                                            
                                                                      <div class="form-group">
                                                                        <label for="message-text" class="control-label">Causa:</label>
                                                                        <textarea class="form-control" id="causa" name="cause" 
                                                                            placeholder="Escriba aquí la causa de eliminación, (extracción, muerte, tala) " style="border-radius: 5px">
                                                                        </textarea>
                                                                      </div>
                                                                  </div>

                                                                  <div class="modal-footer">
                                                                    <button type="button" class="btn btn-sm btn-default btn-round" data-dismiss="modal"> 
                                                                        <i class="fa fa-times-circle"></i> Cancelar
                                                                    </button>
                                                                    <button type="submit" class="btn btn-sm btn-danger btn-round"> 
                                                                        <i class="fas fa-trash"></i> Eliminar
                                                                    </button>
                                                                  </div>

                                                                </form>

                                                                </div>
                                                              </div>
                                                            </div>
                                                            <!-- Fin Modal -->






													</td>		
												@endforeach															
											</tbody>
										</table>
								

										<div class="row" style="padding-left: 20px">
											
                                            <a href="{{ route('trees.create') }}" 
                                                class="btn btn-success btn-round" style="color: white" > 
                                                <i class="fa fa-map-marker"></i> Crear Árbol 
                                            </a>                                            

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
        
@endsection