@extends('layouts.form')

@section('title','Inicio de sesión')

@section('subtitle','Ingresa tus datos para iniciar sesión')
    
@section('content')
<div class="container mt--8 pb-5">
    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-7">
        <div class="card bg-secondary border-0 mb-0">
          <div class="card-body px-lg-5 py-lg-5">
            <div class="text-center text-muted mb-4">
                @if($errors->any())     
                    <div class="alert alert-danger" role="alert">
                        <strong>Error! </strong>{{ $errors->first() }}
                    </div>
                @endif
            </div>
            <form role="form" method="POST" action="{{ route('login') }}">
            @csrf
            
              <div class="form-group mb-3">
                <div class="input-group input-group-merge input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                  </div>
                  <input class="form-control" placeholder="E-mail" id="email" type="email" {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                  @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-merge input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                  </div>
                  <input id="password" type="password" placeholder="Contraseña" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                  @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
              <div class="custom-control custom-control-alternative custom-checkbox">
                <input class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="custom-control-label" for="remember">
                    {{ __('Recuerdame') }}
                </label>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary my-4">Ingresar</button>
              </div>
            </form>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-6">
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('¿Olvidaste tu contraseña?') }}
                </a>
            @endif 
          </div>
          <div class="col-6 text-right">
            @if (Route::has('register'))
                <a class="btn btn-link" href="{{ route('register') }}">
                    {{ __('¿Aun no te has registrado?') }}
                </a>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
