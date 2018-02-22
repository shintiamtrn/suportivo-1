<!DOCTYPE html>
<html>
<head>
    <title>Daun Biru</title>
     <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/w3.css" type="text/css">
     <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/bootstrap.min.css" type="text/css">
     <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/component.css" type="text/css">
     <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/font-awesome.min.css" type="text/css">
     <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/css.css" type="text/css">
     <script src="<?php echo base_url()?>assets/js/jquery.min.js" type="text/javascript"></script>
     <script src="<?php echo base_url()?>assets/js/popper.min.js" type="text/javascript"></script>
     <script src="<?php echo base_url()?>assets/js/bootstrap.min.js" type="text/javascript"></script>
     
     



    <style>
  /* style Carousel */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
/* style Font effect w3school */
  .w3-lobster {
    font-family: "Lobster", Sans-serif;
}
a {
    color: black;
    
}


  </style>
 </head>
<body>
 <!--<p>navbar</p> -->
     <nav class="navbar navbar-expand-lg navbar-white bg-white">
     <div class="container">
        <img src="<?php echo base_url(); ?>images/logodaunbiru.jpg" alt="" height="65" width="200">
        <form class="form-inline my-2 my-lg-0">
        <nav id="cbp-hrmenu" class="cbp-hrmenu">

<!--<p>mega menu</p> -->
          <ul>
          <li>
              <a href="#">Produk</a>
              <div style="opacity: 0.9; z-index: 1000;" class="cbp-hrsub">
                <div class="cbp-hrsub-inner"> 
                  <div>
                     <a href="<?php echo base_url();?>produk/monita"><h4>Monita</h4></a>
                    <ul>
                      <li><a href="<?php echo base_url();?>produk/monita1">Monita AMR (Automatic Meter Reading) </a></li>
                      <li><a href="<?php echo base_url();?>produk/monita2">Monita Engine Protection</a></li>
                      <li><a href="<?php echo base_url();?>produk/monita2">Monita Marine (Vessel Monitoring System)</a></li>
                      <li><a href="<?php echo base_url();?>produk/monita2">Monita Tanker Monitoring System </a></li>
                      <li><a href="<?php echo base_url();?>produk/monita2">Monita Pembangkit (Power Generator) </a></li>
                      <li><a href="<?php echo base_url();?>produk/monita2">Monita Penyulang (Feeder)</a></li>
                    </ul>
                   </div>
                  <div>
                    <a href="<?php echo base_url();?>produk/haliza"><h4>Haliza</h4></a>
                    <ul>
                      <li><a href="<?php echo base_url();?>produk/haliza1">Haliza Reciprocating</a></li>
                    </ul>
                  </div>
            </li>
          </ul>
    </div>
    <script src="<?php echo base_url()?>assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/js/cbpHorizontalMenu.min.js" type="text/javascript"></script>
    <script>
      $(function() {
        cbpHorizontalMenu.init();
      });
    </script>

    <!--<p>search</p> -->
                <input class="mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn-outline-primary my-2 my-sm-0" type="submit">Cari</button>
            </form>
    </div>
</nav>
<body>

<!--CAROUSEL -->
<div style="z-index: -2;" id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url(); ?>images/about.jpg" width="1100" height="300">
  </div>
  <div class="carousel-item">
      <img src="<?php echo base_url(); ?>images/about.jpg" width="1100" height="300">
  </div>
  <div class="carousel-item">
      <img src="<?php echo base_url(); ?>images/about.jpg" width="1100" height="300">
  </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</li>

<!--Font Effect -->
<div class="w3-container w3-lobster font-effect-brick-sign">
  <center><p class="w3-xxxlarge">~Suportivo~</p></center>
</div>
   <br>
  

<!--Jumbotron -->
<header>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Selamat Datang</h1>
                    <p class="lead">Suportivo adalah sistem pendukung produk berbasis WEB untuk kebutuhan internal sebuah perusahaan. Sistem ini memuat berbagai informasi dan dokumen produk (deskripsi, spesifikasi, dokumen dan software-software pendukungnya</p>
                </div>
            </div>
        </div>
    </div>
</header>                        


<!-- card -->
  <article class="card-post">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card-post card-deck">
                        <div class="card">
    <a class="card-post-link" href="<?php echo base_url(); ?>images/U_R_-_TAEYEON_NIGHTCORE.mp4">
    <?php
    $d = $this->db->query("Select*from gambar Where id=20")->row()->nama_file;
    echo "<video controls=controls width=340 height=183 src=\"" . base_url() . "images/$d\" />
    <video>;"
    ?></a>
</div>
<div class="card">
    <a class="card-post-link" href="<?php echo base_url(); ?>images/U_R_-_TAEYEON_NIGHTCORE.mp4">
    <?php
    $d = $this->db->query("Select*from gambar Where id=20")->row()->nama_file;
    echo "<video controls=controls width=340 height=183 src=\"" . base_url() . "images/$d\" />
    <video>;"
    ?></a>
</div>
<div class="card">
    <a class="card-post-link" href="<?php echo base_url(); ?>images/U_R_-_TAEYEON_NIGHTCORE.mp4">
    <?php
    $d = $this->db->query("Select*from gambar Where id=20")->row()->nama_file;
    echo "<video controls=controls width=340 height=183 src=\"" . base_url() . "images/$d\" />
    <video>;"
    ?></a>
</div>
</div>
<div class="w-100"></div>
<div class="card-post card-deck">
<div class="card">
    <a class="card-post-link" href="<?php echo base_url(); ?>images/haliza-small-1.jpg">
    <?php
    $d = $this->db->query("Select*from produk_media Where id_media=5")->row()->media;
    echo "<img width=348 height=183 src=\"" . base_url() . "images/$d\" />";
    ?></a>
</div>
<div class="card">
    <a class="card-post-link" href="<?php echo base_url(); ?>images/images (3).jpg">
    <?php
    $d = $this->db->query("Select*from produk_media Where id_media=16")->row()->media;
    echo "<img width=348 height=183 src=\"" . base_url() . "images/$d\" />";
    ?></a>
</div>
<div class="card">
    <a class="card-post-link" href="<?php echo base_url(); ?>images/images (4).jpg">
    <?php
    $d = $this->db->query("Select*from produk_media Where id_media=17")->row()->media;
    echo "<img width=348 height=183 src=\"" . base_url() . "images/$d\" />";
    ?>
                                              </a>
                                         </div>
                                    </div>
                                   </div>
                          </div>
                     </div>
                </div>
           </article>
          <br>
     <br>
<br>
     
<!---FOOTER -->
<footer class="w3-center w3-grey w3-padding-16">
 <div class="w3-xlarge w3-section">
  <a href="https://www.facebook.com/daunbiruengineering/" data-toggle="tooltip" title="Ikuti saya di facebook"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
   <a href="#" data-toggle="tooltip" title="Ikuti saya di Instagram"><i class="fa fa-instagram w3-hover-opacity"></i></a>
    <a href="#" data-toggle="tooltip" title="Ikuti saya di Snapchat"><i class="fa fa-snapchat w3-hover-opacity"></i></a>
      <a href="#" data-toggle="tooltip" title="Ikuti saya di Twitter"><i class="fa fa-twitter w3-hover-opacity"></i></a>
       <a href="#" data-toggle="tooltip" title="Ikuti saya di linkedin"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
      </div>
     <p>Copyright @2018</p>
    </footer>

  <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
</body>
</html>