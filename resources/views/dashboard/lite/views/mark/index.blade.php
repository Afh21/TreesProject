@extends('dashboard.lite.index')

@section('content')
	
	<div class="row">
    	<div class="col-lg-12">
      		<div class="card">
        		<div class="card-block">
			
					<div class="table-responsive m-t-40">
                        <table class="table stylish-table">
                            <thead>
                                <style>.table-responsive > table > thead > tr > th { font-weight: bold; border-style: dashed; } </style>
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
									<td><span class="round"> <i class="fa fa-fire"></i> </span></td>
                                    <td> 
                                        @if($hc->type == 1) Elab. Administrador 
                                        @elseif($hc->type == 2) Elab. Geolocalizador 
                                        @else Elab. Estudiante/Invitado  @endif
                                    </td>

                                    <td> @if($hc->type == 1) 
                                            <span class="round"> 
                                                <i class="fa fa-diamond"></i> </span>
                                         @else
                                            <span class="round" style="background-color: #ffbc34"> 
                                                <i class="fa fa-map-marker"></i></span>
                                         @endif                                             
                                    </td>
                                    <td> @if($hc->genre == 'm') 
                                            &nbsp; &nbsp; <span><i class="fa fa-mars"></i></span>
                                        @else
                                            &nbsp; &nbsp; <span class="i fa fa-venus"></span>
                                        @endif
                                    </td>
                                    <td>
                                        {{ $hc->email }}
                                    </td>
                                    <td>
                                        <span class="label label-default" 
                                            style="font-size: 1.6em; font-weight: bold; padding: 15px 15px; 
                                            color: {{ $hc->hc > 1.90 ? "#f62d51" : "#40A810" }} "> 
                                            {{ $hc->hc }} </span>
                                    </td>
                                    <td>
                                        @if(Auth::user()->email === $hc->email)                                         
                                            <a href="{{ route('destroy.mark', $hc->id) }}" class="btn btn-sm btn-danger">
                                                 <i class="fa fa-trash-o"></i> 
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

        		    
        		    <div class="col-lg-4">
              			<a href="{{ route('mark.create') }}" class="btn btn-success btn-md"> <i class="fa fa-fire"> </i> &nbsp; Crear </a>
          			</div>

        		</div>
      		</div>
	    </div>
  	</div>

	
@endsection