<!-- apple/index.php -->
<?php 
include '../includes/header.php'; 
include '../includes/config.php';

// Query untuk mengambil data software Apple
$query = "SELECT * FROM software_apple ORDER BY name ASC";
$result = mysqli_query($conn, $query);

// Mengelompokkan data berdasarkan huruf pertama nama software
$data_grouped = [];
if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $first_letter = strtoupper($row['name'][0]); // Huruf pertama nama
        if (!isset($data_grouped[$first_letter])) {
            $data_grouped[$first_letter] = [];
        }
        $data_grouped[$first_letter][] = $row;
    }
} else {
    echo "<p class='text-center'>Tidak ada software tersedia.</p>";
}
?>

<div class="container mt-5">
    <h2 class="text-center">Apple Software List</h2>

    <?php 
    // Inisialisasi nomor urut
    $no = 1;

    // Loop melalui data yang telah dikelompokkan
    foreach ($data_grouped as $letter => $items): ?>
        <h3 class="mt-4"><?php echo $letter; ?></h3>
        <table class="table table-striped table-hover mt-2">
            <thead class="table-primary">
                <tr>
                    <th style="width: 10%;">#</th>
                    <th style="width: 30%;">Nama Software</th>
                    <th style="width: 40%;">Deskripsi</th>
                    <th style="width: 20%;">Link Download</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $row): ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                        <td><?php echo htmlspecialchars($row['description']); ?></td>
                        <td>
                            <a href="<?php echo htmlspecialchars($row['download_link']); ?>" class="btn btn-primary btn-sm" target="_blank">Download</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endforeach; ?>
</div>

<?php include '../includes/footer.php'; ?>
<?php
// Tutup koneksi
$conn->close();
?>
