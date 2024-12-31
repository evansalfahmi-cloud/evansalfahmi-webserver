<?php 
include '../includes/header.php'; 
include '../includes/config.php';

// Query to retrieve flash software data
$query = "SELECT * FROM software_flash ORDER BY name ASC";
$result = mysqli_query($conn, $query);

// Initialize an array to group the data by first letter
$data_grouped = [];
if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $first_letter = strtoupper($row['name'][0]); // Get the first letter
        if (!isset($data_grouped[$first_letter])) {
            $data_grouped[$first_letter] = [];
        }
        $data_grouped[$first_letter][] = $row;
    }
} else {
    echo "<p>No software found.</p>";
}

?>

<div class="container mt-5">
    <h2 class="text-center">Software Flash List</h2>

    <?php 
    // Initialize the row number outside the loop to keep it continuous
    $no = 1; 

    // Loop through the grouped data
    foreach ($data_grouped as $letter => $items):
    ?>
        <h3 class="mt-4"><?php echo $letter; ?></h3>
        <table class="table table-striped table-hover mt-2">
            <thead class="table-primary">
                <tr>
                    <th style="width: 5%;">#</th>
                    <th style="width: 35%;">Nama Software</th>
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
// Close the connection
$conn->close();
?>
