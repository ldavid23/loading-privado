<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sistema de Reportes Programas de Formación Sena</title>

  <!-- Favicons -->
  <link href="{{asset('img/sena_logo.svg')}}" rel="icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="{{asset('css/variables.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('css/main.css')}}" rel="stylesheet">

  <!-- SweetAlert2 CSS File -->
  <link rel="stylesheet" href="{{asset('css/sweetalert2.css')}}">

  <!-- SweetAlert2 JS File -->
  <script src="{{asset('js/sweetalert2.all.js')}}"></script>
</head>

<body>
    <header id="header" class="header fixed-top" data-scrollto-offset="0">
        <div class="container-fluid d-flex align-items-center justify-content-between">

          <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="m-0">PROGRAMAS SENA CNCA</h1>
          </a>

          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto" href="">Descargar Reportes</a></li>
              <li><a class="nav-link scrollto" href="">Importar Datos</a></li>
             
            </ul>
            <i class="bi bi-list mobile-nav-toggle d-none"></i>
          </nav><!-- .navbar -->

        </div>
      </header><!-- End Header -->

      @yield('content')

      <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-legal text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center ">

        <div class="d-block align-items-center">
          <div class="copyright">
            &copy; Copyright <strong><span>SENA CNCA</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            Designed by FABRICA TIC
          </div>
        </div>

      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('js/main.js')}}"></script>
</body>

</html>
