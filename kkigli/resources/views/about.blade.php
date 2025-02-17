<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internet Provider</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css"> 
</head>
<style>
    /* style about */

.about-description {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
}


/* Section Utama */
.tentang-kami-section {
    position: relative;
    padding: 40px 0;
    background-color: #f8f9fa;
}

.tentang-kami-section::before {
    content: "";
    position: absolute;
    width: 1291px;
    height: 258px;
    background-color: #1D6CB2; 
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1; /* Agar berada di belakang gambar dan teks */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
}

.tentang-kami-section img {
    position: relative;
    z-index: 2;
    max-width: 100%;
    left: 30px;
}

.about-description {
    position: relative;
    z-index: 2; 
    width: 532px;
    font-family: 'Open Sans', sans-serif;
    font-weight: bold;
    color: #7A7777;
    margin-top: -100px; /*angka negatif untuk menaikan posisi */
    margin-left: -30px;
}

.about-description h2 {
    font-size: 32px;
    margin-bottom: 20px;
    color: #1D6CB2;
    font-weight: 700;
}

.about-description p {
    font-size: 18px;
    line-height: 1.6;
}

/* <section visi & misi> */

.visi-misi {
    color: #1D6CB2;
    font-weight: bolder;
    margin-bottom: 20px;
}

.title-line {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 40px 0; 
}
.mb-4-visimisi{
    margin-bottom: 6rem;
}
.title-line::before,
.title-line::after {
    content: "";
    flex: 1; 
    height: 1px; 
    background-color: #000000; 
}

.title-line::before {
    margin-right: 15px;
}

.title-line::after {
    margin-left: 15px; 
}

.text-primary {
    color: #1D6CB2;
    font-size: 24px; 
    font-weight: bold;
}


.card-body {
    border: none;
    border-radius: 8px;
    overflow: hidden;
    height: 190px; 
    width: 545px;
    text-align: left; 
    padding: 30px 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
    font-family: 'open sans', sans-serif;
    transition: transform 0.3s ease, box-shadow 0.3s ease; 
}

.card-title {
    font-weight: bolder;
    color: #1D6CB2;
    margin-bottom: 20px;
    font-size: 32px;
}

.card-text {
    font-size: 18px;
    color: #737373;
}
.card:hover{
    transform: translateY(-10px);
}

/* Tim Kami Section */

.container {
    max-width: 1140px;
}

/* Judul dan Teks */
.tim-kami-text h2 {
    color: #3d3e3e;
    font-family: 'Open Sans', sans-serif;
    font-size: 32px;
    font-weight: bold;
    opacity: 90%;
    margin-top: 10px;
}

.tim-kami-text p {
    color: #737373;
    font-family: 'Open Sans', sans-serif;
    font-size: 12px;
    margin-bottom: 10px;
}

/* Progress bar */
.progress {
    height: 15px;
    margin-bottom: 10px;
}

.progress-bar {
    font-size: 12px;
}

/* Kolom gambar dan teks */
.tim-kami-col {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
}

/* Responsif untuk tampilan mobile */
@media (max-width: 768px) {
    .tim-kami-text h2 {
        font-size: 24px; 
        text-align: center; 
    }

    .tim-kami-text p {
        font-size: 14px; 
        text-align: center; 
    }

    .tim-kami-col {
        width: 100%; 
        margin-bottom: 20px; 
    }

    .progress {
        height: 12px;
        margin-bottom: 10px;
    }

    .progress-bar {
        font-size: 12px;
    }

    .tim-kami-img {
        max-width: 100%; /* Gambar menjadi responsif */
    }
}

/* Menyesuaikan kolom gambar di desktop */
.tim-kami-img {
    max-width: 100%; 
    order: 2;
}

.tim-kami-text {
    order: 1;
}



</style>
<body>

<!-- Navbar -->
@include('includes.navbar')
<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="image/logo.png" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="Homepage.html">Beranda</a></li>
                <li class="nav-item"><a class="nav-link active" href="about.html">Tentang</a></li>
                <li class="nav-item"><a class="nav-link" href="layanan.html">Layanan</a></li>
                <li class="nav-item"><a class="nav-link" href="Blog.html">Blog</a></li>
                <li class="nav-item"><a class="btn btn-primary" href="#">Berlangganan Sekarang</a></li>
            </ul>
        </div>
    </div>
</nav> -->


<!-- Tentang Kami Section -->
<section class="tentang-kami-section">
    <div class="container my-5 mt-5">
    <div class="row">
        <div class="col-lg-6 position-relative">
            <img src="image/about konten 1.png" class="img-fluid" alt="Tentang Kami">
        </div>
        <div class="col-lg-6 d-flex align-items-center">
            <div class="p-4 about-description">
                <h2 class="fw-bold">Tentang Kami</h2>
                <p class="lead">PT Global Lintas Iramada Network adalah perusahaan penyedia layanan internet (ISP) yang berdedikasi untuk meningkatkan konektivitas terbaik bagi pelanggan di Indonesia. Berfokus dalam mengelola akses internet cepat, aman, dan andal, kami berkomitmen mendukung kemajuan digitalisasi bagi berbagai sektor mulai dari rumah tangga hingga perusahaan besar.</p>
            </div>
        </div>
    </div>
</section>

<!-- Visi & Misi Section -->
<section class="visi misi py-5">
    <div class="container text-center">
        <h2 class="visi-misi mb-4-visimisi title-line">Visi & Misi</h2>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Visi</h5>
                        <p class="card-text">Menjadi penyedia layanan internet terkemuka yang berperan dalam menunjang infrastruktur digital Indonesia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Misi</h5>
                        <p class="card-text">Memberikan layanan internet yang cepat, stabil, dan dapat diandalkan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Tim Berpengalaman Section -->
<section class="container my-5">
    <div class="row align-items-center mt-4">
        <div class="col-lg-6 tim-kami-img">
            <img src="image/about konten 2.png" class="img-fluid" alt="Team">
        </div>
        <div class="col-lg-6 tim-kami-text">
            <div class="text-left">
                <h2>Kami Memiliki Tim Berpengalaman dan Berkemampuan Dibidangnya</h2>
            </div>
            <p>Technical Skills</p>
            <div class="progress mb-3">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 95%;">95%</div>
            </div>
            <p>Customer Support</p>
            <div class="progress mb-3">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 95%;">95%</div>
            </div>
            <p>Networking Skills</p>
            <div class="progress">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 95%;">95%</div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
@include('includes.footer')

<!-- Script Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>