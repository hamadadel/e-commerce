@include('partials._header')
<!-- Navbar -->
@include('partials._nav')
<!-- /.navbar -->

<!-- Main Sidebar Container -->
@include('partials._sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  @yield('content-header')
  <!-- /.content-header -->

  <!-- Main content -->
  @yield('content')
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
  <div class="p-3">
    <h5>Title</h5>
    <p>Sidebar content</p>
  </div>
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
@include('partials._footer')
</body>
</html>
