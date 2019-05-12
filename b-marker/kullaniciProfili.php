<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>All Template Needs</title>

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
      <script src="js/jquery-3.4.0.min.js"></script>
      
     
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

  });
 </script>

      

  <script type="text/javascript">
    $(document).ready(function(){
      $('.menu').mobileMenu();
    });
  </script>

 <style type="text/css">
   .container{
    margin-bottom: -80px;
   }

   .rowBorder{border: 1px solid red;}
   .dahaFazla{float: right;color: blue;cursor: pointer;}
   .h1Ozellik{font-size: 22px; margin:0 0 5px 10px;font-weight: bold;
                 color: darkgreen}
  .Yicerik-md-3{margin-top: 30px;}
  .Yicerik-md-8{margin:5px 0 0 20px;}
  
 </style>
  </head>

<body>
<?php  include("baglanti.php");  ?>
  <div class="header-wrapper">
      <div class="site-name">
        <h1>b-marker</h1>
        <div id="sidebar-header" class="group">
          <div class="widget-first widget yit_text_quote">
              <blockquote class="text-quote-quote">&#8220;The caterpillar does all the work but the butterfly gets all the publicity.&#8221;</blockquote>
                   <cite class="text-quote-author">George Carlin</cite>
           </div>
        </div>
      </div>
    </div>



    <div class="menu">
      <?php include("header.php"); ?>
    
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
<!--Kullanıcı Profili-->
<div class="container" >
 <div class="featured-block">
    <div class="site-name"><h3>Kullanıcı Profili</h3></div>
    <!-- ANA ROW KISMI BAŞLANGIÇ-->
        <div class="row">
          <div class="col-md-9">  <!-- Ana col-md-9 kısmı başlangıç-->
            <div class="block">
              <div class="thumbnail">
                  <div class="row">
                    <!-- KULLANICI PROFİL BİLGİLERİ BAŞLANGIÇ-->  
                    <div class="col-md-3 Yicerik-md-3">
                      <img src="img/img8.jpg" alt="" class="img-responsive">

                      <div class="caption">
                        <p><a href="">Hesap Bilgileri</a> </p>
                        <p><a href="">İletişim Bilgileri</a> </p>
                         
                      </div>
                    </div>
                    <!-- KULLANICI PROFİL BİLGİLERİ SON--> 

                    <!-- KULLANICI HAKKINDA BAŞLANGIÇ-->  
                    <div class="col-md-8" >
                      <div class="caption">
                        <h4>Kullanıcı Hakkında</h4>
                      <p>
                        Nereden Gelir?
Yaygın inancın tersine, Lorem Ipsum rastgele sözcüklerden oluşmaz. Kökleri M.Ö. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir geçmişi vardır. Virginia'daki Hampden-Sydney College'dan Latince profesörü Richard McClintock, bir Lorem ipsumm pasajında geçen ve anlaşılması en güç sözcüklerden biri olan 'consectetur' sözcüğünün klasik edebiyattaki örneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, Çiçero tarafından M.Ö. 45 tarihinde kaleme alınan "de Finibus Bonorum et Malorum" (İyi ve Kötünün Uç Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı bölümlerinden gelmektedir. Bu kitap, ahlak kuramı üzerine bir tezdir ve Rönesans döneminde çok popüler olmuştur. Lorem Ipsum pasajının ilk satırı olan "Lorem ipsum dolor sit amet" 1.10.32 sayılı bölümdeki bir satırdan gelmektedir.


                      </p>
                   </div>

                   <!-- KULLANICI HAKKINDA son-->  
                    </div>
                 </div>
              </div>

            </div>

          <!-- Takip Edilenler kısmı başlangıç-->
          <div class="row" style="background-color: white;margin: 5px auto; ">

                 <?php 
                  echo '<h1>Takip Edilenler</h1>';
          $srg=mysqli_query($baglan,"select*from icerik_degerlendirme");
          while ($s=mysqli_fetch_assoc($srg)) {
            $srg2=mysqli_query($baglan,"select *from icerikYayinla where id=".$s["DegerlendirilenIcerikID"]."");
            while ($s1=mysqli_fetch_assoc($srg2)) {
              
            
            echo ' <div class="col-md-4" >
                
                  <div class="block">
                  <div class="thumbnail">

                    <img src="img/avatar.png" alt="" class="img-responsive">
                    <div class="caption">

                      <h1>'.$s1["icerikAdi"].'</h1>
                      <p>'.$s1["konu"].'</p>
                      <a class="btn" style="background-color:yellow;"href="kitapIcerigi.php?id='.$s1["id"].'">more</a>
                    </div>
                    </div>
                  </div>
                </div>';  
            }
          }
          ?>


            <!--<div class="col-md-12">
              <div class="block">
                  <div class="thumbnail" >
                    <div class="caption">
                      
                      <p>Takip ettiği kimse yok ya da gizli.</p>
                     
                    </div>
                  </div>
              </div>
            </div>-->
         </div>
          <!-- Takip Edilenler kısmı son-->

          <!-- Yayınladığı İçerik kısmı başlangıç-->

          <div class="row" >

            <?php 
              $srg=mysqli_query($baglan,"select * from icerikYayinla where icerikYazan=".$_SESSION["uye_id"]."");
              while ($s=mysqli_fetch_assoc($srg)) {
                $srg2=mysqli_query($baglan,"select * from icerikBilgisi where icerikYayinlaID=".$s["id"]."");
                while($s1=mysqli_fetch_assoc($srg2)) {
                  
                
            
            ?>
            <div class="col-md-12">
              <div class="block">
                <div class="thumbnail">
                 <h1 class="h1Ozellik">Yayınladığı İçerik</h1>
                  <div class="row">

                    <div class="col-md-3 Yicerik-md-3" >

                      <?php  echo '<img src="img/'.$s["icerikResim"].'" alt="" class="img-responsive"><br>';  ?>

                       <!--<form id="gonderilenform" method="post"  enctype="multipart/form-data"> 
                         
                          <input type="hidden" name="icerikID" value="<? echo $s["id"]; ?>">
                          <input type="hidden" name="takipEdenID" value="<? echo $_SESSION["uye_id"]; ?>">
                          <button type="submit"> + FOLLOW</button>
                          <div class="yayinDurum"></div>
                      </form>-->
                        
                    </div>
                    <div class="col-md-8 Yicerik-md-8">
                      <div class="caption">
                        <h4><?php  echo $s["icerikAdi"]; ?></h4>
                         <h5> <?php  echo $s["tarih"]; ?></h5><br>
                        <p>
                            <?php  echo $s["konu"]; ?>
                        </p>
                        
                        <?php
                       echo '<p class="dahaFazla"><a href="kitapIcerigi.php?id='.$s1["id"].'"> Daha Fazla</a></p>';

                       ?>
                      
                      </div>   
                      <hr>
                    </div>

                  </div>
               </div>
            </div>
           </div>
           <?php 
            }
           }
           ?>
           <!-- Ana col-md-9 kısmı son-->
          </div>
       <!-- Yayınladığı İçerik kısmı son-->

        </div>


          <!-- SİDEBAR KISMI-->

          <div class="col-md-3">
              <div class="block">
                <div class="thumbnail">
                 
                  <div class="caption">
                    <h1>SİDEBAR</h1>
                    <p>sidebar
                      Nereden Gelir?
Yaygın inancın tersine, Lorem Ipsum rastgele sözcüklerden oluşmaz. Kökleri M.Ö. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir geçmişi vardır. Virginia'daki Hampden-Sydney College'dan Latince profesörü Richard McClintock, bir Lorem ipsumm pasajında geçen ve anlaşılması en güç sözcüklerden biri olan 'consectetur' sözcüğünün klasik edebiyattaki örneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, Çiçero tarafından M.Ö. 45 tarihinde kaleme alınan "de Finibus Bonorum et Malorum" (İyi ve Kötünün Uç Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı bölümlerinden gelmektedir. Bu kitap, ahlak kuramı üzerine bir tezdir ve Rönesans döneminde çok popüler olmuştur. Lorem Ipsum pasajının ilk satırı olan "Lorem ipsum dolor sit amet" 1.10.32 sayılı bölümdeki bir satırdan gelmektedir.
Nereden Gelir?
Yaygın inancın tersine, Lorem Ipsum rastgele sözcüklerden oluşmaz. Kökleri M.Ö. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir geçmişi vardır. Virginia'daki Hampden-Sydney College'dan Latince profesörü Richard McClintock, bir Lorem ipsumm pasajında geçen ve anlaşılması en güç sözcüklerden biri olan 'consectetur' sözcüğünün klasik edebiyattaki örneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, Çiçero tarafından M.Ö. 45 tarihinde kaleme alınan "de Finibus Bonorum et Malorum" (İyi ve Kötünün Uç Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı bölümlerinden gelmektedir. Bu kitap, ahlak kuramı üzerine bir tezdir ve Rönesans döneminde çok popüler olmuştur. Lorem Ipsum pasajının ilk satırı olan "Lorem ipsum dolor sit amet" 1.10.32 sayılı bölümdeki bir satırdan gelmektedir.
Nereden Gelir?
Yaygın inancın tersine, Lorem Ipsum rastgele sözcüklerden oluşmaz. Kökleri M.Ö. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir geçmişi vardır. Virginia'daki Hampden-Sydney College'dan Latince profesörü Richard McClintock, bir Lorem ipsumm pasajında geçen ve anlaşılması en güç sözcüklerden biri olan 'consectetur' sözcüğünün klasik edebiyattaki örneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, Çiçero tarafından M.Ö. 45 tarihinde kaleme alınan "de Finibus Bonorum et Malorum" (İyi ve Kötünün Uç Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı bölümlerinden gelmektedir. Bu kitap, ahlak kuramı üzerine bir tezdir ve Rönesans döneminde çok popüler olmuştur. Lorem Ipsum pasajının ilk satırı olan "Lorem ipsum dolor sit amet" 1.10.32 sayılı bölümdeki bir satırdan gelmektedir.
                    </p>
                   
                  </div>
                  </div>
              </div>
          </div>

          <!-- SİDEBAR KISMI SON-->


      </div>
      <!--ANA ROW KISMI son-->
  </div>
</div>


</body>