
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
                              <li><?php the_title(); ?></li>
                         </ul>
                    </nav>
               </div>
          </div>
     </div>

<!-- Container -->
     <div class="container" data-animated="fadeInDown" align="justify">
        
        <?php the_content(); ?>
  </div>
     <!-- Container / End -->
     
</div>
<!-- Content Wrapper / End -->
<?php endwhile; endif; ?>

<?php get_footer(); ?>