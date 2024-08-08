<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bilgi Sayfası</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
        <h1>PHP Bilgi Sayfası</h1>
        <div class="info-section">
            <?php
                // PHP bilgilerini göster
               # phpinfo();
            ?>
        </div>
        <div class="info-section">
            <p>Merhaba! PHP ile basit bir sayfa tasarladık. Aşağıdaki bilgiler, sunucunuzun PHP yapılandırmasını göstermektedir.</p>
            <h6> Eğer açık değilse phpinfo seçeneğini açın</h6>
        </div>
    </div>
</body>
</html>
