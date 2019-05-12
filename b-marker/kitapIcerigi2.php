<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">


  <title>B-marker - Kitap Sayfası</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/component.css">
  <link rel="stylesheet" href="css/custom-styles.css">
  <link rel="stylesheet" href="css/font-awesome.css">


  <link rel="stylesheet" href="css/demo.css">
  <link rel="stylesheet" href="css/font-awesome-ie7.css">

  <script src="js/jquery.mobilemenu.js"></script>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>

    <!--jquery-ajax  -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
  <script>
  //  $(document).ready(function () {
    $(document).ready(function (e) {
      
    $('#gonderilenform').on('submit',(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        
        $.ajax({
            type:'POST',
            url: 'followEkle.php',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
              
                //$('#test').val(data);
                $('.yayinDurum').html(data);
                
            },
            error: function(data){
                $('.yayinDurum').html('hata: '+data);
            }
        });
       }));
    $('#gonderilenform2').on('submit',(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        
        $.ajax({
            type:'POST',
            url: 'degerlendirme.php',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
              
                //$('#test').val(data);
                $('.yayinDurum1').html(data);
                
            },
            error: function(data){
                $('.yayinDurum1').html('hata: '+data);
            }
        });
       }));
      $('.menu').mobileMenu();

    });
  </script>

</head>
<body>
  <?php include("baglanti.php"); ?>
  <div class="header-wrapper">
    <div class="site-name">
      <h1>b-marker</h1>
    </div>
  </div>
  <div class="menu">
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
            <li><a href="login.php">Giriş Yap</a></li>
          </ul>
        </div>
        <!--/.navbar-collapse -->
      </div>
    </div>

    <div class="mini-menu">
      <label>
        <select class="selectnav">
          <option value="#" selected="">Home</option>
          <option value="#">About</option>
          <option value="#">→ Another action</option>
          <option value="#">→ Something else here</option>
          <option value="#">→ Another action</option>
          <option value="#">→ Something else here</option>
          <option value="#">Services</option>
          <option value="#">Work</option>
          <option value="#">Contact</option>
        </select>
      </label>
    </div>
  </div>


  <div class="container">

    <!-- SOL TARAF KİTAP RESMİ,YAZARI VE TARİH HAKKINDA BİLGİ -->

    <!--  KİTAP AÇIKLAMASININ İÇERİK KISMI -->
    <div class="row m-15-top" >

      <div class="col-lg-9" style="border:1px solid black">
      <div class="icerik" style="border:1px solid red;">
        <div class="col-md-4" style="border:1px solid yellow;">
          <div class="icerik">
            <?php 
            //anasayfasa yer alan kitaplara tıklanıp bu kısma gelindiğinde id değerine $_GET ile id ata
            $srg=mysqli_query($baglan,"select * from icerikYayinla where id=1");
            while ($s=mysqli_fetch_assoc($srg)) {
              $srg2=mysqli_query($baglan,"select * from users where id=".$s["icerikYazan"]."");
              while ($s1=mysqli_fetch_assoc($srg2)) {
                 
              
              echo '  <div class="site-name">
                        <h3>'.$s["icerikAdi"].'</h3>
                      </div>
                      <img src="img/'.$s["icerikResim"].'" alt="" class="img-responsive">
                      <div class="caption">
                        <h1>Genel Bilgiler</h1>
                        <p>Yazar Adı : '.$s1["usrName"].'</p>
                        <p>Çıkış Tarih: '.$s["tarih"].'</p>
                        <p>Kategori: '.$s["kategori"].'</p>
              ';?>
                <form id="gonderilenform2" method="post"  enctype="multipart/form-data">
                        <input type="hidden" name="degerlendirmeID" value="<? echo $s["id"]; ?>" />
                        Puan Ver: <input type="text" name="paunAl">
                        <button type="submit"> Değerlendirme</button>
                        <div class="yayinDurum1"></div>
                </form>


                 <form id="gonderilenform" method="post"  enctype="multipart/form-data">
                  <!--<input type="button" class="btn" value="+ FOLLOW" style="float: left;" href="#">-->
                  <input type="hidden" name="icerikID" value="<? echo $s["id"]; ?>">
                  <input type="hidden" name="takipEdenID" value="<? echo $s1["id"]; ?>">
                  <button type="submit"> + FOLLOW</button>
                  <div class="yayinDurum"></div>
                </form>
                
             </div>
          </div>
        </div>
        <div class="block" style="margin-left: 20px;">
          <div class="caption">
            <?php echo '<h1>'.$s["icerikAdi"].'</h1>'; ?>
          </div>
          <?php 
            echo '<p>'.$s["konu"].'</p>';
          ?>
        
        </div>
        <?php 
         }
        }
       ?>
       
       <!-- ***********  col-md-9 -->
      <div class="col-lg-5">
        <div class="icerik m-15-top">
          <h1>Bölümler</h1>
        <div class="row">
          <div class="col-md-9" style="margin-top:20px">
            <div class="block">
              <div class="panel-group" id="accordion" style="margin-left:   20px">
                <div class="panel panel-default">
                  <?php 
                  //anasayfasa yer alan kitaplara tıklanıp bu kısma gelindiğinde id değerine $_GET ile id ata
                    $srg=mysqli_query($baglan,"select*from icerikBilgisi where id=1");
                    while ($s=mysqli_fetch_assoc($srg)) {
                      
                  ?>
                  <div class="panel-heading accordion-caret">
                    <h4 class="panel-title">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                        <?php 
                        echo 'CHAPTER '.$s["kacinciBolum"];
                        ?>
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body"> <?php echo $s["bolumKonusu"]; ?> </div>
                      
                      <!--<div style="background-color: lightgreen;height: auto;width: 100px;
                      margin: 5px 0 1px0 5px;text-align: center;float: right;"><a href="">DÜZENLE</a></div>-->
                  </div>
                 
                </div>
                <?php 
                }
                ?>
  
              </div>
            </div>
          </div>
                 <!-- YORUM YAPMA ALANI -->
    <!-- YORUM YAPANLARIN GÖZÜKECEĞİ YER -->
    <div class="icerik m-15-top">
        <div class="block">
  
          <div class="caption">
            <from>
              <div class="form-group purple-border">
                <label for="exampleFormControlTextarea4">Mesaj Gönder</label>
                <textarea class="form-control" id="exampleFormControlTextarea4" rows="4"></textarea>
              </div>
  
              <input type="button" class="btn" value="Gönder" style="float: right;" href="#">
  
            </from>
            <div class="clear"></div>
          </div>
        </div>
        <div class="block">
          <!--<img src="img/img8.jpg" alt="" class="img-responsive">-->
          <div class="caption">
            <h1>YORUMLAR</h1>
            <br />
            <div title="Yorum yapanın resmi" style="height: 50px;width: 50px;border:1px solid lightgray">
              <img src="img/img8.jpg" alt="" style="height: 50px;width: 50px; ">
            </div>
            <div title="Yorum alanı" style="height: 50px;width: 100%;border:1px solid lightgray;margin-top: 10px">
  
            </div>
  
          </div>
        </div>
      </div>
        </div>
      </div>
      </div>
      </div> 



      
   

    </div>

      <!--  EN SAĞ TARAF-->
      <div class="col-lg-3">
        <div class="block">
          <div class="icerik">
            <h1>Sidebar</h1>
            <img src="img/img8.jpg" alt="" class="img-responsive">
            <div class="caption">
              <!--<h1>Lorem ipsum</h1>-->
              <p>Gelen yenilikleri bildir</p>

              <!--<a class="btn" href="#">more</a>-->
            </div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
 
    </div>


  </div>
  <div class="footer-wrapper">
    <div class="copy-rights">
      <div class="container">
        <div class="row">

          <div class="col-md-6">
            Copyright(c) website name. Designed by: <a href="about_us.php"> Owls</a>
          </div>
          <div class="col-md-6">
            Images from: <a href="http://www.wallpaperswide.com">http://wallpaperswide.com</a> / <a
              href="http://www.wallcoo.net"> www.wallcoo.net</a>
          </div>

        </div>
      </div>
    </div>
  </div>

    <script src="js/jquery-1.9.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</body>