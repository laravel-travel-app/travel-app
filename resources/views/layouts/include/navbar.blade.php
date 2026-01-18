<nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- Left navbar -->
    <ul class="navbar-nav">
        <!-- Toggle Sidebar -->
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                <i class="fas fa-bars"></i>
            </a>
        </li>

        <!-- Page Title -->
        <li class="nav-item d-none d-sm-inline-block">
            <span class="nav-link font-weight-bold">
                @yield('page-title', 'Dashboard')
            </span>
        </li>
    </ul>

    <!-- Right navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Fullscreen -->
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>

        <!-- User Dropdown -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fas fa-user-circle"></i>
                <span class="d-none d-md-inline">{{ auth()->user()->name }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">

                <a href="#" class="dropdown-item">
                    <i class="fas fa-user mr-2"></i> Profile
                </a>

                <div class="dropdown-divider"></div>

                <a href="#"
                   class="dropdown-item text-danger"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt mr-2"></i> Logout
                </a>

                <form id="logout-form" action="#" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>

    </ul>
</nav>
