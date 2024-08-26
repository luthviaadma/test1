<!DOCTYPE html>
<html lang="id">
    <!--<![endif]-->
    <head>
        <title>Kontak kami</title>

        <!-- Meta tags -->
        <meta charset="utf-8">
        <meta name="description" content="Demo Website Company Profil Tour and Travel" />
        <meta name="author" content="M Fikri Setiadi" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

        <!-- Stylesheets -->
        <link rel="stylesheet" href="<?php echo base_url().'theme/css/base.css'?>" />
        <link rel="stylesheet" href="<?php echo base_url().'theme/css/skeleton.css'?>" />
        <link rel="stylesheet" href="<?php echo base_url().'theme/css/flexslider.css'?>" />
        <link rel="stylesheet" href="<?php echo base_url().'theme/css/jquery.fancybox-1.3.4.css'?>" />
        <link rel="stylesheet" href="<?php echo base_url().'theme/css/validationEngine.jquery.css'?>" />
        <link rel="stylesheet" href="<?php echo base_url().'theme/css/smoothness/jquery-ui-1.8.22.custom.css'?>" />
        <link rel="stylesheet" href="<?php echo base_url().'theme/css/ui.spinner.css'?>" />
        <link rel="stylesheet" href="<?php echo base_url().'theme/css/lamoon.css'?>" />
        <link href='http://fonts.googleapis.com/css?family=Lato|Lato:300|Vollkorn:400italic' rel='stylesheet' type='text/css'>
        <!-- Favicons -->
        <link rel="shortcut icon" href="<?php echo base_url().'theme/images/placeholders/logo.png'?>" />
        <?php 
            function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }
                
        ?>
    </head>
    <body>

        <!-- Background Image -->
        <img src="<?php echo base_url().'theme/images/bg1.jpg'?>" class="bg" alt="" />

        <!-- Root Container -->
        <div id="root-container" class="container">
            <div id="wrapper" class="sixteen columns">

                <!-- Banner -->
                <div id="sub-banner">
                    <div id="logo">
                    </div>
                    <img src="<?php echo base_url().'theme/images/placeholders/header.jpg'?>" alt="" />
                </div>

                <!-- Main Menu -->
                <div id="menu" class="home">
                    <ul id="root-menu" class="sf-menu">
                        <?php
                            $this->load->view('front/menu');
                        ?>
                    </ul>
                </div>

                <!-- Content -->
                <div id="content" class="contact">
                    <div id="intro">
                    </div>
                    
                    <div class="container section">
                        <div class="one-third column">
                            <h3 class="nobg">Alamat Kantor</h3>
                            <p>
                            Jl Cilandak No 31 C Sarijadi, Sukasari, Bandung
                            </p>
                            <ul class="square">
                                <li>
                                    Telp : 081320065626
                                </li>
                                <li>
                                    Email : ngetour@gmail.com
                                </li>
                            </ul>
                        </div>
                        <div class="two-third column last">
                            <h3 class="nobg">Tinggalkan Pesan</h3>

                            <form style="margin-left:100px;" action="<?php echo base_url().'kontak/kirim_pesan'?>" method="post">
                                <p>
                                    <label for="name" class="required label">Nama:</label>
                                    <input type="text" name="xnama" style="width:300px;" placeholder="Nama" required/>
                                </p>
                                <p>
                                    <label for="email" class="required label">Email:</label>
                                    <input placeholder="Email" type="email" name="xemail" style="width:300px;" required/>
                                </p>
                                <p>
                                    <label for="subject" class="required label">No Hp:</label>
                                    <input type="text" name="xkontak" style="width:300px;" placeholder="No Hp" required/>
                                </p>
                                <p>
                                    <label id="message-label" for="message" class="required label">Pesan:</label>
                                    <textarea name="xpesan" cols="28" rows="5" style="width:300px;" placeholder="Pesan" required></textarea>
                                </p>
                                <p>
                                    <label></label>
                                    <input class="medium blue button" type="submit" name="Submit" value="Submit" />
                                </p>
                            </form>

                            <?php echo $this->session->flashdata('msg');?>

                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <div id="footer">
                    <div class="container section end">
                        <div id="footer-about" class="one-third column">
                            <p><img src="<?php echo base_url().'theme/images/placeholders/logo.png'?>" alt="" />
                            </p>
                            <p>
                                <br><a href="#">Alamat Kantor:</a></br>
                                <span>Jl Cilandak No 31 C Sarijadi, Sukasari, Bandung</span>
                                <span>Telp: 081320065626</span>
                                <span>Email: ngetour@gmail.com</span>
                            </p>
                        </div>
                        <div id="footer-offers" class="one-third column">
                            <h4><span class="footer left">Paket Tour</span></h4>
                            <ul>
                            <?php
                            foreach ($paket->result_array() as $h) {
                                $idpaketf=$h['idpaket'];
                                $namapaketf=$h['nama_paket'];
                                $gambarf=$h['gambar'];
                            ?>
                                <li>
                                    <a href="<?php echo base_url().'paket_tour/detail_paket/'.$idpaketf;?>"><img width="50" height="50" src="<?php echo base_url().'assets/gambars/'.$gambarf;?>" alt="" /><?php echo $namapaketf;?></a>
                                </li>
                            <?php } ?> 
                            </ul>
                        </div>
                        <div id="footer-gallery" class="one-third column last">
                            <h4><span class="footer left">Photo Gallery</span></h4>
                            <ul>
                                <?php
                                    foreach ($photo->result_array() as $p):
                                    $jdl_galeri=$p['jdl_galeri'];
                                    $gbr_galeri=$p['gbr_galeri'];
                                ?>
                                <li>
                                    <a href="<?php echo base_url().'assets/gambars/'.$gbr_galeri;?>" class="image-box" rel="beach"><img src="<?php echo base_url().'assets/gambars/'.$gbr_galeri;?>"  alt="" /></a>
                                </li>
                                <?php endforeach ?>
                            </ul>
                            <p>
                                <a href="<?php echo base_url().'detail_photo/galeri';?>">Lihat Semua</a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- JavaScript Files -->
        <script type="text/javascript" src="<?php echo base_url().'theme/scripts/jquery-1.7.2.min.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'theme/scripts/jquery.easing.1.3.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'theme/scripts/jquery.flexslider-min.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'theme/scripts/jquery.hoverIntent.minified.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'theme/scripts/superfish.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'theme/scripts/jquery.cycle.lite.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'theme/scripts/jquery.fancybox-1.3.4.pack.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'theme/scripts/jquery.validationEngine.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'theme/scripts/jquery.validationEngine-en.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'theme/scripts/jquery-ui-1.8.22.custom.min.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'theme/scripts/ui.spinner.min.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'theme/scripts/lamoon.js'?>"></script>  

    </body>
</html>
