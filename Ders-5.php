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
    <h4>IF-ELSE</h4>

    <p>Önce şart belirtilir sonra süslü parantezler içerisine yapılması gereken belirtilir.</p>

    <p>Karşılaştırma Operatörleri</p>
    <ol>
        <li> == ($a == $b) > Eşit ise (Genellikle matematiksel işlemlerde tercih edilir.)</li>
        <li> != ($a != $b) > Eşit değildir.</li>
        <li> === ($a === $b) > Denk ise (string terimlerde kullanılır.)</li>
        <li> !== ($a !== $b) > Denk değildir.</li>
        <li> > ($a > $b) Büyük ise</li>
        <li> >= ($a >= $b) Büyük ya da eşit ise</li>
        <li> < ($a < $b) Küçük ise</li>
        <li> <= ($a <= $b) Küçük ya da eşit ise</li>
    </ol>

    <p>Mantıksal Operatörler: </p>

    <ol>
        <li> ! Olumsuzsa (!$a) ==> $a'nın değeri olumsuz yani FALSE ise TRUE yani doğru döner. Aksini yapar olumsuz mu diye sorar.</li>
        <li> && Ve ($a && $b) ==> $a ve $b'nin değeri olumlu ise olumlu yani TRUE döner, ikisinden biri olumsuz ise olumsuz yani FALSE döner.</li>
        <li> || Ya da ($a || $b) ==> $a'nın değeri ya da $b'nin değeri  olumlu ise olumlu döner. Birinin ya da ikisininde olumlu olması yeterlidir. </li>
    </ol>

    <p>Not:</p>
    <ul>
        <li>elseif sürekli tekrar eden sorgu açar.</li>
        <li>else son kapanış koşuludur. (Herhangi bir şart içermez, yukarıda verilen hiçbir şart sağlanmazsa döngü buraya girer ve sonlanır.)</li>
    </ul>

    <?php

    /* 
    if (condition) {
        # code
    }
    elseif (condition) {

    }
    elseif (condition) {

    }
    else {

    }
    */

    $sayi1 = 123;
    $sayi2 = 55;
    $sayi3 = 123;
    $ders = "Php Programlama";

    echo "<h3> IF Uygulama-1: </h3> <hr>";
    echo "\$sayi1 = $sayi1 ----- \$sayi2 = $sayi2 ----- \$ders = $ders <br><br>";

    /* sayi1 içerisinde bir değer varsa */
    if ($sayi1) {
        echo "<b>Bu şart içindeki \$sayi1 değişkeninin değeri vardır: </b> $sayi1" . "<br>";        
    }

    /* Eşitlik varsa */
    if ($sayi1 == 123) {
        echo "<b>Bu şart içindeki değer \$sayi1 değişkenine eşit: </b> $sayi1" . "<br>";        
    }
    
    /* Eşitlik yoksa */
    if ($sayi1 != $sayi2) {
        echo "<b>Bu şart içindeki değer \$sayi1 değişkenine eşit: </b> $sayi1" . "<br>";        
    }

    //Şartların hepsi geçerli olmalı.

    if ($sayi1 == 123 and $sayi3 >= $sayi2) {
        echo "Koşul sağlandı - AND <br>";        
    }

    if ($sayi1 == 123 && $sayi3 >= $sayi2) {
        echo "Koşul sağlandı - && <br>"; 
    }

    //İki şartın en az biri geçerli olmalı.
    if ($sayi1 == 123 or $sayi3 == 11) {
        echo "Koşul sağlandı - OR <br>"; 
    }

    if ($sayi1 == 123 || $sayi3 == 11) {
        echo "Koşul sağlandı - || <br>"; 
    }

    /* String üzerindedenklik örneği */
    if ($ders === "Php Programlama") {
        echo "<b> Bu şart içindeki değer \$ders değişkeninin aynısı: </b> $ders" . "<br>"; 
    }

    if ($sayi1 > $sayi2) {
        echo "<b> \$sayi1 değişkeni \$sayi2 değişkeninden büyük: </b> $sayi1 > $sayi2" . "<br>";
    }

    if ($sayi2 < $sayi1) {
        echo "<b> \$sayi2 değişkeni \$sayi1 değişkeninden küçük: </b> $sayi2 < $sayi1" . "<br>";
    }

    if ($sayi1 >= $sayi3) {
        echo "<b> \$sayi1 değişkeni \$sayi3 değişkenie eşit ya da büyük: </b> $sayi1 >= $sayi3" . "<br>";
    }

    if ($sayi1 <= $sayi3) {
        echo "<b> \$sayi1 değişkeni \$sayi3 değişkenie eşit ya da küçük: </b> $sayi2 <= $sayi3" . "<br>";
    }

    echo "<h3> IF Uygulama-2: Değerin 0-100 arasında olup olmadığının kontrolü:</h3><hr>";

    $sayi = rand(0,150);
    if ($sayi > 0 && $sayi < 100) {
        echo "Bu sayı 0-100 arasındadır: $sayi";
    }
    else {
        echo "Bu sayı 0-100 arasında değildir: $sayi";
    }


    echo "<br><br><br><br><br><br>";

    echo "<h3> IF Uygulama-3: Doğum yılına göre ehliyet alabilme durum kontrolü:</h3><hr>";

    $yil = 2021;
    $dogum_yili = 2009;
    $yas = $yil - $dogum_yili;

    if ($yas > 18) {
        echo "Ehliyet alabilirsiniz. Yaşınız: $yas";
    }
    else {
        $kalan_yil = 18 - $yas;
        echo "Ehliyet alamazsınız. Ehliyet alabilmek için $kalan_yil yıl süre geçmesi gereklidir. Yaşınız: $yas";
    }


    echo "<h3> IF Uygulama-4: Yukarıdaki örneğin aynısını form üzerinden girilen verilere göre işleyiniz:</h3><hr>";


    ?>
</body>

</html>