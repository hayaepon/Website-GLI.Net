<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('image/logo.png') }}" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="{{ url('/') }}">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/layanan') }}">Layanan</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">Tentang</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/blog') }}">Blog</a></li>
                <li class="nav-item"><a class="btn btn-primary" href="#">Berlangganan Sekarang</a></li>
            </ul>
        </div>
    </div>
</nav>