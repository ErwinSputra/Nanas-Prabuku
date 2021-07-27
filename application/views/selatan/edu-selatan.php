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
                    <p class="site-title">Prabumulih Selatan</p>
                </div>
            </div>
        </header> 
        <div class="menu-toggle" id="myMenu-toggle" onclick="myFunction()"><span></span></div>
        <nav class="nav-primary" id="genesis-nav-primary" aria-label="Main navigation">
            <div class="wrap" id="">
                <ul id="menu-primary-navigation" class="menu genesis-nav-menu menu-primary">
                    <li class="menu-item">
                        <a href="<?php echo site_url('wilayah/#PrabumulihSelatan')?>"><span>Home</span></a>   
                    </li>
                    <li class="menu-item">
                        <a class="active" href="<?php echo site_url('menu/eduselatan')?>"><span>Pendidikan</span></a>   
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo site_url('menu/hselatan')?>"><span>Kesehatan</span></a>   
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo site_url('menu/sselatan')?>"><span>Keamanan</span></a>   
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo site_url('menu/wselatan')?>"><span>Pariwisata</span></a>   
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo site_url('menu/umselatan')?>"><span>UMKM</span></a>   
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo site_url('menu/kselatan')?>"><span>Kuliner</span></a>   
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
                            <div><a href="<?php echo site_url('selatan/sd10')?>"><img src="<?php echo base_url(); ?>assets/image/selatan/sd10.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('selatan/sd10')?>"><div class="name"><h4>SD Negeri 10 Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('selatan/sd17')?>"><img src="<?php echo base_url(); ?>assets/image/selatan/sd17.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('selatan/sd17')?>"><div class="name"><h4>SD Negeri 17 Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('selatan/sd23')?>"><img src="<?php echo base_url(); ?>assets/image/selatan/sd23.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('selatan/sd23')?>"><div class="name"><h4>SD Negeri 23 Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('selatan/sd28')?>"><img src="<?php echo base_url(); ?>assets/image/selatan/sd28.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('selatan/sd28')?>"><div class="name"><h4>SD Negeri 28 Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('selatan/sd34')?>"><img src="<?php echo base_url(); ?>assets/image/selatan/sd34.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('selatan/sd34')?>"><div class="name"><h4>SD Negeri 34 Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('selatan/sd37')?>"><img src="<?php echo base_url(); ?>assets/image/selatan/sd37.jfif" alt=""></a></div>
                            <a href="<?php echo site_url('selatan/sd37')?>"><div class="name"><h4>SD Negeri 37 Prabumulih</h4></div></a>
                        </div>
                    </div>
                </div>
                <p class="wrap"><a class="more-info shadow-sm" href="<?php echo site_url('menu/eduselatan2')?>">See More →</a></p>
            </div>

            <hr>

            <h3 class="wrap text-center sub-title shadow-sm">SMP</h3>
            <br>
            <div class="sec-Section_Inner">
                <div class="row row-cols-1 row-cols-md-3 text-center justify-content-center">
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('selatan/smp3')?>"><img src="<?php echo base_url(); ?>assets/image/selatan/smp3.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('selatan/smp3')?>"><div class="name"><h4>SMP Negeri 03 Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('selatan/smptunasbakti')?>"><img src="<?php echo base_url(); ?>assets/image/selatan/smptunasbakti.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('selatan/smptunasbakti')?>"><div class="name"><h4>SMP Tunas Bakti Prabumulih</h4></div></a>
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
                            <div><a href="<?php echo site_url('selatan/sma2')?>"><img src="<?php echo base_url(); ?>assets/image/selatan/sma2.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('selatan/sma2')?>"><div class="name"><h4>SMA Negeri 02 Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('selatan/smatunasbakti')?>"><img src="<?php echo base_url(); ?>assets/image/selatan/smptunasbakti.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('selatan/smatunasbakti')?>"><div class="name"><h4>SMAS Tunas Bakti Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('selatan/smk2')?>"><img src="<?php echo base_url(); ?>assets/image/selatan/smk2.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('selatan/smk2')?>"><div class="name"><h4>SMK Negeri 02 Prabumulih</h4></div></a>
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