@extends('layouts.panel')

@section('title', 'Crear')

@section('content')

<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Nuevo paciente</h3>
                </div>
                <div class="col text-right">
                    <a href="{{ url('patients') }}" class="btn btn-sm btn-success">
                        Cancelar y volver
                    </a>
                </div>
                <!-- Light table -->
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif
                    <form action="{{ url('patients') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nombre del paciente</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="dni">D.N.I.</label>
                            <input type="text" name="dni" value="{{ old('dni') }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="address">Dirección</label>
                            <input type="text" name="address" value="{{ old('address') }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone">Telefono/celular</label>
                            <input type="text" name="phone" value="{{ old('phone') }}" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
    </div>
</div>
@endsection