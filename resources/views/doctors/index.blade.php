@extends('layouts.panel')

@section('title', 'Medicos')

@section('content')

<div class="container-fluid mt--6">
  <div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header border-0">
          <h3 class="mb-0">Medicos</h3>
        </div>
        <div class="col text-right">
          <a href="{{ url('doctors/create') }}" class="btn btn-sm btn-success">
            Nuevo medico
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
              @foreach ($doctors as $doctor)
              <tr>
                <th scope="row">
                  {{ $doctor->name }}
                </th>
                <td>
                  {{ $doctor->email }}
                </td>
                <td>
                    {{ $doctor->dni }}
                  </td>
                <td>
                  <form action="{{ url('/doctors/'.$doctor->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
    
                    <a href="{{ url('/doctors/'.$doctor->id.'/edit') }}" class="btn btn-sm btn-primary">Editar</a>
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
                {{ $doctors->links() }}
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
@endsection