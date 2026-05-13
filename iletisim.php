<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Özer Yavçın | İletişim</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js"></script>
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
                    <li class="nav-item"><a class="nav-link active fw-bold" href="iletisim.php">İletişim</a></li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-outline-danger btn-sm rounded-pill px-3" href="login.php">Giriş Yap</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container my-5" id="app">
        <div class="row justify-content-center">
            <div class="col-lg-8 contact-form-wrapper">
                <h2 class="fw-bold mb-4 text-center">Bana Ulaşın</h2>
                
                <form action="gonder.php" method="POST" id="contactForm">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Adınız</label>
                            <input type="text" name="ad" v-model="formData.ad" class="form-control" placeholder="Örn: Özer">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Soyadınız</label>
                            <input type="text" name="soyad" v-model="formData.soyad" class="form-control" placeholder="Örn: Yavçın">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">E-Posta</label>
                            <input type="email" name="email" v-model="formData.email" class="form-control" placeholder="ozer.yavcin@ogr.sakarya.edu.tr">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Telefon</label>
                            <input type="text" name="telefon" v-model="formData.telefon" class="form-control" placeholder="Sadece rakam">
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Konu</label>
                            <select name="konu" v-model="formData.konu" class="form-select">
                                <option value="">Seçiniz...</option>
                                <option value="Web Projesi">Web Projesi</option>
                                <option value="Yazılım Geliştirme">Yazılım Geliştirme</option>
                                <option value="Genel">Genel Sorular</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label d-block">Cinsiyet</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cinsiyet" value="Erkek" v-model="formData.cinsiyet">
                                <label class="form-check-label">Erkek</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cinsiyet" value="Kadın" v-model="formData.cinsiyet">
                                <label class="form-check-label">Kadın</label>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Mesajınız</label>
                            <textarea name="mesaj" v-model="formData.mesaj" class="form-control" rows="4"></textarea>
                        </div>

                        <div class="col-md-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="onay" v-model="formData.onay">
                                <label class="form-check-label">Kullanım şartlarını okudum.</label>
                            </div>
                        </div>

                        <div class="col-md-6 d-grid">
                            <button type="button" onclick="validateNative()" class="btn btn-primary">Gönder (Native JS)</button>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="button" @click="validateVue" class="btn btn-success">Gönder (Vue.js)</button>
                        </div>
                        <div class="col-md-12 mt-2">
                            <button type="reset" class="btn btn-outline-secondary w-100">Temizle</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <footer class="bg-dark text-white py-4 mt-5 text-center">
        <p class="mb-0 small opacity-50">© 2026 Özer Yavçın | Web Projesi</p>
    </footer>

    <script src="js/validation.js"></script>
    <script>
        new Vue({
            el: '#app',
            data: {
                formData: {
                    ad: '', soyad: '', email: '', telefon: '', konu: '', cinsiyet: '', mesaj: '', onay: false
                }
            },
            methods: {
                validateVue: function() {
                    // .trim() eklenerek boşluk hatası çözüldü
                    const email = this.formData.email.trim();
                    const telefon = this.formData.telefon.trim();
                    
                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    const phoneRegex = /^[0-9]+$/;

                    if (!this.formData.ad || !this.formData.soyad || !email || !telefon || !this.formData.konu || !this.formData.cinsiyet || !this.formData.mesaj || !this.formData.onay) {
                        alert("Vue.js Mesajı: Lütfen tüm alanları doldurun ve onaylayın!");
                        return;
                    }
                    if (!emailRegex.test(email)) {
                        alert("Vue.js Mesajı: Geçersiz E-Posta formatı!");
                        return;
                    }
                    if (!phoneRegex.test(telefon)) {
                        alert("Vue.js Mesajı: Telefon sadece rakam içermelidir!");
                        return;
                    }
                    alert("Vue.js Kontrolü Başarılı! Veriler gönderiliyor...");
                    document.getElementById('contactForm').submit();
                }
            }
        });
    </script>
</body>
</html>