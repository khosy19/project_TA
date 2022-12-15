<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item has-treeview">
        <a href="{{ url('layouts/home') }}" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
      </li>
      <li class="nav-item has-treeview">
        <a href="{{ url('admin/karyawan-home') }}" class="nav-link">
          <i class="nav-icon fas fa-users"></i>
          <p>
            Data Karyawan
            <i class="right fas fa-angle-right"></i>
          </p>
        </a>
      </li>
      <li class="nav-item has-treeview">
        <a href="{{ url('admin/jabatan-home') }}" class="nav-link">
          <i class="nav-icon fas fa-users"></i>
          <p>
            Data Jabatan
            <i class="right fas fa-angle-right"></i>
          </p>
        </a>
      </li>
      <li class="nav-item has-treeview">
        <a href="{{ url('admin/menu-home') }}" class="nav-link">
          <i class="nav-icon fas fa-users"></i>
          <p>
            Data Menu
            <i class="right fas fa-angle-right"></i>
          </p>
        </a>
      </li>
      <li class="nav-item has-treeview">
        <a href="{{ url('admin/kategori-home') }}" class="nav-link">
          <i class="nav-icon fas fa-users"></i>
          <p>
            Data Kategori
            <i class="right fas fa-angle-right"></i>
          </p>
        </a>
      </li>
    </ul>
</nav>