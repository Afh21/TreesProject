@extends('dashboard.lite.index')

@section('content')
        
    <style>
        table.table > thead > tr > th { font-weight: bold; }
        ul.dropdown-menu > li > a { padding: 15px; }
        ul.dropdown-menu > li { margin: 10px; }    
        .warning { background-color: #ffbc34 }    
        .success { background-color: #55ce63 }
    </style>

    <!-- Row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-block">

                    <h4 class="card-title"> <div class="fa fa-user-o"></div> &nbsp; Usuarios </h4>

                    <div class="table-responsive m-t-40">
                        <table class="table stylish-table">
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
                                                    <span class="round success"> <i class="fa fa-diamond"></i> </span>  
                                                @elseif($user->slug == 'geolocator') 
                                                    <span class="round warning"> <i class="fa fa-map-marker"> </i> </span>
                                                @else 
                                                    <span class="round danger"> <i class="fa fa-user-circle-o"></i> </span>
                                                @endif 
                                        </td>                                    

                                        <td>
                                            <h6> {{ $user->name }} </h6>
                                            <small class="text-muted">{{ $user->lastname }}</small>
                                        </td>
                                        <td>                                        
                                                @if($user->slug == 'administrator') 
                                                    <span class="label label-success"> Administrador </span>
                                                @elseif($user->slug == 'geolocator')  
                                                    <span class="label label-warning"> Geolocalizador </span>
                                                @else 
                                                    <span class="label label-default" style="color: black"> Invitado </span>
                                                @endif
                                        </td>
                                        <td>{{ $user->identity }}</td>
                                        <td class="text-center">
                                            @if($user->genre == 'f') 
                                                <i class="fa fa-venus"></i>
                                            @else 
                                                <i class="fa fa-mars"></i>
                                            @endif
                                        </td>
                                        <td>{{ $user->email }}</td>
                                        <td>                 
                                                                    
                                            <a href="{{ route('user.edit', $user->identity) }}" class="btn btn-sm btn-warning"> 
                                                <i class="fa fa-pencil"></i>  
                                            </a>
                                            
                                            <a href="{{ route('destroy.user', $user->identity) }}" class="btn btn-sm btn-danger">
                                                 <i class="fa fa-trash-o"></i> 
                                            </a>
                                        </td>

                                    </tr>

                                @endforeach

                            </tbody>
                        </table>
                        
                        <a href="{{ route('user.create') }}" class="btn btn-success" style="padding: 9px "> 
                            <i class="fa fa-user-plus"></i> &nbsp; Crear Usuario
                        </a>

                    </div>

                </div>

            </div>
            
            


        </div>
    </div>
    <!-- Row -->

@endsection