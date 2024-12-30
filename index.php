<?php include 'includes/header.php'; ?>

<div class="container mt-5">
    <div class="row">
        <!-- Konten Utama -->
        <div class="jumbotron text-center">
            <h1>أهلا و سهلا</h1>
            <p>selamat datang di website ini</p> 
        </div>
        
        <!-- Row tambahan untuk konten di bawahnya -->
        <div class="row mt-4">
            <div class="col-md-4 mb-4">
                <div class="card position-relative overflow-hidden">
                    <!-- Label -->
                    <div class="card-label position-absolute top-0 start-0 bg-dark text-white px-3 py-1">
                        SMARTPHONE
                    </div>
                    <!-- Clickable Image -->
                    <a href="smartphone/index.php" class="d-block">
                        <img src="../img/software-flash.png" class="card-img-top hover-zoom" alt="SMARTPHONE">
                    </a>
                    <!-- Card Body (Over Image) -->
                    <div class="card-body position-absolute bottom-0 start-0 text-white bg-dark bg-opacity-75 w-100 px-3 py-2">
                        <p class="card-text">Software flash, firmware, dan aplikasi terbaik untuk meningkatkan kinerja smartphone Anda.</p>
                        <a href="computer/index.php" class="btn btn-dark btn-sm">Lihat Smartphone</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card position-relative overflow-hidden">
                    <!-- Label -->
                    <div class="card-label position-absolute top-0 start-0 bg-dark text-white px-3 py-1">
                        FIRMWARE
                    </div>
                    <!-- Clickable Image -->
                    <a href="firmware_index.php" class="d-block">
                        <img src="../img/firmware.png" class="card-img-top hover-zoom" alt="FIRMWARE">
                    </a>
                    <!-- Card Body (Over Image) -->
                    <div class="card-body position-absolute bottom-0 start-0 text-white bg-dark bg-opacity-75 w-100 px-3 py-2">
                        <p class="card-text">Unduh firmware berbagai macam smartphone untuk memaksimalkan perangkat Anda.</p>
                        <a href="apple/index.php" class="btn btn-dark btn-sm">Lihat Firmware</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card position-relative overflow-hidden">
                    <!-- Label -->
                    <div class="card-label position-absolute top-0 start-0 bg-dark text-white px-3 py-1">
                        APLIKASI SMARTPHONE
                    </div>
                    <!-- Clickable Image -->
                    <a href="smartphone_apps.php" class="d-block">
                        <img src="../img/smartphoneapps.png" class="card-img-top hover-zoom" alt="APLIKASI SMARTPHONE">
                    </a>
                    <!-- Card Body (Over Image) -->
                    <div class="card-body position-absolute bottom-0 start-0 text-white bg-dark bg-opacity-75 w-100 px-3 py-2">
                        <p class="card-text">Jelajahi aplikasi terbaru untuk meningkatkan pengalaman menggunakan smartphone.</p>
                        <a href="smartphone_apps.php" class="btn btn-dark btn-sm">Lihat Aplikasi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>