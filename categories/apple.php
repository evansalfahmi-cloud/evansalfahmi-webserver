<?php include '../includes/header.php'; ?>
<div class="container mt-5">
    <h1>Smartphone</h1>
    <p>Beragam tools dan software untuk smartphone Anda:</p>
    <div class="row">
        <?php
        $data = include '../data/smartphone_data.php';
        foreach ($data as $item) {
            echo '<div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">' . $item['title'] . '</h5>
                            <p class="card-text">' . $item['description'] . '</p>
                            <a href="' . $item['link'] . '" class="btn btn-primary">Download</a>
                        </div>
                    </div>
                </div>';
        }
        ?>
    </div>
</div>
<?php include '../includes/footer.php'; ?>