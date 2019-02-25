<ul class="sidebar-menu" data-widget="tree">
  <li class="header">HEADER</li>
  <!-- Optionally, you can add icons to the links -->
  <li {{ request()->is('administrador') ? 'class=active' : ''}}><a href="{{ url('administrador')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
  <li class="treeview {{ request()->is('articulos') ? 'active' : ''}}">
    <a href="#"><i class="fa fa-bars"></i> <span>Articulos</span>
      <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
      <li>
        <router-link to="/articulos/lista"><i class="fa fa-eye" ></i> Mis Articulos</router-link>
      </li>
      <li>
        <router-link to="/admin/create"><i class="fa fa-pencil" ></i> Crear Articulo</router-link>
      </li>
    </ul>
  </li>
  <li class="treeview {{ request()->is('articulos') ? 'active' : ''}}">
    <a href="#"><i class="fa fa-tv"></i> <span>Configuracion Web</span>
      <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
      <li>
        <router-link to="/admin/configuracion"><i class="fa fa-pencil" ></i> Pagina principal</router-link>
      </li>
    </ul>
  </li>
</ul>
