<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap | Özer Yavçın</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">Özer Yavçın</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link" href="index.php">Hakkında</a></li>
                    <li class="nav-item"><a class="nav-link" href="cv.php">Özgeçmiş</a></li>
                    <li class="nav-item"><a class="nav-link" href="sehrim.php">Şehrim</a></li>
                    <li class="nav-item"><a class="nav-link" href="mirasimiz.php">Mirasımız</a></li>
                    <li class="nav-item"><a class="nav-link" href="ilgialanlarim.php">İlgi Alanlarım</a></li>
                    <li class="nav-item"><a class="nav-link" href="iletisim.php">İletişim</a></li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-danger btn-sm rounded-pill px-3 active" href="login.php">Giriş Yap</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="login-container d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5 col-lg-4">
                    <div class="card login-card border-0 shadow-lg overflow-hidden">
                        <div class="login-header text-center py-4 bg-dark text-white">
                            <i class="bi bi-shield-lock fs-1 text-danger"></i>
                            <h4 class="fw-bold mt-2">Sistem Girişi</h4>
                        </div>
                        <div class="card-body p-4 p-lg-5">
                            <?php if(isset($_GET['hata'])): ?>
                                <div class="alert alert-danger border-0 small text-center mb-4">
                                    <i class="bi bi-exclamation-triangle me-2"></i>Hatalı e-posta veya şifre!
                                </div>
                            <?php endif; ?>

                            <form action="login_kontrol.php" method="POST">
                                <div class="mb-4">
                                    <label class="form-label fw-semibold">E-Posta Adresi</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0"><i class="bi bi-envelope text-muted"></i></span>
                                        <input type="email" name="user_email" class="form-control border-start-0 ps-0 bg-light" 
                                               placeholder="ozer.yavcin@ogr.sakarya.edu.tr" required>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label fw-semibold">Şifre</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0"><i class="bi bi-key text-muted"></i></span>
                                        <input type="password" name="user_password" class="form-control border-start-0 ps-0 bg-light" 
                                               placeholder="b241210035" required>
                                    </div>
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-danger py-2 fw-bold shadow-sm">GİRİŞ YAP</button>
                                    <a href="index.php" class="btn btn-link text-muted text-decoration-none small mt-2">
                                        <i class="bi bi-arrow-left me-1"></i>Siteye Geri Dön
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-dark text-white py-4 mt-auto text-center border-top border-4 border-danger">
        <p class="mb-0 small opacity-50">© 2026 Özer Yavçın | Web Projesi</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>