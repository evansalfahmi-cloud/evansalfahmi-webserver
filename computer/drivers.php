<?php 
include '../includes/header.php'; 
include '../includes/config.php';

// Query untuk mengambil data drivers
$query = "SELECT * FROM drivers ORDER BY device_name ASC, version DESC";
$result = mysqli_query($conn, $query);
?>

<div class="container mt-5">
    <h2 class="text-center">Daftar Drivers</h2>
    <table class="table table-striped table-hover mt-4">
        <thead class="table-primary">
            <tr>
                <th style="width: 5%;">#</th>
                <th style="width: 25%;">Nama Driver</th>
                <th style="width: 20%;">Versi</th>
                <th style="width: 20%;">Link Download</th>
                <th style="width: 20%;">Tanggal Dibuat</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo htmlspecialchars($row['device_name']); ?></td>
                    <td><?php echo htmlspecialchars($row['version']); ?></td>
                    <td>
                        <a href="<?php echo htmlspecialchars($row['download_link']); ?>" class="btn btn-primary btn-sm" target="_blank">Download</a>
                    </td>
                    <td><?php echo htmlspecialchars($row['created_at']); ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<?php 
include '../includes/footer.php'; 
?>
<?php
// Tutup koneksi
$conn->close();
?>
