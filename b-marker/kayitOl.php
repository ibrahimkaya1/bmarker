<?php
include("baglanti.php");

if(isset($_POST["Kayit"])){


	$username=$_POST["username"];
	$email=$_POST["email"];
	$sifre=$_POST["sifre"];
	$sifreTekrar=$_POST["sifreTekrar"];

	echo "username :".$username.'-->'.' email :'.$email.'-->'.' sifre :'.$sifre.'-->'.' sifreTekrar :'.$sifreTekrar.'<br>';

	$kayitEkleme="insert into users (usrName,email,sifre,sifreTekrar) values('$username','$email','$sifre','$sifreTekrar')";


	if($sifre==$sifreTekrar){
		$kayitSorgusu = mysqli_query($baglan,$kayitEkleme);
		if($kayitSorgusu ){
		echo "Başarılı Bir Şekilde Kayıt Oldunuz".'<br>';
		}else{
			echo "BaşarıSIZ Bir Şekilde Kayıt Oldunuz".'<br>';
		}
	}else{
		echo "Şifreleriniz Uyuşmuyor.".'<br>';
	}


}
?>