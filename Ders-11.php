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
    <h3>FOR-WHİLE</h3>

    <h3>For Döngüsü</h3>
    <p>Belli mantık ve koşullarda sürekli tekrar eden işlemler için kullanılır.</p>

    <ul>
        <li>$i=0; --> Başlangıç kısmıdır.</li>
        <li>$i < 10; --> Koşulkısmı.</li>
        <li>$i++ --> Artış kısmı.</li>
    </ul>
    <?php
    
    for ($i=1; $i <=3 ; $i++) {
        //echo $i. "<br>";
        echo "<h5>Merhaba $i</h5>";
    }

    ?>


    <h3>İl plakalarını döngü ile selectbox içerisine yazdırma</h3>

    <select name="plakakodu1" id="">
        <option value="">Plaka Kodunu Seçiniz-1.</option>

    <?php
    for ($plakakodu = 1; $plakakodu <= 81; $plakakodu++)
    {
        echo "<option value=$plakakodu>$plakakodu</option>";
    }
    ?>
    </select>


    <select name="plakakodu2" id="">
        <option value="">Plaka Kodunu Seçiniz-2.</option>

        <?php
        for ($plakakodu = 1; $plakakodu <= 81; $plakakodu++) {
        ?>

        <option value="<?php echo $plakakodu;?>"><?php echo $plakakodu;?> </option>

        <?php } ?>

    </select>


    <!-- Select içerisine 1'den 10'a kadar 1 er 1 er artan 10'dan 50'ye kadar 5 er 5 er artan değerleri yazdırınız. -->
    


    <h3>For Döngüsü İçerisinde if Koşulu</h3>

    <?php

    for ($i = 1; $i <= 10; $i++) {
        echo "-$i";
        if ($i == 5) {
            echo "<br> Sayı 5'e ulaştı.";
            break;
        }
    }
    ?>


    <h3>For Döngüsü İçerisinde Tek Çift Sayı</h3>
    <?php
    $tekSayilar = 0;
    $ciftSayilar = 0;

    for ($i = 1; $i <= 100; $i++) {
        //echo "$i. Sayı: $i<br>";

        if ($i % 2 == 0) {
            //echo "($i) Bu sayı çifttir.<br>";
            $ciftSayilar++;
        }
        else {
            //echo "($i) Bu sayı tektir.<br>";
            $tekSayilar++;
        }
    }
    echo "<hr>Döngüdeki Çift Sayı Adedi:$ciftSayilar <br>";
    echo "Döngüdeki Tek Sayı Adedi:$ciftSayilar <br>";


    ?>

    <!-- Yukarıdaki Örneğin Verilerinin Form Üzerinden Geldiği Bir Programlamayı Gerçekleştiriniz.
    Form üzerinden başlangıç değeri, bitiş değeri, artış değeri, alınarak yukarıdaki işleme benzer bir işlem gerçekleştiriniz. -->


    <h3>For Döngüsü İçerisinde Dizi Yazdırma İşlemi:</h3>
    <p>Dizinin elemanı istediği kadar artsın ya da azalsın sırasıyla ekrana yazdırılacaktır.</p>

    <?php
    $meyveler = array ("elma", "armut", "muz", "kivi", "portakal");

    $elemanSayisi = count($meyveler); //Dizinin eleman sayısını alma fonksiyonu.

    for ($i = 0; $i < $elemanSayisi; $i++) {
        echo "Dizinin $i. Elemanı: $meyveler[$i] <br>";
    }

    echo "<hr>";
    for ($i = 0; $i < count($meyveler); $i++) {
        echo "Dizinin $i. Elemanı: $meyveler[$i] <br>";
    }

    ?>


    <h3>Foreach Döngüsü (Diziler için üretilmiş bir döngüdür.)</h3>
    <?php
    foreach ($meyveler as $meyve) {
        echo $meyve . "<br>";
    }

    ?>


    <!-- While -->
    <h3>While Döngüsü</h3>

    <?php

    $sayi = 0;
    while ($sayi <= 10) {
        echo "$sayi <br>";
        $sayi++;
    }

    echo "....................<br>";
    $sayi = 0;
    while ($sayi <= 10) {
        $sayi++;
        echo "$sayi <br>";
    }


    ?>

    
</body>

</html>