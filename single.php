<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<!-- Content Wrapper
================================================== -->
<div id="content-wrapper">

<!-- Parallex Page Title -->
     <div id="parallex-inner" class="parallex">
          <div class="container">
               <div class="eight columns"  data-animated="fadeInUp">
                    <h1>Insights</h1>
                    <p>Novidades e informa&ccedil;&atilde;o</p>
               </div>
               <div class="eight columns">
                    <nav id="breadcrumbs">
                         <ul>
                              <li><a href="<?php echo get_option('home'); ?>/">Home</a></li>
                             
                              <li>Insights</li>
                         </ul>
                    </nav>
               </div>
          </div>
     </div>
     <!-- Container -->
     <div class="container">
     
     
<!-- Left Side Content -->
          <div class="twelve alt columns" style="margin-top: 30px;">
 
                <!-- Post -->
               <article class="post">
                    <figure class="post-img media">
                         <div class="mediaholder"> <a href="<?php the_permalink(); ?>"> <img src="<?php the_field("imagem_de_destaque"); ?>" alt="<?php the_title(); ?>"/>
                                   <div class="hovercover">
                                        <div class="hovericon"><i class="hoverlink"></i></div>
                                   </div>
                              </a> </div>
                    </figure>
                   <div class="post-format">
                             <h4><?php 
                             $mes = get_the_time("m"); 

if($mes=="01") echo "JAN";
if($mes=="02") echo "FEV";
if($mes=="03") echo "MAR";
if($mes=="04") echo "ABR";
if($mes=="05") echo "MAI";
if($mes=="06") echo "JUN";
if($mes=="07") echo "JUL";
if($mes=="08") echo "AGO";
if($mes=="09") echo "SET";
if($mes=="10") echo "OUT";
if($mes=="11") echo "NOV";
if($mes=="12") echo "DEZ";


                             ?></h4>
                             <h2><?php the_time("d"); ?></h2>
                             
                         </div>
                    <section class="post-content">
                         <header class="meta">
                             
                              <h2><a href="#"><?php the_title(); ?></a></h2>
                         </header>
                         
<?php the_content(); ?>
<p>&nbsp;</p>
                         <a href="<?php echo get_option('home'); ?>/insights" class="button line-color">Voltar</a> </section>
                    <div class="clearfix"></div>
               </article>
               <!-- Post -->
              

               
          </div>
          <?php endwhile; endif; ?>
          
<?php require("sidebar.php"); ?>
     </div>
     <!-- Container / End -->
  
          <!-- Container -->
          
          <!-- Container / End -->
     </div>
</div>
<!-- Content Wrapper / End -->

	


<?php get_footer(); ?>