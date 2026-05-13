<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Özer Yavçın | Şehrim - Ankara</title>
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
                    <li class="nav-item"><a class="nav-link" href="cv.php">Özgeçmiş</a></li>
                    <li class="nav-item"><a class="nav-link active fw-bold" href="sehrim.php">Şehrim</a></li>
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

    <header class="sehir-header text-center">
        <div class="container">
            <h1 class="display-2 fw-bold">ANKARA</h1>
            <p class="lead fs-3">Bozkırın Ortasında Yükselen Cumhuriyet İncisi</p>
        </div>
    </header>

    <main class="container">
        
        <section id="galeri" class="mb-5">
            <h2 class="section-title">Şehir Galerisi</h2>
            <div id="sehirCarousel" class="carousel slide shadow-lg rounded overflow-hidden" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/sehir1.jpg" class="d-block w-100" alt="Ankara Panoroma">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                            <h5>Modern Ankara</h5>
                            <p>Sheraton ve Atakule ile şehrin modern silüeti.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/sehir2.jpg" class="d-block w-100" alt="Anıtkabir Uzaktan">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                            <h5>Manevi Merkez</h5>
                            <p>Anıtkabir'in şehrin kalbindeki görkemli duruşu.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/sehir3.jpg" class="d-block w-100" alt="Anıtkabir Askerler">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                            <h5>Nöbet Değişimi</h5>
                            <p>Anıtkabir'de saygı nöbetindeki askerlerimizin yansıması.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/sehir4.jpg" class="d-block w-100" alt="Kızılay Gece">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                            <h5>Kızılay Meydanı</h5>
                            <p>Ankara'nın bitmeyen enerjisi ve gece trafiği.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/sehir5.jpg" class="d-block w-100" alt="Sıhhiye Hitit Güneşi">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                            <h5>Hitit Güneş Kursu</h5>
                            <p>Sıhhiye Meydanı'ndaki kadim Anadolu mirası.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/sehir6.jpg" class="d-block w-100" alt="Ankara Kalesi">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                            <h5>Tarihi Ankara Kalesi</h5>
                            <p>Şehrin en eski tanığı ve koruyucusu.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#sehirCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#sehirCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </section>

        <div class="row g-4 mb-5">
            <div class="col-md-6">
                <div class="card h-100 info-card p-4">
                    <h3 class="text-danger">İsmi Nereden Geliyor?</h3>
                    <p>Ankara isminin kökeni, Frigce'de <strong>"Ankyra"</strong> (Gemi Çapası) kelimesine dayanır. Efsaneye göre Frig Kralı Midas, bu bölgede bir gemi çapası bulmuş ve şehri buraya kurmuştur. İslam kaynaklarında ise "Engürü" olarak anılmıştır.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card h-100 info-card p-4">
                    <h3 class="text-danger">Kısa Tarihçesi</h3>
                    <p>Hititlerden Romalılara, Selçuklulardan Osmanlılara kadar pek çok medeniyete ev sahipliği yapan Ankara, 13 Ekim 1923'te Türkiye Cumhuriyeti'nin başkenti ilan edilmiştir. Milli Mücadele'nin sevk ve idare merkezi olması, şehre tarihsel bir misyon yüklemiştir.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card h-100 info-card p-4">
                    <h3 class="text-danger">Ne Yenir? (Gastronomi)</h3>
                    <ul>
                        <li><strong>Ankara Tava:</strong> Arpa şehriyeli ve kuzu etli meşhur lezzet.</li>
                        <li><strong>Ankara Simidi:</strong> Pekmezi bol, çıtır çıtır sokak lezzeti.</li>
                        <li><strong>Beypazarı Kurusu:</strong> Uzun süre taze kalan geleneksel atıştırmalık.</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card h-100 info-card p-4">
                    <h3 class="text-danger">Futbol ve Spor</h3>
                    <p>Ankara futbolu köklü bir geçmişe sahiptir. Şehrin en önemli temsilcileri, Milli Mücadele ruhunu taşıyan <strong>MKE Ankaragücü</strong> ve "Mektepli" kimliğiyle bilinen, yetiştirdiği futbolcularla tanınan <strong>Gençlerbirliği</strong>'dir.</p>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container text-center">
            <p>© 2026 Özer Yavçın | Bilgisayar Mühendisliği Web Projesi</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>