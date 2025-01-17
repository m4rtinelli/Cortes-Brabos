<?php 


// the field
function get_field2($key, $page_id = 0){
	$id = $page_id !== 0 ? $page_id : get_the_ID();
	
	return get_post_meta($id, $key, true);
	
	};
	
	function the_field2 ($key, $page_id = 0){
	
	echo get_field2($key, $page_id);
	
	};

// 

add_action('cmb2_admin_init', 'cmb2_fields_home');

function cmb2_fields_home() {
	remove_post_type_support('home', 'editor');

  $cmb = new_cmb2_box([
    'id' => 'home_box',
    'title' => 'Home',
    'object_types' => ['home'],
		
  ]);

	$imagens_home = $cmb->add_field([
		'name' => 'Carrossel Home',
		'id' => 'imagens_home_group',
		'type' => 'group',
		'repeatable' => true,
		
		'options' => [
			'group_title' => 'Imagem {#}',
			'add_button' => 'Adicionar Imagem' ,
			'sortable' => true,
		],
		
		]);
		
		
		$cmb->add_group_field($imagens_home, [
		'name' => 'Imagem',
		'id' => 'imagem_home',
		'type' => 'file',
		'preview_size' => [200, 200],
		
		'desc' => 'Lembre-se de sempre colocar a imagem no menor tamanho de arquivo possível, de preferência a JPG.',
		
		'options' => [
			'url' => false,
		],
		
		]);
		

		$cmb->add_group_field($imagens_home,[
			'name' => 'Descrição imagem',
			'id' => 'info_img_home',
			'type' => 'text',
		]);


}



// -----------------------
// custom post types
// -----------------------


// custom field home
function custom_post_type_home() {

	register_post_type('home', array(
		'label' => 'Home',
		'description' => 'home',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'home', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats'),

		'labels' => array (
			'name' => 'home',
			'singular_name' => 'home',
			'menu_name' => 'Home',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Novo Trabalho (home)',
			'edit' => 'Editar',
			'edit_item' => 'Editar home',
			'new_item' => 'Novo home',
			'view' => 'Ver home',
			'view_item' => 'Ver home',
			'search_items' => 'Procurar Trabalho',
			'not_found' => 'Nenhum Trabalho Encontrado',
			'not_found_in_trash' => 'Nenhum Trabalho Encontrado no Lixo',
		)
	));
}
add_action('init', 'custom_post_type_home');


