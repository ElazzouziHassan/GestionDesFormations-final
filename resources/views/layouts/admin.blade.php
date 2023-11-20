<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Gestion Formation') }}</title>
    <link rel="stylesheet" href="{{ asset('admin/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/base/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('admin/images/logo-mini.png') }}" />
    @livewireStyles
  </head>
<body>
  <div class="container-scroller">
    @include('layouts.inc.admin.navbar')
    <div class="container-fluid page-body-wrapper">
      @include('layouts.inc.admin.sidebar')
      <div class="main-panel">
        <div class="content-wrapper">
          @yield('content')
        </div>
      </div>
    </div>
  </div>
  {{-- scripts linked --}}
  <script src="{{ asset('admin/vendors/base/vendor.bundle.base.js') }}"></script>
  <script src="{{ asset('admin/vendors/datatables.net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
  <script src="{{ asset('admin/js/off-canvas.js') }}"></script>
  <script src="{{ asset('admin/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('admin/js/template.js') }}"></script>
  <script src="{{ asset('admin/js/dashboard.js') }}"></script>
  <script src="{{ asset('admin/js/data-table.js') }}"></script>
  <script src="{{ asset('admin/js/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('admin/js/dataTables.bootstrap4.js') }}"></script>
  @livewireScripts
</body>
</html>
