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
                        <a class="active" href="<?php echo site_url('menu/eduutara')?>"><span>Pendidikan</span></a>   
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
                        <a href="<?php echo site_url('menu/kutara')?>"><span>Kuliner</span></a>   
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
                            <div><a href="<?php echo site_url('utara/sdmuhammadiyah')?>"><img src="<?php echo base_url(); ?>assets/image/utara/sdmuhammadiyah.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('utara/sdmuhammadiyah')?>"><div class="name"><h4>SD Muhammadiyah Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('utara/sd02')?>"><img src="<?php echo base_url(); ?>assets/image/utara/sd02.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('utara/sd02')?>"><div class="name"><h4>SD Negeri 02 Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('utara/sd07')?>"><img src="<?php echo base_url(); ?>assets/image/utara/sd07.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('utara/sd07')?>"><div class="name"><h4>SD Negeri 07 Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('utara/sd09')?>"><img src="<?php echo base_url(); ?>assets/image/utara/sd09.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('utara/sd09')?>"><div class="name"><h4>SD Negeri 09 Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('utara/sd14')?>"><img src="<?php echo base_url(); ?>assets/image/utara/sd14.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('utara/sd14')?>"><div class="name"><h4>SD Negeri 14 Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('utara/s18')?>"><img src="<?php echo base_url(); ?>assets/image/utara/sd14.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('utara/sd18')?>"><div class="name"><h4>SD Negeri 18 Prabumulih</h4></div></a>
                        </div>
                    </div>
                </div>
                <p class="wrap"><a class="more-info shadow-sm" href="<?php echo site_url('menu/eduutara2') ?>">See More →</a></p>
            </div>

            <hr>

            <h3 class="wrap text-center sub-title shadow-sm">SMP</h3>
            <br>
            <div class="sec-Section_Inner">
                <div class="row row-cols-1 row-cols-md-3 text-center justify-content-center">
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('utara/smpmuhammadiyah1')?>"><img src="<?php echo base_url(); ?>assets/image/utara/smpmuhammadiyah1.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('utara/smpmuhammadiyah1')?>"><div class="name"><h4>SMP Muhammadiyah 01 Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('utara/smp1')?>"><img src="<?php echo base_url(); ?>assets/image/utara/smp1.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('utara/smp1')?>"><div class="name"><h4>SMP Negeri 01 Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('utara/smpyb')?>"><img src="<?php echo base_url(); ?>assets/image/utara/smpyb.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('utara/smpyb')?>"><div class="name"><h4>SMP Yayasan Bakti Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('utara/smpyd')?>"><img src="<?php echo base_url(); ?>assets/image/utara/smpyd.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('utara/smpyd')?>"><div class="name"><h4>SMP Yayasan Dartwah Prabumulih</h4></div></a>
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
                            <div><a href="<?php echo site_url('utara/smabudi')?>"><img src="<?php echo base_url(); ?>assets/image/utara/smabudi.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('utara/smabudi')?>"><div class="name"><h4>SMA Budi Utomo Prabumulih</h4></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('utara/smapgri')?>"><img src="<?php echo base_url(); ?>assets/image/utara/smapgri.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('utara/smapgri')?>"><div class="name"><h4>SMA PGRI Prabumulih</h4></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('utara/smayb')?>"><img src="<?php echo base_url(); ?>assets/image/utara/smayb.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('utara/smayb')?>"><div class="name fspace"><h4 class="vert-al">SMAS Yayasan Bakti</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('utara/smkyb')?>"><img src="<?php echo base_url(); ?>assets/image/utara/smayb.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('utara/smkyb')?>"><div class="name"><h4>SMKS Yayasan Bakti Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('utara/smkpgri')?>"><img src="<?php echo base_url(); ?>assets/image/utara/smkpgri.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('utara/smkpgri')?>"><div class="name"><h4>SMKS PGRI 2 Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('utara/smkpratiwi')?>"><img src="<?php echo base_url(); ?>assets/image/utara/smkpratiwi.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('utara/smkpratiwi')?>"><div class="name"><h4>SMKS Pratiwi Prabumulih</h4></div></a>
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