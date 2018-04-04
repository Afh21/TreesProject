        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">                        
                        <span>
                            <!-- dark Logo text -->                            
                            <a href="{{ route('dashboard.index') }}">
                                <img src="{{ asset('css/css_dashboard/images/logo-text.png') }}" alt="homepage" class="dark-logo" />
                            </a>
                        </span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0 ">
                        <!-- This is  -->
                        
                        <li class="nav-item"> 
                            <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="#">
                                <i class="ti-menu"></i>
                            </a> 
                        </li>
                                                
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" 
                            aria-haspopup = "true" aria-expanded="false" >
                                
                                Bienvenid@, &nbsp;

                                @if(Auth::user()->isAdministrator()) <i class="fa fa-diamond"></i> 
                                @elseif(Auth::user()->isGeolocator()) <i class="fa fa-map-marker"></i>
                                @else <i class="fa fa-user-circle-o"></i> @endif
                                
                                &nbsp; <span style="color: black; font-weight: bold; letter-spacing: -1.2px"> {{ Auth::user()->name }} {{ Auth::user()->lastname }} </span>. 

                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
