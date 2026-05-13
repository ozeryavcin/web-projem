<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Özer Yavcin | Özgeçmiş</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">Özer Yavçın</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link" href="index.php">Hakkında</a></li>
                    <li class="nav-item"><a class="nav-link active" href="cv.php">Özgeçmiş</a></li>
                    <li class="nav-item"><a class="nav-link" href="sehrim.php">Şehrim</a></li>
                    <li class="nav-item"><a class="nav-link" href="mirasimiz.php">Mirasımız</a></li>
                    <li class="nav-item"><a class="nav-link" href="ilgialanlarim.php">İlgi Alanlarım</a></li>
                    <li class="nav-item"><a class="nav-link" href="iletisim.php">İletişim</a></li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-outline-danger btn-sm rounded-pill px-3" href="login.php">Giriş Yap</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="bg-dark text-white py-5 shadow">
        <div class="container text-center">
            <h1 class="display-3">Özgeçmiş</h1>
            <p class="lead">Akademik Geçmiş ve Teknik Yetkinlikler</p>
        </div>
    </header>

    <main class="container my-5">
        <section id="egitim" class="mb-5">
            <h2 class="border-bottom pb-2 mb-4 text-primary">Eğitim Bilgileri</h2>
            
            <article class="card shadow-sm mb-3">
                <div class="card-body">
                    <h3 class="h5">Sakarya Üniversitesi</h3>
                    <p class="text-muted mb-1">Bilgisayar Mühendisliği (Lisans)</p>
                    <p><strong>Dönem:</strong> 2024 - Devam Ediyor</p>
                    <p><strong>Genel Not Ortalaması (GNO):</strong> ... / 4.00</p>
                </div>
            </article>

            <article class="card shadow-sm mb-3 border-start border-4 border-info">
                <div class="card-body">
                    <h3 class="h5">İngilizce Hazırlık Eğitimi</h3>
                    <p class="text-muted mb-1">Sakarya Üniversitesi Yabancı Diller Yüksekokulu</p>
                    <p><strong>Başarı Notu:</strong> ...</p>
                    <p>Hazırlık yılını başarıyla tamamlayarak lisans eğitimine geçiş yapıldı.</p>
                </div>
            </article>
        </section>

        <section id="yetenekler" class="row">
            <div class="col-md-6">
                <h2 class="border-bottom pb-2 mb-4 text-primary">Teknik Yetenekler</h2>
                <ul class="list-group list-group-flush shadow-sm rounded">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        C++ / C# <span class="badge bg-primary rounded-pill">Başlangıç/Orta</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Web Teknolojileri (HTML, CSS, JS) <span class="badge bg-success rounded-pill">İleri</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        PHP & MySQL <span class="badge bg-warning text-dark rounded-pill">Öğreniliyor</span>
                    </li>
                </ul>
            </div>
            
            <div class="col-md-6">
                <h2 class="border-bottom pb-2 mb-4 text-primary">Kişisel Disiplin</h2>
                <p>Mühendislik eğitiminin yanı sıra fitness ve düzenli spor alışkanlığı ile yüksek disiplinli çalışma prensibine sahibim. Karmaşık problemleri analiz etme ve çözüm üretme süreçlerinde bu disiplini temel alıyorum.</p>
            </div>
        </section>
    </main>

    <footer class="bg-light py-4 border-top mt-5">
        <div class="container text-center">
            <p class="mb-0 text-muted">© 2026 Özer Yavcin | Bilgisayar Mühendisliği Projesi</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>