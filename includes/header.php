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
        .search-container {
            display: flex;
            align-items: center;
            position: relative;
        }
        .search-input {
            width: 0;
            transition: width 0.4s ease;
            opacity: 0;
            visibility: hidden;
        }
        .search-input.show {
            width: 200px;
            opacity: 1;
            visibility: visible;
        }
        .search-button {
            cursor: pointer;
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
            <!-- Animatif Search -->
            <div class="search-container ">
                <input id="searchInput" class="form-control search-input" type="search" name="query" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light search-button" id="searchToggle">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </div>
    </div>
</nav>
<div class="container mt-4">

<script>
    const searchToggle = document.getElementById('searchToggle');
    const searchInput = document.getElementById('searchInput');

    searchToggle.addEventListener('click', () => {
        searchInput.classList.toggle('show');
        if (searchInput.classList.contains('show')) {
            searchInput.focus();
        } else {
            searchInput.blur();
        }
    });
</script>
