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
    <title>KVKK ve Gizlilik Sözleşmesi</title>
    <link rel="shortcut icon" type="image/png" href="assets/logo.png"/>
    <link rel="shortcut icon" type="image/png" href="assets/logo.png"/>
    <link rel="stylesheet" href="css/nav_bar.css" />
    <link
      rel="stylesheet"
      href="css/bootstrap-5.1.3-dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="css/yazi.css">
  </head>
  <body>
    
      <!-- HEADER -->
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

    <div class="container">

        <h1>Kişisel Verilerin Korunması ve Gizlilik Politikası</h1>
        <p>rent-a-soha.com.tr'de form doldurarak bizimle paylaştığınız kişisel bilgilerinizi ve fikirlerinizi korumak bizim görevimizdir. Aşağıdaki ilkeler, bu kişisel bilgilerinizi ve fikirlerinizi nasıl değerlendireceğimizi tanımlar.</p>
        <h3><strong>Kişisel Verilerin Korunması Hakkında Açıklama (Aydınlatma) ve Gizlilik Politikası</strong></h3>
        <h4><strong>Veri Sorumlusunun Kimliği</strong></h4>
        <p>Araç Kiralama ve Servis Anonim Şirketi markası Rent-a-SOHA (“Şirket”) olarak, müşterilerimizden/potansiyel müşterilerimizden elde ettiğimiz kişisel verilere istinaden Kişisel Verilerin Korunması Kanunu’na (“Kanun”) uygun hareket edebilmemizi teminen aydınlatma yükümlülüğü kapsamında aşağıdaki hususları bilgilerine sunuyoruz.</p>
        <h4><strong>Kişisel Verilerin Hangi Amaçla İşleneceği</strong></h4>
        <p>Kişisel verileriniz, Kanun’da öngörülen temel ilkelere ve Kanun’un 5. ve 6. maddelerinde belirtilen kişisel veri işleme şart ve amaçlarına uygun olarak, fiziken ve elektronik ortamda, Şirket müşterisi olmanız nedeniyle, kanunlarda öngörülen sebeplerle ve sözleşmesel ilişkinin ifası gereğince faaliyetlerimizin yürütülmesi, hizmetlerimizin işleyişi ve geliştirilmesi çerçevesinde toplanabilmektedir.</p>
        <p>Bu siteye verdiğiniz, aşağıda sayılan kişisel veriler (toplu olarak “Verileriniz”);</p>
        <ul>
            <li>Siteyi ziyaretiniz ve kullanımınız ile ilgili veriler (sitemizi ziyaretiniz sırasında IP adresiniz, coğrafi konumunuz, web tarayıcısı türü, gönderen kaynağınız, ziyaret süreniz ve sayfa/içerik gösterim sayısı gibi veriler)</li>
            <li>Site üzerinden yaptığınız her türlü işlem ve uygulama ile ilgili veriler,</li>
            <li>Teklif almak, çevrimiçi (web tarayıcı üzerinden veya uygulama üzerinden alınan) hizmetlerle birlikte operasyonel ve mali hizmetlerden yararlanmak için verdiğiniz veriler (TC Kimlik Numarası, Geçici TC Kimlik Numarası, ehliyet bilgileri, pasaport bilgileri, vergi numarası da dahil olmak üzere kimlik verileri, telefon numarası, e-posta adresi, adres de dahil olmak üzere iletişim verileri, taşıt verileri, öneri ve şikayet verileri)</li>
        </ul>
        <p>Şirket tarafından;</p>
        <ul>
        <li>Siteyi ziyaret ettiğinizde bilgisayarınızı tanımak ve böylece siteyi kişiselleştirerek ziyaretinizi daha verimli hale getirmek,</li>
        <li>Teklif alma uygunluğunuzu anlamak ve konu ile ilgili sizinle iletişime geçmek,</li>
        <li>Sözleşme sürecine kadar teklif gönderimi gerçekleştirmek,</li>
        <li>Kredi komitesi sürecine girebilmeniz için gerekli bilgileri edinmek,</li>
        <li>Kredi komitesi çıktısı olarak tarafımızdan talep edilecek teminat isteklerini sizlere iletmek,</li>
        <li>Sizlerden bu konularla ilgili dönüş almak,</li>
        <li>Sözleşmeyi kurmak amacıyla sizlerle sözleşmeyi paylaşmak, amaçlarıyla işlenmektedir. İlgili teklifin verilmesini takiben bir sözleşme kurulması halinde, yukarıda belirtilen bilgiler aynı zamanda aşağıdaki amaçlarla kullanılacaktır:</li>
        <li>Teklif hazırlama sürecini yürütmek ve sözleşme onayını bildirmek,</li>
        <li>Araç kiralama süreci ve iade işlemlerini yürütmek,</li>
        <li>Kira süresi boyunca araçla ilgili operasyonel işlemleri yürütmek,</li>
        <li>Kira süresi boyunca faturalama gerçekleştirebilmek,</li>
        <li>Sözleşme bitişi öncesinde müşteriyi bilgilendirmek.</li>
        </ul>
        <h4><strong>İnternet Sitesi Çerezlerin Kullanımı</strong></h4>
        <p>Bu sitede çerezler kullanılmaktadır. Web sunucusu tarafından web tarayıcısına gönderilen ve tarayıcı tarafından kaydedilen metin dosyasına çerez denir ve bu dosya tarayıcı sunucudan her sayfa istediğinde sunucuya geri gönderilmekte ve bu sayede, web sunucusu sizin tarayıcınızı tanımlamakta ve takip etmektedir. Bilgisayarınızın sabit diski üzerinde kaydedilmek üzere size çerez gönderebileceğimizi ve bu çerezlerden edineceğimiz bilgileri, sitenin yönetimi ve sitenin kullanılabilirliği artırma amaçlı kullanabileceğimiz belirtiriz. Bunun dışında, reklam sağlayıcılarımız da size çerez gönderebilecektir.</p>
        <p> Çoğu tarayıcı, çerez kabul etmeyi engelleyici ayarlara sahiptir. Bunun için tarayıcınızın yardım dosyalarını inceleyebilirsiniz. Ancak çerez kabul etmezseniz, sitemiz de dahil olmak üzere, pek çok siteyi kullanırken kullanılabilirliği büyük ölçüde azaltacağınızı dikkatinize sunarız.</p>
        <h4><strong>İşlenen Kişisel Verilerin Kimlere ve Hangi Amaçlar İle Aktarılabileceği</strong></h4>
        <p>Toplanan Verileriniz, işbu Aydınlatma Metni’nin 2. maddesinde açıklanan amaçlarla, bayilere, e-mailling firmalarına, asistan firmalarına, arşiv firmalarına, müşavirlik firmalarına, sigorta şirketlerine, tedarikçilere ve Kanunen yetkili kamu kurumları ve özel kişilere, Kanun’un 5. ve 6. maddelerinde belirtilen kişisel veri işleme şartları ve amaçları çerçevesinde Veri Sorumlusu tarafından oluşturulan ve www.rent-a-soha.com.tr internet adresinde paylaşılmış olan Kişisel Verilerin Korunması ve İşlenmesi Politikası ve işbu Aydınlatma Metni’nde belirtilen amaçlarla sınırlı olarak aktarılabilecektir. Ayrıca kişisel verileriniz, gerekli güvenlik önlemlerinin alınması şartıyla ve işbu Aydınlatma Metni’nde yazılı amaçlar ile sınırlı olmak üzere Kanun’un 8. ve 9. Maddeleri çerçevesinde aktarılabilecektir.</p>
        <h4><strong>Kişisel Verilerin Güvenliği</strong></h4>
        <p>Şirket, yürürlükteki ilgili mevzuat hükümleri gereğince bilginin gizliliğinin ve bütünlüğünün korunması amacıyla gerekli organizasyonu kurmak ve teknik önlemleri almak ve uyarlamak konusunda veri sorumlusu sıfatıyla sorumluluğu üstlenmiştir. Bu konudaki yükümlülüğümüz doğrultusunda veri işleme politikalarımızı belirli aralıklarla güncellediğimizi bilginize sunarız.</p>
        <p>Kişisel bilgilerinizin ve fikirlerinizin kaybı, yanlış kullanımı ve değiştirilmesini engelleyici gerekli önlemler alınacaktır. Ancak, internet üzerinden veri akışı, doğası gereği güvensiz olduğu için, bu verilerin internet üzerinden akışının güvenliği tarafımızca garanti edilememektedir. Şifrenizi gizli tutmak sizin sorumluluğunuzdadır. Site yönetimi şifrenize bilgi ve onayınız olmadan erişememektedir.</p>
        <h4><strong>Kişisel Veri Toplamanın Yöntemi ve Hukuki Sebebi</strong></h4>
        <p>Verileriniz, otomatik veya otomatik olmayan yollarla, sözleşmesel ilişkinin ifası gereğince veya kanunlarda öngörülen sair sebeplerle toplanabilmektedir. Verileriniz Şirket tarafından Şirket vasıtasıyla; Verilerinizi bizlere açıklamanıza konu olan ve işbu Aydınlatma Metni’nin 2. maddesinde belirtilen amaçların gerçekleştirilmesine yönelik hukuki sebeplerle toplanmaktadır.</p>
        <p>Bu hukuki sebeplerle toplanan Verileriniz Kanun’un 5/2-c, e maddeleri uyarınca bir sözleşmenin kurulması veya ifasıyla doğrudan doğruya ilgili olması kaydıyla, sözleşmenin taraflarına ait kişisel verilerin işlenmesinin gerekli olması ve sizin temel hak ve özgürlüklerinize zarar vermemek kaydıyla, Şirket’in meşru menfaatleri için veri işlenmesinin zorunlu olması kapsamında Şirket tarafından açık rızanız alınmaksızın işlenebilmektedir.</p>
        <p>Sizin açık rızanıza binaen Kanun’un 5/1 maddesi uyarınca işbu Aydınlatma Metni’nin 2. ve 3. maddelerinde belirtilen amaçlarla da işlenebilmekte ve aktarılabilmektedir.</p>
        <h4><strong>Veri Sahibinin Hakları</strong></h4>
        <p>Kanun’un 11. maddesi uyarınca, kişisel verileri işlenen çalışan, Rent-a-SOHA başvurarak aşağıdaki konulara ilişkin taleplerde bulunabilir:</p>
        <ul>
        <li>Kişisel verilerinin işlenip işlenmediğini öğrenme,</li>
        <li>Kişisel verileri işlenmişse buna ilişkin bilgi talep etme,</li>
        <li>Kişisel verilerinin işlenme amacını ve bunların amacına uygun kullanılıp kullanılmadığını öğrenme,</li>
        <li>Kişisel verilerinin yurt içinde veya yurt dışında aktarıldığı üçüncü kişileri bilme,</li>
        <li>Kişisel verilerinin eksik veya yanlış işlenmiş olması halinde bunların düzeltilmesini isteme ve bu kapsamda yapılan işlemin kişisel verilerin aktarıldığı üçüncü kişilere bildirilmesini isteme,</li>
        <li>Kişisel verilerinin işlenmesini gerektiren sebeplerin ortadan kalkması halinde bunların silinmesini, yok edilmesini veya anonim hale getirilmesini isteme ve bu kapsamda yapılan işlemin kişisel verilerin aktarıldığı üçüncü kişilere bildirilmesini isteme,</li>
        <li>İşlenen verilerinin münhasıran otomatik sistemler vasıtasıyla analiz edilmesi suretiyle veri sahibinin aleyhine bir sonucun ortaya çıkmasına itiraz etme,</li>
        <li>Kişisel verilerinin kanuna aykırı olarak işlenmesi sebebiyle zarara uğraması halinde zararın giderilmesini talep etme.</li>
        </ul>
        <p>Kanun’dan doğan talepler “Kişisel Veri Sahibi Başvuru Formu” aracılığıyla gerçekleştirecektir. Rent-a-SOHA, Kanun’un 13. maddesine uygun olarak, başvuru taleplerini, talebin niteliğine göre ve en geç 30 (otuz) gün içinde işlemin ayrıca bir maliyet gerektirmesi halinde Kurulca belirlenen tarifedeki ücret hariç olmak üzere ücretsiz olarak sonuçlandıracaktır. Talebin reddedilmesi halinde, red nedeni/nedenleri yazılı olarak veya elektronik ortamda gerekçelendirilir.</p>

    </div>



    
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
