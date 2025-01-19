<?php 
// javascript e css

function cortesBrabosScripts(){


	wp_register_script('gallery', get_template_directory_uri() . '/js/gallery.js', [], false, true);
	
	wp_register_script('homeCarrossel', get_template_directory_uri() . '/js/homeCarrossel.js', [], false, true);
	
	wp_register_script('langSelect', get_template_directory_uri() . '/js/langSelect.js', [], false, true);
	
	wp_register_script('listSwitch', get_template_directory_uri() . '/js/listSwitch.js', [], false, true);

	wp_register_script('mobileHeader', get_template_directory_uri() . '/js/mobileHeader.js', [], false, true);

	wp_register_script('sobre', get_template_directory_uri() . '/js/sobre.js', [], false, true);
	
	wp_register_script('main-script', get_template_directory_uri() . '/script.js', ['gallery', 'homeCarrossel', 'langSelect', 'listSwitch', 'mobileHeader', 'sobre' ], false, true);
	
	wp_enqueue_script('main-script');
	
	function cortesBrabosCSS(){
	
		wp_register_style('main-style', get_template_directory_uri() . 'style.css', [], false, false );
	
		wp_enqueue_style('main-style');
	}
	
	}
	add_action('wp_enqueue_scripts', 'cortesBrabosScripts');


// ---------------------------------------
// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');
// --------------------------------------
// Habilitar Menus
add_theme_support('menus');
// 

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
	remove_post_type_support('page', 'editor');

	$cmb = new_cmb2_box([

		'id' => 'home_box',
		
		'title' => 'Home',
		
		'object_types' => ['page'],
		
		'show_on' => [
		
		'key' => 'page-template',
		
		'value' => 'page-home.php',
		
		],
		
		]);

		$imagens_home = $cmb->add_field([

			'name' => 'Carrossel Home',
			
			'id' => 'imagens_home_group',
			
			'type' => 'group',
			
			'repeatable' => true,
			
			
			'options' => [
			
			'group_title' => 'Imagem {#}',
			
			'add_button' => 'Adicionar Imagem',
			
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
				
				
				$cmb->add_group_field($imagens_home, [
				
				'name' => 'Descrição imagem',
				
				'id' => 'info_img_home',
				
				'type' => 'text',
				
				]);
				
				


}


// pagina individual trabalho
add_action('cmb2_admin_init', 'cmb2_fields_trabalho');

function cmb2_fields_trabalho(){
	remove_post_type_support('trabalhos', 'editor');

	$cmbWorks = new_cmb2_box([

		'id' => 'works_box',
		
		'title' => 'Trabalhos',
		
		'object_types' => ['trabalhos'],
		
		]);

		$cmbWorks->add_field([
			'name' => 'Subtitulo',
			
			'id'   => 'trabalho_subtitulo',
			'type' => 'text',
		]);

		$cmbWorks->add_field([
			'name' => 'Descrição',
			'desc' => 'Descrição do trabalho e informações tecnicas',
			'id'   => 'trabalho_descricao',
			'type' => 'textarea',
		]);

		$imagens_works = $cmbWorks->add_field([
			'name' => 'imagens',
			'id' => 'imagens-work',
			'type' => 'group',
			'repeatable' => true,
			
			
			'options' => [
				'group_title' => 'Imagem {#}',
				'add_button' => 'Adicionar Imagem' ,
				'sortable' => true,
			],
			
			]);

			$cmbWorks->add_group_field($imagens_works, [
				'name' => 'Imagem',
				'id' => 'imagem_w',
				'type' => 'file',
				'preview_size' => [200, 200],
				
				'desc' => 'Lembre-se de sempre colocar a imagem no menor tamanho de arquivo possível, de preferência a JPG.',
				
				'options' => [
					'url' => false,
				],
				
				]);
}

// pagina sobre
add_action('cmb2_admin_init', 'cmb2_fields_sobre');

function cmb2_fields_sobre(){
	$cmbSobre = new_cmb2_box([

		'id' => 'sobre_box',
		
		'title' => 'Sobre',
		
		'object_types' => ['page'],

		'show_on' => [
		
		'key' => 'page-template',
		
		'value' => 'page-sobre.php',
		
		],
		]);

		$cmbSobre->add_field([
			'name' => 'Biografia',
			'id'   => 'biografia',
			'type' => 'textarea',
		]);

		
		$cmbSobre->add_field([
			'name' => 'E-mail',
			'id'   => 'email',
			'type' => 'text',
		]);

		$cmbSobre->add_field([
			'name' => 'Instagram Link',
			'desc' => 'Aqui voce coloca o link do instagram',
			'id'   => 'instagram_link',
			'type' => 'text',
		]);

		$cmbSobre->add_field([
			'name' => 'Telefone',
			'desc' => 'Aqui voce coloca o celular',
			'id'   => 'telefone',
			'type' => 'text',
		]);

		$cmbSobre->add_field([
			'name' => 'Instagram ',
			'desc' => 'Aqui voce coloca o @ do instagram',
			'id'   => 'instagram_arroba',
			'type' => 'text',
		]);

		$cmbSobre->add_field([
			'name' => 'Imagem Bio',
			'id' => 'imagem_bio',
			'type' => 'file',
			'preview_size' => [100, 200],
			
			'desc' => 'Lembre-se de sempre colocar a imagem no menor tamanho de arquivo possível, de preferência a JPG.',
			
			'options' => [
				'url' => false,
			],
			
			]);
}



// -----------------------
// custom post types
// -----------------------


// custom post type trabalhos

function custom_post_type_trabalhos() {

	register_post_type('trabalhos', array(
		'label' => 'trabalhos',
		'description' => 'trabalhos',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'trabalhos', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats'),

		'labels' => array (
			'name' => 'trabalhos',
			'singular_name' => 'trabalhos',
			'menu_name' => 'Trabalhos',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Novo Trabalho',
			'edit' => 'Editar',
			'edit_item' => 'Editar trabalhos',
			'new_item' => 'Novo trabalhos',
			'view' => 'Ver trabalhos',
			'view_item' => 'Ver trabalhos',
			'search_items' => 'Procurar Trabalho',
			'not_found' => 'Nenhum Trabalho Encontrado',
			'not_found_in_trash' => 'Nenhum Trabalho Encontrado no Lixo',
		)
	));
}
add_action('init', 'custom_post_type_trabalhos');

