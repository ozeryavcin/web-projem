function validateNative() {
    const form = document.getElementById('contactForm');
    // Değerleri alırken .trim() kullanarak boşlukları temizliyoruz
    const ad = form.ad.value.trim();
    const soyad = form.soyad.value.trim();
    const email = form.email.value.trim();
    const telefon = form.telefon.value.trim();

    const phoneRegex = /^[0-9]+$/;
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!ad || !soyad || !email || !telefon || !form.konu.value || !form.cinsiyet.value || !form.mesaj.value || !form.onay.checked) {
        alert("Native JS Mesajı: Lütfen tüm alanları eksiksiz doldurunuz!");
        return false;
    }

    if (!emailRegex.test(email)) {
        alert("Native JS Mesajı: Geçersiz E-Posta formatı!");
        return false;
    }

    if (!phoneRegex.test(telefon)) {
        alert("Native JS Mesajı: Telefon numarası sadece rakamlardan oluşmalıdır!");
        return false;
    }

    alert("Native JS Kontrolü Başarılı! Veriler gönderiliyor...");
    form.submit();
}