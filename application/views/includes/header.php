<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <title>Escape City | <?php echo $pageTitle; ?></title>
    

    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- CSS-->

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">

    <link href="<?php echo base_url(); ?>html/css/style.css" rel="stylesheet">

    <link href="http://fonts.googleapis.com/css?family=Inconsolata|Raleway" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
     
    <script src="<?php echo base_url(); ?>html/js/script.js"></script>
    <?php foreach($stylesheet as $fileName){ ?>
    <link href="<?php echo base_url(); ?>html/css/<?php echo $fileName; ?>" rel="stylesheet">
    <?php } ?>
    <script src="https://use.fontawesome.com/4c9f41dc36.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(); ?>html/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url(); ?>html/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>html/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>html/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>html/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>html/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(); ?>html/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>html/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>html/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url(); ?>html/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>html/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url(); ?>html/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>html/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo base_url(); ?>html/images/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo base_url(); ?>html/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">




</head>

<body class="grey lighten-2" >

   <nav id="myHeader">
      <div class="nav-wrapper">
        <a href="<?php base_url(); ?>home" class="brand-logo"><img src="<?php echo base_url(); ?>html/images/logo_black.png" height="100px" id="logo"></a>

        <!-- Mobile Navigation area -->
         <ul id="slide-out" class="side-nav">
          <li><a class="subheader"><label>Menu</label></a></li>
          <li><a href="<?php echo base_url(); ?>home">Home</a></li>
          <li><a href="#!">About</a></li>
          <li><a href="<?php echo base_url(); ?>contact">Contact</a></li>
          
        </ul>
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
              
        <!-- Mpbile Navigation Area over here -->

        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a class="tab-title" href="<?php base_url(); ?>home">Home</a></li>
           <li><a class="tab-title" href="<?php base_url(); ?>details">Tours</a></li>
          <!-- <li><a class="tab-title" href="sass.html">Booking Trips</a></li>
          <li><a class="tab-title" href="sass.html">trekking Trips</a></li>
          <li><a  class="tab-title" href="sass.html">Booking</a></li> -->
          <li><a class="tab-title" href="badges.html">Blog</a></li>
          <li><a class="tab-title" href="<?php echo base_url(); ?>about">About Us</a></li>
          <li><a class="tab-title" href="<?php echo base_url(); ?>contact">contact Us</a></li>
        </ul>
      </div>
    </nav>
        