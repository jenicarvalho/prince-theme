<?php get_header()?>
  <!-- SLIDER -->
  <section class="slider" id="home">
    <div class="container">
        <h2>SONHE GRANDE. FAÇA MAIS</h2>
        <p>Entregue mais sites com a Pixels!</p>

        <div class="buttons">
          <a class="btn btn-info" href="#quem">CONHEÇA</a>
          <a class="btn btn-warning" href="#contato">CONTATO</a>
        </div>
    </div>
  </section>
  <!-- /end slider -->


<!-- SERVICES-->
<section class="services" id="servicos">
    <div class="container">
      <div class="row">

        <!-- SINGLE SERVICES -->
        <div class="single-services serv1">
          <div class="col-md-3">
              <h3 class="title-h3">PSD para HTML</h3>

                <p class="text-black">Convertemos seu PSD para um HTML de fácil entendimento com as melhores práticas e totalmente responsivo.</p>
          </div>
        </div>
        <!-- /END SINGLE SERVICES -->

        <!-- SINGLE SERVICES -->
        <div class="single-services serv2">
          <div class="col-md-3">
              <h3 class="title-h3">TEMAS WORDPRESS</h3>

                <p class="text-black">Criamos temas para Wordpress com total customização pelo painel administrativo.</p>
          </div>
        </div>
        <!-- /END SINGLE SERVICES -->

        <!-- SINGLE SERVICES -->
        <div class="single-services serv3">
          <div class="col-md-3">
              <h3 class="title-h3">E-MAIL MARKETING</h3>

                <p class="text-black">Criação e envio de e-mail marketing utilizando as últimas tecnologias do mercado.</p>
          </div>
        </div>
        <!-- /END SINGLE SERVICES -->
      </div>
    </div>
</section>
<!--/ END SERVICES-->



  <!-- BUSINESS -->
  <section class="business" id="quem">
      <div class="container">
        <div class="row">
            <div class="txt-business">
              <div class="col-md-7 col-sm-12 col-xs-12">
                  <h2 class="title-h2">A Pixels</h2>
                  <span class="border-fun"></span>

                  <p class="text-gray">Uma ótima parceira para você, é isso o que descreve a nossa empresa.</p>

                  <p class="text-black">Trabalhamos a dois anos no mercado de Outsourcing de Serviços Web, entendemos e atendemos as agências e suas peculiaridades. </p>
                  
                  <p class="text-black">Nossa meta é te ajudar a fazer mais em menos tempo, produzindo sites, portais e e-commerces de todos os tamanhos e para todo tipo de cliente. </p>
                 
                  <p class="text-black">Se você não entende de códigos, desenvolvimento e todo esse mundo online não se preocupe, a pixels faz esse meio de campo entre você e o cliente para que você consiga focar no seu negócio principal.
                  </p>
                  <br>

                  <a href="#contato" class="dest-blue" >FALE COM A PIXELS</a>
              </div>
            </div>

            <div class="col-md-5 hidden-sm hidden-xs">
                <img src="<?php echo PXS_THEME_URL?>/img/people.png">
            </div>
        </div>
      </div>
  </section>
<!-- / END BUSINESS -->

 
 <!-- PORTFOLIO --> 
  <section class="portfolio text-center" id="portfolio">
          <h2 class="title-h2">Trabalhos Realizados</h2>
          
          <span class="border-fun"></span>
          
          <p class="text-gray">Conheça o portfólio da Pixels e se encante com os trabalhos!</p>

          <?php echo do_shortcode( '[waving width="200" theme="light" all="0" showCat="true" 
     /] ' );?>
  </section>
 <!-- / END PORTFOLIO --> 


 <!-- CALL TO ACTION --> 
 <div class="cta">
    <div class="container">
      <div class="row">
        <div class="col-md-9  col-sm-12 col-xs-12">
        <p>Se torne uma agência parceira da Pixels agora!</p>
        </div>

        <div class="col-md-3">
          <a class="btn btn-green" href="#contato">ENTRE EM CONTATO</a>
        </div>
      </div>
    </div>
 </div>
 <!-- / CALL TO ACTION --> 


  <!-- SKILLS-->
  <section class="skills">
      <div class="container">
          <div class="row">
              <!-- skill-->
              <div class="skill-single">
                <div class="col-md-3">
                    <div class="img-skill">
                      <img src="<?php echo PXS_THEME_URL?>/img/icons/monitor.png">
                    </div>
                    <h3 class="title-h3">Sites responsivos</h3>
                    <p class="text-black">Todos os sites desenvolvidos por nós são responsivos, tornando possível a sua visualização em todos os dipositivos. </p>
                </div>   
              </div> 
              <!-- / end skill-->  

              <!-- skill-->
              <div class="skill-single">
                <div class="col-md-3">
                    <div class="img-skill">
                      <img src="<?php echo PXS_THEME_URL?>/img/icons/conf.png">
                    </div>
                    <h3 class="title-h3">Administrador Personalizado</h3>
                    <p class="text-black">Construímos um administrador único e totalmente personalizado no utilizando wordpress como CMS. </p>
                </div>   
              </div> 
              <!-- / end skill--> 

              <!-- skill-->
              <div class="skill-single">
                <div class="col-md-3">
                    <div class="img-skill">
                      <img src="<?php echo PXS_THEME_URL?>/img/icons/regua.png">
                    </div>
                    <h3 class="title-h3">Fidelidade ao Layout</h3>
                    <p class="text-black">Design fiel ao layout proposto pelo cliente. Animações e efeitos criados com as melhores práticas. </p>
                </div>   
              </div> 
              <!-- / end skill--> 

              <!-- skill-->
              <div class="skill-single">
                <div class="col-md-3">
                    <div class="img-skill">
                        <img src="<?php echo PXS_THEME_URL?>/img/icons/talk.png">
                    </div>
                    <h3 class="title-h3">Suporte Total</h3>
                    <p class="text-black">Ajudamos na utilização e manutenção do site após a entrega, oferecemos treinamento e manual se preferivel. </p>
                </div>   
              </div> 
              <!-- / end skill--> 
          </div>
      </div>
  </section>
  <!-- / END SKILLS -->


 <!-- AGENCY -->
  <section class="agency text-center" id="agencias">
      <div class="container">
        <div class="row">
            <div class="txt-business">
              <div class="col-md-12 col-sm-12 col-xs-12">
                  <h2 class="title-h2">Agências Parceiras</h2>
                  <span class="border-fun"></span>

                  <p class="text-gray">Conheça algumas agências que usam os serviços da Pixels</p>
              </div>
            </div>
        </div>

        <div class="partners">
          <div class="row">


                <?php

                  $args = array('post_type' => 'agencias');
                  $loop = new WP_Query( $args );

                  if( $loop->have_posts() ) :
                                             
                  while ( $loop->have_posts() ) :
                    $loop->the_post();

                    //recupera apenas endereço da imagem
                    $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );


                  $links_agencia = get_post_meta( $post->ID );

                ?>          
            <div class="col-md-3">
              <a href="<?= $links_agencia['link'][0]; ?>" target="_blank"><img src="<?php echo $thumbnail_src[0]?>"></a>
            </div> 

            <?php 
                    endwhile;
                  endif;
                  // Reset Query
                  wp_reset_postdata();
            ?>
          </div>


      </div>
  </section>
<!-- / END AGENCY -->


<!-- BLOG -->
<section class="blog text-center" id="blog">
      <h2 class="title-h2">Últimas do Blog</h2>
      
      <span class="border-fun"></span>
      
      <p class="text-gray">Falamos muito sobre tecnologia web por aqui.</p>


      <div class="container">
          <div class="row">
            <!-- featured post -->


                <?php
                  //recupera post da categoria destaque
                  query_posts( array(
                          'category_name'  => 'destaque',
                          'posts_per_page' => 1
                      ) );
                                             
                  while ( have_posts() ) : the_post();

                    //recupera apenas endereço da imagem
                    $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );

                ?>
                       
                <div class="col-md-6">
                  <div class="img-box-post" style="background: url('<?php echo $thumbnail_src[0];?>')">
                    <div class="featured-post text-left">
                        
                        <a href="<?php echo get_category_link(3); ?>" class="tag">Destaque</a>
                        <a href="<?php echo get_permalink()?>"> <h4><?php echo the_title()?></h4></a>
                        <div class="post-data">
                          <span> <?php echo get_the_author_meta( 'nicename');?> / <?php echo get_data()?></span>
                        </div>
                    </div>
                  </div>
                </div>
            <?php 
                  endwhile; 
                  // Reset Query
                  wp_reset_query();
            ?>
            <!-- /end featured post -->



            <div class="col-md-6">
            <?php
                  //recupera post da categoria destaque
                  query_posts( array(
                          'cat'  => -3,
                          'posts_per_page' => 2
                      ) );
                                             
                  while ( have_posts() ) : the_post();

                    //recupera apenas endereço da imagem
                    $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );

                ?>            
              <!-- box-post -->
                <div class="img-box-post" style="background: url('<?php echo $thumbnail_src[0];?>')">
                  <div class="box-post text-left">
                      <a href="<?php echo get_permalink()?>"> <h4><?php echo the_title()?></h4></a>                    
                      <div class="post-data">
                        <span> <?php echo get_the_author_meta( 'nicename');?> / <?php echo get_data()?></span>
                      </div>
                  </div>    
                </div>
                <!-- / end box-post -->
                  <?php 
                    endwhile; 
                    // Reset Query
                    wp_reset_query();
                   ?>
              </div> 

          </div>

            <a href="#" class="all-posts">Veja todos os artigos</a>
      </div>
</section>
<!--/ END BLOG -->

<?php get_footer()?>

