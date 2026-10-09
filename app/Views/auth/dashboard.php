<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>User Dashboard</h2>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success">
            <?= esc(session()->getFlashdata('success')) ?>
        </div>
    <?php endif; ?>

    <p>Welcome, <?= esc(session()->get('user_name')) ?>!</p>
    <p>Email: <?= esc(session()->get('user_email')) ?></p>
    <p>Role: <?= esc(session()->get('user_role')) ?></p>

    <a href="<?= base_url('/logout') ?>" class="btn btn-danger">Logout</a>
</div>
</body>
</html>