{{-- Header Admin --}}
@include('karyawan.include.header')


<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  {{-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('adminLTE/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
  </div> --}}

  
  {{-- Navbar --}}
  @include('karyawan.include.navbar')

  <!-- Main Sidebar Container -->
  @include('karyawan.include.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content mt-lg-3">
      <div class="container-fluid">

        {{-- Content --}}
        @yield('content')
        
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  {{-- Footer --}}
  @include('karyawan.include.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

{{-- Sricpt --}}
@include('karyawan.include.script')
@stack('script')

</body>
</html>
