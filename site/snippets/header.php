<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
  <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
  <link href='https://fonts.googleapis.com/css?family=Noto+Serif:400,700' rel='stylesheet' type='text/css'>

  <meta name="msapplication-square70x70logo" content="/smalltile.png" />
  <meta name="msapplication-square150x150logo" content="/mediumtile.png" />
  <meta name="msapplication-wide310x150logo" content="/widetile.png" />
  <meta name="msapplication-square310x310logo" content="/largetile.png" />


  <?php echo css('assets/stylesheets/main.css') ?>
	<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
  <link rel="import" href="../assets/paper-button/paper-button.html">

</head>
<body>
  <header id="header" class="header cf mainHeader" role="banner">
    <?php snippet('menu') ?>
  </header>
	<section id="about" class="about left"> 
		<div class="inner two-col left">
      <?php echo $site->description()->kirbytext() ?>		
      <button class="closePanel btn btn-1 btn-1a">Close</button>
		</div>
    
    <aside class="two-col right">
      <img class="bigLogo left" src="<?php echo url('assets/images/logo.svg') ?>" alt="<?php echo $site->title()->html() ?>" />
    </aside> 
	</section>