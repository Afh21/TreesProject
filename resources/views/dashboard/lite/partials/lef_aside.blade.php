        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        
                        <li>
                            <a href="{{ route('dashboard.index') }}" class="waves-effect">
                                <i class="fa fa-dashboard m-r-10" aria-hidden="true"></i> Dashboard
                            </a>
                        </li>
                        
                        @if(Auth::user()->isAdministrator())
                            <li>                    
                                <a href="{{ route('user.index') }}" class="waves-effect">
                                    <i class="fa fa-user m-r-10" aria-hidden="true"></i> Usuarios
                                </a>        
                            </li>
                        @endif

                        @if(Auth::user()->isAdministrator() || Auth::user()->isGeolocator)
                        <li>                    
                            <a href="{{ route('trees.index') }}" class="waves-effect">
                                <i class="fa fa-tree m-r-10" aria-hidden="true"></i> Árboles
                            </a>        
                        </li>
                        @endif

                        <li>                    
                            <a href="{{ route('map.index') }}" class="waves-effect">
                                <i class="fa fa-map-o m-r-10" aria-hidden="true"></i> Mapa 
                            </a>        
                        </li>

                        <li>                    
                            <a href="{{ route('mark.index') }}" class="waves-effect">
                                <i class="fa fa-fire m-r-10" aria-hidden="true"></i> Huella de Carbono
                            </a>        
                        </li>                                   

                    </ul>

                    <div class="m-t-30" style="margin: 15px">
                        @if(Auth::check())                            

                            <a 
                                href="{{ route('logout') }}" 
                                class="btn btn-danger" 
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                                <i class="fa fa-power-off"> </i> &nbsp;
                                Cerrar Sesión
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                            
                        @endif
                    </div>                    

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        