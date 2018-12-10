@extends('layouts.app')

@section('content')
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/main_styles.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet"/>


    <header class="header" id="header">
        <div>
            <div class="header_top">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_top_content d-flex flex-row align-items-center justify-content-start">
                                <div class="logo">
                                    <img src="{{asset('images/matasanos.png')}}" style="width:300px">
                                </div>
                                <div class="header_top_extra d-flex flex-row align-items-center justify-content-start ml-auto">
                                    <div class="header_top_nav">
                                        <ul class="d-flex flex-row align-items-center justify-content-start">
                                            <li><a href="https://hospital-matasanos.herokuapp.com">Inicio</a></li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </header>
    <br> <br> <br>

    <div class="container">


        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Usuarios') }}</div>


                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo de Usuario') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Recuerdame') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="info_form_button" style="width:40%; ">
                                        {{ __('Iniciar sesión') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Olvidaste la Contraseña') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <footer class="footer" style="bottom: 100%">
        <div class="footer_bar" style="bottom: 100% !important;">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="footer_bar_content d-flex flex-sm-row flex-column align-items-lg-center align-items-start justify-content-start">
                            <nav class="footer_nav">
                                <ul class="d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
                                    <li class="active"><a href="index.blade.php">Inicio</a></li>
                                    <li><a href="#">Acerca de nosotros</a></li>
                                    <li><a href="#">Servicios</a></li>
                                    <li><a href="#">Contacto</a></li>
                                </ul>
                            </nav>
                            <div class="footer_links">
                                <ul class="d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
                                    <li><a href="#">Inicio</a></li>
                                    <li><a href="#">Servicios de emergencias</a></li>
                                </ul>
                            </div>
                            <div class="footer_phone ml-lg-auto">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>+34 586 778 8892</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection
