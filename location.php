<?php
$keyword="Our Location";
require "header.php"; ?>

  <!-- spacer section -->
  <section class="spacer green">
    <div class="container">
      <div class="row">
        <div class="span12 aligncenter flyUp">
          <h1 class="pagetitle"><strong>Our Location</strong></h1>
        </div>
      </div>
    </div>
  </section>

<section id="location" class="location-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
        <h2><strong>Location We Cover</strong></h2>
        <p id="service">We provide plumbing service for residential units, commercial units etc. Below is the locations we cover.
          <br/><br/>Click <a href='#contact' style="color:#212529">HERE</a> to make an appointment.</p>

      </div>

    </div>
  </div>
</section>

<section class="kuala-lumpur">
      <div class="container">
        <div class="KL">
          <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                <h3><strong>Kuala Lumpur</strong></h3>
        <div class="KL">
          <div class="kl-area1">

<?
$kl=array(
  // key            //value
  "Kuala Lumpur" => "location-kuala-lumpur",
  "Wangsa Maju" => "index.php?a=wangsa-maju",
  "Cheras" => "index.php?a=cheras",
  "Titiwangsa" => "index.php?a=titiwangsa",
  "Mont Kiara" => "index.php?a=mont-kiara",
  "Sri Hartamas" => "index.php?a=sri-hartamas",
  "Seputeh" => "index.php?a=seputeh",
  "Lembah Pantai" => "index.php?a=lembah-pantai",
  "Setiawangsa" => "index.php?a=setiawangsa",
  "Segambut" => "index.php?a=segambut",
  "Ampang" => "index.php?a=ampang",
  "Pudu" => "index.php?a=pudu",
  "Batu" => "index.php?a=batu",
  "Brickfields" => "index.php?a=brickfields",
  "Taman OUG" => "index.php?a=taman-oug",
  "Sri Petaling" => "index.php?a=sri-petaling",
  "Jalan Klang Lama" => "index.php?a=jalan-klang-lama",
  "Taman Desa" => "index.php?a=taman-desa",
);
?>
               <table>
<tr>
   <?php
   $i = 0;
   foreach ($kl as $key => $value) {
      if ($i % 3 === 0) {
            echo '</tr><tr>';

        }
      echo "<td><a href='".$kl[$key]."'>$key</a></td>";
      $i++;
   }
   ?>
</tr>
</table>
            </div>

  </div>
</div>
    </div>
  </div>
</section>

<section class="selangor">
      <div class="container">
        <div class="slg">
          <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
        <h4 class="selangor"><strong>Selangor</strong></h4>
        <div class="slg">
          <div class="selangor1">
            <?
            $selangor=array(
  "Klang" => "index.php?a=klang",
  "Bandar Bukit Tinggi" => "index.php?a=bandar-bukit-tinggi",
  "Kota Kemuning" => "index.php?a=kota-kemuning",
  "Subang Jaya" => "index.php?a=subang-jaya",
  "Shah Alam" => "index.php?a=shah-alam",
  "Glenmarie" => "index.php?a=glenmarie",
  "Petaling Jaya" => "index.php?a=petaling-jaya",
  "PJ Seksyen 1-22|SS1-26" => "index.php?a=pj-seksyen-1-22|ss1-26",
  "Damansara" => "index.php?a=damansara",
  "Batu Caves" => "index.php?a=batu-caves",
  "Seri Kembangan" => "index.php?a=seri-kembangan",
  "Kajang" => "index.php?a=kajang",
  "Kepong" => "index.php?a=kepong",
  "Setia Alam" => "index.php?a=setia-alam",
  "Meru" => "index.php?a=meru",
  "Bandar Utama" => "index.php?a=bandar-utama",
  "Puchong" => "index.php?a=puchong",
  "Bandar Tasik Puteri" => "index.php?a=bandar-tasik-puteri",
  "Kelana Jaya" => "index.php?a=kelana-jaya",
  "Sunway Mas" => "index.php?a=sunway-mas",
  "Aman Suria" => "index.php?a=aman-suria",
  "Ara Damansara" => "index.php?a=ara-damansara",
  "Bandar Sunway" => "index.php?a=bandar-sunway",
  "Tropicana" => "index.php?a=tropicana",
);
?>

              <table>
<tr>
   <?php
   $i = 0;
   foreach ($selangor as $key => $value) {
      if ($i % 3 === 0) {
            echo '</tr><tr>';

        }
      echo "<td><a href='".$selangor[$key]."'>$key</a></td>";
      $i++;
   }
   ?>
</tr>
</table>

  </div>
</div>
    </div>
  </div>
</div>
</section>
<hr>
<div class="row">
              <div class="col-lg-8 col-md-8 mx-auto">
                <p class="info">Other Places in KL and Selangor-Klang Valley are also covered that may not be stated in above, contact us for more info! <a href='#contact' style="color:#212529">Contact Us</a></p>
              </div>
            </div>



<? include 'contactus.php'?>

  <?php require "footer.php"; ?>