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
</body>

</html>