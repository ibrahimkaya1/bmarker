
      <div class="footer-wrapper">
        <div class="site-content">
          <div class="container">
            <div class="fetured-item">
              <table class="table">
                <thead >
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Başlık</th>
                    <th scope="col">Bölüm</th>
                    <th scope="col">Yazar</th>
                    <th scope="col">Zaman</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <?php 
                  $srg=mysqli_query($baglan,"select*from icerikBilgisi");
                  while ($s=mysqli_fetch_assoc($srg)) {
                    $srg2=mysqli_query($baglan,"select*from users where id=".$s["bolumYazan"]."");
                    while ($s1=mysqli_fetch_assoc($srg2)) {
                      ?>

                      <th scope="row"><?php echo mysqli_num_rows(mysqli_query($baglan,"select*from icerikBilgisi")); ?></th>
                    <?php 
                    echo '      
                              <td>'.$s["bolumeBaslik"].'</td>
                              <td>'.$s["kacinciBolum"].'. Bölüm</td>
                              <td>'.$s1["usrName"].'</td>
                              <td>'.$s["tarih"].'</td>
                            

                        ';
                    }
                  }

                  ?>
                  </tr>
                  <!--
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>5dk önce</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>15dk önce</td>
                  </tr>-->
                </tbody>
              </table>
  
            </div>
          </div>
        
      </div>
      <div class="copy-rights">
      <div class="container">
        <div class="row">
          
            <div class="col-md-6">
              Copyright(c) website name. Designed by: <a href="about_us.php"> Owls</a>
            </div>
            <div class="col-md-6">
              Images from: <a href="http://www.wallpaperswide.com">http://wallpaperswide.com</a> / <a href="http://www.wallcoo.net"> www.wallcoo.net</a>
            </div>
            
          </div>
        </div>
      </div>
      </div>