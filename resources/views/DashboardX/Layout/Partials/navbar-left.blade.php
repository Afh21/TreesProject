    
    <nav class="pcoded-navbar">
        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
        <div class="pcoded-inner-navbar main-menu">
            
            <div class="">                            
                <div class="main-menu-header">                
                    
                    @foreach(Auth::user()->roles as $rol) 
                        @if($rol->name == 'administrator') <i class="far fa-gem fa-2x"></i> 
                        @elseif ($rol->name == 'geolocator') <i class="fas fa-map-marker-alt fa-2x"></i> 
                        @else <i class="fas fa-2x fa-graduation-cap"></i>
                        @endif
                        
                    @endforeach
                     


                    <div class="user-details">                        
                            <span> Hola, {{ Auth::user()->name }}</span>
                        
                        <span id="more-details"> 
                            @foreach(Auth::user()->roles as $rol) 
                                @if($rol->name == 'administrator') 
                               
                                <span class="label label-success">
                                    <i class="far fa-2x fa-gem"></i>  Admin.
                                </span> 

                                @elseif($rol->name == 'geolocator') 
                                
                                <span class="label label-warning">
                                   <i class="fas fa-2x fa-map-marker-alt"></i>  Geolocalizador.
                                </span>

                                @else

                                <span class="label label-warning">
                                   <i class="fas fa-2x fa-graduation-cap"></i>  Invitado.
                                </span>

                                @endif 

                            @endforeach
                        </span>                        
                    </div>
                </div>                                
            </div>
            
            <div class="pcoded-search">
                <span class="searchbar-toggle">  </span>
                <div class="pcoded-search-box ">
                    
                </div>
            </div>

            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation"> Opciones </div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="active">
                    <a href="{{ route('dashboard.index') }}">
                        <span class="pcoded-micon"><i class="fas fa-tachometer-alt"></i><b>D</b></span>
                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)">
                        <span class="pcoded-micon"><i class="fa fa-map-marker-alt"></i></span>
                        <span class="pcoded-mtext" >Geolocalizacion</span>
                        <span class="pcoded-mcaret"></span>
                    </a>

                    <ul class="pcoded-submenu">
                        @if(Auth::user()->isAdministrator() || Auth::user()->isGeolocator())
                        <li class=" ">
                            <a href="{{ route('trees.index') }}">
                                <span class="pcoded-micon"><i class="fas fa-tree"></i></span>
                                <span class="pcoded-mtext">Arbolado</span>  
                                <span class="pcoded-mcaret"></span>                             
                            </a>
                        </li>
                        @endif

                        <li class=" ">
                            <a href="{{ route('map.index') }}">
                                <span class="pcoded-micon"><i class="fas fa-map-marker-alt"></i></span>
                                <span class="pcoded-mtext">Mapa</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>                                        
                        <li class=" ">
                            <a href="{{ route('mark.index') }}">
                                <span class="pcoded-micon"><i class="fas fa-fire"></i></span>
                                <span class="pcoded-mtext">Huella de CO2</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>                    

                    </ul>
                </li>
            </ul>

            @if(Auth::user()->isAdministrator())

            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Usuarios &amp; Roles</div>
            <ul class="pcoded-item pcoded-left-item">
                <li>
                    <a href="{{ route('user.index') }}">
                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Usuarios</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>                
            </ul>            

            @endif
                    
        </div>
    </nav>
