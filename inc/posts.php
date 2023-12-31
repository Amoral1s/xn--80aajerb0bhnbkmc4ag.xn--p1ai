<?php 
//новая длина размера цитаты start
function wph_excerpt_length($length) {
	return 20; 
}
add_filter('excerpt_length', 'wph_excerpt_length');


add_filter('excerpt_more', function($more) {
	return '...';
});

//Регистрация нового типа поста
add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type('in_work', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Проекты в работе', // основное название для типа записи
			'singular_name'      => 'Проекты в работе', // название для одной записи этого типа
			'add_new'            => 'Добавить проект', // для добавления новой записи
			'add_new_item'       => 'Добавление проекта', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование проекта', // для редактирования типа записи
			'new_item'           => 'Новый проект', // текст новой записи
			'view_item'          => 'Смотреть проект', // для просмотра записи этого типа.
			'search_items'       => 'Искать проект', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Проекты в работе', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-format-gallery', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array('title','editor','author','thumbnail','excerpt','editor','trackbacks','comments'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	)
 ); 
 register_post_type('end', array(
	'label'  => null,
	'labels' => array(
		'name'               => 'Завершенные проекты', // основное название для типа записи
		'singular_name'      => 'Завершенные проекты', // название для одной записи этого типа
		'add_new'            => 'Добавить проект', // для добавления новой записи
		'add_new_item'       => 'Добавление проекта', // заголовка у вновь создаваемой записи в админ-панели.
		'edit_item'          => 'Редактирование проекта', // для редактирования типа записи
		'new_item'           => 'Новый проект', // текст новой записи
		'view_item'          => 'Смотреть проект', // для просмотра записи этого типа.
		'search_items'       => 'Искать проект', // для поиска по этим типам записи
		'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
		'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
		'parent_item_colon'  => '', // для родителей (у древовидных типов)
		'menu_name'          => 'Завершенные проекты', // название меню
	),
	'description'         => '',
	'public'              => true,
	'publicly_queryable'  => true, // зависит от public
	'exclude_from_search' => false, // зависит от public
	'show_ui'             => true, // зависит от public
	'show_in_menu'        => true, // показывать ли в меню адмнки
	'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
	'show_in_nav_menus'   => true, // зависит от public
	'show_in_rest'        => true, // добавить в REST API. C WP 4.7
	'rest_base'           => null, // $post_type. C WP 4.7
	'menu_position'       => 4,
	'menu_icon'           => 'dashicons-format-gallery', 
	//'capability_type'   => 'post',
	//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
	//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
	'hierarchical'        => false,
	'supports'            => array('title','editor','author','thumbnail','excerpt','editor','trackbacks','comments'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
	'taxonomies'          => array(),
	'has_archive'         => false,
	'rewrite'             => true,
	'query_var'           => true,
)
); 
} 

add_filter( 'get_the_archive_title', 'artabr_remove_name_cat' );
function artabr_remove_name_cat( $title ){
  if ( is_category() ) {
    $title = single_cat_title( '', false );
  } elseif ( is_tag() ) {
    $title = single_tag_title( '', false );
  }
  return $title;
}



add_action( 'after_setup_theme', 'true_add_image_size' );
 
function true_add_image_size() {
	add_image_size( 'news', 670, 433, true );
}