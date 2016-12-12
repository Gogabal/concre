  <!-- Inner sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">

      <li><a href="{{ route('backend.index') }}"><i class="fa fa-home"></i><span>Inicio</span></a></li>

      <!-- Ventas -->
      <li><a href="#"><i class="fa fa-usd"></i><span>Ventas</span> <span class="fa fa-angle-left pull-right"></span></a></li>

      <!-- Clientes -->
      <li><a href="{{ route('backend.clientes.index') }}"><i class="fa fa-building"></i><span>Clientes</span> <span class="fa fa-angle-left pull-right"></span></a></li>

      <!-- Productos -->
      <li><a href="#"><i class="fa fa-puzzle-piece"></i><span>Productos</span> <span class="fa fa-angle-left pull-right"></span></a></li>

      <!-- Obras -->
      <li><a href="#"><i class="fa fa-sitemap"></i><span>Obras</span> <span class="fa fa-angle-left pull-right"></span></a></li>


      <!-- Plantas -->
      <li><a href="#"><i class="fa fa-industry"></i><span>Plantas</span> <span class="fa fa-angle-left pull-right"></span></a></li>

      <!-- Conductores -->
      <li><a href="#"><i class="fa fa-users"></i><span>Conductores</span> <span class="fa fa-angle-left pull-right"></span></a></li>
      
      <!-- Camiones -->
      <li><a href="#"><i class="fa fa-truck"></i><span>Camiones</span> <span class="fa fa-angle-left pull-right"></span></a></li>
      
      <!-- Usuarios -->
      <li><a href="#"><i class="fa fa-user"></i><span>Usuarios</span> <span class="fa fa-angle-left pull-right"></span></a></li>

      <!-- Variables -->
     
      <li class="treeview">
        <a href="#"><i class="fa fa-wrench"></i><span>Variables</span> <span class="fa fa-angle-left pull-right"></span></a>
        <ul class="treeview-menu">

          <li class="treeview">
            <a href="#"><i class="fa fa-caret-right"></i><span>Ubicación</span> <span class="fa fa-angle-left pull-right"></span></a>
              <ul class="treeview-menu">
                <li><a href="{{ route('backend.regiones.index') }}"><i class="fa fa-circle-o"></i><span>Regiones</span></a></li>              
                <li><a href="{{ route('backend.comunas.index') }}"><i class="fa fa-circle-o"></i><span>Comunas</span></a></li>
                <li><a href="{{ route('backend.ciudades.index') }}"><i class="fa fa-circle-o"></i><span>Ciudades</span></a></li>

              </ul>
          </li>
        </ul>
      </li>

    </ul><!-- /.sidebar-menu -->

  </div><!-- /.sidebar -->