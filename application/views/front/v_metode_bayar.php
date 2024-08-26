<html lang="id">
    <!--<![endif]-->
    <head>
        <title>Metode Pembayaran</title>

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
                <div id="content" class="reservation">
                    <div class="container section">
                        <center><h3><span>Pilih Metode Pembayaran Yang Anda Gunakan</span></h3></center>
                        <div class="container section">
                            <table>
                            <thead>
                              <tr>
                                <th>Metode Pembayaran</th>
                                <th>Bank</th>
                                <th>No. Rekening</th>
                                <th>Atas Nama</th>
                                <th>Pilihan</th>
                              </tr> 
                            </thead>
                            <tbody>
                            <?php
                                foreach ($data->result_array() as $i) :
                                    $idmetode=$i['id_metode'];
                                    $metode=$i['metode'];
                                    $bank=$i['bank'];
                                    $norek=$i['norek'];
                                    $atasnama=$i['atasnama'];
                            ?>
                                <tr>
                                    <td style="vertical-align:middle;text-align:center;"><?php echo $metode;?></td>
                                    <td style="vertical-align:middle;text-align:center;"><?php echo $bank;?></td>
                                    <td style="vertical-align:middle;text-align:center;"><?php echo $norek;?></td>
                                    <td style="vertical-align:middle;text-align:center;"><?php echo $atasnama;?></td>
                                    <td style="vertical-align:middle;text-align:center;"><a href="<?php echo base_url().'paket_tour/set_pembayaran/'.$idmetode;?>" class="small blue button">Pilih</a></td>
                                </tr>
                            <?php endforeach ?>
                            </tbody>
                            </table>
                            
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
