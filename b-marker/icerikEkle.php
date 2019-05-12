<?php
include("baglanti.php");
extract($_POST); // extract fonksiyonu ile değişkenleri gelen isimleriyle kullanılır hale getirdik ve aldık. 
	if($_POST){ // eğer post işlemi varsa
		//echo "1. input : " . $ad . "<br>2. input : " . $hakkinda ."<br> 3.input :".$kat."<br> 4.input :".$_FILES['kitap']['name'].'<br>'; // gelen verileri geri gönderdik.
	
	
	$sessionID=$_SESSION["uye_id"];
	$icerikResim=$_FILES['kitap']['name'];
	$yeni_ad="img/".$icerikResim;
			
	if(move_uploaded_file($_FILES['kitap']['tmp_name'],$yeni_ad)){
		//echo "Dosya başarıyla yüklendi..";
	}else{/*echo "Dosya yüklenemedi..";*/ }

	if( ($sessionID != "" ) && ($ad != "") && ($hakkinda != "") && ($kat != "") && ($icerikResim != "")){


		//$icerikResim=$_FILES['kitap']['name'];
		$icerikEkle=mysqli_query($baglan,"insert into icerikYayinla (icerikResim,konu,kategori,icerikYazan,tarih,icerikAdi) values('$icerikResim','$hakkinda','$kat','$sessionID',now(),'$ad')");

		if($icerikEkle){
			//echo "İçerik Yayınlandı,".mysqli_insert_id($baglan);
			echo mysqli_insert_id($baglan);
		}
		else{
			echo "HATA ";
		}
	}else{echo "üye girişi yapmalısınız veya boş yer bırakmayınız";}
}


?>