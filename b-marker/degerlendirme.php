<?php 

include("baglanti.php");
$degerlendirmeSayisi=0;
extract($_POST); // extract fonksiyonu ile değişkenleri gelen isimleriyle kullanılır hale getirdik ve aldık. 
	if($_POST){ // eğer post işlemi varsa
		echo "degerlendirmeID :".$degerlendirmeID.'<br>'.'paunAl :'.$paunAl.'<br>';

		$session=@$_SESSION["uye_id"];
		if(mysqli_num_rows(mysqli_query($baglan,"select * from icerik_degerlendirme where kimDegerlendirdiID=".$session." ")) == 1 ){
			echo "1 kez puan verebilirsiniz.";
		}else{
		//$session=$_SESSION["uye_id"];
			if( ($degerlendirmeID != "") && ($paunAl != "") && ($session != "")){
				
				$degerlenedirmeEkle=mysqli_query($baglan,"insert into icerik_degerlendirme (kimDegerlendirdiID,DegerlendirilenIcerikID,puan) values ('$session','$degerlendirmeID','$paunAl')");
				if($degerlenedirmeEkle){
					echo "Bizi değerlendirdiğiniz için teşekkürler :)";
				}else{
					echo ":(";
				}


			}else{
				echo "Veri tabanına eklenecek veriler gelmemiş veya üye girişi yapmadınız";
			}
		}



	}
?>