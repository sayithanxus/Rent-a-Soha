<?php 
    session_start();
    include './backend/dbbaglan.php';
    $eposta = isset($_SESSION['eposta']) ? $_SESSION['eposta'] : '';
    $sql = "SELECT * FROM kullanici WHERE eposta = '$eposta'";

    $result = $conn -> query($sql); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rezerve Oluştur</title>
    <link rel="shortcut icon" type="image/png" href="assets/logo.png"/>
    <link rel="shortcut icon" type="image/png" href="assets/logo.png"/>
    <link rel="stylesheet" href="css/rezerve_olustur.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/nav_bar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link
      rel="stylesheet"
      href="css/bootstrap-5.1.3-dist/css/bootstrap.min.css"
    />
    <script src="./js/jquery-3.6.0.min.js"></script>

  



  </head>
  <body>
  <header>
        <a href="index.php"><img class="logo" src="assets/logo.png" alt="logo"></a>
        <nav>
            <ul class="nav_links">
                <li><a href="rezervasyonlarim.php">Rezervasyon</a>
                    <ul>
                        <li><a href="rezervasyonlarim.php">Rezervasyonlarım</a></li>
                        <li><a href="rezerve_olustur.php">Rezervasyon Oluştur</a></li>
                    </ul>
                </li>
                <li><a href="tum_araclar.php">Araçlarımız</a>
                    <ul class="acilir">
                        <li><a href="tum_araclar.php">Tüm Araçlar</a></li>
                        <hr>
                        <li><a href="ekonomik_sinif.php">Ekonomik Sınıfı Araçlar</a></li>
                        <li><a href="konfor_sinif.php">Konfor Sınıfı Araçlar</a></li>
                        <li><a href="premium_sinif.php">Premium Sınıfı Araçlar</a></li>
                        <li><a href="luks_araclar.php">Lüks Sınıfı Araçlar</a></li>
                        <li><a href="premium_sinif.php">Prestij Sınıfı Araçlar</a></li>
                    </ul>
                </li>
                <li><a href="iletisim.php">İletişim</a></li>
            </ul>
        </nav>
        <nav>
        <?php
                        if($result->num_rows > 0 ){
                            while ($row=$result->fetch_assoc()){
            ?>
            <ul class="nav_links login">
                <li><a href="kisiselSayfa.php"><?php echo $row["adi"] ." ". $row["soyadi"] ?></a></li>
                <?php }}?>
                <?php if($result->num_rows > 0){}else{ ?>
                <li><a href="giris.html">Giriş Yap</a></li>
                <li><a href="Kayit_ol.php">Üye Ol</a></li>
                <?php }?>
            </ul>

        </nav>
    </header>


   
    <div class="rezerve_yap" id="rezerve_yap" >
      <div class="container"  style="background-image: url(assets/kis_temasi2.jpeg);">
        <div class="tablo_ayar" id="tablo">
          <div class="card" style="background-color:  #928f93;;">
            <div class="card-body">

 <form action="backend/rezerve_olustur.php" method="post">                                                  <!--FORM BAŞLANGIÇ-->
      <table  class="table table-inverse text-white  ">
        <tr>
          <header>
          <th><label for="my-select">Araç Seç</label></th>
          <td ><select id="arac" class="form-control" name="arac_id" onchange="showDays()">
            <option value="1">Fiat Egea</option>
            <option value="2">Mercedes Benz</option>
            <option value="3">Renault Megane</option>
            <option value="4">Opel Mokka</option>
            <option value="5">Bmw 2 Serisi</option>
            
        </select></td>
          
        </tr>
        
      </header>
        <tr>
          <th><label for="my-select">Teslim Alma Ofisi</label></th>
          <td ><select id="alis_ofisi" class="form-control" name="teslim_alma_ofisi">
            <option value="1">İstanbul Havalimanı</option>
            <option value="2">Çorlu Havalimanı</option>
            <option value="3">Kırklareli/Merkez</option>
            <option value="4">Kırklareli/Lüleburgaz</option>
        </select></td>
        </tr>
        <tr>
        <th><label for="my-select">Teslim Etme Ofisi</label></th>
          <td ><select id="iade_ofisi" class="form-control" name="teslim_etme_ofisi">
            <option value="1">İstanbul Havalimanı</option>
            <option value="2">Çorlu Havalimanı</option>
            <option value="3">Kırklareli/Merkez</option>
            <option value="4">Kırklareli/Lüleburgaz</option>
        </select></td>
        
        </tr>
        
        <tr>
          <th>Teslim Alma Tarihi</th>
          <td > <input type="date" onchange="showDays()" class="form-control" id="teslim_alma_tarihi" name="teslim_alma_tarihi" value="2021-12-25" ></td>
          </tr>
          <tr>
          <th>Teslim Etme Tarihi</th>
          <td > <input type="date" onchange="showDays()" class="form-control" id="teslim_etme_tarihi" name="teslim_etme_tarihi" value="2021-12-28" ></td>
        </tr>
        <tr>
          <th>Teslim Alma Saati</th>
          <td ><input type="time" class="form-control" id="time" name="teslim_alma_saati" value="12:00"></td>
          </tr>
          <tr>
          <th>Teslim Etme Saati</th>
          <td ><input type="time" class="form-control" id="time" name="teslim_etme_saati" value="19:00"></td>
        </tr>
        </tr>
          <tr>
          <th>FİYAT</th>
          <td><div class="fiyat" id="fiyat"></div></td>
        </tr>
        
      </table>
      
    </div>
    <div class="card-footer"> <!--kart-->
    <div class="butonlar"> <!--BUTON BAŞLANGIÇ-->
     
      <input value="Oluştur" style="padding: 4px;float:right;margin:5px 15px 5px 5px;font-size:17px" type="submit" name="gonder">
      
  </div> <!--BUTON bitiş-->
 </form>
</div><!--kartt-->
</div>
</div>
  </div>
</div>

 <script>
      function showDays(){

      var start = $('#teslim_alma_tarihi').val();
      var end = $('#teslim_etme_tarihi').val();
      var arac = $('#arac').val();

      var startDay = new Date(start);
      var endDay = new Date(end);
      var millisecondsPerDay = 1000 * 60 * 60 * 24;

      var millisBetween = endDay.getTime() - startDay.getTime();
      var days = millisBetween / millisecondsPerDay;
      var nhtml = Math.floor(days)*arac*100;                
      $("#fiyat").html(nhtml);
      }
   

 </script>




    
    <!-- FOOTER -->
    <div class="footer-top">
      <img src="assets/logo2.png" height="100" width="230" alt="" srcset="" />
      <div class="footer-nav">
        <ul>
          <h6>Rent a SOHA</h6>
          <li><a href="biz_kimiz.html">Biz Kimiz</a></li>
          <li><a href="nasıl-calisir.html">Nasıl Çalışır</a></li>
          <li><a href="/zadmin/panel.html">Admin Panel</a></li>
        </ul>
        <ul>
          <h6>Bilgi Bankası</h6>
          <li><a href="kvkk-ve-gizlilik-sozlesmesi.html">KVKK ve Gizlilik Sözleşmesi</a></li>
          <li><a href="cerez-politikasi.html">Çerez Politikası</a></li>
          <li><a href="yasal-uyari.html">Yasal Uyarı</a></li>
          <li><a href="rezervasyonlarım.html">Araç Teslim/İade</a></li>
        </ul>
        <ul>
          <h6>İletişim</h6>
          <li><a href="iletişim.html">İletişim</a></li>
        </ul>
      </div>
      <div class="adress">
        <a href="#">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="16"
            height="16"
            fill="currentColor"
            class="bi bi-instagram"
            viewBox="0 0 16 16"
          >
            <path
              d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"
            />
          </svg>
        </a>
        <a href="#">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="16"
            height="16"
            fill="currentColor"
            class="bi bi-twitter"
            viewBox="0 0 16 16"
          >
            <path
              d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"
            />
          </svg>
        </a>
        <a href="#">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="16"
            height="16"
            fill="currentColor"
            class="bi bi-facebook"
            viewBox="0 0 16 16"
          >
            <path
              d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"
            />
          </svg>
        </a>
        <a href="#">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="16"
            height="16"
            fill="currentColor"
            class="bi bi-youtube"
            viewBox="0 0 16 16"
          >
            <path
              d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"
            />
          </svg>
        </a>
      </div>
    </div>
    <footer>
      <div class="copy-text">Copyright © 2020 Rent a SOHA</div>
    </footer>

    <!-- FOOTER -->
    
    
    <script src="css/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/index.js"></script>
  </body>
</html>
