<?php
/* 
 * template name: O que nós fazemos 2
 * 
 * 
 */
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<!-- Content Wrapper
================================================== -->
<div id="content-wrapper">

<!-- Parallex Page Title -->
     <div id="parallex-inner" class="parallex">
          <div class="container">
               <div class="eight columns"  data-animated="fadeInUp">
                    <h1><?php the_title(); ?></h1>
                    <p></p>
               </div>
               <div class="eight columns">
                    <nav id="breadcrumbs">
                         <ul>
                              <li><a href="<?php echo get_option('home'); ?>/">Home</a></li>
                              
                              <li>O que n&oacute;s fazemos</li>
                         </ul>
                    </nav>
               </div>
          </div>
     </div>

<!-- Featured Boxes -->
     <!-- Container -->
     <div class="container" data-animated="fadeInDown" align="justify">
<?php the_content(); ?>

  </div>
     <!-- Container / End -->


<!-- Parallex Services Boxes -->
     <div id="parallex5" class="parallex">
          <div class="container">
               <div class="sixteen columns main-headline">
                    <h3>Confira como a Patient Centricity Consulting pode ajudar a sua Organiza&ccedil;&atilde;o:</h3>
                    
               </div>
               <hr class="sep30">
               <div class="four columns" data-animated="pulse">
                    <div class="services-box services-box-animated">
                         <div class="inner">
                              <div class="front"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon-01.png" alt="">
                                   <h3>Fase 1: <br>Cultura Organizacional<br><br></h3>
                              </div>
                              <div class="back">
                                  <?php the_field("fase_1"); ?>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="four columns" data-animated="pulse">
                    <div class="services-box services-box-animated">
                         <div class="inner">
                              <div class="front"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon-02.png" alt="">
                                   <h3>Fase 2: <br>Lideran&ccedil;a<br><br></h3>
                              </div>
                              <div class="back">
                                   <?php the_field("fase_2"); ?>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="four columns" data-animated="pulse">
                    <div class="services-box services-box-animated">
                         <div class="inner">
                              <div class="front"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon-03.png" alt="">
                                   <h3>Fase 3: <br> M&eacute;tricas<br><br></h3>
                              </div>
                              <div class="back">
                                   <?php the_field("fase_3"); ?>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="four columns" data-animated="pulse">
                    <div class="services-box services-box-animated">
                         <div class="inner">
                              <div class="front"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon-04.png" alt="">
                                   <h3>Fase 4: <br>Desenvolvimento de Pessoas</h3>
                              </div>
                              <div class="back">
                                   <?php the_field("fase_4"); ?>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="overlay"></div>
          </div>
          <!--/.container-->
     </div>


</div>
<!-- Content Wrapper / End -->


<?php endwhile; endif; ?>

<?php get_footer(); ?>