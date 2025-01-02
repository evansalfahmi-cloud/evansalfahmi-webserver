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
                        <img src="img/smp.png" class="card-img-top hover-zoom" alt="SMARTPHONE">
                    </a>
                    <!-- Card Body (Over Image) -->
                    <div class="card-body position-absolute bottom-0 start-0 text-white bg-secondary bg-opacity-50 w-100 px-3 py-2">
                        <p class="card-text">Software flash, firmware, dan aplikasi terbaik untuk meningkatkan kinerja smartphone Anda.</p>
                        <a href="smartphone/index.php" class="btn btn-dark btn-sm">Lihat Smartphone</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card position-relative overflow-hidden">
                    <!-- Label -->
                    <div class="card-label position-absolute top-0 start-0 bg-dark text-white px-3 py-1">
                    COMPUTER
                    </div>
                    <!-- Clickable Image -->
                    <a href="computer/index.php" class="d-block">
                        <img src="img/com.png" class="card-img-top hover-zoom" alt="FIRMWARE">
                    </a>
                    <!-- Card Body (Over Image) -->
                    <div class="card-body position-absolute bottom-0 start-0 text-white bg-secondary bg-opacity-50 w-100 px-3 py-2">
                        <p class="card-text">Sistem operasi, software, dan driver andal untuk mendukung performa komputer Anda.</p>
                        <a href="computer/index.php" class="btn btn-dark btn-sm">Lihat Computer</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card position-relative overflow-hidden">
                    <!-- Label -->
                    <div class="card-label position-absolute top-0 start-0 bg-dark text-white px-3 py-1">
                        APPLE DEVICE
                    </div>
                    <!-- Clickable Image -->
                    <a href="apple/index.php" class="d-block">
                        <img src="img/apple-d.png" class="card-img-top hover-zoom" alt="APLIKASI SMARTPHONE">
                    </a>
                    <!-- Card Body (Over Image) -->
                    <div class="card-body position-absolute bottom-0 start-0 text-white bg-secondary bg-opacity-50 w-100 px-3 py-2">
                        <p class="card-text">macOS, software eksklusif, dan firmware Apple untuk memaksimalkan perangkat Anda.</p>
                        <a href="apple/index.php" class="btn btn-dark btn-sm">Lihat Apple Devices</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

