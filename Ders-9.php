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
    <h3>Aynı Sayfada Birden Fazla Form İle İşlem Yapmak</h3>

    <form action="" method="POST">
        SAYI GİRİNİZ : <input type="text" name="sayi" placeholder="Sayı Giriniz">
        <button type="submit" name="sayibul"> TEK mi ÇİFT mi _?</button>
    </form>

    <?php
    if (isset($_POST["sayibul"])) {

        $sayi = $_POST["sayi"];
        echo "Sayi: $sayi <br>";


        if($sayi % 2 == 0) {
            $kalan = $sayi % 2;
            echo "Çift - $kalan";
        }
        else {
            $kalan = $sayi % 2;
            echo "Tek - $kalan";
        }

        echo "<br>";

        echo $sayi % 2 ? "Tek" : "Çift";

        echo "<br>";

        echo $sayi % 2 == 0 ? "Çift" : "Tek";
    }

    ?>
</body>

</html>