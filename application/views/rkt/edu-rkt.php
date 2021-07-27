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
                    <p class="site-title">Rambang Kapak Tengah</p>
                </div>
            </div>
        </header> 
        <div class="menu-toggle" id="myMenu-toggle" onclick="myFunction()"><span></span></div>
        <nav class="nav-primary" id="genesis-nav-primary" aria-label="Main navigation">
            <div class="wrap" id="">
                <ul id="menu-primary-navigation" class="menu genesis-nav-menu menu-primary">
                    <li class="menu-item">
                        <a href="<?php echo site_url('wilayah/#RKT')?>"><span>Home</span></a>   
                    </li>
                    <li class="menu-item">
                        <a class="active" href="<?php echo site_url('menu/edurkt')?>"><span>Pendidikan</span></a>   
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo site_url('menu/hrkt')?>"><span>Kesehatan</span></a>   
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo site_url('menu/srkt')?>"><span>Keamanan</span></a>   
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo site_url('menu/wrkt')?>"><span>Pariwisata</span></a>   
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo site_url('menu/umrkt')?>"><span>UMKM</span></a>   
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo site_url('menu/krkt')?>"><span>Kuliner</span></a>   
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
                            <div><a href="<?php echo site_url('rkt/sd59')?>"><img src="<?php echo base_url(); ?>assets/image/rkt/sd59.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('rkt/sd59')?>"><div class="name"><h4>SD Negeri 59 Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('rkt/sd60')?>"><img src="<?php echo base_url(); ?>assets/image/rkt/sd60.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('rkt/sd60')?>"><div class="name"><h4>SD Negeri 60 Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('rkt/sd61')?>"><img src="<?php echo base_url(); ?>assets/image/rkt/sd61.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('rkt/sd61')?>"><div class="name"><h4>SD Negeri 61 Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('rkt/sd62')?>"><img src="<?php echo base_url(); ?>assets/image/rkt/sd62.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('rkt/sd62')?>"><div class="name"><h4>SD Negeri 62 Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('rkt/sd63')?>"><img src="<?php echo base_url(); ?>assets/image/rkt/sd63.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('rkt/sd63')?>"><div class="name"><h4>SD Negeri 63 Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('rkt/sd65')?>"><img src="<?php echo base_url(); ?>assets/image/rkt/sd65.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('rkt/sd65')?>"><div class="name"><h4>SD Negeri 65 Prabumulih</h4></div></a>
                        </div>
                    </div>
                </div>
                <p class="wrap"><a class="more-info shadow-sm" href="<?php echo site_url('menu/edurkt2')?>">See More →</a></p>
            </div>

            <hr>

            <h3 class="wrap text-center sub-title shadow-sm">SMP</h3>
            <br>
            <div class="sec-Section_Inner">
                <div class="row row-cols-1 row-cols-md-3 text-center justify-content-center">
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('rkt/smp7')?>"><img src="<?php echo base_url(); ?>assets/image/rkt/smp7.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('rkt/smp7')?>"><div class="name"><h4>SMP Negeri 07 Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('rkt/smp11')?>"><img src="<?php echo base_url(); ?>assets/image/rkt/smp11.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('rkt/smp11')?>"><div class="name"><h4>SMP Negeri 11 Prabumulih</h4></div></a>
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
                            <div><a href="<?php echo site_url('rkt/sma4')?>"><img src="<?php echo base_url(); ?>assets/image/rkt/sma4.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('rkt/sma4')?>"><div class="name"><h4>SMA Negeri 04 Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('rkt/furqon')?>"><img src="<?php echo base_url(); ?>assets/image/rkt/furqon.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('rkt/furqon')?>"><div class="name"><h4>MAS Al-Furqon Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('rkt/mis')?>"><img src="<?php echo base_url(); ?>assets/image/rkt/mis.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('rkt/mis')?>"><div class="name"><h4>MIS Al Hijriyah Prabumulih</h4></div></a>
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