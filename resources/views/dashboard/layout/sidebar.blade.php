<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('dashboard-assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dashboard-assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('profile.view') }}" class="d-block">
                    {{ Auth::user()->name }}
                </a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Sections
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('section.hero.view') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Hero</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('section.why-choose-us.view') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Why Choose Us</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('section.call-to-action.view') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Call to Action</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('section.powerful-features.view') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Powerful Features</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('section.contact-details.view') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Contact</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link">
                        <i class="nav-icon fas fa-cog"></i>
                        {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
                        <p>
                            Settings
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link">
                        <i class="nav-icon fab fa-slideshare"></i>
                        {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
                        <p>
                            Why Choose Us Slider
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link">
                        <i class="nav-icon fas fa-server"></i>
                        {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
                        <p>
                            Services
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link">
                        <i class="nav-icon fas fa-star"></i>
                        {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
                        <p>
                            Features
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link">
                        <i class="nav-icon fas fa-code-branch"></i>
                        {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
                        <p>
                            Branches
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link">
                        <i class="nav-icon fas fa-comments"></i>
                        {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
                        <p>
                            Testimonials
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-project-diagram"></i>
                        {{-- <i class="nav-icon fas fa-chart-pie"></i> --}}
                        <p>
                            Portfolio
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/charts/chartjs.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/charts/flot.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Category</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
                        <p>
                            Team
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-rss"></i>
                        {{-- <i class="nav-icon fas fa-chart-pie"></i> --}}
                        <p>
                            Blog
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/charts/chartjs.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Post</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/charts/flot.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/charts/flot.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tag</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link">
                        <i class="nav-icon fas fa-address-book"></i>
                        {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
                        <p>
                            Contact Messages
                        </p>
                    </a>
                </li>
                @if (Auth::user()->is_super_admin)
                    <li class="nav-item">
                        <a href="/dashboard/admins" class="nav-link">
                            <i class="nav-icon fas fa-address-book"></i>
                            {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
                            <p>
                                Admins
                            </p>
                        </a>
                    </li>
                @endif

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
