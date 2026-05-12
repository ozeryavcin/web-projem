<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Özer Yavçın | İlgi Alanlarım</title>
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
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Hakkında</a></li>
                    <li class="nav-item"><a class="nav-link" href="cv.php">Özgeçmiş</a></li>
                    <li class="nav-item"><a class="nav-link" href="sehrim.php">Şehrim</a></li>
                    <li class="nav-item"><a class="nav-link" href="mirasimiz.php">Mirasımız</a></li>
                    <li class="nav-item"><a class="nav-link active fw-bold" href="ilgialanlarim.php">İlgi Alanlarım</a></li>
                    <li class="nav-item"><a class="nav-link" href="iletisim.php">İletişim</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container my-5">
        <header class="text-center mb-5">
            <h1 class="display-4 fw-bold">İlgi Alanlarım</h1>
            <p class="lead text-muted">Bir mühendis adayı olarak dünyayı keşfetme biçimim.</p>
        </header>

        <div class="row g-4 mb-5">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 interest-card shadow-sm p-4 text-center">
                    <div class="interest-icon text-primary"><i class="bi bi-code-slash"></i></div>
                    <h3 class="fw-bold">Yazılım Geliştirme</h3>
                    <p class="text-secondary">C++, C# ve Web teknolojileri üzerinde çalışıyorum. Algoritma kurmak benim için bir tutku.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 interest-card shadow-sm p-4 text-center">
                    <div class="interest-icon text-info"><i class="bi bi-film"></i></div>
                    <h3 class="fw-bold">Sinema Sanatı</h3>
                    <p class="text-secondary">Christopher Nolan ve David Lynch sinemasına hayranım. Bilim kurgu kurgularını seviyorum.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 interest-card shadow-sm p-4 text-center">
                    <div class="interest-icon text-danger"><i class="bi bi-star-fill"></i></div>
                    <h3 class="fw-bold gs-gradient">Galatasaray & Futbol</h3>
                    <p class="text-secondary">Galatasaray'ın başarılarını ve UEFA sıralamalarını takip ediyorum. Stratejik düşünme yapımı besliyor.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 interest-card shadow-sm p-4 text-center">
                    <div class="interest-icon text-warning"><i class="bi bi-book"></i></div>
                    <h3 class="fw-bold">Edebiyat & Okuma</h3>
                    <p class="text-secondary">Stephen King ve Andy Weir kurgularını seviyorum. Okumak ufkumu genişletiyor.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 interest-card shadow-sm p-4 text-center">
                    <div class="interest-icon text-success"><i class="bi bi-heart-pulse"></i></div>
                    <h3 class="fw-bold">Fitness & Disiplin</h3>
                    <p class="text-secondary">Düzenli antrenman ve disiplin en önemli unsurlardan biri. Zihinsel denge sağlıyorum.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 interest-card shadow-sm p-4 bg-dark text-white text-center">
                    <div class="interest-icon text-white"><i class="bi bi-cpu"></i></div>
                    <h3 class="fw-bold">Sürekli Gelişim</h3>
                    <p class="opacity-75">Tüm ilgi alanlarım bir bilgisayar mühendisi olarak analitik yeteneğimi besliyor.</p>
                </div>
            </div>
        </div>

        <section class="pt-5 border-top mb-5">
            <div class="api-section-header mb-4">
                <h2 class="fw-bold mb-0 text-danger"><i class="bi bi-broadcast me-2"></i>Dünyadan Popüler Filmler </h2>
                <p class="text-muted">İnternet üzerinden çekilen canlı sinema verileri.</p>
            </div>
            <div id="api-loader" class="text-center py-4">
                <div class="spinner-border text-danger" role="status"></div>
                <p class="mt-2 text-muted">Vizyon verileri yükleniyor...</p>
            </div>
            <div class="row g-4" id="movie-api-content"></div>
        </section>

        <section class="pt-5 border-top">
            <h2 class="fw-bold mb-4"><i class="bi bi-camera-reels me-2"></i>Favori Sinema Odam</h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="media-card shadow d-flex align-items-center h-100">
                        <div style="width: 140px; height: 200px; flex-shrink: 0; overflow: hidden;">
                            <img src="img/inception.jpg" class="w-100 h-100 object-fit-cover" alt="Inception">
                        </div>
                        <div class="p-3 w-100">
                            <h5 class="fw-bold mb-2">Inception</h5>
                            <div class="d-grid gap-2">
                                <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#inceptionModal">Fragman</button>
                                <a href="https://tr.wikipedia.org/wiki/Ba%C5%9Flang%C4%B1%C3%A7" target="_blank" class="btn btn-sm btn-outline-dark">Bilgi</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="media-card shadow d-flex align-items-center h-100">
                        <div style="width: 140px; height: 200px; flex-shrink: 0; overflow: hidden;">
                            <img src="img/rezervuarkopekleri.jpg" class="w-100 h-100 object-fit-cover" alt="Reservoir Dogs">
                        </div>
                        <div class="p-3 w-100">
                            <h5 class="fw-bold mb-2">Rezervuar Köpekleri</h5>
                            <div class="d-grid gap-2">
                                <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#rezervuarModal">Fragman</button>
                                <a href="https://tr.wikipedia.org/wiki/Rezervuar_K%C3%B6pekleri" target="_blank" class="btn btn-sm btn-outline-dark">Bilgi</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="media-card shadow d-flex align-items-center h-100">
                        <div style="width: 140px; height: 200px; flex-shrink: 0; overflow: hidden;">
                            <img src="img/tenet.jpg" class="w-100 h-100 object-fit-cover" alt="Tenet">
                        </div>
                        <div class="p-3 w-100">
                            <h5 class="fw-bold mb-2">Tenet</h5>
                            <div class="d-grid gap-2">
                                <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#tenetModal">Fragman</button>
                                <a href="https://tr.wikipedia.org/wiki/Tenet" target="_blank" class="btn btn-sm btn-outline-dark">Bilgi</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="media-card shadow d-flex align-items-center h-100">
                        <div style="width: 140px; height: 200px; flex-shrink: 0; overflow: hidden;">
                            <img src="img/fightclub.jpg" class="w-100 h-100 object-fit-cover" alt="Fight Club">
                        </div>
                        <div class="p-3 w-100">
                            <h5 class="fw-bold mb-2">Fight Club</h5>
                            <div class="d-grid gap-2">
                                <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#fightModal">Fragman</button>
                                <a href="https://letterboxd.com/Ozbuyucusu123/" target="_blank" class="btn btn-sm btn-dark">Letterboxd</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-5 mt-5 border-top">
            <h2 class="fw-bold mb-4"><i class="bi bi-book me-2"></i>Okuma Köşesi</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="media-card shadow d-flex align-items-center">
                        <div style="width: 120px; height: 180px; flex-shrink: 0;"><img src="img/cennetindogusu.jpg" class="w-100 h-100 object-fit-cover" alt="Cennetin Doğusu"></div>
                        <div class="p-3">
                            <h6 class="fw-bold mb-1">Cennetin Doğusu</h6>
                            <small class="text-muted d-block mb-2">John Steinbeck</small>
                            <a href="https://tr.wikipedia.org/wiki/Cennetin_Do%C4%9Fusu" target="_blank" class="btn btn-sm btn-outline-primary">İncele</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="media-card shadow d-flex align-items-center">
                        <div style="width: 120px; height: 180px; flex-shrink: 0;"><img src="img/martineden.jpg" class="w-100 h-100 object-fit-cover" alt="Martin Eden"></div>
                        <div class="p-3">
                            <h6 class="fw-bold mb-1">Martin Eden</h6>
                            <small class="text-muted d-block mb-2">Jack London</small>
                            <a href="https://tr.wikipedia.org/wiki/Martin_Eden" target="_blank" class="btn btn-sm btn-outline-primary">İncele</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="media-card shadow d-flex align-items-center">
                        <div style="width: 120px; height: 180px; flex-shrink: 0;"><img src="img/doriangrayinportresi.jpg" class="w-100 h-100 object-fit-cover" alt="Dorian Gray"></div>
                        <div class="p-3">
                            <h6 class="fw-bold mb-1 text-truncate">Dorian Gray</h6>
                            <small class="text-muted d-block mb-2">Oscar Wilde</small>
                            <a href="https://tr.wikipedia.org/wiki/Dorian_Gray%27in_Portresi" target="_blank" class="btn btn-sm btn-outline-primary">İncele</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="modal fade" id="inceptionModal" tabindex="-1"><div class="modal-dialog modal-lg modal-dialog-centered"><div class="modal-content bg-dark"><div class="modal-body p-0"><div class="ratio ratio-16x9"><iframe src="https://www.youtube.com/embed/YoHD9XEInc0" allowfullscreen></iframe></div></div></div></div></div>
    <div class="modal fade" id="rezervuarModal" tabindex="-1"><div class="modal-dialog modal-lg modal-dialog-centered"><div class="modal-content bg-dark"><div class="modal-body p-0"><div class="ratio ratio-16x9"><iframe src="https://www.youtube.com/embed/vayksn4Y93A" allowfullscreen></iframe></div></div></div></div></div>
    <div class="modal fade" id="tenetModal" tabindex="-1"><div class="modal-dialog modal-lg modal-dialog-centered"><div class="modal-content bg-dark"><div class="modal-body p-0"><div class="ratio ratio-16x9"><iframe src="https://www.youtube.com/embed/OBawdbFF7M8" allowfullscreen></iframe></div></div></div></div></div>
    <div class="modal fade" id="fightModal" tabindex="-1"><div class="modal-dialog modal-lg modal-dialog-centered"><div class="modal-content bg-dark"><div class="modal-body p-0"><div class="ratio ratio-16x9"><iframe src="https://www.youtube.com/embed/dfeUzm6KF4g" allowfullscreen></iframe></div></div></div></div></div>

    <footer class="bg-dark text-white py-4 mt-5 border-top border-danger border-4 text-center">
        <p class="mb-0 small opacity-50">© 2026 Özer Yavçın | Web Projesi</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/api.js"></script>
</body>
</html>