<?php
include '../includes/header.php'; 
// Sertakan file konfigurasi database
include '../includes/config.php';
?>

<div class="row g-4">
    <div class="col-md-4">
        <div class="card">
            <img src="../img/vivo.png" class="card-img-top" alt="Vivo">
            <div class="card-body">
                <h5 class="card-title">Firmware Vivo</h5>
                <p class="card-text">Dapatkan firmware terbaru untuk Vivo.</p>
                <a href="firmware.php?brand=Vivo" class="btn btn-primary">Lihat Firmware Vivo</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img src="../img/oppo.png" class="card-img-top" alt="Oppo">
            <div class="card-body">
                <h5 class="card-title">Firmware Oppo</h5>
                <p class="card-text">Dapatkan firmware terbaru untuk Oppo.</p>
                <a href="firmware.php?brand=oppo" class="btn btn-primary">Lihat Firmware Oppo</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img src="../img/samsung.png" class="card-img-top" alt="Samsung">
            <div class="card-body">
                <h5 class="card-title">Firmware Samsung</h5>
                <p class="card-text">Dapatkan firmware terbaru untuk Samsung.</p>
                <a href="firmware.php?brand=Samsung" class="btn btn-primary">Lihat Firmware Samsung</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img src="../img/infinix.png" class="card-img-top" alt="Infinix">
            <div class="card-body">
                <h5 class="card-title">Firmware Infinix</h5>
                <p class="card-text">Dapatkan firmware terbaru untuk Infinix.</p>
                <a href="firmware.php?brand=Infinix" class="btn btn-primary">Lihat Firmware Infinix</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img src="../img/realme.png" class="card-img-top" alt="Realme">
            <div class="card-body">
                <h5 class="card-title">Firmware Realme</h5>
                <p class="card-text">Dapatkan firmware terbaru untuk Realme.</p>
                <a href="firmware.php?brand=Realme" class="btn btn-primary">Lihat Firmware Realme</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img src="../img/xiaomi.png" class="card-img-top" alt="Xiaomi">
            <div class="card-body">
                <h5 class="card-title">Firmware Xiaomi</h5>
                <p class="card-text">Dapatkan firmware terbaru untuk Xiaomi.</p>
                <a href="firmware.php?brand=Xiaomi" class="btn btn-primary">Lihat Firmware Xiaomi</a>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
<?php
// Tutup koneksi
$conn->close();
?>