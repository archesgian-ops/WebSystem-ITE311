<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title : 'CodeIgniter + Bootstrap' ?></title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url('/') ?>">ITE311-ARCHES</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav ms-auto">
    <li class="nav-item">
        <a class="nav-link active" href="<?= base_url('/') ?>">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/about') ?>">About</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/contact') ?>">Contact</a>
    </li>
</ul>

    <!-- Main Content -->
    <div class="container mt-5">
        <div class="p-5 mb-4 bg-light rounded-3">
            <h1 class="display-5 fw-bold">Welcome!</h1>
            <p class="col-md-8 fs-4">
                This is the homepage for the CodeIgniter 4 + Bootstrap Laboratory Exercise.
            </p>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>