<!-- smartphone/index.php -->
<?php include '../includes/header.php'; 
include '../includes/config.php';

// Query untuk mengambil data software flash
$query = "SELECT * FROM software_flash";
$result = mysqli_query($conn, $query);
$query = "SELECT * FROM software_flash";
$result = mysqli_query($conn, $query);
?>

<div class="container mt-5">
        <h2>Software Flash HP</h2>
        <div class="row">
            <?php
            // Tampilkan data software flash
            while ($row = mysqli_fetch_assoc($result)): ?>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($row['name']); ?></h5>
                            <p class="card-text"><?php echo htmlspecialchars($row['description']); ?></p>
                            <a href="<?php echo htmlspecialchars($row['download_link']); ?>" class="btn btn-primary">Download</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>

<?php include '../includes/footer.php'; ?>
<?php
// Tutup koneksi
$conn->close();
?>