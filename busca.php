<?php
/* 
 * template name: Busca
 * 
 * 
 */
?>
<?php get_header(); ?>

<!-- Content Wrapper
================================================== -->
<div id="content-wrapper">

<!-- Parallex Page Title -->
     <div id="parallex-inner" class="parallex">
          <div class="container">
               <div class="eight columns"  data-animated="fadeInUp">
                    <h1>Resultado de pesquisa</h1>
                    <p>Você procurou por: <?php //$s = $_POST["s"]; echo $s; ?></p>
               </div>
               <div class="eight columns">
                    <nav id="breadcrumbs">
                         <ul>
                              <li><a href="<?php echo get_option('home'); ?>/">Home</a></li>
                             
                              <li>Resultado de pesquisa</li>
                         </ul>
                    </nav>
               </div>
          </div>
     </div>
     <!-- Container -->
     <div class="container">
     
     
<!-- Left Side Content -->
          <div class="twelve alt columns" style="margin-top: 30px;">
              
              
               aqui está o conteúdo
              
           
              
              
              
              
           
          </div>
          
<?php require("sidebar.php"); ?>

     </div>
     <!-- Container / End -->
  
          <!-- Container -->
          
          <!-- Container / End -->
     </div>
</div>
<!-- Content Wrapper / End -->
            
  
<?php get_footer(); ?>