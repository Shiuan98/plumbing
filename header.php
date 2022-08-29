<?php
require_once "common.php";

$extra="";
$a=frm("a");
$ori=$a;
//validation


$kl=array(
  "Kuala Lumpur",
  "Wangsa Maju",
  "Cheras",
  "Titiwangsa",
  "Mont Kiara",
  "Sri Hartamas",
  "Seputeh",
  "Lembah Pantai",
  "Setiawangsa",
  "Segambut",
  "Ampang",
  "Pudu",
  "Batu",
  "Brickfields",
  "Taman OUG",
  "Sri Petaling",
  "Jalan Klang Lama",
  "Taman Desa",
);

$selangor=array(
  "Klang",
  "Bandar Bukit Tinggi",
  "Kota Kemuning",
  "Subang Jaya",
  "Shah Alam",
  "Glenmarie",
  "Petaling Jaya",
  "PJ Seksyen 1-22|SS1-26",
  "Damansara",
  "Batu Caves",
  "Seri Kembangan",
  "Kajang",
  "Kepong",
  "Setia Alam",
  "Meru",
  "Bandar Utama",
  "Puchong",
  "Bandar Tasik Puteri",
  "Kelana Jaya",
  "Sunway Mas",
  "Aman Suria",
  "Ara Damansara",
  "Bandar Sunway",
  "Tropicana",
);
if ($a) {
	$a=str_replace("-"," ",$a);
	$a=ucwords($a);
	if (in_array($a,$kl)) {
		$extra=$a;
	}
	if (in_array($a,$selangor)) {
		$extra=$a;
	}
}
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-138301648-1"></script>
 <script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-138301648-1');
</script>

	<meta charset="utf-8">
	<title><?="$keyword"?>-<?="$site_title"?> <?=($extra ? $extra:"")?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Shiuan">
	<meta name="description" content="Do you need a Plumbing Service? Plumbing Service is always your first choice. We provide <?=$site_keyword?> which our work is efficiency and quality. Contact Plumbing Service if you need a plumbing service.">
	<meta name="keywords" content="<?=$site_keyword;?>">
	<meta name="google-site-verification" content="x9-OA9n1WRF8X1pajlC270NbBojQnH8riPpUeQUGlI8" />
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/plumbing-service.ico">
	<!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
</head>

<body>

	<!-- navbar -->
	<section id="logo" class="">

		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<!-- Responsive navbar -->
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</a>
					<a href="<?if($this_page!=$site_url) echo $site_url?>"><img src="img/plumbing-service-company-logo.png" alt="plumbing-services-logo"style="width:200px;height:60px;border:0"></a>
					<!-- navigation -->
					<nav class="pull-right nav-collapse collapse">
						<ul id="menu-main" class="nav">
							<li><a title="team" href="<?if($this_page!=$site_url) echo $site_url.($extra ? "location-".$ori:"") ?>#about">About</a>
							</li>
							<li><a title="services" href="<?if($this_page!=$site_url) echo $site_url.($extra ? "location-".$ori:"") ?>#services">Services</a></li>
							<li><a title="works" href="<?if($this_page!=$site_url) echo $site_url.($extra ? "location-".$ori:"") ?>#works">Works</a></li>
							<li><a href="location.php">Location</a></li>
							<li><a title="contact" href="<?if($this_page!=$site_url) echo $site_url.($extra ? "location-".$ori:"") ?>#contact">Contact</a></li>
							<!-- <li><a title="contact" href="#contact">Contact</a></li> -->

						</ul>
					</nav>
				</div>
			</div>
		</div>
	</section>

	<? if ($this_file=="index.php") { ?>
	<section class="spacer blue">
		<div class="container">
			<div class="row">
				<div class="spacing30">
				<div class="span12 aligncenter flyUp">
					<h1 class="companyname"><strong>Plumbing Service <?=($extra ? $extra:"")?></strong></h1>
					<p id="demo"></p>
				</div>
			</div>
		</div>
		</div>
	</section>
	<? } ?>
	<!-- Header area -->


			<meta name="description" content="Do you need a Plumbing Service? Plumbing Service is always your first choice. We provide <?=$site_keyword?> which our work is efficiency and quality. Contact Plumbing Service if you need a plumbing service."/>
			<link rel="canonical" href="<?=$link?>" />
			<meta property="og:locale" content="en_US" />
			<meta property="og:type" content="website" />
			<meta property="og:title" content="<?="$keyword"?>-Plumbing Service" />
			<meta property="og:description" content="Do you need a Plumbing Service? Plumbing Service is always your first choice. We provide <?=$site_keyword?> which our work is efficiency and quality. Contact Plumbing Service if you need a plumbing service." />
			<meta property="og:url" content="<?=$link?>" />
			<meta property="og:site_name" content="Plumbing Service" />
			<meta property="og:image" content="https://plumbing.services.com.my/images" />
			<meta property="og:image:width" content="400" />
			<meta property="og:image:height" content="260" />
			<meta name="twitter:card" content="Aboutmarry" />
			<meta name="twitter:description" content="Do you need a Plumbing Service? Plumbing Service is always your first choice. We provide <?=$site_keyword?> which our work is efficiency and quality. Contact Plumbing Service if you need a plumbing service." />
			<meta name="twitter:title" content="<?="$keyword"?>-Plumber Service" />
			<meta name="twitter:image" content="https://plumbing.services.com.my/images" />

