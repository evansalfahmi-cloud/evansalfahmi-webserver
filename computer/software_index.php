<?php
include '../includes/header.php'; 
// Sertakan file konfigurasi database
include '../includes/config.php';
?>

<div class="row g-4">
    <div class="col-md-4">
        <div class="card">
            <img src="../img/raster.png" class="card-img-top" alt="Raster">
            <div class="card-body">
                <h5 class="card-title">Raster</h5>
                <p class="card-text">Dapatkan Software Raster.</p>
                <a href="os_system.php?category=windows" class="btn btn-primary">Lihat Software Raster</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img src="../img/vector.png" class="card-img-top" alt="vector">
            <div class="card-body">
                <h5 class="card-title">Vector</h5>
                <p class="card-text">Dapatkan Software Vector.</p>
                <a href="os_system.php?category=ubuntu" class="btn btn-primary">Lihat Software Vector</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img src="../img/Office.png" class="card-img-top" alt="Office">
            <div class="card-body">
                <h5 class="card-title">Office</h5>
                <p class="card-text">Dapatkan Software Office.</p>
                <a href="os_system.php?category=debian" class="btn btn-primary">Lihat Software Office</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img src="../img/multimedia.png" class="card-img-top" alt="multimedia">
            <div class="card-body">
                <h5 class="card-title">Multimedia</h5>
                <p class="card-text">Dapatkan Software Multimedia.</p>
                <a href="os_system.php?category=kali linux" class="btn btn-primary">Lihat Software Multimedia</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img src="../img/development.png" class="card-img-top" alt="development">
            <div class="card-body">
                <h5 class="card-title">Development</h5>
                <p class="card-text">Dapatkan Software Development.</p>
                <a href="os_system.php?category=arch linux" class="btn btn-primary">Lihat Software Development</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img src="../img/other.png" class="card-img-top" alt="other">
            <div class="card-body">
                <h5 class="card-title">Other</h5>
                <p class="card-text">Dapatkan Software Other. </p>
                <a href="os_system.php?category=freebsd" class="btn btn-primary">Lihat Software Other</a>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
<?php
// Tutup koneksi
$conn->close();
?>