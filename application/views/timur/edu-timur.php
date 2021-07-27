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
                        <a class="active" href="<?php echo site_url('menu/edutimur')?>"><span>Pendidikan</span></a>   
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo site_url('menu/htimur')?>"><span>Kesehatan</span></a>   
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
            <h2>Pendidikan</h2>
            </div>
        </div>
        <section class="sec-Section sec-Section-lightGrey">
        <h3 class="wrap text-center sub-title shadow-sm">SD</h3>
        <br>
            <div class="sec-Section_Inner">
                <div class="row row-cols-1 row-cols-md-3 text-center justify-content-center">
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/min1')?>"><img src="<?php echo base_url(); ?>assets/image/timur/min1.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/min1')?>"><div class="name fspace"><h4 class="vert-al">Min 01 Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/sdalam')?>"><img src="<?php echo base_url(); ?>assets/image/timur/sdalam.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/sdalam')?>"><div class="name fspace"><h4 class="vert-al">SD Alam Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/sdanggelly')?>"><img src="<?php echo base_url(); ?>assets/image/timur/sdanggelly.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/sdanggelly')?>"><div class="name fspace"><h4 class="vert-al">SD Anggelly Kids</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/sditalhasanah')?>"><img src="<?php echo base_url(); ?>assets/image/timur/sditalhasanah.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/sditalhasanah')?>"><div class="name"><h4>SDIT Al Hasanah Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/sditalistiqomah')?>"><img src="<?php echo base_url(); ?>assets/image/timur/sditalistiqomah.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/sditalistiqomah')?>"><div class="name"><h4>SDIT Al Istiqomah Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/sd6')?>"><img src="<?php echo base_url(); ?>assets/image/timur/sd6.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/sd6')?>"><div class="name"><h4>SD Negeri 06 Prabumulih</h4></div></a>
                        </div>
                    </div>
                </div>
                <p class="wrap"><a class="more-info shadow-sm" href="<?php echo site_url('menu/edutimur2')?>">See More →</a></p>
            </div>

            <hr>

            <h3 class="wrap text-center sub-title shadow-sm">SMP</h3>
            <br>
            <div class="sec-Section_Inner">
                <div class="row row-cols-1 row-cols-md-3 text-center justify-content-center">
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/azzahro')?>"><img src="<?php echo base_url(); ?>assets/image/timur/azzahro.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/azzahro')?>"><div class="name fspace"><h4 class="vert-al">Az Zahro Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/mtsn1')?>"><img src="<?php echo base_url(); ?>assets/image/timur/mtsn1.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/mtsn1')?>"><div class="name fspace"><h4 class="vert-al">MTSN 01 Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/mtsamalbakti')?>"><img src="<?php echo base_url(); ?>assets/image/timur/mtsamalbakti.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/mtsamalbakti')?>"><div class="name"><h4>MTSS Amal Bakti Prabumulih</h4></div></a>
                        </div>
                    </div>
                </div>
            </div>


            <hr>

            <h3 class="wrap text-center sub-title shadow-sm">SMA</h3>
            <br>
            <div class="sec-Section_Inner">
                <div class="row row-cols-1 row-cols-md-3 text-center justify-content-center">
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/man1')?>"><img src="<?php echo base_url(); ?>assets/image/timur/man1.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/man1')?>"><div class="name fspace"><h4 class="vert-al">MAN 01 Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/sma3')?>"><img src="<?php echo base_url(); ?>assets/image/timur/sma3.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/sma3')?>"><div class="name"><h4>SMA Negeri 03 Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/sma7')?>"><img src="<?php echo base_url(); ?>assets/image/timur/sma7.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/sma7')?>"><div class="name"><h4>SMA Negeri 07 Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/smamuhammadiyah')?>"><img src="<?php echo base_url(); ?>assets/image/timur/smamuhammadiyah.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/smamuhammadiyah')?>"><div class="name"><h4>SMAS Muhammadiyah 01 Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/smkmuhammadiyah')?>"><img src="<?php echo base_url(); ?>assets/image/timur/smkmuhammadiyah.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/smkmuhammadiyah')?>"><div class="name"><h4>SMK Muhammadiyah Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/smk1')?>"><img src="<?php echo base_url(); ?>assets/image/timur/smk1.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/smk1')?>"><div class="name"><h4>SMK Negeri 01 Prabumulih</h4></div></a>
                        </div>
                    </div>
                </div>
                <p class="wrap"><a class="more-info shadow-sm" href="<?php echo site_url('menu/edutimur3')?>">See More →</a></p>
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