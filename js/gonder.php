<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Form Sonucu | Özer Yavçın</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-5">
    <div class="container">
        <div class="card shadow border-0 mx-auto" style="max-width: 600px;">
            <div class="card-header bg-dark text-white py-3">
                <h4 class="mb-0 text-center">Mesajınız Alındı</h4>
            </div>
            <div class="card-body p-4">
                <table class="table table-bordered">
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        foreach ($_POST as $key => $value) {
                            echo "<tr><th class='bg-light text-capitalize'>" . htmlspecialchars($key) . ":</th>";
                            echo "<td>" . htmlspecialchars($value) . "</td></tr>";
                        }
                    } else {
                        echo "<p class='text-danger'>Hata: Form verisi ulaşmadı.</p>";
                    }
                    ?>
                </table>
                <div class="text-center mt-4">
                    <a href="index.php" class="btn btn-outline-dark">Ana Sayfaya Dön</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>