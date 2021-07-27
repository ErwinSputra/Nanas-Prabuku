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
                    <p class="site-title">Prabumulih Barat</p>
                </div>
            </div>
        </header> 
        <div class="menu-toggle" id="myMenu-toggle" onclick="myFunction()"><span></span></div>
        <nav class="nav-primary" id="genesis-nav-primary" aria-label="Main navigation">
            <div class="wrap" id="">
                <ul id="menu-primary-navigation" class="menu genesis-nav-menu menu-primary">
                    <li class="menu-item">
                        <a href="<?php echo site_url('wilayah/#PrabumulihBarat')?>"><span>Home</span></a>   
                    </li>
                    <li class="menu-item">
                        <a class="active" href="<?php echo site_url('menu/edubarat')?>"><span>Pendidikan</span></a>   
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo site_url('menu/hbarat')?>"><span>Kesehatan</span></a>   
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo site_url('menu/sbarat')?>"><span>Keamanan</span></a>   
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo site_url('menu/wbarat')?>"><span>Pariwisata</span></a>   
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo site_url('menu/umbarat')?>"><span>UMKM</span></a>   
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo site_url('menu/kbarat')?>"><span>Kuliner</span></a>   
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
                            <div><a href="<?php echo site_url('barat/sd1')?>"><img src="<?php echo base_url(); ?>assets/image/barat/sd1.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('barat/sd1')?>"><div class="name"><h4>SD Negeri 01 Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('barat/sd3')?>"><img src="<?php echo base_url(); ?>assets/image/barat/sd3.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('barat/sd3')?>"><div class="name"><h4>SD Negeri 03 Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('barat/sd4')?>"><img src="<?php echo base_url(); ?>assets/image/barat/sd4.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('barat/sd4')?>"><div class="name"><h4>SD Negeri 04 Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('barat/sd5')?>"><img src="<?php echo base_url(); ?>assets/image/barat/sd5.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('barat/sd5')?>"><div class="name"><h4>SD Negeri 05 Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('barat/sd8')?>"><img src="<?php echo base_url(); ?>assets/image/barat/sd8.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('barat/sd8')?>"><div class="name"><h4>SD Negeri 08 Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('barat/sd12')?>"><img src="<?php echo base_url(); ?>assets/image/barat/sd12.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('barat/sd12')?>"><div class="name"><h4>SD Negeri 12 Prabumulih</h4></div></a>
                        </div>
                    </div>
                </div>
                <p class="wrap"><a class="more-info shadow-sm" href="<?php echo site_url('menu/edubarat2')?>">See More →</a></p>
            </div>

            <hr>

            <h3 class="wrap text-center sub-title shadow-sm">SMP</h3>
            <br>
            <div class="sec-Section_Inner">
                <div class="row row-cols-1 row-cols-md-3 text-center justify-content-center">
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('barat/smp4')?>"><img src="<?php echo base_url(); ?>assets/image/barat/smp4.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('barat/smp4')?>"><div class="name"><h4>SMP Negeri 04 Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('barat/smp9')?>"><img src="<?php echo base_url(); ?>assets/image/barat/smp9.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('barat/smp9')?>"><div class="name"><h4>SMP Negeri 09 Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('barat/smpyps')?>"><img src="<?php echo base_url(); ?>assets/image/barat/smpyps.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('barat/smpyps')?>"><div class="name fspace"><h4 class="vert-al">SMP YPS Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('barat/smpts')?>"><img src="<?php echo base_url(); ?>assets/image/barat/smats.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('barat/smpts')?>"><div class="name"><h4>SMPS Taman Siswa Prabumulih</h4></div></a>
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
                            <div><a href="<?php echo site_url('barat/sma1')?>"><img src="<?php echo base_url(); ?>assets/image/barat/sma1.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('barat/sma1')?>"><div class="name"><h4>SMA Negeri 01 Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('barat/sma5')?>"><img src="<?php echo base_url(); ?>assets/image/barat/sma5.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('barat/sma5')?>"><div class="name"><h4>SMA Negeri 05 Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('barat/sma8')?>"><img src="<?php echo base_url(); ?>assets/image/barat/sma8.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('barat/sma8')?>"><div class="name"><h4>SMA Negeri 08 Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('barat/smats')?>"><img src="<?php echo base_url(); ?>assets/image/barat/smats.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('barat/smats')?>"><div class="name"><h4>SMAS Taman Siswa Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('barat/smkyps')?>"><img src="<?php echo base_url(); ?>assets/image/barat/smkyps.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('barat/smkyps')?>"><div class="name"><h4>SMKS YPS Prabumulih</h4></div></a>
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