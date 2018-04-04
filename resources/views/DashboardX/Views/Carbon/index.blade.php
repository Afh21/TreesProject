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
                                        <h4>Huella de Carbono CO2</h4>
                                        <span>Aquí se visualizan todas las Huellas de Carbono creadas.</span>
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
                                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="{{ route('mark.index') }}">Huella de Carbono</a>
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
                                        <h5>Huella de Carbono CO2</h5>
                                        
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
                                        
                                        <div class="table-responsive m-t-40">
					                        <table class="table stylish-table">
					                            <thead>
					                                <style>.table-responsive > table > thead > tr > th { font-weight: bold; } </style>
					                                <tr>
					                                    <th colspan="2">Nombes y Apellidos </th>                                    
					                                    <th> Tipo / Rol </th>
					                                    <th> Género </th>     
					                                    <th> Email  </th>                               
					                                    <th> Huella Carbono</th>
					                                </tr>
					                            </thead>
					                            <tbody>
					                                @foreach($mark as $hc) 
					                                <tr>                                                                         					
														<td><span class="round"> <i class="fa fa-fire fa-2x"></i> </span></td>
					                                    <td> 
					                                        @if($hc->type == 1) <span class="label label-success"> <i class="far fa-gem"></i>&nbsp; Elab. Administrador</span>
					                                        @elseif($hc->type == 2) <span class="label label-primary">Elab. Geolocalizador</span>
					                                        @else <span class="label label-default">Elab. Estudiante/Invitado </span> @endif
					                                    </td>

					                                    <td class="text-center"> @if($hc->type == 1) 
					                                            <span class="round"> 
					                                                <i class="far fa-gem fa-2x"></i> </span>
					                                         @else
					                                            <span class="round" style="background-color: #ffbc34"> 
					                                                <i class="fa fa-map-marker fa-2x"></i></span>
					                                         @endif                                             
					                                    </td>
					                                    <td> @if($hc->genre == 'm') 
					                                            &nbsp; &nbsp; <span><i class="fa fa-mars fa-2x"></i></span>
					                                        @else
					                                            &nbsp; &nbsp; <span class="i fa fa-venus fa-2x"></span>
					                                        @endif
					                                    </td>
					                                    <td>
					                                        {{ $hc->email }}
					                                    </td>
					                                    <td>
					                                        <span class="label label-default" 
					                                            style="font-size: 0.8em; font-weight: bold; padding: 15px 15px; 
					                                             color: @if ($hc->hc > 1.90) red @else black @endif "> 
					                                            {{ $hc->hc }}  &nbsp;
					                                            <span class="label label-md @if ($hc->hc > 1.90) label-danger @else label-primary @endif ">
					                                            	@if ($hc->hc > 1.90) Alta @else Normal @endif 
					                                            </span>
					                                        </span>
					                                    </td>
					                                    <td>
					                                        @if(Auth::user()->email === $hc->email || Auth::user()->isAdministrator)                                         
					                                            <a href="{{ route('destroy.mark', $hc->id) }}" class="btn btn-sm btn-danger btn-round">
					                                                 <i class="fa fa-trash"></i> Eliminar
					                                            </a>
					                                        @endif
					                                    </td>
					                                </tr>
					                                @endforeach

					                            </tbody>
					                        </table>
					                    </div>

					        		    
					        		    <div class="col-lg-4">
					              			<a href="{{ route('mark.create') }}" class="btn btn-success btn-md btn-round"> 
					              				<i class="fa fa-fire"> </i> &nbsp; Crear </a>
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