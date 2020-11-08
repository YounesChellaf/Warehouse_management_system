@extends('layouts.login')
@section('content')
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="{{ asset('frontend/assets/images/easybusinesssuitelogo.png') }}" alt="">
                <hr>
                <img id="SonatrachLogo" src="{{ asset('frontend/assets/images/sonatrach_logo.gif') }}" alt="">
            </div>
            <form class="login100-form validate-form" role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
                <span class="login100-form-title">
            Connexion
          </span>
                @if(Session::get('wrong_credentials'))
                    <span class="error" style="color: red; margin-left: 15%;">Authentification échouée</span>
                @endif
                <div class="wrap-input100 validate-input" data-validate = "Le compte d'utilisateur est obligatoire">
                    <input id="email" type="email" class="input100" name="email" value="{{ old('email') }}" required autofocus>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
              <i class="fa fa-user" aria-hidden="true"></i>
            </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Le mot de passe est obligatoire">
                    <input id="password" type="password" class="input100" name="password" required>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
                </div>
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Go
                    </button>
                </div>
                <div class="text-center p-t-12">
            <span class="txt1">
              J'ai oublié
            </span>
                    <a class="txt2" href="#">
                        Mon mot de passe
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection