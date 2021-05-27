<html>

<head>
    <!-- Açıklama Satırı : Shift + Alt + A -->
    <!-- Web Sitesi Head Bloğu -->
    <title>Web Programlama Dersi</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Web, Php, Mvc, Programlama">
    <meta name="description" content="Abc Firması ... Alanda ... yılından beri hizmet vermektedir.">
    <meta name="author" content="... Yazılım">
</head>

<body>
    <h3>Php Programlamaya Giriş</h3>
    <h3>Switch Case</h3>

    <?php
    $sayi = 4;

    switch ($sayi) {
        case '1':
            echo "Case-1 Çalıştı.";
            break;
        
        case '2':
            echo "Case-2 Çalıştı.";
            break;

        case '3':
            echo "Case-3 Çalıştı.";
            break;
        
        case '4':
            echo "Case-4 Çalıştı.";
            break;

        default:
            echo "Belirtilen Değer Bulunamadı.";
            break;
    }
    ?>
</body>

</html>