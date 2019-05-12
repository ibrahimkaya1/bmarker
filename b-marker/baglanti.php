<?php
$sunucu="localhost";
$user_name="root";
$sifre="";
$veritabani="bMarker";

$baglan=mysqli_connect($sunucu,$user_name,$sifre,$veritabani);
if(!$baglan){
	
	die("veritabanına bağlanırken hata oluştu..tejkrardan bağlanmayı deneyiniz..");
}
else{
//	echo "Bağlantı var".'<br>';
}
 @session_start();
 @ob_start();

?>