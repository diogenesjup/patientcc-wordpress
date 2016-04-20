<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<html lang="pt-br"> -->
<html lang="pt-br">
<!--<![endif]--><head>
<!-- Basic Page Needs
================================================== -->
<meta charset="UTF-8">
<?php
if ( ! function_exists( '_wp_render_title_tag' ) ) {
  function theme_slug_render_title() {
?>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php
  }
  add_action( 'wp_head', 'theme_slug_render_title' );
}
?>

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 

<!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
<![endif]-->


<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
   
<!-- Favicon
    ============================================== -->
<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/evolve.ico">
<!-- Mobile Specific
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- CSS
================================================== -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/scripts/rs-plugin/css/settings.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/colors/yellow.css" id="colors">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/animate.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/camera.css" id='camera-css'>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/switcher.css" >
<!--[if lt IE 9]>
    <script src="../../../html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- Java Script
================================================== -->
<?php wp_head(); ?>
</head>
<body>
<div class="loader"><div class="ring"><div class="spin"></div></div></div>


<!-- Header
================================================== -->
<header id="header">
     <div class="topbar">
          <div class="container">
               <div class="eight columns call">
                    <ul>
                         <li class="first"><i class="icon-phone"></i> 11 99994-7302</li>
                         <li><i class="icon-envelope"></i>&nbsp;Contato: contato@patientcc.com</li>
                    </ul>
               </div>
               <div class="eight columns">
                    <ul class="social-icons right">
                         <li><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/english.png" width="33" height="28"></a></li>
                         <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                         <li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
                    </ul>
               </div>
          </div>
     </div>
     <!-- Mobile Menu & Search -->
     <div class="container">
         
          <div class="three columns">
               <div id="mobile-navigation">
                    
                    <a href="#menu" class="menu-trigger"><i class="icon-reorder"></i></a> <span class="search-trigger"><i class="icon-search"></i></span> </div>
               <div id="logo">
                    <h1><a href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="Patient Centricity Consulting" /></a></h1>
               </div>
          </div>
<!-- Navigation
================================================== -->
          <div class="thirteen columns">
               <nav id="navigation" class="menu">
                    <ul id="responsive">
                         <li><a href="<?php echo get_option('home'); ?>/quem-somos" <?php if(is_page("quem-somos")||is_page("nossa-missao")): ?>id="current"<?php endif; ?>>Sobre nós</a>
                         <ul>
                                   <li><a href="<?php echo get_option('home'); ?>/quem-somos">Quem somos</a></li>
                                   <li><a href="<?php echo get_option('home'); ?>/nossa-missao">Nossa missão</a></li>
   
                              </ul>
                         
                         </li>
                         <li><a href="<?php echo get_option('home'); ?>/o-que-nos-fazemos" <?php if(is_page("o-que-nos-fazemos")): ?>id="current"<?php endif; ?>>O que nós fazemos </a></li>
                         <li><a href="<?php echo get_option('home'); ?>/para-quem-fazemos" <?php if(is_page("para-quem-fazemos")): ?>id="current"<?php endif; ?>>Para quem fazemos </a></li>
                         <li><a href="<?php echo get_option('home'); ?>/insights" <?php if(is_page("insights")): ?>id="current"<?php endif; ?>>Insights</a></li>
                         <li><a href="<?php echo get_option('home'); ?>/contato" <?php if(is_page("contato")): ?>id="current"<?php endif; ?>>Contato</a></li>
    
                    </ul>
               </nav>
          </div>
     </div>
     <!-- Container / End -->
     
</header>
<!-- Header / End -->