<?php
include("baglanti.php");

extract($_POST); // extract fonksiyonu ile değişkenleri gelen isimleriyle kullanılır hale getirdik ve aldık. 
	if($_POST){ // eğer post işlemi varsa
		echo "icerikID :".$icerikID.'<br>'."takipEdenID :".$takipEdenID.'<br>';

		if( ($icerikID != "") && ($takipEdenID != "")  ){

			$followEkle=mysqli_query($baglan,"insert into icerik_followlar (icerikID,takipEdenID) values ('$icerikID','$takipEdenID')");
			if($followEkle){
				echo "Takiptesin :)";
			}else{
				echo "Takip işlemin başarısız oldu :(";
			}


		}else{
			echo "Veri tabanına eklenecek veriler gelmemiş";
		}




	}

?>