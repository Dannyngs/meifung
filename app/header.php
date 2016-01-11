<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> </html><![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> </html><![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> </html><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8" />

    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />

    <!-- Page title -->
    <title><?php echo $system[$current_lang.'_site_title'] ?></title>

     <!-- build:css({.tmp,app}) /_/css/lib/html5bp.css -->
      
  <link rel="stylesheet" href="/_/css/style.css"> 
  <link rel="stylesheet" href="/_/css/skins/colors/red.css" name="colors">
  <link rel="stylesheet" href="/_/css/layout/boxed.css" name="layout">
  <link rel="stylesheet" href="/_/css/switcher/style.css">
     <!-- endbuild -->
    
   <!-- build:css({.tmp,app}) /_/css/site-styles.css -->
        
      
       

        <!-- endbuild -->
    
    <!-- Favicons -->
    <link rel="shortcut icon" href="favicon.png" />
    <link rel="apple-touch-icon" href="apple-touch-icon.png" />
    
     <!-- build:js /_/js/lib/modernizr/modernizr.js -->
        <script src="/_/bower_components/modernizr/dist/js/modernizr.js"></script>
        <!-- endbuild -->
    <!--[if lt IE 9 ]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <![endif]-->

    <!-- IE Fix for HTML5 Tags -->
    
    <!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <![endif]-->

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<body class="wood">

  <div id="wrap" class="boxed">
  
   <header>
     <div class="top-bar">
       <div class="container clearfix">
        <div class="slidedown">
        
         <div class="fourteen columns">
           <div class="phone-mail">
             <a><i class="icon-phone"></i> Phone : <?php echo $system['phone'];?></a>
             <a href="mailto:info@meifung.hk"><i class="icon-envelope-alt"></i> Mail : <?php echo $system['email'];?></a>
               
           </div><!-- End phone-mail -->
            
         </div>
            
            <div class="two columns">
           <div class="phone-mail" style="padding-top:8px;">
            
                 <a  href="index.php?lang=chi">中文</a><a   href="index.php?lang=eng">English </a>
           </div><!-- End phone-mail -->
            
         </div>
        
        
         </div><!-- End slidedown -->
       </div><!-- End Container -->
       
     </div><!-- End top-bar -->
     
     <div class="main-header">
       <div class="container clearfix">
         <a href="index.php" class="down-button"><i class="icon-angle-down"></i></a><!-- this appear on small devices -->
         <div class="one-third column">
          <div class="logo">
          <a href="index.php">
            <img src="/_/images/logo.png"  />
          </a>
          </div>
         </div><!-- End Logo -->
         
         <div class="two-thirds column">
          <nav id="menu" class="navigation" role="navigation">
          <a href="#">Show navigation</a><!-- this appear on small devices -->

           <?php require_once 'nav.php' ?>

         </nav>
        </div><!-- End Menu -->
       
       </div><!-- End Container -->
     </div><!-- End main-header -->
     
   </header><!-- <<< End Header >>> -->



