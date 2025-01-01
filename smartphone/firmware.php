<!-- smartphone/index.php -->
<?php
include '../includes/header.php'; 
// Sertakan file konfigurasi database
include '../includes/config.php';

// Ambil parameter merek dari URL
$brand = isset($_GET['brand']) ? $_GET['brand'] : '';

// Periksa apakah parameter merek ada
if (!empty($brand)) {
    // Query untuk mengambil data firmware berdasarkan merek
    $query = "SELECT * FROM firmware_smartphone WHERE brand = ? ORDER BY model ASC";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $brand);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    die("Kategori merek tidak ditemukan.");
}
?>


<div class="container mt-5">
        <h2 class="text-center">Firmware <?php echo htmlspecialchars($brand); ?></h2>
        <table class="table table-striped table-hover mt-2">
            <thead class="table-primary">
                <tr>
                    <th style="width: 5%;">#</th>
                    <th style="width: 35%;">Model</th>
                    <th style="width: 40%;">Firmware Version</th>
                    <th style="width: 20%;">Link Download</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    $no = 1;
                    while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo htmlspecialchars($row['model']); ?></td>
                            <td><?php echo htmlspecialchars($row['firmware_version']); ?></td>
                            <td>
                                <a href="<?php echo htmlspecialchars($row['download_link']); ?>" class="btn btn-primary btn-sm" target="_blank">Download</a>
                            </td>
                        </tr>
                    <?php endwhile;
                } else {
                    echo "<tr><td colspan='4' class='text-center'>Tidak ada firmware tersedia untuk merek ini.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
<?php include '../includes/footer.php'; ?>
<?php
// Tutup koneksi
$conn->close();
?>