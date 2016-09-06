<?php get_header();?>

<?php the_post();?>


<?php
    //recupera apenas endereço da imagem
    $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );
?>


  <!-- SLIDER -->
  <section class="slider-single" style="background: url('<?php echo $thumbnail_src[0];?>');">
 	 <div class="blog-slide">
	    <div class="container">
	        <h2><?php the_title()?></h2>
	        <div class="single-data">
              <img class="author" src="<?php echo PXS_THEME_URL?>/img/avatar.png">
              <h4><?php echo get_the_author()?></h4>
              <span class="dia">   <?php echo get_data()?></span>

          </div>

	    </div>
    </div>
  </section>
  <!-- /end slider -->



<!-- blog main-->
<div class="blog-main">

  <div class="container">
    <div class="col-md-7">
      <!-- MAIN posts -->  
      <section class="main-posts">
        
        <!-- POST BLOG -->
        <div class="post-blog-page">


          <div class="content-post">
            <?php
                   the_content();
            ?>
          </div>

          <div class="action-post">
            <ul>
              <li><a href="#">Compartilhar: </a></li>
            </ul>
          </div>

        </div>
        <!-- / end POST BLOG -->

      </section>
      <!--/ end MAIN posts -->  
    </div>


    <div class="col-md-5 hidden-sm hidden-xs pull-right">
    <!-- SIDEBAR -->
    <aside class="sidebar">
      
      <!-- CONTAINER SIDE-->
      <div class="container-side">
        
        <!-- busca -->
        <div class="busca-blog">
          <input type="text" name="busca" class="busca-blog" placeholder="Search..">
          <button><i class="fa fa-search" ></i></button>
        </div>
        <!--/ end busca -->

        <!-- POPULAR POST-->
        <div class="post-sidebar">
          <h3 class="title-h3">POSTS POPULARES</h3>
          <span class="border-fun"></span>

          <ul class="posts-popular">
            <!-- single post -->
            <li>
              <img src="img/postside.jpg">
              <h4><a href="#">Totally Free Photos For Personal And Commercial Use</a></h4>
              <span class="dia">10/08/2016</span>
            </li>
            <!--/ end single post -->

            <!-- single post -->
            <li>
              <img src="img/postside.jpg">
              <h4><a href="#">Totally Free Photos For Personal And Commercial Use</a></h4>
              <span class="dia">10/08/2016</span>
            </li>
            <!--/ end single post -->

            <!-- single post -->
            <li>
              <img src="img/postside.jpg">
              <h4><a href="#">Totally Free Photos For Personal And Commercial Use</a></h4>
              <span class="dia">10/08/2016</span>
            </li>
            <!--/ end single post -->

            <!-- single post -->
            <li>
              <img src="img/postside.jpg">
              <h4><a href="#">Totally Free Photos For Personal And Commercial Use</a></h4>
              <span class="dia">10/08/2016</span>
            </li>
            <!--/ end single post -->
            
            <!-- single post -->
            <li>
              <img src="img/postside.jpg">
              <h4><a href="#">Totally Free Photos For Personal And Commercial Use</a></h4>
              <span class="dia">10/08/2016</span>
            </li>
            <!--/ end single post -->


            <!-- single post -->
            <li>
              <img src="img/postside.jpg">
              <h4><a href="#">Totally Free Photos For Personal And Commercial Use</a></h4>
              <span class="dia">10/08/2016</span>
            </li>
            <!--/ end single post -->
          </ul>

        </div>
        <!-- / end POPULAR POST-->

        <!-- POST TAGS -->
        <div class="posts-tags">
          <h3 class="title-h3">TAGS</h3>
          <span class="border-fun"></span>
          
          <ul class="tags">
            <li><a href="#">Banco de dados</a></li>
            <li><a href="#">JSON</a></li>
            <li><a href="#">Fonts</a></li>
            <li><a href="#">Temas</a></li>
            <li><a href="#">Guias</a></li>
            <li><a href="#">Front end</a></li>
          </ul>
        </div>
        <!-- / end POST TAGS -->


        <!-- POST CATEGORIES -->
        <div class="posts-categories">
          <h3 class="title-h3">CATEGORIAS</h3>
          <span class="border-fun"></span>

          <ul class="categories">
            <li><a href="#">Design</a></li>
            <li><a href="#">Desenvolvimento</a></li>
            <li><a href="#">CMS</a></li>
            <li><a href="#">HTML</a></li>
            <li><a href="#">PHP</a></li>
            <li><a href="#">JAVASCRIPT</a></li>
            <li><a href="#">CSS3</a></li>
            <li><a href="#">SEO</a></li>
          </ul>
        </div>
        <!--/ end POST CATEGORIES -->

      </div>
      <!-- / end CONTAINER SIDE-->


    </aside>
    <!-- / end SIDEBAR -->
    </div>
  </div>
</div>
<!-- / end blog-main -->



<?php get_footer()?>