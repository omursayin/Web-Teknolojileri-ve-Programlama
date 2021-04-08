<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Web, Php, Mvc, Programlama">
    <meta name="description" content="Abc Firması ... Alanda ... yılından beri hizmet vermektedir.">
    <meta name="author" content="... Yazılım">
    <title>Html Form İşlemleri</title>
</head>

<body>


<?php

$isim = "Ömür Selçuk";
$soyisim = "SAYIN";
$universite = "AydınMYO";
$no = "206001037";

?>


    <table style="width: 300px; height: 300px; border:3px;">
        <tr>
            <td colspan="5">Kişisel Bilgiler</td>
        </tr>
        <tr>
            <td>Ad</td>
            <td><input type="text" name="ad" value=<?php echo $isim; ?>></td>
        </tr>
        <tr>
            <td>Soyad</td>
            <td><input type="text" name="soyad" value=<?php echo $soyisim; ?>></td>
        </tr>
        <tr>
            <td>Üniversite</td>
            <td><input type="text" name="uni" value=<?php echo $universite; ?>></td>
        </tr>
        <tr>
            <td>No</td>
            <td><input type="text" name="no" value=<?php echo $no; ?>></td>
        </tr>
    </table>


</body>

</html>