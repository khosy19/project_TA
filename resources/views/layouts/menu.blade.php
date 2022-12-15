<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Data Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
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
              <li class="nav-item has-treeview">
                <a href="{{ url('admin/meja-home') }}" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Data Meja
                    <i class="right fas fa-angle-right"></i>
                  </p>
                </a>
              </li>
            </ul>
          </li> 
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Data Transaksi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item has-treeview">
                <a href="{{ url('admin/karyawan-home') }}" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Data Pemesanan
                    <i class="right fas fa-angle-right"></i>
                  </p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="{{ url('admin/jabatan-home') }}" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Data Order
                    <i class="right fas fa-angle-right"></i>
                  </p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="{{ url('admin/menu-home') }}" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Data Antrian
                    <i class="right fas fa-angle-right"></i>
                  </p>
                </a>
              </li>
          </li>    
    </ul>
</nav>