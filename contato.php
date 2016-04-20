<?php
/* 
 * template name: Contato
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
                              
                              <li>Contato</li>
                         </ul>
                    </nav>
               </div>
          </div>
     </div>

     
     <div class="container">
          <div class="seven columns">
               <h3 class="headline">Envie sua mensagem</h3>
               <span class="brd-headling"></span>
               <div class="clearfix"></div>
               <!-- Contact Form -->
               <section id="contact">
                    <!-- Success Message -->
                    <mark id="message"></mark>
                    <!-- Form -->
                    <form method="post" action="<?php bloginfo('stylesheet_directory'); ?>/contact.php">
                         <fieldset>
                         <div>
                              <label for="name" accesskey="U">Nome:</label>
                              <input name="name" type="text" id="name" style="width:96%;" />
                         </div>
                         <div>
                              <label for="email" accesskey="E">E-mail: <span>*</span></label>
                              <input name="email" type="email" id="email" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" style="width:96%;" />
                         </div>
                         <div>
                              <label for="comments" accesskey="C">Mensagem: <span>*</span></label>
                              <textarea name="comments" cols="40" rows="3" id="comments" spellcheck="true" style="width:96%;"></textarea>
                         </div>
                         </fieldset>
                         <input type="submit" class="submit" id="submit" value="Emviar" />
                         <div class="clearfix"></div>
                    </form>
               </section>
               <!-- Contact Form / End -->
          </div>
          <div class="nine columns right">
               <h3 class="headline">Contato</h3>
               <span class="brd-headling"></span>
               <div class="clearfix"></div>
               <?php the_content(); ?>
               <div class="four columns" style="border-bottom:1px solid #eee; margin-right:0px; border-right:1px solid #eee;">
                    <div class="featured-box" data-animated="flipInX">
                         <div class="circle-2"><i class="ss-location"></i></div>
                         <div class="featured-desc-2">
                              <h3>Endere&ccedil;o</h3>
                              <p>Rua fiandeiras, 1234</p>
                         </div>
                    </div>
               </div>
               <div class="four columns" style="border-bottom:1px solid #eee; margin-left:0px;">
                    <div class="featured-box" data-animated="flipInX" style="margin-left:20px; ">
                         <div class="circle-2"><i class="ss-phone"></i></div>
                         <div class="featured-desc-2">
                              <h3>Telefone</h3>
                              <p>+ 55 11-5555-5555<br>
                                    </p>
                         </div>
                    </div>
               </div>
               <div class="four columns" style="border-right:1px solid #eee;">
                    <div class="featured-box" data-animated="flipInX">
                         <div class="circle-2"><i class="ss-mail"></i></div>
                         <div class="featured-desc-2">
                              <h3>E-mail</h3>
                              <p>contato@patientcc.com<br>
                         </div>
                    </div>
               </div>
            
      
     </div>


<div class="bg-color">
     <!-- Container -->
     <div class="container">
         
         
     </div>
     <!-- Container / End -->
</div>

     
</div>

</div>
<!-- Content Wrapper / End -->



<?php endwhile; endif; ?>

<?php get_footer(); ?>