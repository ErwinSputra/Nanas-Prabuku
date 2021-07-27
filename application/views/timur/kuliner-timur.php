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
                        <a href="<?php echo site_url('menu/wtimur')?>"><span>Pariwisata</span></a>   
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo site_url('menu/umtimur')?>"><span>UMKM</span></a>   
                    </li>
                    <li class="menu-item">
                        <a class="active" href="<?php echo site_url('menu/ktimur')?>"><span>Kuliner</span></a>   
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
        <h3 class="wrap text-center sub-title shadow-sm">Rumah Makan</h3>
        <br>
            <div class="sec-Section_Inner">
                <div class="row row-cols-1 row-cols-md-3 text-center justify-content-center">
                <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/pondokbambu')?>"><img src="<?php echo base_url(); ?>assets/image/timur/pondokbambu.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/pondokbambu')?>"><div class="name"><h4>RM Pindang Pondok Bambu Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/pondokkelapo')?>"><img src="<?php echo base_url(); ?>assets/image/timur/pondokkelapo.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/pondokkelapo')?>"><div class="name fspace"><h4 class="vert-al">RM Pondok Kelapo</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/lombokijo')?>"><img src="<?php echo base_url(); ?>assets/image/timur/lombokijo.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/lombokijo')?>"><div class="name fspace"><h4 class="vert-al">RM Lombok Ijo</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/kcemara')?>"><img src="<?php echo base_url(); ?>assets/image/timur/kcemara.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/kcemara')?>"><div class="name"><h4>RM Kampoeng Cemara</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/rmdieng')?>"><img src="<?php echo base_url(); ?>assets/image/timur/rmdieng.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/rmdieng')?>"><div class="name fspace"><h4 class="vert-al">RM Dieng</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/pindangmusi')?>"><img src="<?php echo base_url(); ?>assets/image/timur/pindangmusi.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/pindangmusi')?>"><div class="name"><h4>RM Pindang Musi Rambang</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/singoedan')?>"><img src="<?php echo base_url(); ?>assets/image/timur/singoedan.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/singoedan')?>"><div class="name"><h4>Pecel Lele Singo Edan</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/bonex')?>"><img src="<?php echo base_url(); ?>assets/image/timur/bonex.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/bonex')?>"><div class="name fspace"><h4 class="vert-al">RM Bonex</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/pegagan2')?>"><img src="<?php echo base_url(); ?>assets/image/timur/pegagan2.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/pegagan2')?>"><div class="name"><h4>RM Pindang Pegagan 2</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/arjuna')?>"><img src="<?php echo base_url(); ?>assets/image/timur/arjuna.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/arjuna')?>"><div class="name fspace"><h4 class="vert-al">RM Arjuna</h4></div></a>
                        </div>
                    </div>
                </div>
            </div>

            <hr>
            <h3 class="wrap text-center sub-title shadow-sm">Cafe & Resto</h3>
            <br>
            <div class="sec-Section_Inner">
                <div class="row row-cols-1 row-cols-md-3 text-center justify-content-center">
                <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/legowo')?>"><img src="<?php echo base_url(); ?>assets/image/timur/legowo.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/legowo')?>"><div class="name fspace"><h4 class="vert-al">Resto Sate Legowo</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/coffee')?>"><img src="<?php echo base_url(); ?>assets/image/timur/coffee.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/coffee')?>"><div class="name fspace"><h4 class="vert-al">Coffee & Me</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/bangali')?>"><img src="<?php echo base_url(); ?>assets/image/timur/bangali.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/bangali')?>"><div class="name fspace"><h4 class="vert-al">Kafe Bang Ali</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/kayla')?>"><img src="<?php echo base_url(); ?>assets/image/timur/kayla.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/kayla')?>"><div class="name fspace"><h4 class="vert-al">Resto Kayla Steak</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/mahkota')?>"><img src="<?php echo base_url(); ?>assets/image/timur/mahkota.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/mahkota')?>"><div class="name fspace"><h4 class="vert-al">Mahkota Resto</h4></div></a>
                        </div>
                    </div>
                </div>
            </div>    

            <hr>
            <h3 class="wrap text-center sub-title shadow-sm">Cepat Saji</h3>
            <br>
            <div class="sec-Section_Inner">
                <div class="row row-cols-1 row-cols-md-3 text-center justify-content-center">
                <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/richeese')?>"><img src="<?php echo base_url(); ?>assets/image/timur/richeese.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/richeese')?>"><div class="name"><h4>Richeese Factory Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/kfc')?>"><img src="<?php echo base_url(); ?>assets/image/timur/kfc.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/kfc')?>"><div class="name fspace"><h4 class="vert-al">KFC Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/rocketc')?>"><img src="<?php echo base_url(); ?>assets/image/timur/rocketc.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/rocketc')?>"><div class="name"><h4>Rocket Chicken Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/p17')?>"><img src="<?php echo base_url(); ?>assets/image/timur/p17.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/p17')?>"><div class="name fspace"><h4 class="vert-al">P17_ZA Fam</h4></div></a>
                        </div>
                    </div>
                    
                </div>
            </div>    
            
            <hr>
            <h3 class="wrap text-center sub-title shadow-sm">Jajanan</h3>
            <br>
            <div class="sec-Section_Inner">
                <div class="row row-cols-1 row-cols-md-3 text-center justify-content-center">
                <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/pempek71')?>"><img src="<?php echo base_url(); ?>assets/image/timur/pempek71.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/pempek71')?>"><div class="name"><h4>Pempek 71 Prabumulih</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/semar')?>"><img src="<?php echo base_url(); ?>assets/image/timur/semar.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/semar')?>"><div class="name fspace"><h4 class="vert-al">Pempek Semar</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/awek')?>"><img src="<?php echo base_url(); ?>assets/image/timur/awek.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/awek')?>"><div class="name fspace"><h4 class="vert-al">Mie Awek</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/atadc')?>"><img src="<?php echo base_url(); ?>assets/image/timur/atadc.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/atadc')?>"><div class="name fspace"><h4 class="vert-al">Mie Pangsit ATADC</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/wayang')?>"><img src="<?php echo base_url(); ?>assets/image/timur/wayang.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/wayang')?>"><div class="name fspace"><h4 class="vert-al">Pempek Wa'yang</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/candy')?>"><img src="<?php echo base_url(); ?>assets/image/timur/candy.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/candy')?>"><div class="name fspace"><h4 class="vert-al">Pempek Candy</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/baksomalang')?>"><img src="<?php echo base_url(); ?>assets/image/timur/baksomalang.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/baksomalang')?>"><div class="name"><h4>Bakso Malang Cak Masrur</h4></div></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div><a href="<?php echo site_url('timur/abadijaya')?>"><img src="<?php echo base_url(); ?>assets/image/timur/abadijaya.jpg" alt=""></a></div>
                            <a href="<?php echo site_url('timur/abadijaya')?>"><div class="name fspace"><h4 class="vert-al">Warung Abadi Jaya</h4></div></a>
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