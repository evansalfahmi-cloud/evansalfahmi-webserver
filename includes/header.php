<!-- includes/header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fahmifinder</title>
    <!-- Link ke file CSS Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../img/ico.png" type="image/x-icon"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .search-input {
            display: none;
            transition: width 0.4s ease;
        }

        .search-input.show {
            display: inline-block;
            width: 200px;
        }

        .search-icon {
            cursor: pointer;
        }

        /* Menyembunyikan form search pada layar kecil di dalam navbar */
        @media (max-width: 991px) {
            .search-container {
                position: absolute;
                right: 10px;
                top: 50%;
                transform: translateY(-50%);
                z-index: 999;
            }
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="../index.php#">
            <h1 class="h3 m-0">fahmifinder</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../tools.php">News & Tips</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../operating_system.php">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../contact.php">Contact</a>
                </li>
            </ul>
        </div>
        <!-- Form Search di luar navbar-collapse untuk tampil di kanan -->
        <div class="search-container">
            <form class="d-flex ms-3" action="../search_results.php" method="GET">
                <input class="form-control me-2 search-input" type="search" name="query" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light search-icon" type="button" onclick="toggleSearch()">
                    <i class="bi bi-search"></i>
                </button>
            </form>
        </div>
    </div>
</nav>
<div class="container mt-4">

<!-- JavaScript untuk menampilkan/menghilangkan input search -->
<script>
    function toggleSearch() {
        var searchInput = document.querySelector('.search-input');
        searchInput.classList.toggle('show');
        searchInput.focus(); // Fokus pada input setelah dibuka
    }
</script>
