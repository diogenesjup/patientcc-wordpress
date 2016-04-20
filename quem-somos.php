<?php
/* 
 * template name: Quem Somos
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
                    <p>Saiba um pouco mais sobre n&oacute;s</p>
               </div>
               <div class="eight columns">
                    <nav id="breadcrumbs">
                         <ul>
                              <li><a href="<?php echo get_option('home'); ?>/">Home</a></li>
                              <li><a href="#">Sobre n&oacute;s</a></li>
                              <li>Quem somos</li>
                         </ul>
                    </nav>
               </div>
          </div>
     </div>
     <!-- Featured Boxes
================================================== -->
       
     
<!-- Container-->
     <div class="container" >
          <div class="eight columns" data-animated="fadeInLeft">
               <div class="featured-box mgr30">
                    <h3 class="headline"><?php the_field("sub_titulo"); ?></h3>
                    <span class="brd-headling"></span>
                    <hr>

<?php the_content(); ?>
                    <div>
                     
                        
                         <!-- Section 3 -->
                      
                         <div>
                            
                         </div>
                 </div>
               </div>
          </div>
       <div class="eight columns" data-animated="fadeInRight">
               <h3 class="headline">Equipe</h3>
               <span class="brd-headling"></span>
               <hr>


<?php

// check if the repeater field has rows of data
if( have_rows('equipe') ):

  // loop through the rows of data
    while ( have_rows('equipe') ) : the_row();


?>  


           <div class="team-alt">
                    <div class="img-wrp"> <img alt="" src="<?php the_sub_field('foto'); ?>" />
                         <div class="overlay-wrp">
                              <div class="overlay"></div>
                              <ul class="social-icons overlay-content">
                                   <li><a class="facebook" href="<?php the_sub_field('facebook'); ?>"><i class="icon-facebook"></i></a></li>
                                   <li><a class="twitter" href="<?php the_sub_field('twitter'); ?>"><i class="icon-twitter"></i></a></li>
                                   <li><a class="gplus" href="<?php the_sub_field('google'); ?>"><i class="icon-gplus"></i></a></li>
                              </ul>
                         </div>
                    </div>
                    <div class="content">
                         <div class="team-name">
                              <h5><?php the_sub_field('nome'); ?></h5>
                              <span><?php the_sub_field('cargo'); ?></span></div>
                         <div class="team-about">
                              <p><?php the_sub_field('texto'); ?></p>
                         </div>
                         <div class="team-email"><a href="mailto:<?php the_sub_field('e-mail'); ?>"><i class="icon-envelope"></i><?php the_sub_field('e-mail'); ?></a></div>
                    </div>
            </div>

<?php 

    endwhile;


endif;

?>


               
                    
                <div class="team-alt">
                    <div class="img-wrp"> <img alt="" src="<?php bloginfo('stylesheet_directory'); ?>/images/team/member-02.jpg" />
                         
            </div>
               
               
                 
       </div>
  </div>
</div>

          <!-- Container -->
         
               
     </div>
</div>
<!-- Content Wrapper / End -->


<?php endwhile; endif; ?>

<?php get_footer(); ?>