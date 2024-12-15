<!-- send_contact.php -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Proses lebih lanjut, seperti menyimpan ke database atau mengirim email
    echo "<h2>Thank you, $name!</h2>";
    echo "<p>Your message has been sent successfully.</p>";
} else {
    echo "<p>Invalid request.</p>";
}
?>
<a href="index.php" class="btn btn-primary">Back to Home</a>
