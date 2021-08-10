
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('/images/logo.png') }}" alt="Admin Logo" class="brand-image "
           style="opacity: .9">
      <span class="brand-text font-weight-light">Panel de Control</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
         <a>{{ $usuario->nombre.' '.$usuario->apellido }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="{{ url('/admin/inicio') }}" target="frameprincipal" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Inicio
                
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tasks"></i>
              <p>
              Cartas de Venta
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <!--@hasrole('admin')-->
              <li class="nav-item">
                <a style="margin-left: 15px;" href="{{ url('/admin/crear_venta') }}" target="frameprincipal" class="nav-link">
                  <i class="far fa-file nav-icon"></i>
                  <p>Nueva Carta</p>
                </a>
              </li>
             <!-- @endhasrole-->
              <li class="nav-item">
                <a style="margin-left: 15px;" href="{{ url('/admin/load_ventas') }}" target="frameprincipal" class="nav-link">
                  <i class="far fa-list-alt nav-icon"></i>
                  <p>Cartas Registradas</p>
                </a>
              </li>
            </ul>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

