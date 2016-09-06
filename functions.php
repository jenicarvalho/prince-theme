<?php
	add_theme_support( 'post-thumbnails' );


	add_action('after_setup_theme', 'custom_setup');

	//permite uso do menu do bootstrap com wp_nav
	require_once('wp_bootstrap_navwalker.php');

function custom_setup(){

	add_action('wp_enqueue_scripts', 'custom_formats');


	//menu
	register_nav_menu('menu-header', 'Menu Principal');
	
	//thumbs	
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

    register_post_type( 'imovel', $args );
}

add_action('init', 'cadastrando_post_type_agencias');


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
define('PXS_SITE_NAME', get_bloginfo('name'));

