<?php
get_header(); 


global $wp_query;
$total_results = $wp_query->found_posts;
?>

  <!-- SLIDER -->
  <section class="slider-single" style="background: url('<?php echo PXS_THEME_URL?>/img/slider/office.jpg');">
 	 <div class="blog-slide">
	    <div class="container">
	        <h2>Resultados para <?php echo get_search_query(); ?>	</h2>
	        <div class="single-data">
              <h4>Encontrados: <?php	echo $total_results;?></h4>
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
			<?php if ( have_posts() ) :   

					while ( have_posts() ) : the_post();?>

			<div class="post-page img-resize">
				<a href="<?=the_permalink()?>">
					<?php the_post_thumbnail(); ?>
				</a>
				<h3><a href="<?=the_permalink()?>"><?php echo the_title();?></a></h3>
				<hr>
			</div>					
			<?php
					endwhile;

				else :?>

					<h3>Sem resultados.</h3>

			<?php			
				endif;
			?>
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
