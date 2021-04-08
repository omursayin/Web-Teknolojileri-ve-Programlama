<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Web, Php, Mvc, Programlama">
    <meta name="description" content="Abc Firması ... Alanda ... yılından beri hizmet vermektedir.">
    <meta name="author" content="... Yazılım">
    <title>Web Programlama Dersi</title>
</head>

<body>
    <h4>Php Programlama</h4>
    <h5>Sık Kullanılan String Fonksiyonları</h5>

    <?php

    $yazi = "Aydın Adnan Menderes Üniversitesi";
    echo "<b>\$yazi Değişkeninin İçeriği: </b>" . "$yazi <br>"; //echo $yazi . "<br>";

    
    //$yazi değişkeninin içerisindeki değerlerin büyük harfe dönüştürülerek, $byazi değişkeninin içerisine aktarıp ekrana yazdırma işlemi:
        
    echo "<b> \$yazi Değişkeninin Büyük Harfe Dönüştürülmesi: </b>" . $byazi = strtoupper($yazi);
    echo "<br>";
    echo "<b> \$yazi Değişkeninin Büyük Harfe Dönüştürülmesi: </b>" . $byazi = mb_strtoupper($yazi);
    echo "<br>";


    //$byazi değişkeninin içerisindeki değerlerin küçük harfe dönüştürülerek, $kyazi değişkeninin içerisine aktarıp ekrana yazdırma işlemi:

    echo "<b> \$byazi Değişkeninin Küçük Harfe Dönüştürülmesi: </b>" . $kyazi = strtolower($byazi);
    echo "<br>";
    echo "<b> \$byazi Değişkeninin Küçük Harfe Dönüştürülmesi: </b>" . $kyazi = mb_strtolower($byazi);
    echo "<br>";


    //$kyazi değişkeninin içerisindeki değerin sadece ilk kelimenin ilk harfini büyütülerek $ilkyazi değişkeninin içerisine aktarıp ekrana yazılması işlemi:

    echo "<b> \$kyazi Değişkeninin İlk Karakterinin Büyütülmesi: </b>" . $ilkyazi = ucfirst($kyazi);
    echo "<br>";


    //$kyazi değişkeninin içerisindeki kelimelerin ilk harflerini büyütülerek ekrana yazılması işlemi:

    echo "<b> \$kyazi Değişkeninin Kelimelerindeki İlk Karakterlerinin Büyütülmesi: </b>" . ucwords($kyazi);
    echo "<br>";


    //$yazi değişkeninin içerisinde kullanılan karakter sayısını ekrana yazdırma:

    echo "<b> \$yazi Değişkeninin İçerisindeki Karakter Sayısı: </b>" . strlen($yazi);
    echo "<br>";


    //$yazi değişkeninin ilk 21 karakterini ekrana yazdırma:

    echo "<b> \$yazi Değişkeninin İçerisindeki İlk 21 Karakter: </b>" . substr($yazi, 0, 22);
    echo "<br>";


    ?>

    <hr>

    <h3>Devamını Oku Uygulaması:</h3>
    <h4>Uygulama Açıklaması:
        Metnin ilk 200 karakterini göstererek DEVAMINI OKU butonu eklenecektir.
        Butona tıklandığında yeni bir sekmede üniversitenin web sitesi açılacaktır.
    </h4>

    <?php
    $yazi="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores doloremque rerum asperiores perspiciatis dignissimos delectus iusto at vitae repudiandae, ratione atque odio quaerat, quasi, 
    consectetur sit eveniet accusantium quod pariatur. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores doloremque rerum asperiores perspiciatis dignissimos delectus iusto at vitae repudiandae, 
    ratione atque odio quaerat, quasi, consectetur sit eveniet accusantium quod pariatur. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores doloremque rerum asperiores perspiciatis dignissimos 
    delectus iusto at vitae repudiandae, ratione atque odio quaerat, quasi, consectetur sit eveniet accusantium quod pariatur. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores doloremque rerum 
    asperiores perspiciatis dignissimos delectus iusto at vitae repudiandae, ratione atque odio quaerat, quasi, consectetur sit eveniet accusantium quod pariatur. Lorem, ipsum dolor sit amet consectetur adipisicing 
    elit. Maiores doloremque rerum asperiores perspiciatis dignissimos delectus iusto at vitae repudiandae, ratione atque odio quaerat, quasi, consectetur sit eveniet accusantium quod pariatur."

    ?>
    
</body>

</html>