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
   

    <link href="<?php echo base_url(); ?>html/css/style.css" rel="stylesheet">

    <link href="http://fonts.googleapis.com/css?family=Inconsolata|Raleway" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
     
    <script src="<?php echo base_url(); ?>html/js/script.js"></script>
    <?php foreach($stylesheet as $fileName){ ?>
    <link href="<?php echo base_url(); ?>html/css/<?php echo $fileName; ?>" rel="stylesheet">
    <?php } ?>
    <script src="https://use.fontawesome.com/4c9f41dc36.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body class="grey lighten-2" >
    <?php if($this->session->userdata("admin")){ ?>
   <nav class="admin-header-area">
      <div class="nav-wrapper">
        <a href="<?php echo base_url(); ?>admin" class="brand-logo"><img src="<?php echo base_url(); ?>html/images/logo_black.png" height="100px" id="logo"></a>
        
      </div>
    </nav>
    <?php }else{ ?>
     
      <div class="login-page">
        <center>
        <a href="<?php echo base_url(); ?>admin" class="brand-logo"><img src="<?php echo base_url(); ?>html/images/logo_black.png" height="100px" id="logo"></a>
        </center>
      </div>
    
    <?php } ?>
        