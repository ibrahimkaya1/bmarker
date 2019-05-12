<?php
include("baglanti.php");

if(isset($_POST["Giris"])){

	$username=$_POST["username"];
	$sifre=$_POST["sifre"];
	$beniHatirla=@$_POST["beniHatirla"];


	echo "username :".$username.'-->'.' sifre :'.$sifre.'<br>';

	$uyeler="select * from users";
	$sorgu=mysqli_query($baglan,$uyeler);
	while($srgUyler=mysqli_fetch_assoc($sorgu)){

		if( ($srgUyler["usrName"] == $username ) && ($srgUyler["sifre"] == $sifre) ){


			$_SESSION["login"] = "true";
	 		$_SESSION["username"]=$srgUyler["usrName"];
	 		//$_SESSION["dogum_tarihi"]=$srgUyler["dogum_tarihi"];
	 		$_SESSION["uye_id"]=$srgUyler["id"];
	 		$_SESSION["sifre"]=$srgUyler["sifre"];
	 		//echo $_SESSION["isim"];
	 		//$_SESSION["soyad"]=$srgUyler["uye_soyadi"]; 
	 		$_SESSION["email"]=$srgUyler["email"]; 

	 		if(isset($beniHatirla)){ // cookie işlemleri
	 			echo " seni hatırlayacağım :)  ..".'<br>';

	 			setcookie("email",$_SESSION["email"]);
	 			setcookie("sifre",$_SESSION["sifre"]);

	 			setcookie("hatirlaBeni","Merhaba ben B-Marker",time() + 60 );
	 			//echo @$_COOKIE["hatirlaBeni"].'<br>';
	 			//echo @$_COOKIE["email"].'<br>';
	 		}else{
	 			echo " Beni hatirla kısmına tıklanmadı ..".'<br>';
	 			//header( "refresh:2;url=uye_kayit_and_session.php" );
	 			setcookie("hatirlaBeni","Merhaba ben mansur",time()-3600); //cookie silme yöntemi
	 			//setcookie();
	 		}
			//sweetAlert("Login İşlemi", "Girişiniz başarılı..", "success");
			echo "Giriş Başarılı ..";
			header( "refresh:2;url=index.php" );

			break;
		}

	}

}



?>