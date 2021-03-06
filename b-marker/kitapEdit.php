<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!--jquery-ajax  -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

<script>
  
  $(document).ready(function (e) {
    
    $('#gonderilenform').on('submit',(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        
        $.ajax({
            type:'POST',
            url: 'icerikEkle.php',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
              
                $('#test').val(data);
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
            url: 'bolumEkle.php',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                $('.cevap').html(data);
            },
            error: function(data){
                $('.cevap').html('hata: '+data);
            }
        });
    }));


    
});
   </script>
  <title>B-marker - Kitap Sayfası</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/component.css">
  <link rel="stylesheet" href="css/custom-styles.css">
  <link rel="stylesheet" href="css/font-awesome.css">

  <script src="js/jquery-3.4.0.min.js"></script>
  <link rel="stylesheet" href="css/demo.css">
  <link rel="stylesheet" href="css/font-awesome-ie7.css">

  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <script type="text/javascript">
  $(function init() {
    $('#multi-append').select2();
    $('textarea').autoResize();
  });
  /*$(function bolum(){
    var i=0;
        /$(".bolum-ekle").click(function bolum(){
            i++;
            $(".bolumler").append("<li>"+(i)+". Bölüm <a href='#'>| Düzenle</a> <a href='javascript:void(0);' class='remove'>&times;</a></li>"); 
        });/
        $(".bolum-ekle").click(function bolum(){
            i++;
            $(".bolumler").append("<li>"+(i)+". Bölüm <a href='#'>| Düzenle</a> <a href='javascript:void(0);' class='remove'>&times;</a></li>"); 
        });
        $(document).on("click", "a.remove" , function bolum() {
            $(this).parent().remove();
        });
      });*/
</script>
  <style type="text/css">
  #ad{width: 100%;}
  #hakkinda{width: 100%; overflow: auto; resize: none;}
  .remove{float: right}
  .duzenle{float: right}
  </style>


<link href="css/select2.min.css" rel="stylesheet" />
<link href="css/select2-bootstrap.css" rel="stylesheet"/>
<script src="js/select2.min.js"></script>
<script src="js/autoresize.jquery.js"></script>
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
  </div>


  <div class="container">

    <!-- SOL TARAF KİTAP RESMİ,YAZARI VE TARİH HAKKINDA BİLGİ -->

    <!--  KİTAP AÇIKLAMASININ İÇERİK KISMI -->
    <div class="m-15-top">

      <div class="col-lg-12 col-md-12">
        <div class="icerik">
          <div class="row">
         <!-- <div class="col-lg-3">
            <div class="icerik">
              <img src="img/img8.jpg" alt="" class="img-responsive">
                <h1>Genel Bilgiler</h1>
                <p>Yazar Adı :</p>
                <p>Çıkış Tarih:</p>
                <p>Değerlendirme saysı:</p>
             
            </div>
          </div> -->
          <div class="col-lg-9 edit-form">
             <h3>Kitap Resmi Ekle</h3>
            
             <form id="gonderilenform" method="post"  enctype="multipart/form-data">
               <input type="file" name="kitap"><br>
                <label>Kitap Adı :</label>
                <input id="ad" type="text" name="ad"><br>
                
                <label>Kitap Hakkında :</label><br>
                <textarea id="hakkinda" name="hakkinda" cols="5" rows="10"></textarea><br>
                    <label for="multi-append" class="control-label">Kategoriler</label>
                    <div class="input-group">
                      <select id="multi-append" name="kat"class="form-control select2-multiple" multiple>
                        <option></option>
                        <option class="kat"value="roman">Roman</option>
                        <option class="kat"value="siir">Şiir</option>
                        <option class="kat"selected value="hikaye">Hikaye</option>
                      </select>
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button" data-select2-open="multi-append">
                        <span class="glyphicon glyphicon-search"></span>
                      </button>
                    </span>
                    </div>
                  <br>
                
                  <!--<input  name="icerikYayinla" type="submit" value="YAYINLA">-->
                  <button type="submit" >YAYINLA</button> 
                  <div class="yayinDurum"></div>
               </form>
          </div>
        </div>




          <!-- <img src="img/img8.jpg" alt="" class="img-responsive">-->

        </div>
        <div class="icerik" >
          <div class="row">
            
              <div class="col-md-6" >
                <!--<h3>Bölüm Ekle</h3>
                  <ul class="bolumler"></ul>
                 <button class="bolum-ekle" value="">Yeni Bölüm Ekle</button>  -->
                 <div class="cevap"></div>
                <form id="gonderilenform2" method="post"  enctype="multipart/form-data">
                   <input type="hidden" id="test" name="icerikYayinlaID" value="">
                    Bölüm Sayısının Giriniz (Rakamla)<input type="text" name="bolumSayisi" placeholder="" /><br/>
                     Bölüm Başlığı Giriniz<input type="text" name="bolumBaslik" placeholder="" /> <br/>
                    Bölüm Konusunu Giriniz <textarea type="text" name="bolumKonusu" cols="20" rows="5"> </textarea><br/>
                  
                   <button type="submit">Yeni Bölüm Ekle</button> 
                </from>
             </div>
           
            <div class="col-md-6" >
              <h3>Bölümleri Göster</h3>
              <?php 
              $srg=mysqli_query($baglan,"select * from icerikYayinla");
              while ($s=mysqli_fetch_assoc($srg)) {
                $srg2=mysqli_query($baglan,"select * from icerikBilgisi where icerikYayinlaID=".$s["id"]."");
                while ($s1=mysqli_fetch_assoc($srg2)) {
                  echo ' <p>'.$s1["kacinciBolum"].'. Bölüm ('.$s1["bolumeBaslik"].')<a href=""> | Düzenle</a></p>';
                }
              }

              ?>
             <!-- <p>1. Bölüm<a href=""> | Düzenle</a></p>-->
            </div>
          </div>
        </div>

        <!--
        <div class="icerik m-15-top ">
          <div class="block">
              <from>
                <div class="form-group purple-border">
                  <label for="exampleFormControlTextarea4">Mesaj Gönder</label>
                  <textarea class="form-control" id="exampleFormControlTextarea4" rows="4"></textarea>
                </div>

                <input type="button" class="btn" value="Gönder" style="float: right;" href="#">

              </from>
              <div class="clear"></div>
          </div>
          <div class="block">
           
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
      -->
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
</body>