<?php include 'includes/header.php'; ?>
<?php include 'includes/config.php'; // Untuk koneksi database ?>

<?php
// Proses data form jika ada request POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Simpan data ke database
    $query = "INSERT INTO contact_messages (name, email, message) VALUES ('$name', '$email', '$message')";
    if (mysqli_query($conn, $query)) {
        $success_message = "Pesan Anda berhasil dikirim!";
    } else {
        $error_message = "Terjadi kesalahan. Silakan coba lagi.";
    }
}
?>



<div class="container mt-5">
        <h2 class="text-center">Hubungi Kami</h2>
        <p class="text-center">Jika Anda memiliki pertanyaan, silakan kirim pesan kepada kami melalui form di bawah ini.</p>

        <?php if (!empty($success_message)): ?>
            <div class="alert alert-success"><?php echo $success_message; ?></div>
        <?php elseif (!empty($error_message)): ?>
            <div class="alert alert-danger"><?php echo $error_message; ?></div>
        <?php endif; ?>

        <form action="contact.php" method="POST" class="mt-4">
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama Anda" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email Anda" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Pesan</label>
                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Tulis pesan Anda" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
        </form>
    </div>