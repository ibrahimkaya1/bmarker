    

      <div class="navbar">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fw-icon-th-list"></i>
            </button>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="#">Anasayfa</a></li>
              <!-- Php kısmında giriş kontrolu yapılacak yaz ve bildirimler giriş yapıldıysa gösterilecek-->
			  <li><a href="#">Yaz</a></li>
			  <li><a href="#">Bildirimler</a></li>
			  <li><a href="#">Güzel Söz</a></li>
              <li><a href="#">Hakkımızda</a></li>
              <li><a href="#">Bize Ulaşın</a></li>
			  <!-- Php ile kontrol edilecek giriş yaptıysa Kayıt Ol ve Giriş Yap butonları Kaldırılacak-->
			   
			  <li><a href="register.php">Kayıt Ol</a></li>

            <?php 
              if(isset($_SESSION["login"])=="true"){
                //echo $_SESSION["username"];

               /* if(isset($_COOKIE["hatirlaBeni"])){
                  echo '<li><a href="cikis.php">Çıkış Yap</a></li>'.'<br>';
                }*/
                 echo '<li><a href="cikis.php">Çıkış Yap</a></li>'.'<br>';
              }else{
                echo '<li><a href="login.php">Giriş Yap</a></li>'.'<br>';
              }

            ?>
              
            </ul>
          </div><!--/.navbar-collapse -->
        </div>
      </div>