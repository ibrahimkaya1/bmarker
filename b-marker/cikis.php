<?php
	include("baglanti.php");
	session_destroy();

	setcookie("hatirlaBeni","Merhaba ben B-Marker ",time()-3600);
	
	header( "refresh:1;url=index.php" );
?>