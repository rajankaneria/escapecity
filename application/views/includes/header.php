<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <title>aahvanadventures - <?php echo $pageTitle; ?></title>
    <!-- CSS-->

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">

    <link href="<?php echo base_url(); ?>html/css/style.css" rel="stylesheet">

    <link href="http://fonts.googleapis.com/css?family=Inconsolata|Raleway" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
     
    <script src="<?php echo base_url(); ?>html/js/script.js"></script>
    <?php foreach($stylesheet as $fileName){ ?>
    <link href="<?php echo base_url(); ?>html/css/<?php echo $fileName; ?>" rel="stylesheet">
    <?php } ?>
    <script src="https://use.fontawesome.com/4c9f41dc36.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body class="grey lighten-2" >

   <nav>
      <div class="nav-wrapper">
        <a href="<?php base_url(); ?>home" class="brand-logo"><img src="<?php echo base_url(); ?>/html/images/logo_black.png" height="100px" id="logo"></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a class="tab-title" href="<?php base_url(); ?>home">Home</a></li>
           <li><a class="tab-title" href="<?php base_url(); ?>tour/id/1">Details</a></li>
           <li><a class="tab-title" href="sass.html">Booking Trips</a></li>
          <li><a class="tab-title" href="sass.html">trekking Trips</a></li>
          <li><a  class="tab-title" href="sass.html">Booking</a></li>
          <li><a class="tab-title" href="badges.html">Blog</a></li>
          <li><a class="tab-title" href="collapsible.html">About Us</a></li>
          <li><a class="tab-title" href="collapsible.html">contact Us</a></li>
        </ul>
      </div>
    </nav>
        