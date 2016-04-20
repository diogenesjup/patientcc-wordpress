<?php
/* 
 * template name: Nossa Missão
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
                              <li><a href="index.php">Home</a></li>
                              <li><a href="#">Sobre n&oacute;s</a></li>
                              <li>Nossa miss&atilde;o</li>
                         </ul>
                    </nav>
               </div>
          </div>
     </div>

<!-- Container -->
     <div class="container" data-animated="fadeInDown" align="justify">
<?php the_content(); ?>


          <p>&nbsp;</p>


<?php

// check if the repeater field has rows of data
if( have_rows('topicos') ):

  // loop through the rows of data
    while ( have_rows('topicos') ) : the_row();


?>  

          <p><img src="<?php the_sub_field('foto'); ?>" class="image-left pic" alt="" style="width:200px;">
           <?php the_sub_field('conteudo'); ?>
          <p>&nbsp;</p>

 
<?php 

    endwhile;

endif;

?>

  </div>
     <!-- Container / End -->
     
</div>
<!-- Content Wrapper / End -->


<?php endwhile; endif; ?>

<?php get_footer(); ?>