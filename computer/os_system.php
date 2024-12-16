<!-- systems/index.php -->
<?php
include '../includes/header.php';
// Sertakan file konfigurasi database
include '../includes/config.php';

// Ambil parameter kategori dari URL
$category = isset($_GET['category']) ? $_GET['category'] : '';

// Periksa apakah parameter kategori ada
if (!empty($category)) {
    // Query untuk mengambil data sistem operasi berdasarkan kategori
    $query = "SELECT * FROM os_systems WHERE category = ? ORDER BY name ASC";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $category);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    die("Kategori sistem operasi tidak ditemukan.");
}
?>

<div class="container mt-5">
    <h2 class="text-center">Sistem Operasi: <?php echo htmlspecialchars($category); ?></h2>
    <table class="table table-striped table-hover mt-4">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Nama Sistem Operasi</th>
                <th>Versi</th>
                <th>Link Download</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                $no = 1;
                while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                        <td><?php echo htmlspecialchars($row['version']); ?></td>
                        <td>
                            <a href="<?php echo htmlspecialchars($row['download_link']); ?>" class="btn btn-primary btn-sm" target="_blank">Download</a>
                        </td>
                    </tr>
                <?php endwhile;
            } else {
                echo "<tr><td colspan='4' class='text-center'>Tidak ada sistem operasi tersedia untuk kategori ini.</td></tr>";
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
