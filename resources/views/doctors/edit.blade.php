@extends('layouts.panel')

@section('title', 'Editar medico')

@section('content')

<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Editar medico</h3>
                </div>
                <div class="col text-right">
                    <a href="{{ url('doctors') }}" class="btn btn-sm btn-success">
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
                    <form action="{{ url('doctors/'.$doctor->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Nombre del medico</label>
                            <input type="text" name="name" value="{{ old('name',$doctor->name) }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" value="{{ old('email', $doctor->email) }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="dni">D.N.I.</label>
                            <input type="text" name="dni" value="{{ old('dni',$doctor->dni) }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="address">Dirección</label>
                            <input type="text" name="address" value="{{ old('address',$doctor->address) }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone">Telefono/celular</label>
                            <input type="text" name="phone" value="{{ old('phone',$doctor->phone) }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="text" name="password" value="{{ old('password') }}" class="form-control">
                            <em>Ingrese un valor solo si decea modificar la contraseña</em>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
    </div>
</div>
@endsection