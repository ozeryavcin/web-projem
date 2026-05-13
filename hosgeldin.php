<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Hoşgeldiniz | Özer Yavçın</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center vh-100 text-center">

    <div class="container">
        <div class="card shadow border-0 p-5 mx-auto" style="max-width: 500px;">
            <div class="display-1 text-success mb-4"><i class="bi bi-check-circle"></i></div>
            <h1 class="fw-bold">Hoşgeldiniz</h1>
            <h3 class="text-danger mb-4"><?php echo htmlspecialchars($_GET['user'] ?? 'Öğrenci'); ?></h3>
            <p class="text-muted mb-4">Sisteme başarıyla giriş yaptınız.</p>
            <a href="index.php" class="btn btn-dark px-4">Ana Sayfaya Git</a>
        </div>
    </div>

</body>
</html>