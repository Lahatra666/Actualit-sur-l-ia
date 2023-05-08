<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>IA informations</title>
  {{-- referencement --}}
  <meta content="Decouvrez comment l'intelligence artificielle et sa révolution " name="description">
  <meta content="intelligence artificielle,IA,machine learning,deep learning,automatisation,technologie" name="keywords">
<!-- Favicons -->
  <link href="{{asset('/img/favicon.png')}}" rel="icon">
  <link href="{{asset('/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('/css/style.css')}}" rel="stylesheet">
  
</head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{ route('index') }}" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">IA informations</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="GET" action="#">
        <input type="text" name="mot" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

    </nav><!-- End Icons Navigation -->
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        @if(!empty($users))
        @foreach ($users as $user)
        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{ $user->nameuser }}</span>
          </a><!-- End Profile Iamge Icon -->
        @endforeach
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{ $user->nameuser }}</h6>
              <span>{{ $user->emailuser }}</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('portefeuille') }}">
                <i class="bi bi-person"></i>
                <span>Mon portefeuille</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('commande') }}">
                <i class="bi bi-check-all"></i>
                <span>Mes commandes</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('commande') }}">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <form action="{{ route('logout') }}" method="get">
              <a class="dropdown-item d-flex align-items-center">
                <i class="bi bi-box-arrow-right"></i>
                <input class="btn btn-pimary" type="submit" value="Deconnecter">
              </a>
            </li>
          </form>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
      @endif
    </nav>
  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
<!-- End Dashboard Nav -->
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">Une nouvelle génération d'IA? Quelles sont les nouvelles technologies folles qui nous reserve l'année 2023?</h2>
      Le machine learning ne cesse de s'évolué et devient "aussi performante" que ses précedent et même l'humain.
      Suivez tout les actualités sur 100% sur l'Intelligence artificielle(IA).
    </div>
  </div>
      <br>
      <div class="search-bar">
        <li class="nav-item">
          <a class="nav-link " href="{{ route('login') }}">
            <i class="bi bi-check-circle-fill"></i>
            <span>Login</span>
          </a>
      </li>  
      <br>      

  </aside><!-- End Sidebar-->

  <main id="main" class="main">
<!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          @yield('content')
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
<!-- End Budget Report -->

          <!-- Website Traffic -->

          <!-- News & Updates Traffic -->
        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

    </body>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    
    <!-- Vendor JS Files -->
    <script src="{{asset('/vendor/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/vendor/chart.js/chart.umd.js')}}"></script>
    <script src="{{asset('/vendor/echarts/echarts.min.js')}}"></script>
    <script src="{{asset('/vendor/quill/quill.min.js')}}"></script>
    <script src="{{asset('/vendor/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{asset('/vendor/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('/vendor/php-email-form/validate.js')}}"></script>
    
    <!-- Template Main JS File -->
    <script src="{{asset('/js/main.js')}}"></script>
    
    </body>
    
    </html>
    