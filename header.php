<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Agência com foco em outsourcing de serviços web">
    <meta itemprop="publisher" content="Pixels">
    <meta itemprop="editor" content="Jeniffer Carvalho">

    <meta property="og:site_name" content="agenciapixels.com">
    <meta property="og:image" content="">
    <meta property="og:type" content="post">
    <meta property="og:description" content="">
    <meta property="og:title" content=''>

    <title><?php echo PXS_SITE_NAME?></title>


    <!-- fav -->
    <link rel="icon" href="<?php echo PXS_THEME_URL?>/img/favicon.png">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head();?>
  </head>
  <body>

 <nav class="navbar navbar-default navbar-fixed-top" >
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="<?php echo PXS_THEME_URL?>/img/logo.png" title="Pixels" alt="Pixels"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <!-- BUSCA -->
        <div class="nav navbar-nav navbar-right" >
          <form class="navbar-form navbar-right" style="display:none" id="form-busca">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Type..">
              </div>
              <button type="submit" class=" btn-default busca">GO</button>
            </form>
        </div>
        <!-- / end busca -->


     <?php 
       
      wp_nav_menu( array(
        'menu' => 'top_menu',
        'depth' => 2,
        'container' => false,
        //classe da ul
        'menu_class' => 'nav navbar-nav navbar-right',
        //Process nav menu using our custom nav walker
        'walker' => new wp_bootstrap_navwalker())
      );
    ?>


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
