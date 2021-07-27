<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
    <title>Nanas Prabuku</title>
</head>
<body>
    <div>
        <header class="site-header">
            <div class="wrap">
                <div class="title-area">
                    <p class="site-title">Prabumulih Timur</p>
                </div>
            </div>
        </header> 
        <div class="menu-toggle" id="myMenu-toggle" onclick="myFunction()"><span></span></div>
        <nav class="nav-primary" id="genesis-nav-primary" aria-label="Main navigation">
            <div class="wrap" id="">
                <ul id="menu-primary-navigation" class="menu genesis-nav-menu menu-primary">
                    <li class="menu-item">
                        <a href="<?php echo site_url('wilayah/#PrabumulihTimur')?>"><span>Home</span></a>   
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo site_url('menu/edutimur')?>"><span>Pendidikan</span></a>   
                    </li>
                    <li class="menu-item">
                        <a class="active" href="<?php echo site_url('menu/htimur')?>"><span>Kesehatan</span></a>   
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo site_url('menu/stimur')?>"><span>Keamanan</span></a>   
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo site_url('menu/wtimur')?>"><span>Pariwisata</span></a>   
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo site_url('menu/umtimur')?>"><span>UMKM</span></a>   
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo site_url('menu/ktimur')?>"><span>Kuliner</span></a>   
                    </li> 
                </ul>
            </div>
        </nav>
        
        <div class="menu-name">
            <div class="wrap">
            <h2>Kesehatan</h2>
            </div>
        </div>
        <section class="sec-Section sec-Section-lightGrey">
        <h3 class="wrap text-center sub-title shadow-sm">Rumah Sakit</h3>
        <br>
            <div class="sec-Section_Inner">
                <div class="row row-cols-1 row-cols-md-3 text-center justify-content-center">
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/rsud')?>"><img src="<?php echo base_url(); ?>assets/image/timur/rsud.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/rsud')?>"><div class="name"><h4>RSUD Kota Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/rsbunda')?>"><img src="<?php echo base_url(); ?>assets/image/timur/rsbunda.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/rsbunda')?>"><div class="name"><h4>RS AR Bunda Prabumulih</h4></div></a>
                        </div>
                    </div>
                </div>
            </div>
        
        <hr>

        <h3 class="wrap text-center sub-title shadow-sm">Klinik</h3>
        <br>
            <div class="sec-Section_Inner">
                <div class="row row-cols-1 row-cols-md-3 text-center justify-content-center">
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/fktp')?>"><img src="<?php echo base_url(); ?>assets/image/timur/fktp.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/fktp')?>"><div class="name"><h4>FKTP BPJS Dokter Dwinta Inayasari</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/kraniza')?>"><img src="<?php echo base_url(); ?>assets/image/logo.jpeg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/kraniza')?>"><div class="name fspace"><h4 class="vert-al">Klinik Raniza</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/kkarya')?>"><img src="<?php echo base_url(); ?>assets/image/timur/kkarya.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/kkarya')?>"><div class="name fspace"><h4 class="vert-al">Klinik Karya Medika</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/kfmc')?>"><img src="<?php echo base_url(); ?>assets/image/timur/kfmc.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/kfmc')?>"><div class="name fspace"><h4 class="vert-al">Klinik FMC 24 Jam</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/kpratama')?>"><img src="<?php echo base_url(); ?>assets/image/logo.jpeg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/kpratama')?>"><div class="name fspace"><h4 class="vert-al">Klinik Pratama 3F</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/krossama')?>"><img src="<?php echo base_url(); ?>assets/image/timur/krossama.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/krossama')?>"><div class="name"><h4>Klinik Rossama Sukajadi</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/kmuhammadiyah')?>"><img src="<?php echo base_url(); ?>assets/image/timur/km.jfif" alt=""></a></div>
                            <a href="<?php echo site_url('timur/kmuhammadiyah')?>"><div class="name"><h4>Klinik Muhammadiyah Al Fatih</h4></div></a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

        <h3 class="wrap text-center sub-title shadow-sm">Puskesmas</h3>
        <br>
            <div class="sec-Section_Inner">
                <div class="row row-cols-1 row-cols-md-3 text-center justify-content-center">
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/pustimur')?>"><img src="<?php echo base_url(); ?>assets/image/timur/pustimur.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/pustimur')?>"><div class="name"><h4>Puskesmas Prabumulih Timur</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/pussukajadi')?>"><img src="<?php echo base_url(); ?>assets/image/timur/pussukajadi.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/pussukajadi')?>"><div class="name fspace"><h4 class="vert-al">Puskesmas Sukajadi</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/pusdelinom')?>"><img src="<?php echo base_url(); ?>assets/image/timur/pusdelinom.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/pusdelinom')?>"><div class="name fspace"><h4 class="vert-al">Karang Raja Delinom</h4></div></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>   
  
    </div>
    <script>
        function myFunction() {
        var x = document.getElementById("myMenu-toggle");
        var y = document.getElementById("genesis-nav-primary")
        if (x.className === "menu-toggle") {
            x.className += " active";
            y.style.display = "block";
        } else {
            x.className = "menu-toggle";
            y.style.display = "none";
        }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>