<?php
/* 
 * template name: Home Page
 * 
 * 
 */
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<!-- Content Wrapper
================================================== -->

<div id="content-wrapper">

<!-- Parallex Rotating Word Banner -->
     <div id="parallex3" class="parallex" style="background:url('<?php $cont_image = get_field("imagem_de_fundo_homepage",4); echo $cont_image; ?>');">
          <div class="container">
               <hr class="sep100">
               <span class="parallex-slider-description">Aten&ccedil;&atilde;o Centrada no Paciente </span>
               <div class="parallex-slider-title-holder">
                    <h1 class="parallex-slider-title"><?php $frase1 = get_field("chamada_1",4); echo $frase1; ?></h1>
               </div>
               <span class="btn-holder"><a href="<?php echo get_option('home'); ?>/o-que-nos-fazemos" class="parallex-slider-btn">SAIBA MAIS</a></span>
               <hr class="sep100">
          </div>
     </div>
     
<hr class="sep60">


<!-- Featured Boxes -->
<!-- Container -->

     <div class="container">
         
         <div class="row mgr-center2 centered">
              <?php the_content(); ?> <br/><br/>
                    <a href="<?php echo get_option('home'); ?>/o-que-nos-fazemos" class="button line-gray">Saiba mais</a>
                    </p>
         </div>
     </div>


<!-- Container / End -->


<!-- Landing Boxes -->
<!-- Container -->

  
      <hr class="line-full">
     <div class="row mgr-center2 centered">
              <h3> News Insights</h3><br/></div>

      <!-- Container -->
     <div class="container">
          <!-- Portfolio Wrapper-->
          <div id="portfolio-wrapper">

<?php 
                             // LOOP 
                             $the_query = new WP_Query( array( 'posts_per_page' => 4 ) ); ?>
                             <?php if ( $the_query->have_posts() ) : ?>   
                             <!-- the loop -->
                             <?php while ( $the_query->have_posts() ) : $the_query->the_post();
                            
                             $foto_destaque = get_field("imagem_de_destaque");

                             ?>
               <!-- Item -->
               <div class="four columns portfolio-item media photography print">
                    <figure>
                         <div class="mediaholder"> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> 
                         <img alt="" src="<?php echo $foto_destaque; ?>"/> </a> </div>
                              <figcaption class="item-description">
                                   <a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a> 
                              </figcaption>
                    </figure>
               </div>
               <!-- Item -->
                          <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                            <?php endif; 
                            // FINAL LOOP 
                            ?>
              
               


               
               
          </div>
          <!-- Portfolio Wrapper / End -->
        
<hr class="sep60">
     <!-- Container / End -->
</div>
<!-- Container / End -->

<!-- Container -->

<!-- Container / End -->

<!-- Parallex Section -->
<div id="parallex2" class="parallex">
     <div class="container" style="padding-left:50px;">

 
     <div class="eight columns"> <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><?php the_field("iframe_video"); ?></div> </div>
     <div class="eight columns">
          <div class="landing-imac">
               <?php the_field("texto_ao_lado_do_video"); ?>
               <a href="<?php echo get_option('home'); ?>/contato" class="button line-color" > fale conosco &rsaquo;</a> </div>
     </div>

     </div>
</div>

     </div>
     <!-- Container / End -->
</div>

</div>
<!-- Content Wrapper / End -->


	
<?php endwhile; endif; ?>

<?php get_footer(); ?>