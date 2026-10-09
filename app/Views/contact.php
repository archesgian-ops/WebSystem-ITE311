<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('/') ?>">ITE311</a>
            <div class="navbar-nav">
                <a class="nav-link" href="<?= base_url('/') ?>">Home</a>
                <a class="nav-link" href="<?= base_url('/about') ?>">About</a>
                <a class="nav-link" href="<?= base_url('/contact') ?>">Contact</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h1>Contact Page</h1>
        <p>This is the contact page.</p>
    </div>
</body>
</html>