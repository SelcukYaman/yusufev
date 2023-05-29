<?php 

$vt_sunucu="localhost:3306"; // sunucu
$vt_kullanici="yusuf"; // sunucusunun kullanıcı adı
$vt_sifre="159357Yusuf123."; // sunucusunun kullanıcısının şifresi
$vt_adi="yusuf"; // sunucuya ait veri tabanı
$baglan=mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi); //sunucuya baglantı kodu
if (!$baglan){ //baglantı sağlanamadıysa

 die("Veri tabanına bağlanılamadı".mysqli_connect_error()); //bağlanamadı diye ekrana yazdır.

}


 ?>
 <?php 

$vt_sunucu="sql104.epizy.com:3306"; // sunucu
$vt_kullanici="epiz_34290002"; // sunucusunun kullanıcı adı
$vt_sifre="tn5zDI9y2ScO8M"; // sunucusunun kullanıcısının şifresi
$vt_adi="epiz_34290002_yusuf"; // sunucuya ait veri tabanı
$baglan=mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi); //sunucuya baglantı kodu
if (!$baglan){ //baglantı sağlanamadıysa

 die("Veri tabanına bağlanılamadı".mysqli_connect_error()); //bağlanamadı diye ekrana yazdır.

}


 ?>