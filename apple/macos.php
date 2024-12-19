<!-- macos/index.php -->
<?php 
include '../includes/header.php'; 
include '../includes/config.php';

// Query untuk mengambil data macOS
$query = "SELECT * FROM macos ORDER BY version ASC";
$result = mysqli_query($conn, $query);
?>

<div class="container mt-5">
    <h2 class="text-center">macOS Version List</h2>
    <table class="table table-striped table-hover mt-4">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Versi macOS</th>
                <th>Link Download</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo htmlspecialchars($row['version']); ?></td>
                    <td>
                        <a href="<?php echo htmlspecialchars($row['download_link']); ?>" class="btn btn-primary btn-sm" target="_blank">Download</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<?php include '../includes/footer.php'; ?>
<?php
// Tutup koneksi
$conn->close();
?>
