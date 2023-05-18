<?php
// Melakukan query
require '../php/function.php';
$kategori = "promo"; // Mengganti $_GET["kategori"] dengan "promo"
$barang = query("SELECT * FROM barang WHERE kategori = '$kategori'");

// Set Judul Halaman
$title = 'Halodek';
?>

<?php include '../modularisasi/header.php'; ?>

<?php include '../modularisasi/navbar.php'; ?>

<div class="nama-kategori">
    <h5>Filter berdasarkan "Promo"</h5>
</div>

<div class="promo-card mb-5">
    <!-- Card -->
    <?php foreach ($barang as $brg) : ?>
        <a class="text-decoration-none text-dark" href="detail-item.php">
            <div class="card card-promo border border-2 border-primary rounded-5 ms-2 me-2" style="width: 18rem">
                <img class="img-card-promo" src="../assets/img/<?= $brg["gambar"]; ?>" class="card-img-top" alt="..." />
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
                        <a href="../payment-page/form-payment.php" class="btn btn-primary me-1">Beli</a>
                        <a href="../support-pages/cart-shop.php" class="btn btn-primary"><i class="fa-solid fa-cart-shopping"></i></a>
                    </div>
                    <!-- body card end -->
                </div>
            </div>
        </a>
    <?php endforeach; ?>
    <!-- Card end -->
</div>

<?php include '../modularisasi/mobile-nav.php'; ?>

<?php include '../modularisasi/footer.php'; ?>