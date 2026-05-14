<?php
$api_key = "a97d34f24152e2f2070198a1ba72e0b5"; 
$url = "https://api.themoviedb.org/3/movie/popular?api_key=" . $api_key . "&language=tr-TR&page=1";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0');

$response = curl_exec($ch);

// HATA AYIKLAMA KODU:
if($response === false) {
    echo 'Hata: ' . curl_error($ch);
} else {
    header('Content-Type: application/json');
    echo $response;
}
curl_close($ch);
?>