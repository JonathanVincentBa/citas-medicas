@extends('layouts.panel')

@section('content')

<div class="container-fluid mt--6">
  <div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header border-0">
          <h3 class="mb-0">Especialidades</h3>
        </div>
        <div class="col text-right">
          <a href="{{ url('specialties/create') }}" class="btn btn-sm btn-success">
            Nueva especialidad
          </a>
        </div>
        <!-- Light table -->
        <div class="card-body">
          @if (session('notification'))
          <div class="alert alert-success" role="alert">
            {{ session('notification') }}
          </div>
          @endif
        </div>    
        <div class="table-responsive">
           <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Opciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($specialties as $specialty)
              <tr>
                <th scope="row">
                  {{ $specialty->name }}
                </th>
                <td>
                  {{ $specialty->description }}
                </td>
                <td>
                  <form action="{{ url('/specialties/'.$specialty->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
    
                    <a href="{{ url('/specialties/'.$specialty->id.'/edit') }}" class="btn btn-sm btn-primary">Editar</a>
                    <button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- Card footer -->
        <div class="card-footer py-4">
          <nav aria-label="...">
            <ul class="pagination justify-content-end mb-0">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">
                  <i class="fas fa-angle-left"></i>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">
                  <i class="fas fa-angle-right"></i>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
@endsection