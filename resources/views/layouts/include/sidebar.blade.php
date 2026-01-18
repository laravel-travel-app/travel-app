<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('admin/dashboard') }}" class="brand-link">
        <img src="{{ asset('img/PROFIL.jpg') }}" 
             alt="M-One Travella Logo" 
             class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">M-One Travella</span>
    </a>

    <div class="sidebar">

        <!-- User Panel -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" 
                     class="img-circle elevation-2">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview">

                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="{{ url('admin/dashboard') }}"
                       class="nav-link {{ request()->is('admin/dashboard*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Master Data -->
                <li class="nav-item has-treeview {{ request()->is('admin/data-*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('admin/data-*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-database"></i>
                        <p>
                            Master Data
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <!-- Data Mobil -->
                        <li class="nav-item">
                            <a href="{{ url('admin/data-mobil') }}"
                               class="nav-link {{ request()->is('admin/data-mobil*') ? 'active' : '' }}">
                                <i class="fas fa-car nav-icon"></i>
                                <p>Data Mobil</p>
                            </a>
                        </li>

                        <!-- Destinasi -->
                        <li class="nav-item">
                            <a href="{{ url('admin/data-destinasi') }}"
                               class="nav-link {{ request()->is('admin/data-destinasi*') ? 'active' : '' }}">
                                <i class="fas fa-map-marker-alt nav-icon"></i>
                                <p>Destinasi Wisata</p>
                            </a>
                        </li>

                        <!-- Paket -->
                        <li class="nav-item">
                            <a href="{{ url('admin/data-paket') }}"
                               class="nav-link {{ request()->is('admin/data-paket*') ? 'active' : '' }}">
                                <i class="fas fa-box nav-icon"></i>
                                <p>Paket Wisata</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <!-- Settings -->
                <li class="nav-item">
                    <a href="#"
                       class="nav-link {{ request()->is('admin/settings*') ? 'active' : '' }}">
                        <i class="nav-icon fab fa-whatsapp"></i>
                        <p>WhatsApp</p>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>
