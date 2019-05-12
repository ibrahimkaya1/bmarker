
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>B-marker'a Hoşgeldiniz!</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/background.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/component.css">
    <link rel="stylesheet" href="css/custom-styles.css">
    <link rel="stylesheet" href="css/font-awesome.css">
	
     
	<link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/font-awesome-ie7.css">

      <script src="js/jquery.mobilemenu.js"></script>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script>
    $(document).ready(function(){
        $('.menu').mobileMenu();
    });
  </script>
 
  </head>

  <body>
    <?php include("baglanti.php") ;?>

    <div class="header-wrapper">
      <div class="site-name">
        <h1>b-marker</h1>
      </div>
    </div>
    <div class="menu">

         <?php include("header.php") ;?>
	  
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

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="banner"> 
  <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="img/banner-image.jpg" alt="">
            <div class="carousel-caption">
              <h1>Morbi semuis</h1>
              <h2>Praesent dapibus, neque id cursus faucibus tortas augue eu vulputate</h2>
              <a href="#" class="btn">facilis</a>
            </div>
          </div>
</div>
</div>

	<div class="container">
      <div class="featured-block">
	  <div class="site-name"><h3>En Çok Okunanlar</h3></div>
        <!-- Example row of columns -->
        <div class="row">
          <?php 
          //SELECT DegerlendirilenIcerikID,puan,kimDegerlendirdiID,id, SUM(puan) AS puanToplami FROM icerik_degerlendirme GROUP BY DegerlendirilenIcerikID HAVING puan > 0
            $srg=mysqli_query($baglan,"SELECT DegerlendirilenIcerikID,puan,kimDegerlendirdiID,id, SUM(puan) AS puanToplami FROM icerik_degerlendirme GROUP BY DegerlendirilenIcerikID HAVING puan > 0");

            while ($s=mysqli_fetch_assoc($srg)) {
              $srg2=mysqli_query($baglan,"select *from icerikYayinla where id=".$s["DegerlendirilenIcerikID"]."");
              while ($s1=mysqli_fetch_assoc($srg2)) {
                 
                  echo ' <div class="col-md-2">
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
            <!--
            <div class="col-md-2">
              <div class="block">
                <div class="thumbnail">
                    <img src="img/img8.jpg" alt="" class="img-responsive">
                    <div class="caption">
                      <h1>Fusce lacinia arcu</h1>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="block">
                <div class="thumbnail">
                  <img src="img/img8.jpg" alt="" class="img-responsive">
                  <div class="caption">
                    <h1>Morbiin semquis</h1>
                  </div>
                  </div>
              </div>
            </div>
            <div class="col-md-2">
            <div class="block">
            <div class="thumbnail">
              <img src="img/img8.jpg" alt="" class="img-responsive">
              <div class="caption">
                <h1>Aliquam lectus</h1>
              </div>
              </div>
            </div>
            </div>
			  <div class="col-md-2">
            <div class="block">
            <div class="thumbnail">
              <img src="img/img8.jpg" alt="" class="img-responsive">
              <div class="caption">
                <h1>Aliquam lectus</h1>
              </div>
              </div>
            </div>
            </div>
			  <div class="col-md-2">
            <div class="block">
            <div class="thumbnail">
              <img src="img/img8.jpg" alt="" class="img-responsive">
              <div class="caption">
                <h1>Aliquam lectus</h1>
              </div>
              </div>
            </div>
            </div>-->
            
          </div>
          
        </div> 
        <div class="ruler"></div>  
        </div>



		<div class="container">
      <div class="featured-block">
	  <div class="site-name"><h3>En Çok Okunanlar</h3></div>
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-2">
            <div class="block">
            <div class="thumbnail">
              <img src="img/img8.jpg" alt="" class="img-responsive">
              <div class="caption">
                <h1>Lorem ipsum tan</h1>
              </div>
              </div>
            </div>
            </div>
            <div class="col-md-2">
              <div class="block">
                <div class="thumbnail">
                    <img src="img/img8.jpg" alt="" class="img-responsive">
                    <div class="caption">
                      <h1>Fusce lacinia arcu</h1>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="block">
                <div class="thumbnail">
                  <img src="img/img8.jpg" alt="" class="img-responsive">
                  <div class="caption">
                    <h1>Morbiin semquis</h1>
                  </div>
                  </div>
              </div>
            </div>
            <div class="col-md-2">
            <div class="block">
            <div class="thumbnail">
              <img src="img/img8.jpg" alt="" class="img-responsive">
              <div class="caption">
                <h1>Aliquam lectus</h1>
              </div>
              </div>
            </div>
            </div>
			  <div class="col-md-2">
            <div class="block">
            <div class="thumbnail">
              <img src="img/img8.jpg" alt="" class="img-responsive">
              <div class="caption">
                <h1>Aliquam lectus</h1>
              </div>
              </div>
            </div>
            </div>
			  <div class="col-md-2">
            <div class="block">
            <div class="thumbnail">
              <img src="img/img8.jpg" alt="" class="img-responsive">
              <div class="caption">
                <h1>Aliquam lectus</h1>
              </div>
              </div>
            </div>
            </div>
            
          </div>
          
        </div> 
        <div class="ruler"></div>  
        </div>
		<div class="container">
      <div class="featured-block">
	  <div class="site-name"><h3>Takip Edilenler</h3></div>
        <!-- Example row of columns -->
        <div class="row">
          <?php 

          $srg=mysqli_query($baglan,"select*from icerik_degerlendirme");
          while ($s=mysqli_fetch_assoc($srg)) {
            $srg2=mysqli_query($baglan,"select *from icerikYayinla where id=".$s["DegerlendirilenIcerikID"]."");
            while ($s1=mysqli_fetch_assoc($srg2)) {
              
            
            echo ' <div class="col-md-3">
                  <div class="block">
                  <div class="thumbnail">
                    <img src="img/avatar.png" alt="" class="img-responsive">
                    <div class="caption">
                      <h1>'.$s1["icerikAdi"].'</h1>
                      <p>'.$s1["konu"].'</p>
                      <a class="btn" style="background-color:yellow;"href="kitapIcerigi.php?id='.$s1["id"].'">More</a>
                    </div>
                    </div>
                  </div>
                </div>';  
            }
          }


          ?>
         
            <!--
            <div class="col-md-3">
              <div class="block">
                <div class="thumbnail">
                    <img src="img/img2.jpg" alt="" class="img-responsive">
                    <div class="caption">
                      <h1>Fusce lacinia arcu</h1>
                      <p>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis ctor, ultrices ut, element</p>
                      <a class="btn" href="#">more</a>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="block">
                <div class="thumbnail">
                  <img src="img/img3.jpg" alt="" class="img-responsive">
                  <div class="caption">
                    <h1>Morbiin semquis</h1>
                    <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean</p>
                    <a class="btn" href="#">more</a>
                  </div>
                  </div>
              </div>
            </div>
            <div class="col-md-3">
            <div class="block">
            <div class="thumbnail">
              <img src="img/img4.jpg" alt="" class="img-responsive">
              <div class="caption">
                <h1>Aliquam lectus</h1>
                <p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, mod in, pharetra ultrici</p>
                <a class="btn" href="#">more</a>
              </div>
              </div>
            </div>
            </div>-->
            
          </div>
          
        </div> 
        <div class="ruler"></div>  
        </div>
  
      <?php include("footer.php"); ?>



    <script src="js/jquery-1.9.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </body>
</1html>
