<?php
// Melakukan query
require 'php/function.php';
$kategori = "promo"; // Mengganti $_GET["kategori"] dengan "promo"
$barang = query("SELECT * FROM barang WHERE kategori = '$kategori'");

// Set Judul Halaman
$title = 'Halodek';
?>

<?php include 'modularisasi/header.php'; ?>

<?php include 'modularisasi/navbar.php'; ?>

<!-- WELCOME & HOME PAGE -->
<div style="background-image: url(assets/img/hero-image.jpg)" class="welcome-page d-flex mt-5" id="beranda">
    <!-- Left content -->
    <div class="welcome-left-page mt-5 ms-4">
        <h1 class="welcome-head">Selamat Datang</h1>
        <p>Di <span class="fw-bold">HaloDek</span> , Kami siap melayani anda</p>
    </div>
    <!-- Right content -->
    <div class="welcome-right-page"></div>
</div>
<!-- WELCOME & HOME END -->

<!-- CATEGORY CARD PAGE -->
<div class="category-page mb-5">
    <header class="category-head ms-4 mt-5 mb-2 rounded-pill p-3">
        <h1>Cari Berdasarkan Kategori</h1>
    </header>
    <!-- Card -->
    <div class="card-category d-flex justify-content-around">
        <!-- card 1 -->

        <div class="category-1 text-center" style="width: 15%">
            <a href="support-pages/promo-kategori.php">
                <i class="fa-solid fa-tag bg-primary text-light p-3 rounded-pill" style="width: 50px"></i>
                <p>PROMO</p>
            </a>
        </div>
        <!-- card 2 -->
        <div class="category-2 text-center" style="width: 15%">
            <a href="support-pages/flubatuk-kategori.php">
                <i class="fa-sharp fa-solid fa-head-side-cough bg-primary text-light p-3 rounded-pill" style="width: 50px"></i>
                <p>FLU & BATUK</p>
            </a>
        </div>
        <!-- card 3 -->
        <div class="category-3 text-center" style="width: 15%">
            <a href="support-pages/asmapernapasan-kategori.php"><i class="fa-sharp fa-solid fa-lungs-virus bg-primary text-light p-3 rounded-pill" style="width: 50px"></i>
                <p>ASMA & PERNAPASAN</p>
            </a>
        </div>
        <!-- card 4 -->
        <div class="category-4 text-center" style="width: 15%">
            <a href="support-pages/p3k-kategori.php"><i class="fa-solid fa-kit-medical bg-primary text-light p-3 rounded-pill" style="width: 50px"></i>
                <p>P3K</p>
            </a>
        </div>
        <!-- card 5 -->

        <div class="category-5 text-center" style="width: 15%">
            <a href="support-pages/alatkesehatan-kategori.php"><i class="fa-solid fa-microscope bg-primary text-light p-3 rounded-pill" style="width: 50px"></i>
                <p>ALAT KESEHATAN</p>
            </a>
        </div>
    </div>
</div>
<!-- CATEGORY CARD END -->

<!-- CAROUSEL FIRST PAGE -->

<!-- carousel -->
<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner carousel-first border border-2 border-primary">
        <div class="carousel-item active">
            <img src="assets/img/contoh2.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
            <img src="assets/img/contoh.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
            <img src="assets/img/contoh3.jpg" class="d-block w-100" alt="..." />
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- CAROUSEL FIRST END -->

<!-- PROMO TEXT -->
<header class="category-head ms-4 rounded-pill p-3">
    <h1>Promo <i class="fa-solid fa-tag text-primary rounded-pill"></i></h1>
</header>
<!-- PROMO TEXT END -->

<!-- PROMO CARD PAGE -->
<div class="promo-card mb-5" style="overflow-x: auto !important;">
    <!-- Card -->
    <?php foreach ($barang as $brg) : ?>
        <a class="text-decoration-none text-dark" href="support-pages/detail-item.php">
            <div class="card card-promo border border-2 border-primary rounded-5 ms-2 me-2" style="width: 18rem">
                <img class="img-card-promo" src="./assets/img/<?= $brg['gambar'] ?>" class="card-img-top " alt="..." />
                <!-- body card -->
                <div class="card-body">
                    <!-- nama barang -->
                    <p class="card-title mb-5 text-center">
                        <?= $brg['nama'] ?>
                    </p>
                    <!-- harga barang -->
                    <div class="card-text mt-4">
                        <p class="price-item text-danger text-decoration-line-through">
                            Rp.<?= $brg['harga_normal'] ?>
                        </p>
                        <p class="price-promo text-primary">Rp.<?= $brg['harga_promo'] ?></p>
                    </div>
                    <!-- button -->
                    <div class="button-card">
                        <a href="login-page/login-user.php" class="btn btn-primary me-1">Beli</a>
                        <a href="login-page/login-user.php" class="btn btn-primary"><i class="fa-solid fa-cart-shopping"></i></a>
                    </div>
                    <!-- body card end -->
                </div>
            </div>
        </a>
    <?php endforeach; ?>
    <!-- Card end -->
</div>
<!-- PROMO CARD END -->

<!-- ARTIKEL PAGE -->
<div class="artikel-pages">
    <h2 class="text-center mb-4">Tips & trick sehat.</h2>
    <div class="artikel-container d-flex justify-content-around">
        <!-- artikel 1 -->
        <div class="artikel-left artikel">
            <div class="card" style="width: 18rem">
                <img src="assets/img/logo-halodek/halodek-logo.png" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title fw-bold">Coming soon</h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Aperiam, sed?
                    </p>
                    <a href="#" class="btn btn-primary">Selengkapnya..</a>
                </div>
            </div>
        </div>
        <!-- artikel 2 -->
        <div class="artikel-center artikel">
            <div class="card" style="width: 18rem">
                <img src="assets/img/logo-halodek/halodek-logo.png" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title fw-bold">Coming soon</h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Aperiam, sed?
                    </p>
                    <a href="#" class="btn btn-primary">Selengkapnya..</a>
                </div>
            </div>
        </div>
        <!-- artikel 3 -->
        <div class="artikel-right artikel">
            <div class="card" style="width: 18rem">
                <img src="assets/img/logo-halodek/halodek-logo.png" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title fw-bold">Coming soon</h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Aperiam, sed?
                    </p>
                    <a href="#" class="btn btn-primary">Selengkapnya..</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ARTIKEL PAGE END -->


<!-- ABOUT PAGE -->
<h1 class="images-text mb-5 text-center">Kenapa halodek ?</h1>
<div class="images-index d-flex justify-content-around px-3">
    <div class="images-in">
        <img src="assets/img/index-assets/asli.png" class="img-fluid bg-primary p-3" alt="..." />
        <p class="text-center fw-bold">Asli</p>
    </div>
    <div class="images-in">
        <img src="assets/img/index-assets/cepat.png" class="img-fluid bg-primary p-3" alt="..." />
        <p class="text-center fw-bold">Cepat</p>
    </div>
    <div class="images-in">
        <img src="assets/img/index-assets/komplit.png" class="img-fluid bg-primary p-3" alt="..." />
        <p class="text-center fw-bold">Komplit</p>
    </div>
</div>
<p class="about ms-4 me-4">
    <b class="text-primary">Halodek -</b> adalah sebuah website apotek yang
    menyediakan berbagai macam kebutuhan obat dan kesehatan secara online.
    Halodek didirikan dengan tujuan untuk mempermudah masyarakat dalam
    memenuhi kebutuhan obat-obatan dan kesehatan tanpa harus pergi ke apotek
    secara langsung. <br />Pada website Halodek, pengguna dapat menemukan
    berbagai macam obat dan produk kesehatan dari berbagai merek dan jenis.
    Hal ini memungkinkan pengguna untuk memilih produk yang sesuai dengan
    kebutuhan dan preferensi mereka. <br />
    Halodek juga menjamin keamanan dan kualitas produk yang ditawarkan. Semua
    produk yang dijual di Halodek telah terdaftar dan diakui oleh Badan
    Pengawas Obat dan Makanan (BPOM) sehingga pengguna dapat membeli produk
    dengan aman dan nyaman.
</p>
<!-- ABOUT PAGE END -->


<?php include 'modularisasi/mobile-nav.php'; ?>

<?php include 'modularisasi/footer.php'; ?>