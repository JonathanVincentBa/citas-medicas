@extends('layouts.panel')

@section('title', 'Pacientes')

@section('content')

<div class="container-fluid mt--6">
  <div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header border-0">
          <h3 class="mb-0">Pacientes</h3>
        </div>
        <div class="col text-right">
          <a href="{{ url('patients/create') }}" class="btn btn-sm btn-success">
            Nuevo paciente
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
                <th scope="col">E-mail</th>
                <th scope="col">D.N.I.</th>
                <th scope="col">Opciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($patients as $patient)
              <tr>
                <th scope="row">
                  {{ $patient->name }}
                </th>
                <td>
                  {{ $patient->email }}
                </td>
                <td>
                    {{ $patient->dni }}
                  </td>
                <td>
                  <form action="{{ url('/patients/'.$patient->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
    
                    <a href="{{ url('/patients/'.$patient->id.'/edit') }}" class="btn btn-sm btn-primary">Editar</a>
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
              <li class="page-item">
                {{ $patients->links() }}
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
@endsection