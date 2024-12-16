<?php
include '../includes/header.php'; 
// Sertakan file konfigurasi database
include '../includes/config.php';
?>

<div class="row g-4">
    <div class="col-md-4">
        <div class="card">
            <img src="../img/windows.png" class="card-img-top" alt="Windows">
            <div class="card-body">
                <h5 class="card-title">Windows</h5>
                <p class="card-text">Dapatkan Sistem Operasi Windows.</p>
                <a href="os_system.php?category=windows" class="btn btn-primary">Lihat OS Windows</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img src="../img/ubuntu.png" class="card-img-top" alt="Ubuntu">
            <div class="card-body">
                <h5 class="card-title">Ubuntu</h5>
                <p class="card-text">Dapatkan Sistem Operasi Ubuntu.</p>
                <a href="os_system.php?category=ubuntu" class="btn btn-primary">Lihat OS Ubuntu</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img src="../img/debian.png" class="card-img-top" alt="Debian">
            <div class="card-body">
                <h5 class="card-title">Debian</h5>
                <p class="card-text">Dapatkan Sistem Operasi Debian.</p>
                <a href="os_system.php?category=debian" class="btn btn-primary">Lihat OS Debian</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img src="../img/kalilinux.png" class="card-img-top" alt="Kali">
            <div class="card-body">
                <h5 class="card-title">Kali Linux</h5>
                <p class="card-text">Dapatkan Sistem Operasi Kali Linux.</p>
                <a href="os_system.php?category=kali linux" class="btn btn-primary">Lihat OS Kali Linux</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img src="../img/archlinux.png" class="card-img-top" alt="Arch">
            <div class="card-body">
                <h5 class="card-title">Arch Linux</h5>
                <p class="card-text">Dapatkan Sistem Operasi Arch Linux.</p>
                <a href="os_system.php?category=arch linux" class="btn btn-primary">Lihat OS Arch Linux</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img src="../img/freebsd.png" class="card-img-top" alt="Free BSD">
            <div class="card-body">
                <h5 class="card-title">Free BSD</h5>
                <p class="card-text">Dapatkan Sistem Operasi Free BSD. </p>
                <a href="os_system.php?category=freebsd" class="btn btn-primary">Lihat OS Free BSD</a>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
<?php
// Tutup koneksi
$conn->close();
?>