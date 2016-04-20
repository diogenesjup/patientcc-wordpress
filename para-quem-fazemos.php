<?php
/* 
 * template name: Para quem fazemos
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
                              <li>Para quem fazemos</li>
                         </ul>
                    </nav>
               </div>
          </div>
     </div>

<!-- Featured Boxes -->
     <!-- Container -->
     <div class="container">
         
          <div class="six columns">

<?php

// check if the repeater field has rows of data
if( have_rows('itens') ):

  // loop through the rows of data
    while ( have_rows('itens') ) : the_row();


?> 
               <div class="featured-box" data-animated="fadeInLeft">
                    <div class="circle-2-line"><i class="ss-pointright"></i></div>
                    <div class="featured-desc-2">
                         <h3 class="bold"><?php the_sub_field('nome'); ?></h3>
                         
                    </div>
               </div>
               
<?php 

    endwhile;

endif;

?>

               <hr class="sep30">
          </div>
          <div class="ten columns" data-animated="fadeInRight"> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/img-services.jpg" alt="" class="image-center" style="top:19px; position:relative;"> </div>
     </div>
     <!-- Container / End -->


     </div>

     

     </div>
     
</div>
<!-- Content Wrapper / End -->


<?php endwhile; endif; ?>

<?php get_footer(); ?>