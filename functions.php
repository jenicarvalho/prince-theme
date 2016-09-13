<?php


	add_action('after_setup_theme', 'custom_setup');

	//permite uso do menu do bootstrap com wp_nav
	require_once('wp_bootstrap_navwalker.php');

function custom_setup(){

	add_action('wp_enqueue_scripts', 'custom_formats');


	//menu
	register_nav_menu('menu-header', 'Menu Principal');
	
	//thumbs	
	add_theme_support( 'post-thumbnails' );
}


function custom_formats(){


	//registra os estilos corretamente
	wp_register_style('custom_font', 'https://fonts.googleapis.com/css?family=Josefin+Sans:100,300|Open+Sans', null, null, 'all');
	wp_register_style('boot', PXS_THEME_URL . '/css/bootstrap.min.css', null, null, 'all');
	wp_register_style('stl', PXS_THEME_URL . '/css/style.css', null, null, 'all');
	wp_register_style('font', PXS_THEME_URL . '/css/font-awesome.min.css', null, null, 'all');

	//insere os estilos
	wp_enqueue_style('custom_font');
	wp_enqueue_style('boot');
	wp_enqueue_style('stl');
	wp_enqueue_style('font');


	//registra scripts corretamente
	 wp_register_script('js', PXS_THEME_URL . '/js/jquery.min.js', null, null, 'all');
	 wp_register_script('bootjs', PXS_THEME_URL . '/js/bootstrap.min.js', null, null, 'all');
	 wp_register_script('customjs', PXS_THEME_URL . '/js/custom.js', null, null, 'all');


	//insere os scripts
	wp_enqueue_script('js');
	wp_enqueue_script('bootjs');
	wp_enqueue_script('customjs');


}


/**

 * Copyright Pixels

 * */

add_filter('admin_footer_text', 'add_copyright');

function add_copyright() {

	echo '© <a href="http://agenciapixels.com/">Pixels</a> - Desenvolvimento Pixels';

}


// POST TYPES AGÊNCIAS


function cadastrando_post_type_agencias() {

    $nomeSingular = 'Agência';
    $nomePlural = 'Agências';
    $description = 'Agências atendidas pela Pixels';

    $labels = array(
        'name' => $nomePlural,
        'name_singular' => $nomeSingular,
        'add_new_item' => 'Adicionar nova ' . $nomeSingular,
        'edit_item' => 'Editar ' . $nomeSingular

    );

     $supports = array(
        'title',
        'editor',
        'thumbnail'
    );

    $args = array(
            'labels' => $labels,
            'public' => true,
            'description' => $description,
            'menu_icon' => 'dashicons-awards',
       		'supports' => $supports
    );

    register_post_type( 'agencias', $args );
}

add_action('init', 'cadastrando_post_type_agencias');



//adiciona metabox de links das agencias

function link_agencias() {
	add_meta_box(
		'link-agencia',
		'Endereço da agência',
		'link_agencia',
		'agencias',
		'normal',
		'default'
	);
}

add_action('add_meta_boxes', 'link_agencias');

function link_agencia( $post ) { 
	$links_agencia = get_post_meta( $post->ID ); ?>

	<style>

		.maluras-metabox-input {
			height: 100%;
			border: 1px solid #CCC;
			border-left: none;
			margin: 0;
			width: 80%
		}

	</style>

		<div class="maluras-metabox-item">
			<div class="input-addon-wrapper">
				<input id="maluras-preco-input" class="maluras-metabox-input" type="text" name="link"
				value="<?= $links_agencia['link'][0]; ?>" placeholder="http://exemplo.com">
			</div>
		</div>
<?php

}

function salvar_meta_info_agencias( $post_id ) {
	if( isset($_POST['link']) ) {
		update_post_meta( $post_id, 'link', sanitize_text_field( $_POST['link'] ) );
	}

}

add_action('save_post', 'salvar_meta_info_agencias');




/*********** POSTS MAIS VISTOS */

//realiza a conta
function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


function wpb_track_post_views ($post_id) {
    if ( !is_single() ) return;
    if ( empty ( $post_id) ) {
        global $post;
        $post_id = $post->ID;    
    }
    wpb_set_post_views($post_id);
}
add_action( 'wp_head', 'wpb_track_post_views');

//recupera posts
function wpb_get_post_views($postID){
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }
}




//função de titulo

function titulo(){
	bloginfo('name');
	if(!is_home()){
		echo " | ";
	 	the_title();
	}
}

//função de data

function get_data(){
	$data = explode("-",get_the_date( 'd-m-Y' ));

	$mes = $data[1];

	switch ($mes) {
		case '01':
			$mes = "Jan";
			break;
		case '02':
			$mes = "Fev";
			break;
		case '03':
			$mes = "Mar";
			break;
		case '04':
			$mes = "Abr";
			break;
		case '05':
			$mes = "Mai";
			break;
		case '06':
			$mes = "Jun";
			break;
		case '07':
			$mes = "Jul";
			break;
		case '08':
			$mes = "Ago";
			break;
		case '09':
			$mes = "Set";
			break;
		case '10':
			$mes = "Out";
			break;
		case '11':
			$mes = "Nov";
			break;
		case '12':
			$mes = "Dez";
			break;

	}

	return $data[0] . ' ' . $mes .' ' . $data[2] ;

}


//define constantes que ajudarão a evitar várias requisições
define('PXS_URL', get_home_url());
define('PXS_THEME_URL', get_bloginfo('template_url'));

