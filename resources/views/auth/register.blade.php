@extends('layouts.form')

@section('title','Registro')

@section('subtitle','Ingresa tus datos para registrarte')

@section('content')
    <!-- Page content -->
    <div class="container mt--8 pb-5">
        <!-- Table -->
        <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <div class="card bg-secondary border-0">
            <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-4">
                    @if($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <strong>Error! </strong>{{ $errors->first() }}
                    </div>
                @endif
                </div>
                <form role="form" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input placeholder="Nombre" id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input placeholder="E-mail" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input placeholder="Contraseña" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input placeholder="Confirmar contraseña" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-4">Registrarce</button>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection
