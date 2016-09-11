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
              <div class="addthis_sharing_toolbox"></div>
            </ul>
          </div>

        </div>
        <!-- / end POST BLOG -->

      </section>
      <!--/ end MAIN posts -->  
    </div>

    <?php get_sidebar(  ); ?>
  </div>
</div>
<!-- / end blog-main -->



<?php get_footer()?>