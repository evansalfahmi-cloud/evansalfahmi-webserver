<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'includes/header.php';
include 'includes/config.php';

$query = isset($_GET['query']) ? $_GET['query'] : '';

// Siapkan array tabel dan kolom yang relevan
$tables = [
    'android_apps' => "name, description, download_link, created_at",
    'drivers' => "device_name, version, download_link, created_at",
    'firmware_apple' => "device, version, download_link, created_at",
    'firmware_smartphone' => "brand, model, firmware_version, download_link",
    'macos' => "version, download_link, created_at",
    'os_systems' => "category, name, version, download_link",
    'software' => "name, description, download_link, category, created_at",
    'software_apple' => "name, description, download_link, created_at",
    'software_flash' => "name, description, download_link, created_at",
];

$results = []; // Array untuk menampung hasil pencarian

// Lakukan pencarian pada setiap tabel
foreach ($tables as $table => $columns) {
    $sql = "SELECT *, ? AS table_name FROM $table WHERE CONCAT_WS(' ', $columns) LIKE ?";
    $stmt = $conn->prepare($sql);
    $searchTerm = "%$query%";
    $stmt->bind_param("ss", $table, $searchTerm); // Mengikat parameter dengan SQL
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $results[] = $row; // Menambahkan hasil pencarian ke array
    }
}

?>

<div class="container mt-5">
    <h1 class="mb-4">Hasil Pencarian untuk "<?php echo htmlspecialchars($query); ?>"</h1>
    <?php if (empty($results)) : ?>
        <p>Tidak ada hasil yang ditemukan.</p>
    <?php else : ?>
        <div class="list-group">
            <?php foreach ($results as $result) : ?>
                <a href="<?php echo htmlspecialchars($result['download_link']); ?>" class="list-group-item list-group-item-action">
                    <strong>
                        <?php 
                        // Menampilkan nama atau perangkat berdasarkan tabel
                        echo htmlspecialchars($result['name'] ?? $result['device_name'] ?? $result['brand'] ?? $result['device'] ?? '');
                        ?>
                    </strong>
                    <span>(<?php echo htmlspecialchars($result['table_name'] ?? ''); ?>)</span>
                    <p>
                        <?php 
                        // Menampilkan deskripsi atau versi berdasarkan tabel
                        echo htmlspecialchars($result['description'] ?? $result['version'] ?? $result['model'] ?? $result['firmware_version'] ?? '');
                        ?>
                    </p>
                </a>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

<?php include 'includes/footer.php'; ?>

<?php
$conn->close(); // Menutup koneksi
?>
