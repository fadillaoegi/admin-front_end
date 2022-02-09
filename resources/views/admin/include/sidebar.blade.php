<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="{{ asset('adminLTE/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">PT Raharja Indoagri</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('adminLTE/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Admin</a>
      </div>
    </div>
    

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        
        <li class="nav-header">Daftar Menu</li>
        {{-- Beranda --}}
        <li class="nav-item">
          <a href="{{ route('adminIndex') }}" class="nav-link">
            <i class="nav-icon fas fa-image"></i>
            <p>
              Beranda
            </p>
          </a>
        </li>
        {{-- End Beranda --}}

        {{-- Data Barang --}}
        <li class="nav-item">
          <a href="{{ route('dataBarang') }}" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Data Barang
            </p>
          </a>
        </li>
        {{-- End Data Brang --}}
        
        {{-- Data Customer --}}
        <li class="nav-item">
          <a href="{{ route('dataCustomer') }}" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Data Customer
            </p>
          </a>
        </li>
        {{-- End Data Customer --}}

        {{-- Akuntansi --}}
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-columns"></i>
            <p>
              Akutansi
            </p>
          </a>
        </li>
        {{-- End Akuntansi --}}

        
      
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>