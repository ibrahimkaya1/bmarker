<?php 

include("baglanti.php");
extract($_POST); // extract fonksiyonu ile değişkenleri gelen isimleriyle kullanılır hale getirdik ve aldık. 
	if($_POST){ // eğer post işlemi varsa
		echo "bolumBaslik :".$bolumBaslik.'<br>'."bolumSayisi :".$bolumSayisi.'<br>'."icerikYayinlaID :".$icerikYayinlaID.'<br>'.'bolumKonusu :'.$bolumKonusu.'<br>';
	
	$sessionID=$_SESSION["uye_id"];
	if( ($sessionID != "") && ($bolumBaslik != "") && ($bolumSayisi != "") && ($bolumKonusu != "") ){

		$bolumEkle=mysqli_query($baglan,"insert into icerikBilgisi (kacinciBolum,bolumYazan,tarih,bolumeBaslik,icerikYayinlaID,bolumKonusu) values('$bolumSayisi','$sessionID',now(),'$bolumBaslik','$icerikYayinlaID','$bolumKonusu')");

		if($bolumEkle){
			echo "Bölüm Eklendi";
		}
		else{
			echo "HATA ";
		}
	}else{echo "üye girişi yapmalısınız veya boş yer bırakmayınız";}
}
?>