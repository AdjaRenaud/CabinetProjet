<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="auteur" content="">
  <title>SB Admin 2 - Tableau de bord</title>

  <!-- Font Awesome -->
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- SB Admin 2 CSS -->
  <link href="{{ asset('/css/sb-admin-2.min.css') }}" rel="stylesheet" type="text/css">

   <!-- Custom CSS -->
   <link href="{{ asset('/css/custom.css') }}" rel="stylesheet" type="text/css">

</head>
<body id="page-top">

<div id="wrapper">
  <!-- Sidebar -->
  @include('layouts.sidebar')

  <div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
      <!-- Topbar -->
      @include('layouts.navbar')

      <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
        </div>
        <div class="container">
        @yield('contents') <!-- This is where your section contents will be injected -->
    </div>
        <!-- Content Row -->
        @yield('contenu')
        <!-- End of Content Row -->
      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- End of Content -->

    <!-- Footer -->
    @include('layouts.footer')
    <!-- End of Footer -->

  </div>
  <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

</body>
</html>