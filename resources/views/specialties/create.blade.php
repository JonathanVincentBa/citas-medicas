@extends('layouts.panel')

@section('title', 'Crear')

@section('content')

<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Nueva especialidad</h3>
                </div>
                <div class="col text-right">
                    <a href="{{ url('specialties') }}" class="btn btn-sm btn-success">
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
                    <form action="{{ url('specialties') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nombre de la especialidad</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción de la especialidad</label>
                            <input type="text" name="description" value="{{ old('description') }}" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
    </div>
</div>
@endsection