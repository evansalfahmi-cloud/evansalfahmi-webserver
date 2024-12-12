<!-- contact.php -->
<?php include 'includes/header.php'; ?>
<h1>Contact Us</h1>
<form action="send_contact.php" method="post">
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="message">Message:</label>
        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Send</button>
</form>
<?php include 'includes/footer.php'; ?>
