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
    /* Gaya untuk animasi search input */
    .search-wrapper {
      display: flex;
      align-items: center;
      overflow: hidden; /* Mencegah konten meluap */
      transition: width 0.3s ease-in-out; /* Animasi lebar */
      width: 0; /* Lebar awal 0 */
    }

    .search-wrapper.active {
      width: 200px; /* Lebar saat aktif */
    }

    .search-input {
      border: none;
      outline: none;
      padding: 5px;
      flex-grow: 1; /* Input mengisi ruang yang tersedia */
      display: none; /* Sembunyikan input awalnya */
    }

    .search-container.active .search-input {
      display: block; /* Tampilkan input saat aktif */
    }

    .search-icon {
      padding: 5px;
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
      <form class="d-flex ms-3 search-wrapper" action="../search_results.php" method="GET">
        <input class="form-control me-2 search-input" type="search" name="query" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light search-icon" type="submit">
          <i class="bi bi-search"></i>
        </button>
      </form>
    </div>
  </div>
</nav>
<div class="container mt-4">