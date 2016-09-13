<?php

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

		.metabox-input {
			height: 100%;
			border: 1px solid #CCC;
			border-left: none;
			margin: 0;
			width: 80%
		}

	</style>

		<div class="metabox-item">
			<div class="input-addon-wrapper">
				<input id="preco-input" class="metabox-input" type="text" name="link"
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





// ********************************************* 
//******************* POST TYPE SOBRE
//*********************************************



function post_type_sobre() {

    $nomeSingular = 'Sobre';
    $nomePlural = 'Sobre';
    $description = 'Sobre a Pixels';

    $labels = array(
        'name' => $nomePlural,
        'name_singular' => $nomeSingular,
        'add_new_item' => 'Adicionar novo ' . $nomeSingular,
        'edit_item' => 'Editar ' . $nomeSingular

    );

     $supports = array(
        'title',
        'editor'
    );

    $args = array(
            'labels' => $labels,
            'public' => true,
            'description' => $description,
            'menu_icon' => 'dashicons-businessman',
       		'supports' => $supports
    );

    register_post_type( 'sobre', $args );
}

add_action('init', 'post_type_sobre');

