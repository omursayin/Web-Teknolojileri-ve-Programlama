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
    <h3>Php Programlama</h3>
    <h3>Post Get Metotları</h3>
    <hr>
    <ol>
        <li>POST verileri gizli olarak gönderir. Şifreli Değildir.</li>
        <li>GET verileri adres satırında görünür.</li>
        <li>GET değeri adres satırından değiştirilebilir. Adres satırından sayfa içine müdahale edilebilir.</li>
        <li>Formda action kısmı boş olursa aynı sayfaya post işlemi gerçekleşir.</li>
    </ol>

    <!-- <form action="" method="POST">
        <input type="text" name="isim" placeholder="İsminizi Yazınız">
        <input type="submit" name="form1" value="Formu Göder">
    </form> -->

    <?php
    /* echo $_POST["isim"]; */
    ?>

    <!-- <form action="" method="GET">
        <input type="text" name="isim" placeholder="İsminizi Yazınız">
        <input type="submit" name="form2" value="Formu Göder">
    </form> -->

    <?php
    /* echo $_GET["isim"]; */
    ?>



    <h4>Kullanıcı Girişi</h4>

    <form action="" method="POST">
    
        <input type="text" name="ad" placeholder="Lütfen Kullanıcı Adınızı Giriniz">
        <br>
        <input type="password" name="pass" placeholder="Lütfen Şifrenizi Giriniz">
        <br>
        <button type="submit"> Formu Gönder </button>
    </form>

    <?php
    $pass = 123;
    $user = "php";

    if ($user == $_POST["ad"] and $pass == $_POST["pass"]) {
        echo "Hoşgeldin. -- $user";
    }
    else {
        echo "Malesef Giriş Başarısız.";
    }

    ?>

    
</body>

</html>