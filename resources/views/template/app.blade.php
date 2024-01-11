<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Penyewaan Buku Politeknik | @yield('title')</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/logo.png" />
  <link rel="stylesheet" href="/assets/css/styles.min.css" />
  <link rel="stylesheet" href="/assets/css/styles.css" />
</head>

<body>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <aside class="left-sidebar">
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-center">
          {{-- <a href="#" class="text-nowrap logo-img">
            <img src="../assets/images/logos/logo.png" width="60" alt=""/>
          </a> --}}
          <h5>Admin | Haafiz</h5>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>

        </div>
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Buku</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/buku" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Buku</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/kategori" aria-expanded="false">
                <span>
                  <i class="ti ti-alert-circle"></i>
                </span>
                <span class="hide-menu">Kategori</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/transaksi" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Transaksi</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/penyewa" aria-expanded="false">
                <span>
                  <i class="ti ti-alert-circle"></i>
                </span>
                <span class="hide-menu">Penyewa</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/testimoni" aria-expanded="false">
                <span>
                  <i class="ti ti-alert-circle"></i>
                </span>
                <span class="hide-menu">Testimoni</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">AUTH</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="" aria-expanded="false">
                <span>
                  <i class="ti ti-login"></i>
                </span>
                <form action="{{ route('logout') }}" method="POST" id="logout-form">
    @csrf
    <button type="submit" class="btn btn-danger">
        <span class="hide-menu">Logout</span>
    </button>
</form>



              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>

    <div class="body-wrapper">
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
        </nav>


        <a href="/front"><button type="button" class="btn btn-danger" style="margin-buttom : 20px;">Back</button></a>

      </header>

      <div class="container-fluid">

                @yield('content')

            </div>

    </div>
  </div>
  <script defer src="/assets/libs/jquery/dist/jquery.min.js"></script>
  <script defer src="/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script defer src="/assets/js/sidebarmenu.js"></script>
  <script defer src="/assets/js/app.min.js"></script>
  <script defer src="/assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>
