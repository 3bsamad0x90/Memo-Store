@extends('AdminPanel.layouts.header')
@section('title')
    {{ $title ? $title : 'Memo Store'}}
@endsection
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
      <!-- Preloader -->
      <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
      </div>

      <!-- Navbar -->
        @include('AdminPanel.layouts.Navbar')
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      @include('AdminPanel.layouts.Sidebar')