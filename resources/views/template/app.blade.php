{{-- Header --}}
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Dashboard Siakad</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('modules/fontawesome/css/all.min.css') }}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components.css') }}">
  <style>
    /* Navbar lebih tinggi dan padding lebih besar */
    .main-navbar {
      min-height: 64px;
      padding-top: 0.5rem;
      padding-bottom: 0.5rem;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      width: 100%;
      z-index: 999;
    }

    .main-navbar .navbar-nav>li>a,
    .main-navbar .navbar-nav>li>.nav-link {
      padding-top: 1rem;
      padding-bottom: 1rem;
    }

    /* Pastikan navbar-bg solid dan tinggi cukup */
    .navbar-bg {
      background-color: #6777ef;
      height: 64px !important;
      width: 100%;
      position: fixed;
      top: 0;
      left: 0;
      z-index: 998;
    }

    @media (max-width: 991.98px) {
      .main-navbar {
        min-height: 56px;
      }

      .navbar-bg {
        height: 56px !important;
      }
    }

    /* Sidebar mulai di bawah navbar */
    .main-sidebar {
      margin-top: 64px;
    }
  </style>
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <div class="container-fluid px-3">
          <!-- Brand/logo di kiri (opsional) -->
          <a class="navbar-brand" href="#">Pemesanan Hotel</a>
          <!-- Navbar kanan -->
          <ul class="navbar-nav ms-auto flex-row align-items-center">
            <!-- Semua item navbar kanan, termasuk avatar -->
            <li class="dropdown dropdown-list-toggle me-2"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
              <div class="dropdown-menu dropdown-list dropdown-menu-right">
                <div class="dropdown-header">Messages
                  <div class="float-right">
                    <a href="#">Mark All As Read</a>
                  </div>
                </div>
                <div class="dropdown-list-content dropdown-list-message">
                  <a href="#" class="dropdown-item dropdown-item-unread">
                    <div class="dropdown-item-avatar">
                      <img alt="image" src="/img/avatar/avatar-1.png" class="rounded-circle">
                      <div class="is-online"></div>
                    </div>
                    <div class="dropdown-item-desc">
                      <b>Kusnaedi</b>
                      <p>Hello, Bro!</p>
                      <div class="time">10 Hours Ago</div>
                    </div>
                  </a>
                  <a href="#" class="dropdown-item dropdown-item-unread">
                    <div class="dropdown-item-avatar">
                      <img alt="image" src="/img/avatar/avatar-2.png" class="rounded-circle">
                    </div>
                    <div class="dropdown-item-desc">
                      <b>Dedik Sugiharto</b>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                      <div class="time">12 Hours Ago</div>
                    </div>
                  </a>
                  <a href="#" class="dropdown-item dropdown-item-unread">
                    <div class="dropdown-item-avatar">
                      <img alt="image" src="/img/avatar/avatar-3.png" class="rounded-circle">
                      <div class="is-online"></div>
                    </div>
                    <div class="dropdown-item-desc">
                      <b>Agung Ardiansyah</b>
                      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      <div class="time">12 Hours Ago</div>
                    </div>
                  </a>
                  <a href="#" class="dropdown-item">
                    <div class="dropdown-item-avatar">
                      <img alt="image" src="img/avatar/avatar-4.png" class="rounded-circle">
                    </div>
                    <div class="dropdown-item-desc">
                      <b>Ardian Rahardiansyah</b>
                      <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                      <div class="time">16 Hours Ago</div>
                    </div>
                  </a>
                  <a href="#" class="dropdown-item">
                    <div class="dropdown-item-avatar">
                      <img alt="image" src="/img/avatar/avatar-5.png" class="rounded-circle">
                    </div>
                    <div class="dropdown-item-desc">
                      <b>Alfa Zulkarnain</b>
                      <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                      <div class="time">Yesterday</div>
                    </div>
                  </a>
                </div>
                <div class="dropdown-footer text-center">
                  <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                </div>
              </div>
            </li>
            <li class="dropdown dropdown-list-toggle me-2"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
              <div class="dropdown-menu dropdown-list dropdown-menu-right">
                <div class="dropdown-header">Notifications
                  <div class="float-right">
                    <a href="#">Mark All As Read</a>
                  </div>
                </div>
                <div class="dropdown-list-content dropdown-list-icons">
                  <a href="#" class="dropdown-item dropdown-item-unread">
                    <div class="dropdown-item-icon bg-primary text-white">
                      <i class="fas fa-code"></i>
                    </div>
                    <div class="dropdown-item-desc">
                      Template update is available now!
                      <div class="time text-primary">2 Min Ago</div>
                    </div>
                  </a>
                  <a href="#" class="dropdown-item">
                    <div class="dropdown-item-icon bg-info text-white">
                      <i class="far fa-user"></i>
                    </div>
                    <div class="dropdown-item-desc">
                      <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                      <div class="time">10 Hours Ago</div>
                    </div>
                  </a>
                  <a href="#" class="dropdown-item">
                    <div class="dropdown-item-icon bg-success text-white">
                      <i class="fas fa-check"></i>
                    </div>
                    <div class="dropdown-item-desc">
                      <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                      <div class="time">12 Hours Ago</div>
                    </div>
                  </a>
                  <a href="#" class="dropdown-item">
                    <div class="dropdown-item-icon bg-danger text-white">
                      <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <div class="dropdown-item-desc">
                      Low disk space. Let's clean it!
                      <div class="time">17 Hours Ago</div>
                    </div>
                  </a>
                  <a href="#" class="dropdown-item">
                    <div class="dropdown-item-icon bg-info text-white">
                      <i class="fas fa-bell"></i>
                    </div>
                    <div class="dropdown-item-desc">
                      Welcome to Stisla template!
                      <div class="time">Yesterday</div>
                    </div>
                  </a>
                </div>
                <div class="dropdown-footer text-center">
                  <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                </div>
              </div>
            </li>
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">Hi, Syahrul</div>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-title">Logged in 5 min ago</div>
                <a href="features-profile.html" class="dropdown-item has-icon">
                  <i class="far fa-user"></i> Profile
                </a>
                <a href="features-activities.html" class="dropdown-item has-icon">
                  <i class="fas fa-bolt"></i> Activities
                </a>
                <a href="features-settings.html" class="dropdown-item has-icon">
                  <i class="fas fa-cog"></i> Settings
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item has-icon text-danger">
                  <i class="fas fa-sign-out-alt"></i> Logout
                </a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      {{-- End of Header --}}

      {{-- Sidebar --}}
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="#">Pemesanan Hotel</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">PH</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Menu Utama</li>
            <li class="nav-item{{ request()->is('customers') ? ' active' : '' }}">
              <a class="nav-link" href="{{ url('/customers') }}"><i class="fas fa-user-friends"></i> <span>Customer</span></a>
            </li>
            <li class="nav-item{{ request()->is('kwintasi') ? ' active' : '' }}">
              <a class="nav-link" href="{{ url('/kwintasi') }}"><i class="fas fa-chalkboard-teacher"></i> <span>Kamar</span></a>
            </li>
            <li class="nav-item{{ request()->is('invoice') ? ' active' : '' }}">
              <a class="nav-link" href="{{ url('/invoice') }}"><i class="fas fa-file-invoice"></i> <span>Invoice</span></a>
            </li>
            <li class="nav-item{{ request()->is('pembayaran') ? ' active' : '' }}">
              <a class="nav-link" href="{{ url('/pembayaran') }}"><i class="fas fa-credit-card"></i> <span>Pembayaran</span></a>
            </li>
            <li class="nav-item{{ request()->is('penyewa') ? ' active' : '' }}">
              <a class="nav-link" href="{{ url('/penyewas') }}"><i class="fas fa-user-graduate"></i> <span>Reservasi</span></a>
            </li>
          </ul>
          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://sticky-sardine-f5c.notion.site/Manual-Guide-IFApps-Prodi-TI-UM-Pontianak-beedb2641b8f4128a1cfe76ee2bd227f?pvs=4" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Documentation
            </a>
          </div>
        </aside>
      </div>
      {{-- End of Sidebar --}}


      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            @yield('content')
          </div>
        </section>
      </div>

      {{-- Footer --}}

      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2025 <div class="bullet"></div> Design By <a href="https://nauval.in/">SYAHRUL</a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  {{-- End of Footer --}}
   <!-- General JS Scripts -->
  <script src="{{ asset('modules/jquery.min.js') }}"></script>
  <script src="{{ asset('modules/popper.js') }}"></script>
  <script src="{{ asset('modules/tooltip.js') }}"></script>
  <script src="{{ asset('modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('modules/moment.min.js') }}"></script>
  <script src="{{ asset('js/stisla.js') }}"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="{{ asset('js/scripts.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>