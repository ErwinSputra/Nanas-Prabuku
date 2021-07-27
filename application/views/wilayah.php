<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css"> -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jscript.js"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;700;900&family=Ubuntu:wght@300;400;700&display=swap"
      rel="stylesheet"
    />
    <title>Nanas Prabuku</title>
</head>
<body>

<video id="videoBG" poster="<?php echo base_url(); ?>assets/image/frameawal.png" autoplay  muted loop  >
  
  <source src="<?php echo base_url(); ?>assets/image/bgg.mp4" type="video/mp4">

</video>

 
<div class="header" id="header"><h1>Nanas Prabuku</h1></div>
<br>
<br>
<br> 

  <section id="title">  
    
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col utara" id="utara">
          <a href="#PrabumulihUtara"><img class="size" src="<?php echo base_url(); ?>assets/image/Utara.png"></a>
        </div>
      </div>

      <div class="row justify-content-around">
        <div class="col barat" id="barat">
          <a href="#PrabumulihBarat"><img class="size" src="<?php echo base_url(); ?>assets/image/Barat.png"></a>
        </div>
        <div class="col cambai" id="cambai" >
          <a href="#Cambai"><img class="size " src="<?php echo base_url(); ?>assets/image/Cambai.png"></a>
        </div>		
      </div>
      
      <div class="row justify-content-center">
        <div class="col peta " id="peta">
          <input type="button" name="btn" id="btn" class="btn">
            <label for="btn"  id="tombol" value = "nyala" onclick="ngumpet()">
            <img class="map" src="<?php echo base_url(); ?>assets/image/PETA.png">
          </label>
        </div>  
      </div>

      <div class="row justify-content-around">
        <div class="col erkate" id="erkate">
          <a href="#RKT"><img class="size" src="<?php echo base_url(); ?>assets/image/RKT.png"></a>
        </div>
        <div class="col timur" id="timur" >
         <a href="#PrabumulihTimur"><img class="size " src="<?php echo base_url(); ?>assets/image/Timur.png"></a>   
        </div>		
      </div>

      <div class="row justify-content-center">
        <div class="col selatan" id="selatan">
          <a href="#PrabumulihSelatan"><img class="size" src="<?php echo base_url(); ?>assets/image/Selatan.png"></a>
        </div>
      </div>

    </div>
  </section>
  <br>
  <br>
  <br>
  <br>
   
  <section id="PrabumulihUtara">
    <div class="container transparant">
     
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand mb-0 h1" href="#"><h2 style="color: white;">Prabumulih Utara</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active mr-4">
                <a class="nav-link" href="https://camatutaraprabumulih.000webhostapp.com/beranda/" target="_blank">Website <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item mr-4">
                <a class="nav-link" href="http://spbe.kotaprabumulih.go.id/aplikasi/kecamatan/pbmutara/" target="_blank">SPBE</a>
              </li>
              <li class="nav-item mr-4">
                <a class="nav-link " href="#header" tabindex="-1" >Back</a>
              </li>
            </ul>
          </div>
        </nav>

        <br>

        <div class="container">
          <div class="row">
            <div class="col first">
              <div>
                <h3>Camat</h3>
                <img class="camat" src="<?php echo base_url(); ?>assets/image/home.png" alt="">
              </div>
              <br>
              <div >
                <h3>Kelurahan/Desa</h3>
                <div class="parent">
                  <ul>
                    <li><a class="kelurahan" href="https://kelurahananakpetai.blogspot.com/" target="_blank">Kelurahan Anak Petai</a></li>
                    <li><a class="kelurahan" href="https://kelurahanmanggabesar.wordpress.com/" target="_blank">Kelurahan Mangga Besar</a></li>
                    <li><a class="kelurahan" href="https://kelpasar1.wordpress.com/" target="_blank">Kelurahan Pasar Prabumulih I</a></li>
                    <li><a class="kelurahan" href="https://kelurahanpasar2prabumulih.blogspot.com/" target="_blank">Kelurahan Pasar Prabumulih II</a></li>
                    <li><a class="kelurahan" href="https://kelurahanwonosari.com/" target="_blank">Kelurahan Wonosari</a></li>
                  </ul>
                </div>
              </div>

              
            </div>

            <div class="col-sm-6 center">
              <div>
                  <h3>Menu</h3>
                  <div class="skill-row">
                    <h4><a class="judul" href="<?php echo site_url('menu/eduutara')?>">Pendidikan</a></h4>
                    <p class="desc">Dalam wilayah prabumulih utara memiliki beberapa sekolah dari berbagai jenjang pendidikan baik negeri maupun swasta yang totalnya sebanyak 27 sekolah, terdiri dari  17 Sekolah Dasar(SD), 4 Sekolah Menengah Pertama(SMP), dan 6 Sekolah Menengah Atas(SMA).          <span><a href="<?php echo site_url('menu/eduutara')?>">Selengkapnya</a></span></p> 
                    </div>
                  
                  <div class="skill-row">
                      <h4><a class="judul" href="<?php echo site_url('menu/hutara')?>">Kesehatan</a></h4>
                      <p class="desc">Di kecamatan prabumulih utara memiliki tempat konsultasi kesehatan yang dapat dikunjungin yaitu terdapat 1 puskesmas, 3 klinik.          <span><a href="<?php echo site_url('menu/hutara')?>">Selengkapnya</a></span></p>
                   </div>
                  
                  <div class="skill-row">
                    <h4><a class="judul" href="<?php echo site_url('menu/sutara')?>">Keamanan</a></h4>
                    <p class="desc">Dalam wilayah kecamatan prabumulih utara memiliki aparatur keamanan yaitu polisi militer prabumulih.          <span><a href="<?php echo site_url('menu/sutara')?>">Selengkapnya</a></span></p>
                  </div>

                  <div class="skill-row">
                    <h4><a class="judul" href="<?php echo site_url('menu/wutara')?>">Pariwisata</a></h4>
                    <p class="desc">Tempat berlibur atau berwisata jika berada dalam kecamatan prabumulih utara dapat mengunjungi taman wonosari.          <span><a href="<?php echo site_url('menu/wutara')?>">Selengkapnya</a></span></p>
                  </div>
                  
                  <div class="skill-row">
                      <h4><a class="judul" href="<?php echo site_url('menu/umutara')?>">UMKM</a></h4>
                      <p class="desc">UMKM  yang berada dalam kecamatan prabumulih utara total sebanyak 3 unit.          <span><a href="<?php echo site_url('menu/umutara')?>">Selengkapnya</a></span></p>
                   </div>
                  
                  <div class="skill-row">
                    <h4><a class="judul" href="<?php echo site_url('menu/kutara')?>">Kuliner</a></h4>
                    <p class="desc">Bagi pecinta makanan dapat mengunjungi 13 tempat kuliner yang ada di kecamatan prabumulih utara.          <span><a href="<?php echo site_url('menu/kutara')?>">Selengkapnya</a></span></p> 
                  </div>
                  
                </div>
            </div>

            <div class="col first">
              <div>
                <h3>Follow Us</h3>
                <div class="">
                  <ul class="social-media">
                    <li class="mr-2"><a href="https://www.instagram.com/kecamatan.prabumulih.utara/" target="_blank"><i class="fa fa-instagram fa-3x warna" aria-hidden="true"></i></a></li>
                    <li class="mr-2"><a href="https://web.facebook.com/Kecamatan-Prabumulih-Utara-365475506954671" target="_blank"><i class="fa fa-facebook fa-3x warna" aria-hidden="true"></i></a></li>
                    <!-- <li class="mr-2"><a href="http://www.whatsapp.com/ "target="_blank"><i class="fa fa-whatsapp fa-3x warna" aria-hidden="true"></i></a></li> -->
                    <!-- <li><i class="icon fas fa-check-circle fa-3x"></i></li>
                    <li><i class="icon fas fa-check-circle fa-3x"></i></li> -->
                  </ul>
                </div>
              </div>
              <br>
              <div>
                 <h3>Map</h3>
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15930.752546680173!2d104.22001576977536!3d-3.4259113999999964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3a33ae199da0a5%3A0x981792e1903740e5!2sKantor%20Camat%20Prabumulih%20Utara!5e0!3m2!1sen!2sid!4v1624463886755!5m2!1sen!2sid" width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
          </div>
        </div>  
    </div>
  </section>
  
<br>

  <section id="PrabumulihBarat">
    <div class="container transparant">
     
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand mb-0 h1" href="#"><h2 style="color: white;">Prabumulih Barat</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active mr-4">
                <a class="nav-link" href="https://sites.google.com/view/kec-prabumulihbarat/halaman-muka" target="_blank" >Website <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item mr-4">
                <a class="nav-link" href="http://spbe.kotaprabumulih.go.id/aplikasi/kecamatan/pbmbarat/" target="_blank">SPBE</a>
              </li>
              <li class="nav-item mr-4">
                <a class="nav-link " href="#header" tabindex="-1" >Back</a>
              </li>
            </ul>
          </div>
        </nav>

        <br>

        <div class="container">
          <div class="row">
            <div class="col first">
              <div>
                <h3>Camat</h3>
                <img class="camat" src="<?php echo base_url(); ?>assets/image/home.png" alt="">
              </div>
              <br>
              <div >
                <h3>Kelurahan/Desa</h3>
                <div class="parent">
                  <ul>
                    <li><a class="kelurahan" href="https://kelurahangunungkemala.blogspot.com/" target="_blank">Kelurahan Gunung Kemala</a></li>
                    <li><a class="kelurahan" href="https://kelurahanmuntangtapus.blogspot.com/" target="_blank">Kelurahan Muntang Tapus</a></li>
                    <li><a class="kelurahan" href="https://kelurahanpatihgalung.blogspot.com/" target="_blank">Kelurahan Patih Galung</a></li>
                    <li><a class="kelurahan" href="https://kelurahanpayuputat.blogspot.com/" target="_blank">Kelurahan Payuputat</a></li>
                    <li><a class="kelurahan" href="https://kelurahanprabumulih.wordpress.com/" target="_blank">Kelurahan Prabumulih</a></li>
                    <li><a class="kelurahan" href="https://jelajahdesatanjungtelang.blogspot.com/" target="_blank">Desa Tanjung Telang</a></li>
                  </ul>
                </div>
              </div>

              
            </div>

            <div class="col-sm-6 center">
              <div>
                  <h3>Menu</h3>
                  <div class="skill-row">
                    <h4><a class="judul" href="<?php echo site_url('menu/edubarat')?>">Pendidikan</a></h4>
                    <p class="desc">Dalam wilayah prabumulih barat memiliki beberapa sekolah dari berbagai jenjang pendidikan baik negeri maupun swasta yang totalnya sebanyak 29 sekolah, terdiri dari  20 Sekolah Dasar(SD), 4 Sekolah Menengah Pertama(SMP), dan 5 Sekolah Menengah Atas(SMA).          <span><a href="<?php echo site_url('menu/edubarat')?>">Selengkapnya</a></span></p>
                  </div>
                  
                  <div class="skill-row">
                      <h4><a class="judul" href="<?php echo site_url('menu/hbarat')?>">Kesehatan</a></h4>
                      <p class="desc">Di kecamatan prabumulih barat memiliki tempat konsultasi kesehatan yang dapat dikunjungin yaitu terdapat 2 rumah sakit, 2 puskesmas, 2 klinik.          <span><a href="<?php echo site_url('menu/hbarat')?>">Selengkapnya</a></span></p>
                   </div>
                  
                  <div class="skill-row">
                    <h4><a class="judul" href="<?php echo site_url('menu/sbarat')?>">Keamanan</a></h4>
                    <p class="desc">Dalam wilayah kecamatan prabumulih barat terdapat kantor aparatur keamanan yaitu polsek prabumulih.          <span><a href="<?php echo site_url('menu/sbarat')?>">Selengkapnya</a></span></p>
                  </div>

                  <div class="skill-row">
                    <h4><a class="judul" href="<?php echo site_url('menu/wbarat')?>">Pariwisata</a></h4>
                    <p class="desc">Ada 4 opsi tempat berlibur atau berwisata jika berada  dalam kecamatan prabumulih barat dapat dikunjungi.          <span><a href="<?php echo site_url('menu/wbarat')?>">Selengkapnya</a></span></p>
                  </div>
                  
                  <div class="skill-row">
                      <h4><a class="judul" href="<?php echo site_url('menu/umbarat')?>">UMKM</a></h4>
                      <p class="desc">Belum ada umkm pada kecamatan prabumulih barat.          <span><a href="<?php echo site_url('menu/umbarat')?>">Selengkapnya</a></span></p>
                   </div>
                  
                  <div class="skill-row">
                    <h4><a class="judul" href="<?php echo site_url('menu/kbarat')?>">Kuliner</a></h4>
                    <p class="desc">Bagi pecinta makanan dapat mengunjungi 6 pilihan tempat kuliner yang ada di kecamatan prabumulih barat.          <span><a href="<?php echo site_url('menu/kbarat')?>">Selengkapnya</a></span></p>
                  </div>
                  
                </div>
            </div>

            <div class="col first">
              <div>
                <h3>Follow Us</h3>
                <div class="">
                  <ul class="social-media">
                    <li class="mr-2"><a href="https://www.instagram.com/kecamatanprabumulihbarat/" target="_blank"><i class="fa fa-instagram fa-3x warna" aria-hidden="true"></i></a></li>
                    <li class="mr-2"><a href="https://web.facebook.com/Kecamatan-Prabumulih-Barat-103598211826512" target="_blank"><i class="fa fa-facebook fa-3x warna" aria-hidden="true"></i></a></li>
                    <!-- <li class="mr-2"><a href="http://www.whatsapp.com/ "target="_blank"><i class="fa fa-whatsapp fa-3x warna" aria-hidden="true"></i></a></li> -->
                    <!-- <li><i class="icon fas fa-check-circle fa-3x"></i></li>
                    <li><i class="icon fas fa-check-circle fa-3x"></i></li> -->
                  </ul>
                </div>
              </div>
              <br>
              <div>
                 <h3>Map</h3>
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63719.47644565372!2d104.2000412290914!3d-3.4785819546724555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3a3224fbc09175%3A0xa63f1c67366b1a18!2sKantor%20Camat%20Prabumulih%20Barat!5e0!3m2!1sen!2sid!4v1624464641184!5m2!1sen!2sid" width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
          </div>
        </div>  
    </div>
  </section>

  <br>

  <section id="PrabumulihTimur">
    <div class="container transparant">
     
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand mb-0 h1" href="#"><h2 style="color: white;">Prabumulih Timur</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active mr-4">
                <a class="nav-link" href="http://prabumulih-timur.com/" target="_blank">Website <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item mr-4">
                <a class="nav-link" href="http://spbe.kotaprabumulih.go.id/aplikasi/kecamatan/pbmtimur/" target="_blank">SPBE</a>
              </li>
              <li class="nav-item mr-4">
                <a class="nav-link " href="#header" tabindex="-1" >Back</a>
              </li>
            </ul>
          </div>
        </nav>

        <br>

        <div class="container">
          <div class="row">
            <div class="col first">
              <div>
                <h3>Camat</h3>
                <img class="camat" src="<?php echo base_url(); ?>assets/image/home.png" alt="">
              </div>
              <br>
              <div >
                <h3>Kelurahan/Desa</h3>
                <div class="parent">
                  <ul>
                    <li><a class="kelurahan" href="https://kelurahanprabujaya.blogspot.com/2021/01/blog-post.html" target="_blank">Kelurahan Prabu Jaya</a></li>
                    <li><a class="kelurahan" href="https://sites.google.com/view/kelurahangunungibul/halaman-muka" target="_blank">Kelurahan Gunung Ibul</a></li>
                    <li><a class="kelurahan" href="http://www.kelurahangib.com/" target="_blank">Kelurahan Gunung Ibul Barat</a></li>
                    <li><a class="kelurahan" href="https://kelurahankarangraja.blogspot.com/" target="_blank">Kelurahan Karang Raja</a></li>
                    <li><a class="kelurahan" href="https://kelurahankarangjaya225.blogspot.com/" target="_blank">Kelurahan Karang Jaya</a></li>
                    <li><a class="kelurahan" href="https://kelurahanmuaradua.blogspot.com/" target="_blank">Kelurahan Muara Dua</a></li>
                    <li><a class="kelurahan" href="https://kelurahansukajadi21.blogspot.com/" target="_blank">Sukajadi</a></li>
                    <li><a class="kelurahan" href="https://kelurahantugukecil.blogspot.com/" target="_blank">Kelurahan Tugu Kecil</a></li>
                    
                   
                  </ul>
                </div>
              </div>

              
            </div>

            <div class="col-sm-6 center">
              <div>
                  <h3>Menu</h3>
                  <div class="skill-row">
                    <h4><a class="judul" href="<?php echo site_url('menu/edutimur')?>">Pendidikan</a></h4>
                    <p class="desc">Dalam wilayah prabumulih timur memiliki beberapa sekolah dari berbagai jenjang pendidikan baik negeri maupun swasta yang totalnya sebanyak 44 sekolah, terdiri dari  32 Sekolah Dasar(SD), 3 Sekolah Menengah Pertama(SMP), dan 9  Sekolah Menengah Atas(SMA).          <span><a href="<?php echo site_url('menu/edutimur')?>">Selengkapnya</a></span></p>
                  </div>
                  
                  <div class="skill-row">
                      <h4><a class="judul" href="<?php echo site_url('menu/htimur')?>">Kesehatan</a></h4>
                      <p class="desc">Di kecamatan prabumulih timur  memiliki tempat konsultasi kesehatan yang dapat dikunjungin yaitu terdapat 2 rumah sakit, 3 puskesmas, 7  klinik.          <span><a href="<?php echo site_url('menu/htimur')?>">Selengkapnya</a></span></p>
                   </div>
                  
                  <div class="skill-row">
                    <h4><a class="judul" href="<?php echo site_url('menu/stimur')?>">Keamanan</a></h4>
                    <p class="desc">Dalam wilayah kecamatan prabumulih timur terdapat kantor aparatur keamanan yaitu polsek prabumulih.          <span><a href="<?php echo site_url('menu/stimur')?>">Selengkapnya</a></span></p>
                  </div>

                  <div class="skill-row">
                    <h4><a class="judul" href="<?php echo site_url('menu/wtimur')?>">Pariwisata</a></h4>
                    <p class="desc">Ada 10 opsi tempat berlibur atau berwisata jika berada  dalam kecamatan prabumulih timur dapat dikunjungi.          <span><a href="<?php echo site_url('menu/wtimur')?>">Selengkapnya</a></span></p>
                  </div>
                  
                  <div class="skill-row">
                      <h4><a class="judul" href="<?php echo site_url('menu/umtimur')?>">UMKM</a></h4>
                      <p class="desc">UMKM  yang berada dalam kecamatan prabumulih timur total sebanyak 6 unit.          <span><a href="<?php echo site_url('menu/umtimur')?>">Selengkapnya</a></span></p>
                   </div>
                  
                  <div class="skill-row">
                    <h4><a class="judul" href="<?php echo site_url('menu/ktimur')?>">Kuliner</a></h4>
                    <p class="desc">Bagi pecinta makanan dapat mengunjungi 28 pilihan tempat kuliner yang ada di kecamatan prabumulih timur.          <span><a href="<?php echo site_url('menu/ktimur')?>">Selengkapnya</a></span></p>
                  </div>
                  
                </div>
            </div>

            <div class="col first">
              <div>
                <h3>Follow Us</h3>
                <div class="">
                  <ul class="social-media">
                    <li class="mr-2"><a href="https://www.instagram.com/kecamatan_prabumulih_timur/" target="_blank"><i class="fa fa-instagram fa-3x warna" aria-hidden="true"></i></a></li>
                    <li class="mr-2"><a href="https://web.facebook.com/kecamatanprabumulih.timur.7" target="_blank"><i class="fa fa-facebook fa-3x warna" aria-hidden="true"></i></a></li>
                    <!-- <li class="mr-2"><a href="http://www.whatsapp.com/ "target="_blank"><i class="fa fa-whatsapp fa-3x warna" aria-hidden="true"></i></a></li> -->
                    <!-- <li><i class="icon fas fa-check-circle fa-3x"></i></li>
                    <li><i class="icon fas fa-check-circle fa-3x"></i></li> -->
                  </ul>
                </div>
              </div>
              <br>
              <div>
                 <h3>Map</h3>
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254878.02458564247!2d104.0949720526873!3d-3.478142583387219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3a330ecc2fea47%3A0xd9e8368517738a32!2sKantor%20Camat%20Prabumulih%20Timur!5e0!3m2!1sen!2sid!4v1624464932574!5m2!1sen!2sid" width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
          </div>
        </div>  
    </div>
  </section>


  <br>


  <section id="Cambai">
    <div class="container transparant">
     
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand mb-0 h1" href="#"><h2 style="color: white;">Cambai</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active mr-4">
                <a class="nav-link" href="https://sites.google.com/view/kecamatan-cambai/" target="_blank">Website <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item mr-4">
                <a class="nav-link" href="http://spbe.kotaprabumulih.go.id/aplikasi/kecamatan/cambai/" target="_blank">SPBE</a>
              </li>
              <li class="nav-item mr-4">
                <a class="nav-link " href="#header" tabindex="-1" >Back</a>
              </li>
            </ul>
          </div>
        </nav>

        <br>

        <div class="container">
          <div class="row">
            <div class="col first">
              <div>
                <h3>Camat</h3>
                <img class="camat" src="<?php echo base_url(); ?>assets/image/home.png" alt="">
              </div>
              <br>
              <div >
                <h3>Kelurahan/Desa</h3>
                <div class="parent">
                  <ul>
                    <li><a class="kelurahan" href="https://sites.google.com/view/kelurahancambai" target="_blank">Kelurahan Cambai</a></li>
                    <li><a class="kelurahan" href="https://kelurahansindur01.blogspot.com/?m=1" target="_blank">Kelurahan Sindur</a></li>
                    <li><a class="kelurahan" href="http://spbe.kotaprabumulih.go.id/aplikasi/kelurahan/kel.sungaimedang/" target="_blank">Kelurahan Sungai Medang</a></li>
                    <li><a class="kelurahan" href="http://spbe.kotaprabumulih.go.id/aplikasi/desa/muarasungai/#" target="_blank">Desa Muara Sungai</a></li>
                    <li><a class="kelurahan" href="https://httpsdesapangkulringkehnian.wordpress.com/" target="_blank">Desa Pangkul</a></li>
                    
                  </ul>
                </div>
              </div>

              
            </div>

            <div class="col-sm-6 center">
              <div>
                  <h3>Menu</h3>
                  <div class="skill-row">
                    <h4><a class="judul" href="<?php echo site_url('menu/educambai')?>">Pendidikan</a></h4>
                    <p class="desc">Dalam wilayah kecamatan cambai memiliki beberapa sekolah dari berbagai jenjang pendidikan baik negeri maupun swasta yang totalnya sebanyak 12 sekolah, terdiri dari  7 Sekolah Dasar(SD), 2 Sekolah Menengah Pertama(SMP), dan 3 Sekolah Menengah Atas(SMA).          <span><a href="<?php echo site_url('menu/educambai')?>">Selengkapnya</a></span></p>
                  </div>
                  
                  <div class="skill-row">
                      <h4><a class="judul" href="<?php echo site_url('menu/hcambai')?>">Kesehatan</a></h4>
                      <p class="desc">Di kecamatan cambai memiliki tempat konsultasi kesehatan yang dapat dikunjungin yaitu terdapat 1 puskesmas dan 1 klinik.          <span><a href="<?php echo site_url('menu/hcambai')?>">Selengkapnya</a></span></p>
                   </div>
                  
                  <div class="skill-row">
                    <h4><a class="judul" href="<?php echo site_url('menu/scambai')?>">Keamanan</a></h4>
                    <p class="desc">Dalam wilayah kecamatan cambai terdapat kantor aparatur keamanan yaitu 3 polres dan 1 polsek.          <span><a href="<?php echo site_url('menu/scambai')?>">Selengkapnya</a></span></p>
                  </div>

                  <div class="skill-row">
                    <h4><a class="judul" href="<?php echo site_url('menu/wcambai')?>">Pariwisata</a></h4>
                    <p class="desc">Tempat berlibur atau berwisata jika berada  dalam kecamatan cambai dapat mengunjungi kolam biru.          <span><a href="<?php echo site_url('menu/wcambai')?>">Selengkapnya</a></span></p>
                  </div>
                  
                  <div class="skill-row">
                      <h4><a class="judul" href="<?php echo site_url('menu/umcambai')?>">UMKM</a></h4>
                      <p class="desc">Belum ada umkm pada kecamatan cambai. <span><a href="<?php echo site_url('menu/umcambai')?>">Selengkapnya</a></span></p>
                   </div>
                  
                  <div class="skill-row">
                    <h4><a class="judul" href="<?php echo site_url('menu/kcambai')?>">Kuliner</a></h4>
                    <p class="desc">Bagi pecinta makanan dapat mengunjungi 2 pilihan tempat kuliner yang ada di kecamatan cambai.          <span><a href="<?php echo site_url('menu/kcambai')?>">Selengkapnya</a></span></p>
                  </div>
                  
                </div>
            </div>

            <div class="col first">
              <div>
                <h3>Follow Us</h3>
                <div class="">
                  <ul class="social-media">
                    <li class="mr-2"><a href="https://www.instagram.com/kecamatancambai/" target="_blank"><i class="fa fa-instagram fa-3x warna" aria-hidden="true"></i></a></li>
                    <li class="mr-2"><a href="https://web.facebook.com/kecamatan.cambai.14" target="_blank"><i class="fa fa-facebook fa-3x warna" aria-hidden="true"></i></a></li>
                    <!-- <li class="mr-2"><a href="http://www.whatsapp.com/ "target="_blank"><i class="fa fa-whatsapp fa-3x warna" aria-hidden="true"></i></a></li> -->
                    <!-- <li><i class="icon fas fa-check-circle fa-3x"></i></li>
                    <li><i class="icon fas fa-check-circle fa-3x"></i></li> -->
                  </ul>
                </div>
              </div>
              <br>
              <div>
                 <h3>Map</h3>
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2368.245435344952!2d104.28623366350308!3d-3.375055137650979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3bcb4ace866c7d%3A0x78f90f80c0f27878!2sKantor%20Camat%20Cambai!5e0!3m2!1sen!2sid!4v1624423806526!5m2!1sen!2sid" width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
          </div>
        </div>  
    </div>

  </section>


  <br>


  <section id="RKT">
    <div class="container transparant">
     
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand mb-0 h1" href="#"><h2 style="color: white;">RKT</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active mr-4">
                <a class="nav-link" href="https://kecamatanrkt.kotaprabumulih.go.id/" target="_blank">Website <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item mr-4">
                <a class="nav-link" href="http://spbe.kotaprabumulih.go.id/aplikasi/kecamatan/rkt/" target="_blank">SPBE</a>
              </li>
              <li class="nav-item mr-4">
                <a class="nav-link " href="#header" tabindex="-1" >Back</a>
              </li>
            </ul>
          </div>
        </nav>

        <br>

        <div class="container">
          <div class="row">
            <div class="col first">
              <div>
                <h3>Camat</h3>
                <img class="camat" src="<?php echo base_url(); ?>assets/image/home.png" alt="">
              </div>
              <br>
              <div >
                <h3>Kelurahan/Desa</h3>
                <div class="parent">
                  <ul>
                    <li><a class="kelurahan" href="https://keltanjungrambang.blogspot.com/" target="_blank">Kelurahan Tanjung Rambang</a></li>
                    <li><a class="kelurahan" href="https://jungaiproject.blogspot.com/" target="_blank">Desa Jungai</a></li>
                    <li><a class="kelurahan" href="https://desakaranganlama.blogspot.com/" target="_blank">Desa Karangan</a></li>
                    <li><a class="kelurahan" href="https://www.desakarangbindu.com/" target="_blank">Desa Karang Bindu</a></li>
                    <li><a class="kelurahan" href="http://desakaryamulya.com/" target="_blank">Desa Karya Mulya</a></li>
                    <li><a class="kelurahan" href="http://spbe.kotaprabumulih.go.id/aplikasi/desa/kemangtanduk/" target="_blank">Desa Kemang Tanduk</a></li>
                    <li><a class="kelurahan" href="http://spbe.kotaprabumulih.go.id/aplikasi/desa/rambangsenuling/" target="_blank">Desa Rambang Senuling</a></li>
                    <li><a class="kelurahan" href="https://sinar-rambang.blogspot.com/" target="_blank">Desa Sinar Rambang</a></li>
                    <li><a class="kelurahan" href="https://talbaprabumulih.blogspot.com/" target="_blank">Desa Talang Batu</a></li>
                    
                  </ul>
                </div>
              </div>

              
            </div>

            <div class="col-sm-6 center">
              <div>
                  <h3>Menu</h3>
                  <div class="skill-row">
                    <h4><a class="judul" href="<?php echo site_url('menu/edurkt')?>">Pendidikan</a></h4>
                    <p class="desc">Dalam wilayah kecamatan RKT memiliki beberapa sekolah dari berbagai jenjang pendidikan baik negeri maupun swasta yang totalnya sebanyak 15  sekolah, terdiri dari  12 Sekolah Dasar(SD), 2 Sekolah Menengah Pertama(SMP), dan 3 Sekolah Menengah Atas(SMA).          <span><a href="<?php echo site_url('menu/edurkt')?>">Selengkapnya</a></span></p>
                  </div>
                  
                  <div class="skill-row">
                      <h4><a class="judul" href="<?php echo site_url('menu/hrkt')?>">Kesehatan</a></h4>
                      <p class="desc">Di kecamatan RKT memiliki tempat konsultasi kesehatan yang dapat dikunjungin yaitu terdapat 1 puskesmas daerah.          <span><a href="<?php echo site_url('menu/hrkt')?>">Selengkapnya</a></span></p>
                   </div>
                  
                  <div class="skill-row">
                    <h4><a class="judul" href="<?php echo site_url('menu/srkt')?>">Keamanan</a></h4>
                    <p class="desc">Dalam wilayah kecamatan RKT  terdapat kantor aparatur keamanan yaitu polsek prabumulih.          <span><a href="<?php echo site_url('menu/srkt')?>">Selengkapnya</a></span></p>
                  </div>

                  <div class="skill-row">
                    <h4><a class="judul" href="<?php echo site_url('menu/wrkt')?>">Pariwisata</a></h4>
                    <p class="desc">Ada 4 opsi tempat berlibur atau berwisata jika berada  dalam kecamatan RKT dapat dikunjungi.          <span><a href="<?php echo site_url('menu/wrkt')?>">Selengkapnya</a></span></p>
                  </div>
                  
                  <div class="skill-row">
                      <h4><a class="judul" href="<?php echo site_url('menu/umrkt')?>">UMKM</a></h4>
                      <p class="desc">Belum ada umkm pada kecamatan RKT.          <span><a href="<?php echo site_url('menu/umrkt')?>">Selengkapnya</a></span></p>
                   </div>
                  
                  <div class="skill-row">
                    <h4><a class="judul" href="<?php echo site_url('menu/krkt')?>">Kuliner</a></h4>
                    <p class="desc">Bagi pecinta makanan dapat mengunjungi rumah makan kembar sebagai tempat kuliner yang ada di kecamatan RKT.          <span><a href="<?php echo site_url('menu/krkt')?>">Selengkapnya</a></span></p>
                  </div>
                  
                </div>
            </div>

            <div class="col first">
              <div>
                <h3>Follow Us</h3>
                <div class="">
                  <ul class="social-media">
                    <li class="mr-2"><a href="https://www.instagram.com/kecamatan_rkt/" target="_blank"><i class="fa fa-instagram fa-3x warna" aria-hidden="true"></i></a></li>
                    <li class="mr-2"><a href="https://web.facebook.com/kecamatan.rkt.7" target="_blank"><i class="fa fa-facebook fa-3x warna" aria-hidden="true"></i></a></li>
                    <!-- <li class="mr-2"><a href="http://www.whatsapp.com/ "target="_blank"><i class="fa fa-whatsapp fa-3x warna" aria-hidden="true"></i></a></li> -->
                    <!-- <li><i class="icon fas fa-check-circle fa-3x"></i></li>
                    <li><i class="icon fas fa-check-circle fa-3x"></i></li> -->
                  </ul>
                </div>
              </div>
              <br>
              <div>
                 <h3>Map</h3>
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127435.55986395557!2d104.15182293820371!3d-3.5035875900532183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3a2ca01a41ca83%3A0xa9eb237d43069384!2sKantor%20Camat%20Rambang%20Kapak%20Tengah!5e0!3m2!1sen!2sid!4v1624465282869!5m2!1sen!2sid" width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
          </div>
        </div>  
    </div>
  </section>

  <br>

  <section id="PrabumulihSelatan">
    <div class="container transparant">
     
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand mb-0 h1" href="#"><h2 style="color: white;">Prabumulih Selatan</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active mr-4">
                <a class="nav-link" href="http://kec-pbmselatan.kotaprabumulih.go.id/" target="_blank" >Website <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item mr-4">
                <a class="nav-link" href="http://spbe.kotaprabumulih.go.id/aplikasi/kecamatan/pbmselatan/" target="_blank" >SPBE</a>
              </li>
              <li class="nav-item mr-4">
                <a class="nav-link " href="#header" tabindex="-1" >Back</a>
              </li>
            </ul>
          </div>
        </nav>

        <br>

        <div class="container">
          <div class="row">
            <div class="col first">
              <div>
                <h3>Camat</h3>
                <img class="camat" src="<?php echo base_url(); ?>assets/image/home.png" alt="">
              </div>
              <br>
              <div >
                <h3>Kelurahan/Desa</h3>
                <div class="parent">
                  <ul>
                    <li><a class="kelurahan" href="https://www.kelurahanmajasari.id/" target="_blank" >Kelurahan Majasari</a></li>
                    <li><a class="kelurahan" href="https://kelurahansukarajapbm.blogspot.com/" target="_blank">Kelurahan Sukaraja</a></li>
                    <li><a class="kelurahan" href="https://kelurahantanjungraman1.blogspot.com/" target="_blank">Kelurahan Tanjung Raman</a></li>
                    <li><a class="kelurahan" href="http://spbe.kotaprabumulih.go.id/aplikasi/desa/tanjungmenang/" target="_blank">Desa Tanjung Menang  </a></li>
                    
                  </ul>
                </div>
              </div>

              
            </div>

            <div class="col-sm-6 center">
              <div>
                  <h3>Menu</h3>
                  <div class="skill-row">
                    <h4><a class="judul" href="<?php echo site_url('menu/eduselatan')?>">Pendidikan</a></h4>
                    <p class="desc">Dalam wilayah prabumulih selatan memiliki beberapa sekolah dari berbagai jenjang pendidikan baik negeri maupun swasta yang totalnya sebanyak 14  sekolah, terdiri dari  9 Sekolah Dasar(SD), 2 Sekolah Menengah Pertama(SMP), dan 3 Sekolah Menengah Atas(SMA).          <span><a href="<?php echo site_url('menu/eduselatan')?>">Selengkapnya</a></span></p>
                  </div>
                  
                  <div class="skill-row">
                      <h4><a class="judul" href="<?php echo site_url('menu/hselatan')?>">Kesehatan</a></h4>
                      <p class="desc">Di kecamatan prabumulih selatan memiliki tempat konsultasi kesehatan yang dapat dikunjungin yaitu terdapat 1 puskesmas daerah.          <span><a href="<?php echo site_url('menu/hselatan')?>">Selengkapnya</a></span></p>
                   </div>
                  
                  <div class="skill-row">
                    <h4><a class="judul" href="<?php echo site_url('menu/sselatan')?>">Keamanan</a></h4>
                    <p class="desc">Belum ada kantor aparatur keamanan di daerah kecamatan prabumulih selatan.          <span><a href="<?php echo site_url('menu/sselatan')?>">Selengkapnya</a></span></p>
                  </div>

                  <div class="skill-row">
                    <h4><a class="judul" href="<?php echo site_url('menu/wselatan')?>">Pariwisata</a></h4>
                    <p class="desc">Ada 2 opsi tempat berlibur atau berwisata jika berada  dalam kecamatan prabumulih selatan dapat dikunjungi.          <span><a href="<?php echo site_url('menu/wselatan')?>">Selengkapnya</a></span></p>
                  </div>
                  
                  <div class="skill-row">
                      <h4><a class="judul" href="<?php echo site_url('menu/umselatan')?>">UMKM</a></h4>
                      <p class="desc">Belum ada umkm pada kecamatan prabumulih selatan.          <span><a href="<?php echo site_url('menu/umselatan')?>">Selengkapnya</a></span></p>
                   </div>
                  
                  <div class="skill-row">
                    <h4><a class="judul" href="<?php echo site_url('menu/kselatan')?>">Kuliner</a></h4>
                    <p class="desc">Bagi pecinta makanan dapat mengunjungi 2 pilihan tempat kuliner yang ada di kecamatan prabumulih selatan.          <span><a href="<?php echo site_url('menu/kselatan')?>">Selengkapnya</a></span></p>
                  </div>

                </div>
            </div>

            <div class="col first">
              <div>
                <h3>Follow Us</h3>
                <div class="">
                  <ul class="social-media">
                    <li class="mr-2"><a href="https://www.instagram.com/explore/locations/527937324321209/kecamatan-prabumulih-selatan/" target="_blank"><i class="fa fa-instagram fa-3x warna" aria-hidden="true"></i></a></li>
                    <li class="mr-2"><a href="https://web.facebook.com/pages/Kecamatan%20Prabumulih%20Selatan/527937324321209/" target="_blank"><i class="fa fa-facebook fa-3x warna" aria-hidden="true"></i></a></li>
                    <!-- <li class="mr-2"><a href="http://www.whatsapp.com/ "target="_blank"><i class="fa fa-whatsapp fa-3x warna" aria-hidden="true"></i></a></li> -->
                  </ul>
                </div>
              </div>
              <br>
              <div>
                 <h3>Map</h3>
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63719.464774095686!2d104.20004127910157!3d-3.4787545999999963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3a2d839f02c285%3A0xd3c031c3b69b4913!2sKantor%20Camat%20Prabumulih%20Selatan!5e0!3m2!1sen!2sid!4v1624464190340!5m2!1sen!2sid" width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
          </div>
        </div>  
    </div>
  </section>

  <script
      src="https://kit.fontawesome.com/064d1bc040.js"
      crossorigin="anonymous"
    ></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>