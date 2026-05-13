<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Özer Yavçın | Mirasımız - Gordion Antik Kenti</title>
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
                    <li class="nav-item"><a class="nav-link active fw-bold" href="mirasimiz.php">Mirasımız</a></li>
                    <li class="nav-item"><a class="nav-link" href="ilgialanlarim.php">İlgi Alanlarım</a></li>
                    <li class="nav-item"><a class="nav-link" href="iletisim.php">İletişim</a></li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-outline-danger btn-sm rounded-pill px-3" href="login.php">Giriş Yap</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="heritage-hero text-center text-dark d-flex align-items-center">
        <div class="container py-5">
            <h1 class="display-1 fw-bold mb-3">GORDION</h1>
            <p class="fs-3 opacity-75">Frigya'nın Başkenti ve Efsanelerin Merkezi</p>
            <span class="badge bg-danger p-2 px-3 mt-3 shadow">UNESCO DÜNYA MİRASI</span>
        </div>
    </header>

    <main class="container py-5">
        
        <section id="gordion-gallery" class="mb-5">
            <h2 class="fw-bold mb-4 border-bottom pb-2">Gordion'dan Kareler</h2>
            <div id="mirasCarousel" class="carousel slide shadow-lg rounded-4 overflow-hidden" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#mirasCarousel" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#mirasCarousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#mirasCarousel" data-bs-slide-to="2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/miras4.jpg" class="d-block w-100 carousel-img" alt="Midas Tümülüsü">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                            <h5>Midas Tümülüsü Girişi</h5>
                            <p>Dünyanın bilinen en eski ahşap mezar odasına açılan tarihi kapı.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/miras5.jpg" class="d-block w-100 carousel-img" alt="Gordion Kalıntıları">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                            <h5>Gordion Şehir Surları</h5>
                            <p>Demir Çağı'nın en görkemli yapılarından olan antik kentin temelleri.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/miras6.jpg" class="d-block w-100 carousel-img" alt="Gordion Kazı Alanı">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                            <h5>Frig Saray Yapıları</h5>
                            <p>Gordion'un kalbinde yer alan saray ve idari merkezlerin kalıntıları.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#mirasCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#mirasCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </section>

        <div class="row g-5">
            <div class="col-lg-8">
                <section id="tarihce">
                    <h3 class="fw-bold text-danger mb-4">Anadolu'nun Kadim Mirası</h3>
                    <p class="lead text-secondary">Ankara'nın Polatlı ilçesinde yer alan Gordion, MÖ 9. ve 8. yüzyıllarda Anadolu'ya hakim olan Frig Krallığı'nın siyasi ve kültürel başkentidir.</p>
                    <p>Gordion, 2023 yılında UNESCO Dünya Mirası Listesi'ne girerek evrensel değerini tescillemiştir. Şehir, "Eşek Kulaklı Midas" ve dokunuşuyla her şeyi altına çeviren Kral Midas efsaneleriyle dünya çapında tanınır. Ayrıca Büyük İskender'in kördüğümü kılıcıyla kestiği o meşhur "Gordion Düğümü" hikayesi de tam burada gerçekleşmiştir.</p>
                    <p>Arkeolojik açıdan en önemli yapısı olan Büyük Tümülüs, tarihin en iyi korunmuş ahşap yapılarından birini barındırır ve antik çağ mühendisliğinin zirvesini temsil eder.</p>
                </section>
            </div>
            <div class="col-lg-4">
                <aside class="bg-white p-4 rounded-4 shadow-sm border-start border-4 border-danger h-100">
                    <h4 class="fw-bold">Hızlı Bilgiler</h4>
                    <ul class="list-unstyled mt-3">
                        <li class="mb-3"><strong>Konum:</strong> Yassıhöyük, Polatlı</li>
                        <li class="mb-3"><strong>Dönem:</strong> Erken Demir Çağı</li>
                        <li class="mb-3"><strong>Medeniyet:</strong> Frigya (Phrygia)</li>
                        <li class="mb-3"><strong>UNESCO:</strong> 2023</li>
                    </ul>
                    <hr>
                    <p class="small text-muted italic">"Gordion Düğümü'nü çözen, Asya'nın hakimi olur." - Antik Efsane</p>
                </aside>
            </div>
        </div>

    </main>

    <footer class="bg-dark text-white py-5 mt-5 text-center">
        <div class="container">
            <p class="mb-0 opacity-50 small">© 2026 Özer Yavçın | Bilgisayar Mühendisliği Web Projesi</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>