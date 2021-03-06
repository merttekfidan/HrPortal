@include('theme.header')
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
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">@yield('formName')</h1>
          @hasSection('formUrl')
          <a href="@yield('formUrl')" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Create a new @yield('formName') </a>
          @endif
        </div>
        @yield('content')

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
@include('theme.footer')
