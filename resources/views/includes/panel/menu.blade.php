<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="{{ asset('img/brand/blue.png') }}" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/home') }}">
                <i class="ni ni-tv-2 text-danger"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/specialties') }}">
                <i class="ni ni-planet text-purple"></i>
                <span class="nav-link-text">Especialidades</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/doctors') }}">
                <i class="ni ni-single-02 text-red"></i>
                <span class="nav-link-text">Medicos</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/patients') }}">
                <i class="ni ni-satisfied text-info"></i>
                <span class="nav-link-text">Pacientes</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/patients') }}">
                <i class="ni ni-bullet-list-67 text-primary"></i>
                <span class="nav-link-text">Citas Medicas</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('formLogout').submit();">
                <i class="ni ni-key-25 "></i>
                <span class="nav-link-text">Cerrar sesión</span>
              </a>
              <form action="{{ route('logout') }}" method="POST" style="display: none;" id="formLogout">
                @csrf            
              </form>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Reportes</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html" target="_blank">
                <i class="ni ni-sound-wave text-yellow"></i>
                <span class="nav-link-text">Frecuencia de citas</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html" target="_blank">
                <i class="ni ni-spaceship text-orange"></i>
                <span class="nav-link-text">Médicos más activos</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
</nav>