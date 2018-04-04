            
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <a class="mobile-search morphsearch-search" href="#">
                            <i class="ti-search"></i>
                        </a>
                        <a href="/">
                            <img class="img-fluid" src="{{ asset('DashboardX/Images/logo.png') }}" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>

                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">                            
                            <li class="user-profile header-notification">    

                                <a href="#!">
                                    @if( Auth::user()->genre == "m")
                                        <img src="{{ asset('DashboardX/Images/avatar_h.png') }}" class="img-circle" alt="User-Profile-Image">
                                    @else
                                        <img src="{{ asset('DashboardX/Images/avatar_m.png') }}" class="img-circle" alt="User-Profile-Image">
                                    @endif

                                    <span style="text-transform: capitalize;"> @if(Auth::check()) {{ Auth::user()->name }} @endif</span>
                                    <i class="ti-angle-down"></i>
                                </a>

                                <ul class="show-notification profile-notification">                                    
                                    <li>
                                        @if(Auth::check())                            
                                            <a 
                                                href="{{ route('logout') }}" 
                                                class="" 
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                                                <i class="fa fa-power-off"> </i> &nbsp;
                                                Cerrar Sesión
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                            
                                        @endif
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
