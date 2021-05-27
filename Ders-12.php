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
    <h3>Fonksiyonlar:</h3>

    <p>Rutin işlemler için kullanılır. rand, strtoupper fonksiyon örnekleridir. Bunlar içerisinde ne işlem yapılması gerektiği önceden tanımlanmıştır.</p>


    <?php

    function yaz()
    {
        echo "Merhaba";
    }
    yaz();


    echo "<br><br>";

    function yaz2()
    {
        return "Merhaba Return";
    }
    echo yaz2();


    echo "<br><br>";

    function yaz3()
    {
        $yazi = "Fonksiyondan Merhaba Return İşlemi Yapıldı";
        return $yazi;
    }
    echo yaz3();


    echo "<br><br>";

    function yazAd($isim="İsim Belirtilmedi")
    {
        $yazi = "Fonksiyondan Merhaba Return : $isim";
        return $yazi;
    }
    echo yazAd();


    echo "<br><br>";

    echo yazAd("Kemal");

    echo "<br><br>";

    function yazAd2($isim="İsim Belirtilmedi")
    {
        $yazi = "Fonksiyondan Merhaba Return : $isim";
        echo $yazi;
    }
    yazAd2("Mehmet");


    echo "<br><br>";

    function yazAdEcho($isim="İsim Belirtilmedi")
    {
        echo " Hoşgeldiniz : $isim";
    }

    yazAdEcho("Ayşenur");
    echo "<br>";
    yazAdEcho("Kerim");
    echo "<br>";
    yazAdEcho("Masal");
    echo "<br>";
    yazAdEcho("Öykü");
    

    echo "<br><br>";
    echo ("Toplama İşlemi Fonksiyonu Oluşturma: <br>");


    function topla($sayi1, $sayi2)
    {
        echo $sayi1 + $sayi2;
    }
    topla(13, 25);


    echo "<br><br>";
    
    function topla2($sayi1 = 15, $sayi2 = 10)
    {
        $toplam = $sayi2 + $sayi1;
        return $toplam;
    }

    echo topla2(20);
    echo "<br>";
    echo topla2();
    echo "<br>";
    echo topla2(13,27);
    

    echo "<br><br>";

    function topla3($sayi1 = 15, $sayi2 = 10)
    {
        echo ($sayi1 + $sayi2);
    }
    topla3(55,67);


    echo "<br><br>";

    function topla4($sayi1 = 15, $sayi2 = 10)
    {
        return ($sayi1+$sayi2);
    }
    echo topla4(55,67)



    

    ?>

    
</body>

</html>