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
                                        <h4>Usuarios</h4>
                                        <span>Lista de Usuarios (Administradores, Geolocalizadores, Alumnos)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">                                            
                                            <i class="icofont icofont-home"></i>                                            
                                        </li>
                                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item">Usuarios
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Page-header end -->

                    <!-- Adminsitradores Y Geolocalizadores -->
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Lista Administradores & Geolocalizadores</h5>

                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option" style="width: 35px;">
                                                <li class=""><i class="icofont icofont-simple-left"></i></li>
                                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                            </ul>
                                        </div>                                                                                
                                    </div>
                                    <div class="card-block">
                                        
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">Nombes y Apellidos </th>                                    
                                                    <th> Tipo       </th>
                                                    <th> Identificación  </th>
                                                    <th> Género     </th>
                                                    <th> Email      </th>
                                                    <th> </th>
                                                </tr>
                                            </thead>
                                            <tbody>                                                                                    
                                                @foreach($users as $user)   
                                                    <tr>
                                                        <td style="width:50px;">
                                                                @if($user->slug == 'administrator') 
                                                                    <span class="round success"> <i class="fas fa-gem fa-2x"></i> </span>  
                                                                @elseif($user->slug == 'geolocator') 
                                                                    <span class="round warning"> <i class="fas fa-map-marker-alt fa-2x"> </i> </span>                                                                
                                                                @endif 
                                                        </td>                                    

                                                        <td>
                                                            <h6 style="text-transform: capitalize;"> {{ $user->name }} </h6>
                                                            <small class="text-muted">{{ $user->lastname }}</small>
                                                        </td>
                                                        <td>                                        
                                                                @if($user->slug == 'administrator') 
                                                                    <span class="label label-success"> Administrador </span>
                                                                @elseif($user->slug == 'geolocator')  
                                                                    <span class="label label-warning"> Geolocalizador </span>       
                                                                @endif
                                                        </td>
                                                        <td>{{ $user->identity }}</td>
                                                        <td class="text-center">
                                                            @if($user->genre == 'f') 
                                                                <i class="fa fa-venus fa-1x"></i>
                                                            @else 
                                                                <i class="fa fa-mars fa-1x"></i>
                                                            @endif
                                                        </td>
                                                        <td>@if(Auth::user()->isAdministrator || Auth::user()->email == $user->email)
                                                            {{ $user->email }}</td>
                                                            @endif
                                                        <td>                 
                                                        
                                                        @if(Auth::user()->identity == $user->identity || Auth::user()->isAdministrator())                           
                                                        <a href="{{ route('user.edit', $user->identity) }}" class="btn btn-sm btn-warning btn-round"> 
                                                                <i class="fas fa-pencil-alt"></i> Editar 
                                                        </a>
                                                        @endif
                                                        
                                                        @if(Auth::user()->isAdministrator())   
                                                        <a href="{{ route('destroy.user', $user->identity) }}" 
                                                            class="btn btn-sm btn-danger btn-round"> <i class="far fa-trash-alt fa-1x"></i> Eliminar
                                                        </a>
                                                        @endif
                                                        
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        
                                        @role('administrator')
                                        <a href="{{ route('user.create') }}" class="btn btn-success btn-round"> 
                                            <i class="fas fa-user-plus"></i> Crear Usuario
                                        </a>
                                        @endrole

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Invitados / Estudiantes -->
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Lista Usuario Invitados</h5>

                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option" style="width: 35px;">
                                                <li class=""><i class="icofont icofont-simple-left"></i></li>
                                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                            </ul>
                                        </div>                                                                                
                                    </div>
                                    <div class="card-block">
                                        
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">Nombes y Apellidos </th>                                    
                                                    <th> Tipo       </th>
                                                    <th> Identificación  </th>
                                                    <th> Género     </th>
                                                    <th> Email      </th>
                                                    <th> </th>
                                                </tr>
                                            </thead>
                                            <tbody>                                                                                    
                                                @foreach($inv as $invitado)   
                                                    <tr>
                                                        <td style="width:50px;">
                                                            <span class="round success"> <i class="fa fa-graduation-cap fa-2x"></i> </span>  
                                                        </td>                                                          

                                                        <td>
                                                            <h6 style="text-transform: capitalize;"> {{ $invitado->name }} </h6>
                                                            <small class="text-muted">{{ $invitado->lastname }}</small>
                                                        </td>
                                                        <td>                                        
                                                            <span class="label label-default"> Invitado / Estudiante </span>
                                                        </td>
                                                        <td>{{ $invitado->identity }}</td>
                                                        <td class="text-center">
                                                            @if($invitado->genre == 'f') 
                                                                <i class="fa fa-venus fa-1x"></i>
                                                            @else 
                                                                <i class="fa fa-mars fa-1x"></i>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            {{ $invitado->email }}</td>                                 
                                                        <td>                 
                                                        
                                                        @if(Auth::user()->identity == $invitado->identity || Auth::user()->isAdministrator())                           
                                                        <a href="{{ route('user.edit', $invitado->identity) }}" class="btn btn-sm btn-warning btn-round"> 
                                                                <i class="fas fa-pencil-alt"></i> Editar 
                                                        </a>
                                                        @endif
                                                        
                                                        @if(Auth::user()->isAdministrator())   
                                                        <a href="{{ route('destroy.user', $invitado->identity) }}" 
                                                            class="btn btn-sm btn-danger btn-round"> <i class="far fa-trash-alt fa-1x"></i> Eliminar
                                                        </a>
                                                        @endif
                                                        
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

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



