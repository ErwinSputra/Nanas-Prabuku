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
                        <a href="<?php echo site_url('menu/htimur')?>"><span>Kesehatan</span></a>   
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo site_url('menu/stimur')?>"><span>Keamanan</span></a>   
                    </li>
                    <li class="menu-item">
                        <a class="active" href="<?php echo site_url('menu/wtimur')?>"><span>Pariwisata</span></a>   
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
            <h2>Wisata</h2>
            </div>
        </div>
        <section class="sec-Section sec-Section-lightGrey">
        <h3 class="wrap text-center sub-title shadow-sm">Daftar</h3>
        <br>
            <div class="sec-Section_Inner">
                <div class="row row-cols-1 row-cols-md-3 text-center justify-content-center">
                <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/tamankota')?>"><img src="<?php echo base_url(); ?>assets/image/timur/tamankota.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/tamankota')?>"><div class="name"><h4>Taman Kota Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/kampungwisata')?>"><img src="<?php echo base_url(); ?>assets/image/timur/kampungwisata.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/kampungwisata')?>"><div class="name"><h4>Kampung Wisata Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/patungkuda')?>"><img src="<?php echo base_url(); ?>assets/image/timur/patungkuda.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/patungkuda')?>"><div class="name"><h4>Monumen Patung Kuda</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/tugu')?>"><img src="<?php echo base_url(); ?>assets/image/timur/tamankota.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/tugu')?>"><div class="name"><h4>Tugu Taman Kota Prabujaya</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/riskygarden')?>"><img src="<?php echo base_url(); ?>assets/image/timur/riskygarden.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/riskygarden')?>"><div class="name"><h4>Risky Garden "Taman Wisata Air"</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/islamiccenter')?>"><img src="<?php echo base_url(); ?>assets/image/timur/islamiccenter.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/islamiccenter')?>"><div class="name"><h4>Islamic Center Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/citymall')?>"><img src="<?php echo base_url(); ?>assets/image/timur/citymall.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/citymall')?>"><div class="name fspace"><h4 class="vert-al">City Mall Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/rere')?>"><img src="<?php echo base_url(); ?>assets/image/timur/rere.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/rere')?>"><div class="name fspace"><h4 class="vert-al">Rere Water Park</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/tamangibul')?>"><img src="<?php echo base_url(); ?>assets/image/timur/tamangibul.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/tamangibul')?>"><div class="name fspace"><h4 class="vert-al">Taman Gunung Ibul</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/dpool')?>"><img src="<?php echo base_url(); ?>assets/image/timur/dpool.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/dpool')?>"><div class="name fspace"><h4 class="vert-al">D'Pool</h4></div></a>
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