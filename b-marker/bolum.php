
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">


  <title>B-marker - Bölüm Sayfası</title>

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
    $(document).ready(function () {
      $('.menu').mobileMenu();
    });
  </script>

</head>

<body>
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


  <!-- ANA KAPSAYICI OLAN CONTEINER KSIMI-->
  <div class="container">

    <div class="block m-15-top">

      <div class="icerik">
        <div class="row m-15-bot">
          <div class="col-lg-4 col-sm-4 col-xs-4" align="left">
            <a href="#">Önceki Bölüm</a>
          </div>
          <div class="col-lg-4 col-sm-4 col-xs-4" align="center">
              <div class="caption">
                <a><h1>Kitap Adı - Bölüm Sayısı</h1></a>
              </div>
          </div>

          <div class="col-lg-4 col-sm-4 col-xs-4" align="right">
            <a href="#">Sonraki Bölüm</a>
          </div>
        </div>
        
        <h3 style="padding: 15px;">Bölüm Adı</h3>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ullamcorper nibh sed gravida tristique.
          Aenean vestibulum, massa sit amet ultricies ullamcorper, erat eros viverra urna, nec aliquet dolor nisl a
          sapien. Duis auctor porttitor arcu. Morbi scelerisque quam tortor, ut vehicula lectus pretium eu. Donec
          ultricies, dolor dictum venenatis congue, sapien lacus mollis felis, sed ornare elit sem semper velit.
          Etiam congue turpis orci. Vivamus tempus semper augue, non vehicula massa dignissim eget. Nam maximus ante
          eget urna mattis, nec efficitur tortor suscipit. Etiam vel lacus vel tortor tempor vestibulum.</p>

        <p>Etiam fringilla congue tincidunt. Pellentesque quis accumsan elit. Duis ullamcorper, turpis et eleifend
          sagittis, tortor sapien dignissim ipsum, non hendrerit leo nisl at ex. Suspendisse velit ante, euismod
          finibus enim vitae, placerat vestibulum purus. Pellentesque nec venenatis orci, et interdum urna. Etiam
          eros tortor, faucibus at risus vel, gravida feugiat sapien. Proin non semper tortor.</p>

        <p>Cras volutpat ipsum risus, in molestie leo tincidunt sit amet. Nullam efficitur dignissim ligula,
          porttitor suscipit diam bibendum a. Maecenas consectetur dui sed varius interdum. Cras at libero ante. Ut
          rhoncus ac urna ac pulvinar. Vivamus dapibus imperdiet iaculis. Donec eget pulvinar sem, vel pellentesque
          ipsum. Pellentesque sollicitudin molestie bibendum.</p>

        <p>Phasellus porttitor euismod magna vitae malesuada. Integer non commodo sem. Suspendisse turpis ante,
          feugiat vel nulla ac, efficitur tristique nibh. Donec elementum consequat nisi, sit amet malesuada enim
          facilisis nec. Phasellus et nulla malesuada, porta orci eu, porta mi. Aenean nunc sem, auctor id lacus sit
          amet, fringilla aliquam leo. Praesent laoreet ex vitae nulla lobortis suscipit. Proin in imperdiet lorem.
          Sed suscipit, tellus blandit ullamcorper posuere, justo lectus tincidunt diam, vel semper felis mi id
          ante. Integer gravida tristique nisl vitae feugiat. Mauris in massa ac est egestas vestibulum. Nullam
          aliquam neque urna, nec eleifend quam feugiat ac. Pellentesque ac massa luctus, aliquet ipsum eu, pulvinar
          mauris. Donec facilisis urna ac accumsan feugiat.</p>

        <p>Phasellus mauris nibh, aliquet in ante at, egestas elementum turpis. Duis convallis pellentesque iaculis.
          Ut in ligula arcu. Integer sed libero bibendum, lacinia odio sit amet, laoreet enim. Pellentesque leo leo,
          venenatis at eleifend id, pretium efficitur nisi. Pellentesque nulla diam, maximus ut nunc eu, feugiat
          consequat est. Quisque libero dolor, sodales vitae ullamcorper eu, porttitor hendrerit purus. Cras
          malesuada laoreet metus tempus laoreet. Donec malesuada id elit at rutrum. Class aptent taciti sociosqu ad
          litora torquent per conubia nostra, per inceptos himenaeos. Ut nec accumsan elit.</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ullamcorper nibh sed gravida tristique.
          Aenean vestibulum, massa sit amet ultricies ullamcorper, erat eros viverra urna, nec aliquet dolor nisl a
          sapien. Duis auctor porttitor arcu. Morbi scelerisque quam tortor, ut vehicula lectus pretium eu. Donec
          ultricies, dolor dictum venenatis congue, sapien lacus mollis felis, sed ornare elit sem semper velit.
          Etiam congue turpis orci. Vivamus tempus semper augue, non vehicula massa dignissim eget. Nam maximus ante
          eget urna mattis, nec efficitur tortor suscipit. Etiam vel lacus vel tortor tempor vestibulum.</p>

        <p>Etiam fringilla congue tincidunt. Pellentesque quis accumsan elit. Duis ullamcorper, turpis et eleifend
          sagittis, tortor sapien dignissim ipsum, non hendrerit leo nisl at ex. Suspendisse velit ante, euismod
          finibus enim vitae, placerat vestibulum purus. Pellentesque nec venenatis orci, et interdum urna. Etiam
          eros tortor, faucibus at risus vel, gravida feugiat sapien. Proin non semper tortor.</p>

        <p>Cras volutpat ipsum risus, in molestie leo tincidunt sit amet. Nullam efficitur dignissim ligula,
          porttitor suscipit diam bibendum a. Maecenas consectetur dui sed varius interdum. Cras at libero ante. Ut
          rhoncus ac urna ac pulvinar. Vivamus dapibus imperdiet iaculis. Donec eget pulvinar sem, vel pellentesque
          ipsum. Pellentesque sollicitudin molestie bibendum.</p>

        <p>Phasellus porttitor euismod magna vitae malesuada. Integer non commodo sem. Suspendisse turpis ante,
          feugiat vel nulla ac, efficitur tristique nibh. Donec elementum consequat nisi, sit amet malesuada enim
          facilisis nec. Phasellus et nulla malesuada, porta orci eu, porta mi. Aenean nunc sem, auctor id lacus sit
          amet, fringilla aliquam leo. Praesent laoreet ex vitae nulla lobortis suscipit. Proin in imperdiet lorem.
          Sed suscipit, tellus blandit ullamcorper posuere, justo lectus tincidunt diam, vel semper felis mi id
          ante. Integer gravida tristique nisl vitae feugiat. Mauris in massa ac est egestas vestibulum. Nullam
          aliquam neque urna, nec eleifend quam feugiat ac. Pellentesque ac massa luctus, aliquet ipsum eu, pulvinar
          mauris. Donec facilisis urna ac accumsan feugiat.</p>

        <p>Phasellus mauris nibh, aliquet in ante at, egestas elementum turpis. Duis convallis pellentesque iaculis.
          Ut in ligula arcu. Integer sed libero bibendum, lacinia odio sit amet, laoreet enim. Pellentesque leo leo,
          venenatis at eleifend id, pretium efficitur nisi. Pellentesque nulla diam, maximus ut nunc eu, feugiat
          consequat est. Quisque libero dolor, sodales vitae ullamcorper eu, porttitor hendrerit purus. Cras
          malesuada laoreet metus tempus laoreet. Donec malesuada id elit at rutrum. Class aptent taciti sociosqu ad
          litora torquent per conubia nostra, per inceptos himenaeos. Ut nec accumsan elit.</p>

          <div class="row m-15-bot">
              <div class="col-lg-4 col-sm-4 col-xs-4" align="left">
                <a href="#">Önceki Bölüm</a>
              </div>
              <div class="col-lg-4 col-sm-4 col-xs-4" align="center">
                  <div class="caption">
                      <a><h1>Kitap Adı - Bölüm Sayısı</h1></a>
                  </div>
              </div>
    
              <div class="col-lg-4 col-sm-4 col-xs-4" align="right">
                <a href="#">Sonraki Bölüm</a>
              </div>
            </div>
      </div>
    </div>

    <!-- YORUM YAPMA ALANI -->
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
  <!-- YORUM YAPANLARIN GÖZÜKECEĞİ YER -->

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


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">


  <title>B-marker - Bölüm Sayfası</title>

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
    $(document).ready(function () {
      $('.menu').mobileMenu();
    });
  </script>

</head>

<body>
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


  <!-- ANA KAPSAYICI OLAN CONTEINER KSIMI-->
  <div class="container">

    <div class="block m-15-top">

      <div class="icerik">
        <div class="row m-15-bot">
          <div class="col-lg-4 col-sm-4 col-xs-4" align="left">
            <a href="#">Önceki Bölüm</a>
          </div>
          <div class="col-lg-4 col-sm-4 col-xs-4" align="center">
              <div class="caption">
                <a><h1>Kitap Adı - Bölüm Sayısı</h1></a>
              </div>
          </div>

          <div class="col-lg-4 col-sm-4 col-xs-4" align="right">
            <a href="#">Sonraki Bölüm</a>
          </div>
        </div>
        
        <h3 style="padding: 15px;">Bölüm Adı</h3>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ullamcorper nibh sed gravida tristique.
          Aenean vestibulum, massa sit amet ultricies ullamcorper, erat eros viverra urna, nec aliquet dolor nisl a
          sapien. Duis auctor porttitor arcu. Morbi scelerisque quam tortor, ut vehicula lectus pretium eu. Donec
          ultricies, dolor dictum venenatis congue, sapien lacus mollis felis, sed ornare elit sem semper velit.
          Etiam congue turpis orci. Vivamus tempus semper augue, non vehicula massa dignissim eget. Nam maximus ante
          eget urna mattis, nec efficitur tortor suscipit. Etiam vel lacus vel tortor tempor vestibulum.</p>

        <p>Etiam fringilla congue tincidunt. Pellentesque quis accumsan elit. Duis ullamcorper, turpis et eleifend
          sagittis, tortor sapien dignissim ipsum, non hendrerit leo nisl at ex. Suspendisse velit ante, euismod
          finibus enim vitae, placerat vestibulum purus. Pellentesque nec venenatis orci, et interdum urna. Etiam
          eros tortor, faucibus at risus vel, gravida feugiat sapien. Proin non semper tortor.</p>

        <p>Cras volutpat ipsum risus, in molestie leo tincidunt sit amet. Nullam efficitur dignissim ligula,
          porttitor suscipit diam bibendum a. Maecenas consectetur dui sed varius interdum. Cras at libero ante. Ut
          rhoncus ac urna ac pulvinar. Vivamus dapibus imperdiet iaculis. Donec eget pulvinar sem, vel pellentesque
          ipsum. Pellentesque sollicitudin molestie bibendum.</p>

        <p>Phasellus porttitor euismod magna vitae malesuada. Integer non commodo sem. Suspendisse turpis ante,
          feugiat vel nulla ac, efficitur tristique nibh. Donec elementum consequat nisi, sit amet malesuada enim
          facilisis nec. Phasellus et nulla malesuada, porta orci eu, porta mi. Aenean nunc sem, auctor id lacus sit
          amet, fringilla aliquam leo. Praesent laoreet ex vitae nulla lobortis suscipit. Proin in imperdiet lorem.
          Sed suscipit, tellus blandit ullamcorper posuere, justo lectus tincidunt diam, vel semper felis mi id
          ante. Integer gravida tristique nisl vitae feugiat. Mauris in massa ac est egestas vestibulum. Nullam
          aliquam neque urna, nec eleifend quam feugiat ac. Pellentesque ac massa luctus, aliquet ipsum eu, pulvinar
          mauris. Donec facilisis urna ac accumsan feugiat.</p>

        <p>Phasellus mauris nibh, aliquet in ante at, egestas elementum turpis. Duis convallis pellentesque iaculis.
          Ut in ligula arcu. Integer sed libero bibendum, lacinia odio sit amet, laoreet enim. Pellentesque leo leo,
          venenatis at eleifend id, pretium efficitur nisi. Pellentesque nulla diam, maximus ut nunc eu, feugiat
          consequat est. Quisque libero dolor, sodales vitae ullamcorper eu, porttitor hendrerit purus. Cras
          malesuada laoreet metus tempus laoreet. Donec malesuada id elit at rutrum. Class aptent taciti sociosqu ad
          litora torquent per conubia nostra, per inceptos himenaeos. Ut nec accumsan elit.</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ullamcorper nibh sed gravida tristique.
          Aenean vestibulum, massa sit amet ultricies ullamcorper, erat eros viverra urna, nec aliquet dolor nisl a
          sapien. Duis auctor porttitor arcu. Morbi scelerisque quam tortor, ut vehicula lectus pretium eu. Donec
          ultricies, dolor dictum venenatis congue, sapien lacus mollis felis, sed ornare elit sem semper velit.
          Etiam congue turpis orci. Vivamus tempus semper augue, non vehicula massa dignissim eget. Nam maximus ante
          eget urna mattis, nec efficitur tortor suscipit. Etiam vel lacus vel tortor tempor vestibulum.</p>

        <p>Etiam fringilla congue tincidunt. Pellentesque quis accumsan elit. Duis ullamcorper, turpis et eleifend
          sagittis, tortor sapien dignissim ipsum, non hendrerit leo nisl at ex. Suspendisse velit ante, euismod
          finibus enim vitae, placerat vestibulum purus. Pellentesque nec venenatis orci, et interdum urna. Etiam
          eros tortor, faucibus at risus vel, gravida feugiat sapien. Proin non semper tortor.</p>

        <p>Cras volutpat ipsum risus, in molestie leo tincidunt sit amet. Nullam efficitur dignissim ligula,
          porttitor suscipit diam bibendum a. Maecenas consectetur dui sed varius interdum. Cras at libero ante. Ut
          rhoncus ac urna ac pulvinar. Vivamus dapibus imperdiet iaculis. Donec eget pulvinar sem, vel pellentesque
          ipsum. Pellentesque sollicitudin molestie bibendum.</p>

        <p>Phasellus porttitor euismod magna vitae malesuada. Integer non commodo sem. Suspendisse turpis ante,
          feugiat vel nulla ac, efficitur tristique nibh. Donec elementum consequat nisi, sit amet malesuada enim
          facilisis nec. Phasellus et nulla malesuada, porta orci eu, porta mi. Aenean nunc sem, auctor id lacus sit
          amet, fringilla aliquam leo. Praesent laoreet ex vitae nulla lobortis suscipit. Proin in imperdiet lorem.
          Sed suscipit, tellus blandit ullamcorper posuere, justo lectus tincidunt diam, vel semper felis mi id
          ante. Integer gravida tristique nisl vitae feugiat. Mauris in massa ac est egestas vestibulum. Nullam
          aliquam neque urna, nec eleifend quam feugiat ac. Pellentesque ac massa luctus, aliquet ipsum eu, pulvinar
          mauris. Donec facilisis urna ac accumsan feugiat.</p>

        <p>Phasellus mauris nibh, aliquet in ante at, egestas elementum turpis. Duis convallis pellentesque iaculis.
          Ut in ligula arcu. Integer sed libero bibendum, lacinia odio sit amet, laoreet enim. Pellentesque leo leo,
          venenatis at eleifend id, pretium efficitur nisi. Pellentesque nulla diam, maximus ut nunc eu, feugiat
          consequat est. Quisque libero dolor, sodales vitae ullamcorper eu, porttitor hendrerit purus. Cras
          malesuada laoreet metus tempus laoreet. Donec malesuada id elit at rutrum. Class aptent taciti sociosqu ad
          litora torquent per conubia nostra, per inceptos himenaeos. Ut nec accumsan elit.</p>

          <div class="row m-15-bot">
              <div class="col-lg-4 col-sm-4 col-xs-4" align="left">
                <a href="#">Önceki Bölüm</a>
              </div>
              <div class="col-lg-4 col-sm-4 col-xs-4" align="center">
                  <div class="caption">
                      <a><h1>Kitap Adı - Bölüm Sayısı</h1></a>
                  </div>
              </div>
    
              <div class="col-lg-4 col-sm-4 col-xs-4" align="right">
                <a href="#">Sonraki Bölüm</a>
              </div>
            </div>
      </div>
    </div>

    <!-- YORUM YAPMA ALANI -->
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
  <!-- YORUM YAPANLARIN GÖZÜKECEĞİ YER -->

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