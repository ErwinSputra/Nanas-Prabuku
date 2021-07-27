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
                    <p class="site-title">Prabumulih Utara</p>
                </div>
            </div>
        </header> 
        <div class="menu-toggle" id="myMenu-toggle" onclick="myFunction()"><span></span></div>
        <nav class="nav-primary" id="genesis-nav-primary" aria-label="Main navigation">
            <div class="wrap" id="">
                <ul id="menu-primary-navigation" class="menu genesis-nav-menu menu-primary">
                    <li class="menu-item">
                        <a href="<?php echo site_url('wilayah/#PrabumulihUtara')?>"><span>Home</span></a>   
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo site_url('menu/eduutara')?>"><span>Pendidikan</span></a>   
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo site_url('menu/hutara')?>"><span>Kesehatan</span></a>   
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo site_url('menu/sutara')?>"><span>Keamanan</span></a>   
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo site_url('menu/wutara')?>"><span>Pariwisata</span></a>   
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo site_url('menu/umutara')?>"><span>UMKM</span></a>   
                    </li>
                    <li class="menu-item">
                        <a class="active" href="<?php echo site_url('menu/kutara')?>"><span>Kuliner</span></a>   
                    </li>  
                </ul>
            </div>
        </nav>
        
        <div class="menu-name">
            <div class="wrap">
            <h2>Kuliner</h2>
            </div>
        </div>
        <section class="sec-Section sec-Section-lightGrey">
        <h3 class="wrap text-center sub-title shadow-sm">Daftar</h3>
        <br>
            <div class="sec-Section_Inner">
                <div class="row row-cols-1 row-cols-md-3 text-center justify-content-center">
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('utara/bakso3dara')?>"><img src="<?php echo base_url(); ?>assets/image/utara/bakso3dara.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('utara/bakso3dara')?>"><div class="name"><h4>Bakso Tiga Dara Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('utara/miemanalagi')?>"><img src="<?php echo base_url(); ?>assets/image/utara/miemanalagi.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('utara/miemanalagi')?>"><div class="name fspace"><h4 class="vert-al">Mie Manalagi</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('utara/restorancahaya')?>"><img src="<?php echo base_url(); ?>assets/image/utara/restorancahaya.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('utara/restorancahaya')?>"><div class="name fspace"><h4 class="vert-al">Restoran Cahaya</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('utara/rmsiangmalam')?>"><img src="<?php echo base_url(); ?>assets/image/utara/rmsiangmalam.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('utara/rmsiangmalam')?>"><div class="name fspace"><h4 class="vert-al">RM Siang Malam</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('utara/baksomawar')?>"><img src="<?php echo base_url(); ?>assets/image/utara/baksomawar.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('utara/baksomawar')?>"><div class="name"><h4>Bakso Mawar Jaya Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('utara/mieyono')?>"><img src="<?php echo base_url(); ?>assets/image/utara/mieyono.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('utara/mieyono')?>"><div class="name fspace"><h4 class="vert-al">Mie Ayam Mas Yono</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('utara/mieberdikari')?>"><img src="<?php echo base_url(); ?>assets/image/utara/mieberdikari.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('utara/mieberdikari')?>"><div class="name fspace"><h4 class="vert-al">Mie Ayam Berdikari</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('utara/pempekanggrek')?>"><img src="<?php echo base_url(); ?>assets/image/utara/pempekanggrek.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('utara/pempekanggrek')?>"><div class="name fspace"><h4 class="vert-al">Pempek Anggrek</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('utara/baksoraksasa')?>"><img src="<?php echo base_url(); ?>assets/image/utara/baksoraksasa.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('utara/baksoraksasa')?>"><div class="name fspace"><h4 class="vert-al">Bakso Raksasa</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('utara/angkringan')?>"><img src="<?php echo base_url(); ?>assets/image/utara/angkringancempaka.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('utara/angkringan')?>"><div class="name"><h4>Angkringan Cempaka Tiga</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('utara/martabakbarokah')?>"><img src="<?php echo base_url(); ?>assets/image/utara/martabakbarokah.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('utara/martabakbarokah')?>"><div class="name fspace"><h4 class="vert-al">Martabak Barokah</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('utara/rmjogja')?>"><img src="<?php echo base_url(); ?>assets/image/utara/rmjogja.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('utara/rmjogja')?>"><div class="name"><h4>Rumah Makan Jogyakarta</h4></div></a>
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