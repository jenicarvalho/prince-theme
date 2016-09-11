
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

          <?php 
          $popularpost = new WP_Query( array( 'posts_per_page' => 4, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
          while ( $popularpost->have_posts() ) : $popularpost->the_post();

          
          ?>
            <!-- single post -->
            <li>
              <?php echo the_post_thumbnail()?>
              <h4><a href="<?=the_permalink();?>"><?=the_title();?></a></h4>
              <span class="dia"><?=get_data();?></span>
            </li>
            <!--/ end single post -->
          <?php
          endwhile;
          ?>
          </ul>

        </div>
        <!-- / end POPULAR POST-->

        <!-- POST TAGS -->
        <div class="posts-tags">
          <h3 class="title-h3">TAGS</h3>
          <span class="border-fun"></span>
          
            <?php
            if(get_the_tag_list()) {
                echo get_the_tag_list('<ul class="tags"><li>','</li><li>','</li></ul>');
            }
            ?>
        </div>
        <!-- / end POST TAGS -->


        <!-- POST CATEGORIES -->
        <div class="posts-categories">
          <h3 class="title-h3">CATEGORIAS</h3>
          <span class="border-fun"></span>

          <ul class="categories">

            <?php wp_list_categories( array(
                'orderby' => 'name',
                'title_li' => ''
            ) ); ?> 

          </ul>
        </div>
        <!--/ end POST CATEGORIES -->

      </div>
      <!-- / end CONTAINER SIDE-->


    </aside>
    <!-- / end SIDEBAR -->
    </div>