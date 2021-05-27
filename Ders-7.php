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
    
    <?php

    echo "<h3> IF Uygulama-4: Elseif Uygulama </h3><hr>";

    $not =20;

    if ($not >= 50) {
        echo "Öğrencinin Notu 50'den büyük ya da eşit: $not";
    }
    elseif ($not < 50) {
        echo "Öğrencinin Notu 50'den küçük: $not";
    }

    echo "<br><br><br>";

    echo "<h3> IF Uygulama-5: Geçme Notu Uygulaması-1: <br> (Öğrencinin notu : 5= pekiyi  4= iyi  3= orta  2= geçer  1=kalır) </h3><hr>";

    $puan = 2;

    if ($puan == 5) {
        echo 'Pekiyi:' . $puan;
    }
    elseif ($puan == 4) {
        echo 'İyi:' . $puan;
    }
    elseif ($puan == 3) {
        echo 'Orta:' . $puan;
    }
    elseif ($puan == 2) {
        echo 'Geçer:' . $puan;
    }
    elseif ($puan == 1) {
        echo 'Kalır:' . $puan;
    }
    else {
        echo "<b>Girilen Değer : $puan -- Lütfen 1-5 arası not giriniz !</b>";
    }


    echo "<br><br><br>";

    echo "<h3> IF Uygulama-6: Geçme Notu Uygulaması-2: <br> (Öğrencinin notu : Not 80-100= AA  70-80= BB  60-70= CC  50-60= DD  50<= FF) </h3><hr>";

    $not = 77;
    /*Not 80-100= AA  70-80= BB  60-70= CC  50-60= DD  50<= FF */
    if ($not >= 80 and $not <= 100) {
        echo " AA ile geçer $not";
    }
    elseif ($not >= 70 and $not < 80) {
        echo " BB ile geçer $not";
    }
    elseif ($not >= 60 and $not < 70) {
        echo " CC ile geçer $not";
    }
    elseif ($not >= 50 and $not < 60) {
        echo " DD ile geçer $not";
    }
    elseif ($not <= 50 and $not >= 0) {
        echo " FF ile kalır $not";
    }
    else {
        echo "Geçersiz Not.";
    }

    echo "<br><br><br>";

    echo "<h3>Kısa If Kullanımı</h3>";

    $sayi = 500;
    echo $sayi == 500 ? "Sayı Eşit" : "Sayı Eşit Değil.";

    echo "<br>";

    if ($sayi == 500) {
        echo "sayı eşit";
    }
    else {
        echo "sayı eşit değil";
    }



    echo "<br><br><br>";
    echo "<h3> Select Kullanımı -- 1 :</h3><hr>";
    $veriTabaniDers = 0;
    ?>

    <select name="dersler" id="">
        <option value ="" selected disabled> Lütfen Bir Ders Seçiniz. </option>
        <option value="0" <?php echo $veriTabaniDers == 0 ? "selected" : " "; ?>>Php</option>
        <option value="1">Java</option>
        <option value="2">Python</option>
        <option value="3">Asp</option>
        <option value="4">Core1</option>
        <option value="5">Adobe</option>
    </select>

    <?php

    echo "<br><br><br>";
    echo "<h3> Select Kullanımı -- 2 :</h3><hr>";
    $veriTabaniDers = 0;

    $dersler=["Java", "Python", "Php", "Asp", "Corel", "Adobe"];
    
    foreach ($dersler as $key => $value) {
        echo " $key - $value <br>";
    }

    ?>

    <select name="dersler" id="">
        <option value ="" selected disabled> Lütfen Bir Ders Seçiniz. </option>

        <?php foreach ($dersler as $key => $value) { ?>

            <option value="<?php echo $key; ?>" <?php echo $key == $veriTabaniDers ? "selected" : " "; ?>><?php echo $value ?></option>
    
        <?php } ?>

    </select>



    
</body>

</html>