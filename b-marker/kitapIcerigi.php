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
     

    });
  </script>
  <script type="text/javascript">
    $(document).ready(function () {
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
   <!-- <div class="site-name"><h3>Kullanıcı Profili</h3></div>-->

    <!-- ANA ROW KISMI BAŞLANGIÇ-->
        <div class="row" >
          <div class="col-md-9" >  <!-- Ana col-md-9 kısmı başlangıç-->
            <div class="block">
              <div class="thumbnail">
                  <div class="row">
                    
                    <div class="col-md-4 Yicerik-md-3">
                     <div class="icerik">
                      <?php 
                        //anasayfasa yer alan kitaplara tıklanıp bu kısma gelindiğinde id değerine $_GET ile id ata
                      $kitapID=$_GET["id"];
                        $srg=mysqli_query($baglan,"select * from icerikYayinla where id=".$kitapID."");
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
                                  </div>
                          ';?>
                            <form id="gonderilenform2" method="post"  enctype="multipart/form-data">
                                    <input type="hidden" name="degerlendirmeID" value="<? echo $s["id"]; ?>" />
                                    Puan Ver: <input type="text" name="paunAl" placeholder="(1-5) arası">
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
                          <?php }} ?>
                      </div>
                    </div>
                   

                    <!-- KİTAP HAKKINDA BAŞLANGIÇ--> 
                   
                    <div class="col-md-8" style="margin-top: 30px">
                       <div class="icerik">
                          <div class="caption">
                           <?php 
                            $srg=mysqli_query($baglan,"select * from icerikYayinla where id=1");
                              while ($s=mysqli_fetch_assoc($srg)) {
                               echo '<h1>'.$s["icerikAdi"].'</h1>'; 
                                echo '<p>'.$s["konu"].'</p>';
                              }
                            ?>
                        </div>
                      </div>
                    </div>
                    
                     <!-- KİTAP HAKKINDA son-->  
                 </div>
              </div>

            </div>

          <!-- BÖLÜMLER başlangıç-->
          <div class="row" >
            <div class="col-md-12">
              <div class="icerik m-15-top">
              <div class="block">
                <div class="thumbnail">
                <div class="site-name"><h5 style="color: orange;">BÖLÜMLER</h5></div>
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
             </div>
            </div>
         </div>
          <!-- BÖLÜMLER kısmı son-->

          <!-- Mesajlar kısmı başlangıç-->
          <div class="row" >
            <div class="col-md-12">
              <div class="block">
                <div class="thumbnail">
                 <h1 class="h1Ozellik">Mesajlar</h1>
                   <div class="icerik m-15-top">
                        <div class="caption">
                          <from>
                            <div class="form-group purple-border">
                              <label for="exampleFormControlTextarea4">Mesaj Gönder</label>
                              <textarea class="form-control" id="exampleFormControlTextarea4" rows="4"></textarea>
                            </div>
                
                            <input type="button" class="btn" value="Gönder" style="float: right;background-color: yellow" href="#">
                
                          </from>
                          <div class="clear"></div>
                        </div>
                    </div>
               </div>
            </div>
           </div>
           <!-- Ana col-md-9 kısmı son-->
          </div>
          <div class="row">
              <div class="col-md-12">
                <div class="block">
                  <div class="thumbnail">
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
       <!-- Mesajlar kısmı son-->

        </div>


          <!-- SİDEBAR KISMI-->

          <div class="col-md-3">
              <div class="block">
                <div class="thumbnail">
                  <div class="caption">
                    <h1>SİDEBAR</h1>
                     <img src="img/img8.jpg" alt="" class="img-responsive">
                     <p>Gelen yenilikleri bildir</p>
                   
                  </div>
                </div>
              </div>
          </div>
          <!-- SİDEBAR KISMI SON-->


      </div>
      <!--ANA ROW KISMI son-->
  </div>
</div>
 <script src="js/jquery-1.9.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>

</body>