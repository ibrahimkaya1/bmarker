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
      <script>
    $(document).ready(function(){
        $('.menu').mobileMenu();
    });
  </script>
 
 <style type="text/css">
   .container{
    margin-bottom: -80px;
   }
 </style>
  </head>

<body>

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
         
        <li><button class="button btn btn-default"><a href="register.php">Kayıt Ol</a></button></li>
              <li><button class="button btn btn-default"><a href="login.php">Giriş Yap</a></button></li>
            </ul>
          </div><!--/.navbar-collapse -->
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
<!--Kullanıcı Profili-->
<div class="container" >
 <div class="featured-block">
    <div class="site-name"><h3>Kullanıcı Profili</h3></div>
        <!-- Example row of columns -->
        <div class="row" style="border: 1px solid blue;">
          <div class="col-md-3">
            <div class="block">
            <div class="thumbnail">
              <img src="img/img8.jpg" alt="" class="img-responsive">
              <div class="caption">
                
                <p><a href="">Hesap Bilgileri</a> </p>
                <p><a href="">İletişim Bilgileri</a> </p>
                  <form>
                    <input type="button"  class="btn" value="+ FOLLOW"name="">
                  </form>
                
              </div>
              </div>
            </div>
            </div>


            <div class="col-md-6">
              <div class="block">
                <div class="thumbnail">
                
                    <div class="caption">
                      <h1>Kullanıcı Hakkında</h1>
                      <p>
                        Pellentesque fermentum dolor. Aliquam quam lectus, facilisis ctor, ultrices ut, element
                      Pellentesque fermentum dolor. Aliquam quam lectus, facilisis ctor, ultrices ut, element
                        Pellentesque fermentum dolor. Aliquam quam lectus, facilisis ctor, ultrices ut, element
                      Pellentesque fermentum dolor. Aliquam quam lectus, facilisis ctor, ultrices ut, element
                      Pellentesque fermentum dolor. Aliquam quam lectus, facilisis ctor, ultrices ut, element
                     Pellentesque fermentum dolor. Aliquam quam lectus, facilisis ctor, ultrices ut, element
                    </p>

                      
                    </div>
                </div>
              </div>
            </div>



            <!-- SİDEBAR KISMI
              bu en sağda olmalı -->

          <div class="col-md-3">
              <div class="block">
                <div class="thumbnail">
                 
                  <div class="caption">
                    <h1>SİDEBAR</h1>
                    <p>sidebar</p>
                   
                  </div>
                  </div>
              </div>
            </div>

      

      </div>
  </div>
</div>


<!--<div class="container">
  <div class="featured-block">
      
       
  </div>
</div>-->


<!-- Takip Edilenler kısmı-->
<div class="container" >
  <div class="featured-block">
     <div class="site-name"><h3>Takip Edilenler</h3></div>

       <div class="row" >

          <div class="col-md-12">
              <div class="block">
                <div class="thumbnail">
                 
                  <div class="caption">
                    
                    <p>Takip ettiği kimse yok ya da gizli</p>
                   
                  </div>
                  </div>
              </div>
            </div>
       </div>
  </div>
</div>

<div class="container" >
 <div class="featured-block">
    <div class="site-name"><h3>Yayınladığı İçerik</h3></div>
        <!-- Example row of columns -->
        <div class="row" >
          <div class="col-md-3">
            <div class="block">
            <div class="thumbnail">
              <img src="img/img8.jpg" alt="" class="img-responsive">
              <!--<div class="caption">
                
                <p><a href="">Hesap Bilgileri</a> </p>
                <p><a href="">İletişim Bilgileri</a> </p>
                  <form>
                    <input type="button"  class="btn" value="+ FOLLOW"name="">
                  </form>
                
              </div>-->
              </div>
            </div>
            </div>


            <div class="col-md-9">
              <div class="block">
                <div class="thumbnail">
                
                    <div class="caption">
                      <h1>Kitap Adı</h1>
                      <p>
                        Yayın Tarihi
                    </p>
                    <p>
                      
                      Neden Kullanırız?
Yinelenen bir sayfa içeriğinin okuyucunun dikkatini dağıttığı bilinen bir gerçektir. Lorem Ipsum kullanmanın amacı, sürekli 'buraya metin gelecek, buraya metin gelecek' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda birçok masaüstü yayıncılık paketi ve web sayfa düzenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında 'lorem ipsum' anahtar sözcükleri ile arama yapıldığında henüz tasarım aşamasında olan çok sayıda site listelenir. Yıllar içinde, bazen kazara, bazen bilinçli olarak (örneğin mizah katılarak), çeşitli sürümleri geliştirilmiştir.
                    </p>
                      
                    </div>
                </div>
              </div>
            </div>

      </div>
  </div>
</div>

        <!-- 
            <div class="col-md-2">
              <div class="block">
                <div class="thumbnail">
                  <img src="img/img8.jpg" alt="" class="img-responsive">
                  <div class="caption">
                    <h1>Morbiin semquis</h1>
                    <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean</p>
                    <a class="btn" href="#">more</a>
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
                <p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, mod in, pharetra ultrici</p>
                <a class="btn" href="#">more</a>
              </div>
              </div>
            </div>
            </div>-->


</body>