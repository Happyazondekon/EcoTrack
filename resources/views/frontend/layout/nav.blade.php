<div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
        <div class="col-lg-6 px-5 text-start">
            <small><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</small>
            <small class="ms-4"><i class="fa fa-envelope me-2"></i>info@example.com</small>
        </div>
        <div class="col-lg-6 px-5 text-end">
            <small>Suivez nous sur:</small>
            <a class="text-body ms-3" href=""><i class="fab fa-facebook-f"></i></a>
            <a class="text-body ms-3" href=""><i class="fab fa-twitter"></i></a>
            <a class="text-body ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
            <a class="text-body ms-3" href=""><i class="fab fa-instagram"></i></a>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="{{ route('home') }}" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="fw-bold text-primary m-0">Eco<span class="text-secondary">Track</span></h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('home') }}" class="nav-item nav-link active">Accueil</a>
                <a href="about.html" class="nav-item nav-link">À propos</a>
                <a href="product.html" class="nav-item nav-link">Products</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="blog.html" class="dropdown-item">Blog Grid</a>
                        <a href="feature.html" class="dropdown-item">Our Features</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contactez Nous</a>
            </div>

            <div class="d-none d-lg-flex ms-2">
                <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                    <small class="fa fa-search text-body"></small>
                </a>
                <div class="nav-item dropdown ms-3">
                    <!-- User Icon with Dropdown -->
                    <a class="btn-sm-square bg-white rounded-circle nav-link" href="#" id="userDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <small class="fa fa-user text-body"></small>
                    </a>
                    <!-- Dropdown Menu -->
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        @if (Route::has('login'))
                            @auth
                                <li><a class="dropdown-item" href="{{ url('/admin') }}">Dashboard</a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </li>
                            @else
                                <li><a class="dropdown-item" href="{{ route('login') }}">Log in</a></li>
                                @if (Route::has('register'))
                                    <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                                @endif
                            @endauth
                        @endif
                    </ul>
                </div>
                <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                    <small class="fa fa-shopping-bag text-body"></small>
                </a>
            </div>
        </div>
    </nav>
</div>
