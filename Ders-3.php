<html>

<head>
    <title>Web Programlama Dersi</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Web, Php, Mvc, Programlama">
    <meta name="description" content="Abc Firması ... Alanda ... yılından beri hizmet vermektedir.">
    <meta name="author" content="... Yazılım">
</head>

<body>
    <h2>Diziler</h2>
    <h5>Dizilerin Özellikleri</h5>

    <ol>
        <li>Dizi oluşturmak için array fonksiyonu kullanılır.</li>
        <li>Dizilerin içerisinde birden çok değer bulunabilir.("php","java",10,20)</li>
        <li>echo $dizi_isim şeklinde ekrana yazdırılamaz. Bu komutun sonucu sadece ekrana (Array to string conversion) ARRAY yazar. Diziyi Ekrana Yazdırır: print_r($dizi)</li>
        <li>Dizi içerisindeki indisler tek olarak da çağırılabilir. Yani sadece 3. indili dizi elemanına ulaşılabilir. Dizinin sadece istenilen elemanına erişmek için echo komutu kullanılır. 
        Dizinin Elemanını Ekrana Yazdırır: echo $dizi[2] </li>
        <li>Dizi içerisinde metinsel ifadeler çift tırnak ile oluşturulur.</li>
        <li>Dizi içerisinde sayısal ifadeler herhangi bir parantez veya tırnak işaretine gerek kalmadan virgülle ayrılarak.</li>
        <li>Dizi içerisindeki indisler varsayılan olarak 0'dan başlar.</li>
        <li>Diziler içerisinde yeni diziler oluşturulabilir.</li>
    </ol>

    <?php

    $dizi1 = array(1, 2, 3, "Ali", "Ahmet", "Kemal");
    $dizi2 = ["php", "java", 10, 20];

    echo "<pre>";
    print_r($dizi1);
    echo "</pre>";

    echo "<pre>";
    print_r($dizi2);
    echo "</pre>";

    echo "Dizi2'nin 3. Elemanı:" . $dizi2[3];

    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo "Dizi1'in 0. İndisi: <b>" . $dizi1[0] . "</b><br>";
    echo "Dizi1'in 1. İndisi: <b>" . $dizi1[1] . "</b><br>";
    echo "Dizi1'in 2. İndisi: <b>" . $dizi1[2] . "</b><br>";
    echo "Dizi1'in 3. İndisi: <b>" . $dizi1[3] . "</b><br>";
    echo "Dizi1'in 4. İndisi: <b>" . $dizi1[4] . "</b><br>";
    echo "Dizi1'in 5. İndisi: <b>" . $dizi1[5] . "</b><br>";

    ?>


    <h2>Diziler-2</h2>

    <?php

    $bilgiler = [1, 2, 3, 4, 5];

    $bilgiler = array(
        1, 2, 3, 4, 5
    );

    $bilgiler = array(
        "id"        => 1,
        "adi"       => "Kerim",
        "soyadi"    => "Elmacık",
        "cinsiyet"  => "E",
        "yas"       => 25
    );


    echo "<pre>";
    print_r($bilgiler);
    echo "</pre>";

    echo $bilgiler["adi"] . "" . $bilgiler["soyadi"];

    echo "<br>";
    foreach ($bilgiler as $key => $bilgi) {
        echo $key . "-->" . $bilgi . "<br>";
    }

    echo "<br>";
    foreach ($bilgiler as $key => $value) {
        echo $key . "-->" . $value . "<br>";
    }


    $isimler[]="Mehmet";
    $isimler[]="Kemal";
    $isimler[]="Ali";


    echo "<pre>";
    print_r($isimler);
    echo "</pre>";

    $isimler=array();

    $isimler["isim1"]="Mehmet";
    $isimler["isim2"]="Kemal";
    $isimler["isim3"]="Ali";
    $isimler[]="Fatih";
    $isimler[0]="Yusuf";


    echo "<pre>";
    print_r($isimler);
    echo "</pre>";


    /* Çok Boyutlu Diziler */

    $bilgiler = array(
        "id"        => 1,
        "adi"       => "Kerim",
        "soyadi"    => "Elmacık",
        "cinsiyet"  => "E",
        "yas"       => 25,
        array(1, 2, 3, 4)
        
    );
    
    echo "<pre>";
    print_r($isimler);
    echo "</pre>";

    echo "1. Boyuttaki Elemana Erişim: " . $bilgiler["adi"] . "<br>";
    echo "2. Boyuttaki Elemana Erişim: " . $bilgiler[0][3] . "<br>";

    echo "<br>";
    echo "<br>";


    $bilgiler = array(
        "id"        => 1,
        "adi"       => "Kerim",
        "soyadi"    => "Elmacık",
        "cinsiyet"  => "E",
        "yas"       => 25,
        "dersler"   => array(
            "ders1" => "Fizik",
            "ders2" => "php",
            "ders3" => "asp",
            "ders4" => "sql"
        )
    );

    echo "<pre>";
    print_r($bilgiler);
    echo "</pre>";
    
    echo "1. Boyuttaki Elemana Erişim:" . $bilgiler["adi"] . "<br>";
    echo "2. Boyuttaki Elemana Erişim:" . $bilgiler["dersler"]["ders1"] . "<br>";
    echo "3. Boyuttaki Elemana Erişim:" . $bilgiler["dersler"]["ders2"] . "<br>";

    
    ?>


    
</body>

</html>