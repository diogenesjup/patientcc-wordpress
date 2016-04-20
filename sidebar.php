<!-- Right sidebar -->
          <div class="four columns">
              
               <!-- Search Form -->
           
              <form role="search" method="get" id="searchform" class="searchform" action="http://patientcc.com/2016/">
               <button class="search-btn" type="submit"><i class="icon-search"></i></button>
               <input class="search" type="text" onBlur="if(this.value=='')this.value='Search';" name="s" onFocus="if(this.value=='Search')this.value='';" value="Procurar" />
               </form>
               
               <?php //get_search_form (); ?>


               <br/>

               <!-- Categories -->
               <div class="widget">
                    <h3 class="headline">Categoria</h3>
                    <span class="brd-headling"></span>
                    <div class="clearfix"></div>
                    <nav class="categories">
                         <!--<ul>
                              <li><a href="#">Categoria1</a></li>
                              <li><a href="#">Categoria2</a></li>
                              <li><a href="#">Categoria3</a></li>
                              <li><a href="#">Categoria4</a></li>
                              <li><a href="#">Categoria5</a></li>
                         </ul>-->
                         <ul>
                         <?php //$dol = get_the_category_list(); echo $dol; ?>
                            <?php 
    $args = array(
      'orderby' => 'id',
      'hide_empty'=> 0
  );
  $categories = get_categories($args);
  foreach ($categories as $cat) {
     
        echo '<li><a href="http://patientcc.com/2016/insights-pcc/'.$cat->slug.'">'.$cat->name.'</a></li>';
        //echo '<br />';
        //$args2= array("orderby"=>'name', "category" => $cat->cat_ID); // Get Post from each Sub-Category
        //$posts_in_category = get_posts($args2);

     
    }
?></ul>
                    </nav>
               </div>
               
               <!-- Archives -->
               <div class="widget">
                    <h3 class="headline">Arquivos</h3>
                    <span class="brd-headling"></span>
                    <div class="clearfix"></div>
                    <nav class="categories">
                         <ul>
                              <li><a href="http://patientcc.com/2016/insights-pcc/noticias/">Abril 2016</a></li>
                         </ul>
                    </nav>
               </div>
          </div>