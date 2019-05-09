@extends('theme.header')
<!-- Page Wrapper -->
<div id="wrapper">

  <!-- Sidebar -->
  @include('theme.leftbar')
  <!-- End of Sidebar -->

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

      <!-- Topbar -->
      @include('theme.topbar')
      <!-- End of Topbar -->

      <!-- Begin Page Content -->
      <div class="container-fluid">
        @yield('content')

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
@extends('theme.footer')
