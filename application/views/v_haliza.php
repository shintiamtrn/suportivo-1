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
/* Style tab links */
.tablink {
    background-color: white;
    color: black;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    font-size: 17px;
    width: 25%;
}

.tablink:hover {
    background-color: white;
}

/* Style the tab content (and add height:100% for full page content) */

.tabcontent {
    color: black;
    display: none;
    padding: 100px 20px;
    height: 100%;
}
a:hover{
  text-decoration: none;
}
a {
    color: black;
    text-decoration: none;
    font-size: 15px;

}

.tab-list {
    width: 1000px;
    height: auto;
    display: flex;
    flex-wrap: wrap;
}

.tab-link {
    width: 200px;
    height: auto;
    background-color: white;
}

.tab-link:hover {
    color: black;
    background-color: #ffffff;
}

.tab-content-list {
    width: 1000px;
    height: 200px;
    background-color: #ffffff;
    color: black;

}
.tab-content {
    width: 1000px;
    height: 200px;
    font-size: 15px;
}
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto auto auto;
  grid-gap: 10px;
  background-color: white;
  padding: 10px;
}
.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
}
.item8 {
  grid-area: 1 / 2 / 5 / 6;
}

.mySlides {display:none}
.demo {cursor:pointer}


  </style>
 </head>
<body>
  
  <!--<p>navbar</p> -->
    <nav class="navbar navbar-expand-lg navbar-white bg-white" style="font-size: 19px;">
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
                      <li><a href="<?php echo base_url();?>produk/monita3">Monita Marine (Vessel Monitoring System)</a></li>
                      <li><a href="<?php echo base_url();?>produk/monita4">Monita Tanker Monitoring System </a></li>
                      <li><a href="<?php echo base_url();?>produk/monita5">Monita Pembangkit (Power Generator) </a></li>
                      <li><a href="<?php echo base_url();?>produk/monita6">Monita Penyulang (Feeder)</a></li>
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

<!--<p>Ini script tabs</p> -->
<div class="w3-row">
<button class="tablink" onclick="openPage('Tinjauan', this,)" id="defaultOpen">Tinjauan</button>
<button class="tablink" onclick="openPage('Spesifikasi', this,)">Spesifikasi</button>
<button class="tablink" onclick="openPage('Support', this,)">Support</button>


<!--tab TINJAUAN -->
    <div id="Tinjauan" class="tabcontent">
     <div class="media">

  <div class="w3-content" style="max-width:800px">
    <?php
    $d = $this->db->query("Select*from produk_media Where id_media=5")->row()->media;
    echo "<img width=400 height=400 class=mySlides src=\"" . base_url() . "images/$d\" />";
    ?>
    <?php
    $d = $this->db->query("Select*from produk_media Where id_media=16")->row()->media;
    echo "<img width=400 height=400 class=mySlides src=\"" . base_url() . "images/$d\" />";
    ?>
    <?php
    $d = $this->db->query("Select*from produk_media Where id_media=17")->row()->media;
    echo "<img width=400 height=400 class=mySlides src=\"" . base_url() . "images/$d\" />";
    ?>
    <?php
    $d = $this->db->query("Select*from produk_media Where id_media=16")->row()->media;
    echo "<img width=400 height=400 class=mySlides src=\"" . base_url() . "images/$d\" />";
    ?>
    <?php
    $d = $this->db->query("Select*from produk_media Where id_media=5")->row()->media;
    echo "<img width=400 height=400 class=mySlides src=\"" . base_url() . "images/$d\" />";
    ?>

  


<div class="w3-center">
  <div class="w3-section">
    <button class="w3-button w3-light-grey" onclick="plusDivs(-1)">❮ Prev</button>
    <button class="w3-button w3-light-grey" onclick="plusDivs(1)">Next ❯</button>
  </div>
  <button class="w3-button demo" onclick="currentDiv(1)">1</button> 
  <button class="w3-button demo" onclick="currentDiv(2)">2</button> 
  <button class="w3-button demo" onclick="currentDiv(3)">3</button> 
   <button class="w3-button demo" onclick="currentDiv(4)">4</button> 
    <button class="w3-button demo" onclick="currentDiv(5)">5</button> 
</div>
</div>
    
<div class="col brief">
<div class="box title">
                          <h1>Haliza 10
                              <small id="product-model-name">
                                  Reciprocating Machinery Analyzer
                              </small>
                          </h1>
                      </div>
<ul>
  <li>Mendukung 802.11ac standar-generasi Wi-Fi berikutnya</li>
  <li>Koneksi simultan antara 2.4GHz 600Mbps dan 5GHz 1300Mbps dengan total bandwidth yang tersedia sebesar 1.9Gbps</li>
  <li>3 antena dual band yang dapat dilepas menyediakan cakupan nirkabel yang luas ;dan dapat dihandalkan</li>
  <li>Teknologi beamforming memberikan koneksi nirkabel yang sangat efisien</li>
  <li>Prosesor dual-core 1GHz memastikan tidak ada gangguan saat bersamaan dalam memproses beberapa tugas nirkabel atau kabel</li>
  <li>Port USB 3.0 + USB 2.0 - berbagi printer lokal, file   Media dengan perangkat jaringan atau jarak jauh melalui internet dengan mudah</li>
  <li>Teknologi beamforming memberikan koneksi nirkabel yang sangat efisien</li>
  <li>Prosesor dual-core 1GHz memastikan tidak ada gangguan saat bersamaan dalam memproses beberapa tugas nirkabel atau kabel</li>
  <li>Teknologi beamforming memberikan koneksi nirkabel yang sangat efisien</li>
  <li>Prosesor dual-core 1GHz memastikan tidak ada gangguan saat bersamaan dalam memproses beberapa tugas nirkabel atau kabel</li>
  <li>Teknologi beamforming memberikan koneksi nirkabel yang sangat efisien</li>
  <li>Prosesor dual-core 1GHz memastikan tidak ada gangguan saat bersamaan dalam memproses beberapa tugas nirkabel atau kabel</li>
</ul>


<!--Dua Video -->
<div class="container">
<div class="row">
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
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>

<!--tab SPESIFIKASI -->    
<div id="Spesifikasi" class="tabcontent">
   <table class="table table-bordered">
      <tr>
        <td>Nama</td>
        <td><?php echo $data->row()->nama_produk; ?></td>
     </tr>
     <tr>
        <td>Versi</td>
        <td><?php echo $data->row()->versi; ?></td>
        </tr>
     <tr>
        <td>Dimensi</td>
       <td><?php echo $data->row()->dimensi; ?></td>
     </tr>
      <tr>
        <td>Warna</td>
        <td><?php echo $data->row()->warna; ?></td>
     </tr>
     <tr>
        <td>Weight</td>
        <td><?php echo $data->row()->weight; ?>&nbsp;Kg</td>
     </tr>
     <tr>
        <td>Processor</td>
        <td><?php echo $data->row()->processor; ?></td>
     </tr>
     <tr>
        <td rowspan="2">Memory</td>
        <td><?php echo $data->row()->memory; ?>&nbsp;MB</td>
     </tr>
     <tr>
        <td><?php echo $data->row()->memory2; ?>&nbsp;GB</td>
     </tr>
     <tr>
        <td>OS</td>
        <td><?php echo $data->row()->os; ?></td>
     </tr>
     <tr>
        <td>Battery</td>
        <td><?php echo $data->row()->battery; ?></td>
     </tr>
     <tr>
        <td>Display</td>
        <td><?php echo $data->row()->display; ?></td>
     </tr>
     <tr>
        <td>Resolusi</td>
        <td><?php echo $data->row()->resolusi; ?></td>
     </tr>
  </table>
</div>

<!--tab SUPPORT -->
<div id="Support" class="tabcontent">
<div class="container">
    <a href="#" onClick="openMedia('Software/Firmware')">
    <button type="button" class="btn btn-outline-primary">Firmware</button>
    <a href="#" onClick="openMedia('Dokumen')">
    <button type="button" class="btn btn-outline-primary">Dokumen</button>
<div class="tab-content-list">
 <div id="Software/Firmware" class="tab-content">
    <table class="table_responsive table table-bordered">
      <tr>
        <td>Waktu Update :</td>
        <td><?php echo $data->row()->waktu_update; ?></td>
        <td>Nama Software :</td>
        <td> <?php echo $data->row()->nama_dokumen; ?><a href="<?php echo base_url()?>images/Brosur-Haliza-10.pdf" download>Manual_pemakaian_Haliza_2.pdf</td></a>
        <td>Versi :</td>
        <td><?php echo $data->row()->versi; ?></td>
        <td>Keterangan :</td>
        <td><?php echo $data->row()->keterangan; ?></td>
      </tr>
  </table>
  </div>
    <div id="Dokumen" class="tab-content">
    <table class="table-responsive table table-bordered">
      <tr>
        <td>Waktu Update : 2017-02-23</td>
        <td>Dokumen : <a href="<?php echo base_url()?>images/Brosur-Haliza-10.pdf" download>Firmware_Monita_Sabang_12.32-spesial.bin</td></a>
        <td>Versi : 12.32</td>
        <td>Keterangan : sudah test test test test test test test memory</td>
      </tr>
     </table>
     </div>
</div>
</div>
</div>
</div>
</div>

<!---FOOTER -->
<footer class="w3-center w3-grey w3-padding-16" >
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
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}
</script>
  <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>

<script>
openMedia("tab1")
function openMedia(mediaName) {
    var i;
    var x = document.getElementsByClassName("tab-content");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    document.getElementById(mediaName).style.display = "block";
}
</script>

<script>
function openPage(pageName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
   </script>
  </body>
</html>