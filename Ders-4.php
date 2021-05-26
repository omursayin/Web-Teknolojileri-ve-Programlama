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
    <h2>Diziler-3</h2>

    <?php
    echo "<hr>";
    echo "<b>Dizilerde sık kullanılan fonksiyonlar:</b>" . "<br>";

    $sayilar = [802, 22, 53 ,654, 58, 987, 2153, 1];
    echo "<pre>";
    print_r($sayilar);
    echo "</pre>";

    
    echo "<br> Dizilerin Sıralanmış Hali: <br>";
    sort($sayilar);
    echo "<pre>";
    print_r($sayilar);
    echo "</pre>";


    echo "<br> Dizilerin Büyükten Küçüğe Sıralanmış Hali: <br>";
    rsort($sayilar);
    echo "<pre>";
    print_r($sayilar);
    echo "</pre>";

    //Uyg: dizistr isminde bir dizi tanımlayarak 5 tane string değer (value) giriniz. Sonrasında sort ve rsort ile sıralayınız.

    echo "<br> Dizinin İçerisinde Arama İşlemi Yapma: <br>";
    $harfler = array("a", "b", "c", "d", "e");
    //echo in_array("a", $harfler); //Değer yoksa boş, varsa 1 döner.

    $sonuc = in_array("b", $harfler);
    
    echo "<br><br>";

    if ($sonuc) {

        echo "Aranılan harf bulundu - Durum1";
    }

    else {

        echo "Malesef aradığınızı bulamadık - Durum1";
    }

    echo "<br><br>";

    if (in_array("sb", $harfler)) {

        echo "Aranılan harf bulundu - Durum2";
    }

    else {

        echo "Malesef aradığınızı bulamadık - Durum2";
    }

    echo "<br><br><br><br><br>";
    echo "Dizinin Indislerindeki Elemanlarının Birleştirilmesi (implode):" . "<br>";

    $dizibir =array("php", "java", "asp", "web prog.");
    echo "<pre>";
    print_r($dizibir);
    echo "</pre>";

    $birlestir = implode(",", $dizibir);
    echo $birlestir . "<br>";

    $birlestir = implode("-", $dizibir);
    echo $birlestir . "<br>";

    $birlestir = implode(" ", $dizibir);
    echo $birlestir . "<br>";


    echo "<br><br><br><br><br>";
    echo "Değişkeni Parçalayarak Dizine Dönüştürür (explode): " . "<br>";

    $pizza = "piece1 piece2 piece3 piece4 piece5 piece6";

    echo "Parçalanacak Değer \$Pizza Değişkeni: $pizza <br>";
    $dilimler = explode(" ", $pizza);
    echo "<pre>";
    print_r($dilimler);
    echo "</pre>";

    ?>


    
</body>

</html>