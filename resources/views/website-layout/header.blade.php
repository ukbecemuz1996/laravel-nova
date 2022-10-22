@php
    $cr = Route::currentRouteName();
@endphp
<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="/" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="d-flex align-items-center">Nova</h1>
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="/" @class(['active' => $cr == 'home.view'])>Home</a></li>
                <li><a href="/about" @class(['active' => $cr == 'about.view'])>About</a></li>
                <li><a href="/services" @class(['active' => $cr == 'services.view'])>Services</a></li>
                <li><a href="/portfolios" @class(['active' => $cr == 'portfolio.view.all' || $cr == 'portfolio.view.single'])>Portfolio</a></li>
                <li><a href="/team" @class(['active' => $cr == 'team.view'])>Team</a></li>
                <li><a href="/blog" @class([
                    'active' =>
                        $cr == 'blog.view.all' ||
                        $cr == 'blog.view.single' ||
                        $cr == 'blog.category.view' ||
                        $cr == 'blog.tag.view',
                ])>Blog</a></li>
                <li><a href="/contact" @class(['active' => $cr == 'contact.view'])>Contact</a></li>
            </ul>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
