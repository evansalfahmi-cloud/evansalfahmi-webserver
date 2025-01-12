<!-- android_apps/index.php -->
<?php 
include '../includes/header.php'; 
include '../includes/config.php';

// Query untuk mengambil data aplikasi Android
$query = "SELECT * FROM android_apps ORDER BY name ASC";
$result = mysqli_query($conn, $query);
?>

<div class="container mt-5">
    <h2 class="text-center">Daftar Aplikasi Android</h2>
    <table class="table table-striped table-hover mt-4">
        <thead class="table-primary">
            <tr>
                <th style="width: 5%;">#</th>
                <th style="width: 35%;">>Nama Aplikasi</th>
                <th style="width: 40%;">>Deskripsi</th>
                <th style="width: 20%;">>Link Download</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo htmlspecialchars($row['name']); ?></td>
                    <td><?php echo htmlspecialchars($row['description']); ?></td>
                    <td>
                        <a href="<?php echo htmlspecialchars($row['download_link']); ?>" class="btn btn-primary btn-sm" target="_blank">Download</a>
                    </td>
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
