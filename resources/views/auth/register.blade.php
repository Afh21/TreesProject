<!DOCTYPE html>
<html lang="es">
<head>
    <title>Arbolado Urbanos - Honda </title>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="CodedThemes">
    <meta name="keywords" content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="CodedThemes">

    <link rel="icon" href="DashboardX/Images/marker.ico" type="image/png">
   
    @include('DashboardX.Links.Css.partials_css')
</head>


<body class="fix-menu">

    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
            </div>
        </div>
    </div>



<!-- Pre-loader end -->
    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="signup-card card-block auth-body mr-auto ml-auto">
                        

                        <form class="md-float-material" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="text-center">
                                <img src="DashboardX/Images/auth/logo.png" alt="logo.png">
                            </div>
                            
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Registro.</h3>
                                    </div>
                                </div>
                                <hr/>

                                
                                    <div class="input-group">
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Ingrese su(s) nombre(s) completo(s)">

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="input-group">
                                        <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required placeholder="Ingrese su(s) apellido(s) completo(s)">

                                        @if ($errors->has('lastname'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('lastname') }}</strong>
                                            </span>
                                        @endif
                                    </div>                                                     
                                                                
                                    <div class="input-group">
                                        <input id="identity" type="text" class="form-control" name="identity" value="{{ old('identity') }}" required placeholder="Ingrese su número de identificación">

                                        @if ($errors->has('identity'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('identity') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    

                                    <div class="input-group">                                        
                                        <select name="genre" id="genre" class="form-control">
                                            <option value="m">Masculino</option>
                                            <option value="f">Femenino</option>
                                        </select>

                                        @if ($errors->has('genre'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('genre') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="input-group">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Ingrese su Correo Institucional (Coreducación)">

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                                  
                                    <div class="input-group">
                                        <input id="password" type="password" class="form-control" name="password" required placeholder="Ingrese una Contraseña ">

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                                                    
                                    <div class="input-group">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirme la Contraseña Ingresada " required>
                                    </div>                                    

                                    <div class="row m-t-30">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Registrarse Ahora!</button>
                                        </div>
                                    </div>

                                <hr/>
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-left m-b-0">Bienvenido.</p>
                                        <p class="text-inverse text-left"><b>Honda, Tolima - Coreducación </b></p>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="DashboardX/Images/auth/Logo-small-bottom.png" alt="small-logo.png">
                                    </div>
                                </div>
                            </div>

                            </div> 
                        </form>
                        <!-- end of form -->



                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>


                {{--  
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                --}}


    @include('DashboardX.Links.Js.partial_js')  
    
</body>

</html>

