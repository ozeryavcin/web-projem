<?php
// Kullanıcı adı senin istediğin adrese göre güncellendi
$dogru_email = "ozer.yavcin@ogr.sakarya.edu.tr";
$dogru_sifre = "b241210035";

$gelen_email = $_POST['user_email'] ?? '';
$gelen_sifre = $_POST['user_password'] ?? '';

if ($gelen_email === $dogru_email && $gelen_sifre === $dogru_sifre) {
    // Başarıyla yönlendir
    header("Location: hosgeldin.php?user=b241210035");
    exit();
} else {
    // Hata ile geri dön
    header("Location: login.php?hata=1");
    exit();
}
?>