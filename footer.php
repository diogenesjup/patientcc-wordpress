<!-- Footer
================================================== -->

<div id="footer-bottom">
     <!-- Container -->
     <div class="container">
          <div class="eight columns">Patient Centricity Consulting | Direitos de cópia reservados |<a href="http://www.neodream.com.br">Neodream websolutions</a></div>
          <div class="eight columns">
               <ul class="social-icons-footer">
                    <!--<li><a href="#" class="tooltip top" title="Facebook"><i class="icon-facebook"></i></a></li>
                    <li><a href="#" class="tooltip top" title="Twitter"><i class="icon-twitter"></i></a></li>
                    <li><a href="#" class="tooltip top" title="LinkedIn"><i class="icon-linkedin-rect"></i></a></li>
                    <li><a href="#" class="tooltip top" title="Flickr"><i class="icon-flickr"></i></a></li>
                    <li><a href="#" class="tooltip top" title="Dribbble"><i class="icon-dribbble"></i></a></li>
                    <li><a href="#" class="tooltip top" title="Youtube"><i class="icon-youtube"></i></a></li>
                    <li><a href="#" class="tooltip top" title="RSS"><i class="icon-rss"></i></a></li> -->
               </ul>
          </div>
     </div>
     <!-- Container / End -->
</div>
<!-- Footer Bottom / Start -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/scripts/jquery.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/scripts/jquery.themepunch.plugins.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/scripts/jquery.themepunch.revolution.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/scripts/jquery.themepunch.showbizpro.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/scripts/appear.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/scripts/jquery.easing.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/scripts/jquery.tooltips.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/scripts/jquery.magnific-popup.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/scripts/jquery.superfish.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/scripts/jquery.twitter.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/scripts/jquery.flexslider.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/scripts/jquery.jpanelmenu.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/scripts/jquery.zflickrfeed.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/scripts/jquery.contact.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/scripts/jquery.isotope.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/scripts/jquery.easy-pie-chart.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/scripts/parallex.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/scripts/ss-gizmo.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/scripts/custom.js"></script>

<?php 


$frase1 = get_field("chamada_1",4);
$frase2 = get_field("chamada_2",4);
$frase3 = get_field("chamada_3",4);



?>

<script type="text/javascript">
     
          var ut_word_rotator = function() {
                
               var ut_rotator_words = [
                    '<?php echo $frase1; ?>',
                    '<?php echo $frase2; ?>',
                    '<?php echo $frase3; ?>'                    
               ] ,
               counter = 0;                
               
               setInterval(function() {
               $(".parallex-slider-title, .parallex-slider-title-black, .parallex-slider-title-slider").fadeOut(function(){
                         $(this).html(ut_rotator_words[counter=(counter+1)%ut_rotator_words.length]).fadeIn();
                    });
               }, 3000 );
          }
          
          ut_word_rotator();
     
</script>

<?php if($_GET["msg"]): ?>
<script type="text/javascript">
     alert("Mensagem enviada com sucesso");
</script>
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>
