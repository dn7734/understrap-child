<?php
// Register Custom Post Type video
if ( ! function_exists('videos_post_type') ) {

  function videos_post_type() {
    $labels = array(
      'name'                  => _x( 'Відеогалерея', 'Post Type General Name', 'text_domain' ),
      'singular_name'         => _x( 'Video', 'Post Type Singular Name', 'text_domain' ),
      'menu_name'             => __( 'Відеогалерея', 'text_domain' ),
      'name_admin_bar'        => __( 'Відеогалерея', 'text_domain' ),
      'archives'              => __( 'Архів Відеогалерей', 'text_domain' ),
      'parent_item_colon'     => __( 'Батьківська', 'text_domain' ),
      'all_items'             => __( 'Вся Відеогалерея', 'text_domain' ),
      'add_new_item'          => __( 'Створити Відеогалерею', 'text_domain' ),
      'add_new'               => __( 'Створити', 'text_domain' ),
      'new_item'              => __( 'Нова Відеогалерея', 'text_domain' ),
      'edit_item'             => __( 'Редагувати Відеогалерею', 'text_domain' ),
      'update_item'           => __( 'Оновити Відеогалерею', 'text_domain' ),
      'view_item'             => __( 'Переглянути Відеогалерею', 'text_domain' ),
      'search_items'          => __( 'Шукати Відеогалерею', 'text_domain' ),
      'not_found'             => __( 'Не знайдено', 'text_domain' ),
      'not_found_in_trash'    => __( 'Не знайдено у кошику', 'text_domain' ),
      'featured_image'        => __( 'Зображення', 'text_domain' ),
      'set_featured_image'    => __( 'Встановити головне зображення', 'text_domain' ),
      'remove_featured_image' => __( 'Видалити головне зображення', 'text_domain' ),
      'use_featured_image'    => __( 'Як головне зображення', 'text_domain' ),
      'insert_into_item'      => __( 'Додати', 'text_domain' ),
      'uploaded_to_this_item' => __( 'Завантажити', 'text_domain' ),
      'items_list'            => __( 'Список', 'text_domain' ),
      'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
      'filter_items_list'     => __( 'Фільтрувати', 'text_domain' ),
      );
    $rewrite = array(
      'slug'                  => 'videos',
      'with_front'            => true,
      'pages'                 => true,
      'feeds'                 => true,
      );
    $args = array(
      'label'                 => __( 'Video', 'text_domain' ),
      'description'           => __( 'Post Type Description', 'text_domain' ),
      'labels'                => $labels,
      'taxonomies'            => array( 'videos_category', 'videos_tag' ),
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
      'menu_position'         => 10,
      'menu_icon'             => 'dashicons-video-alt3',
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => true,
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'rewrite'               => $rewrite,
      'capability_type'       => 'page',
      );
    register_post_type( 'video', $args );

  }
  add_action( 'init', 'videos_post_type', 0 );
}

// Register Custom Post Type fotogallery
if ( ! function_exists('fotogallerys_post_type') ) {

  function fotogallerys_post_type() {
    $labels = array(
      'name'                  => _x( 'Фотогалерея', 'Post Type General Name', 'text_domain' ),
      'singular_name'         => _x( 'Фотогалерея', 'Post Type Singular Name', 'text_domain' ),
      'menu_name'             => __( 'Фотогалерея', 'text_domain' ),
      'name_admin_bar'        => __( 'Фотогалерея', 'text_domain' ),
      'archives'              => __( 'Фотогалерея ', 'text_domain' ),
      'parent_item_colon'     => __( 'Parent Fotogallery:', 'text_domain' ),
      'all_items'             => __( 'Всі Фотогалереї', 'text_domain' ),
      'add_new_item'          => __( 'Створити Фотогалерею', 'text_domain' ),
      'add_new'               => __( 'Створити', 'text_domain' ),
      'new_item'              => __( 'Нова Фотогалерея', 'text_domain' ),
      'edit_item'             => __( 'Редагувати Фотогалерею', 'text_domain' ),
      'update_item'           => __( 'Оновити Фотогалерею', 'text_domain' ),
      'view_item'             => __( 'Переглянути Фотогалерею', 'text_domain' ),
      'search_items'          => __( 'Шукати Фотогалерею', 'text_domain' ),
      'not_found'             => __( 'Not found', 'text_domain' ),
      'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
      'featured_image'        => __( 'Зображення', 'text_domain' ),
      'set_featured_image'    => __( 'Встановити головне зображення', 'text_domain' ),
      'remove_featured_image' => __( 'Видалити головне зображення', 'text_domain' ),
      'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
      'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
      'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
      'items_list'            => __( 'Items list', 'text_domain' ),
      'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
      'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
      );
    $rewrite = array(
      'slug'                  => 'fotogallerys',
      'with_front'            => true,
      'pages'                 => true,
      'feeds'                 => true,
      );
    $args = array(
      'label'                 => __( 'Фотогалерея', 'text_domain' ),
      'description'           => __( 'Post Type Description', 'text_domain' ),
      'labels'                => $labels,
      'taxonomies'            => array( 'fotogallerys_category', 'fotogallerys_tag' ),
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
      'menu_position'         => 9,
      'menu_icon'             => 'dashicons-visibility',
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => true,
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'rewrite'               => $rewrite,
      'capability_type'       => 'page',
      );
    register_post_type( 'fotogallery', $args );

  }
  add_action( 'init', 'fotogallerys_post_type', 0 );
}


// Register Custom Post Type rozporyadzhennya
if ( ! function_exists('rozporyadzhennya_post_type') ) {

  function rozporyadzhennya_post_type() {
    $labels = array(
      'name'                  => _x( 'Розпорядження', 'Post Type General Name', 'text_domain' ),
      'singular_name'         => _x( 'Розпорядження', 'Post Type Singular Name', 'text_domain' ),
      'menu_name'             => __( 'Розпорядження', 'text_domain' ),
      'name_admin_bar'        => __( 'Розпорядження', 'text_domain' ),
      'archives'              => __( 'Розпорядження ', 'text_domain' ),
      'parent_item_colon'     => __( 'Parent Розпорядження:', 'text_domain' ),
      'all_items'             => __( 'Всі Розпорядження', 'text_domain' ),
      'add_new_item'          => __( 'Створити Розпорядження', 'text_domain' ),
      'add_new'               => __( 'Створити', 'text_domain' ),
      'new_item'              => __( 'Нове Розпорядження', 'text_domain' ),
      'edit_item'             => __( 'Редагувати Розпорядження', 'text_domain' ),
      'update_item'           => __( 'Оновити Розпорядження', 'text_domain' ),
      'view_item'             => __( 'Переглянути Розпорядження', 'text_domain' ),
      'search_items'          => __( 'Шукати Розпорядження', 'text_domain' ),
      'not_found'             => __( 'Not found', 'text_domain' ),
      'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
      'featured_image'        => __( 'Зображення', 'text_domain' ),
      'set_featured_image'    => __( 'Встановити головне зображення', 'text_domain' ),
      'remove_featured_image' => __( 'Видалити головне зображення', 'text_domain' ),
      'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
      'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
      'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
      'items_list'            => __( 'Items list', 'text_domain' ),
      'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
      'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
      );
    $rewrite = array(
      'slug'                  => 'rozporyadzhennya',
      'with_front'            => true,
      'pages'                 => true,
      'feeds'                 => true,
      );
    $args = array(
      'label'                 => __( 'Розпорядження', 'text_domain' ),
      'description'           => __( 'Post Type Description', 'text_domain' ),
      'labels'                => $labels,
      'taxonomies'            => array( 'rozporyadzhennya_category', 'rozporyadzhennya_tag' ),
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'supports'              => array( 'title', 'thumbnail' ),
      'menu_position'         => 4,
      'menu_icon'             => 'dashicons-media-text',
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => true,
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'rewrite'               => $rewrite,
      'capability_type'       => 'page',
      );
    register_post_type( 'rozporyadzhennya', $args );

  }
  add_action( 'init', 'rozporyadzhennya_post_type', 0 );
}

// Register Custom Post Type rishennyavikon
if ( ! function_exists('rishennyavikon_post_type') ) {

  function rishennyavikon_post_type() {
    $labels = array(
      'name'                  => _x( 'Рішення виконкому', 'Post Type General Name', 'text_domain' ),
      'singular_name'         => _x( 'Рішення виконкому', 'Post Type Singular Name', 'text_domain' ),
      'menu_name'             => __( 'Рішення виконкому', 'text_domain' ),
      'name_admin_bar'        => __( 'Рішення виконкому', 'text_domain' ),
      'archives'              => __( 'Рішення виконкому ', 'text_domain' ),
      'parent_item_colon'     => __( 'Parent rishennyavikon:', 'text_domain' ),
      'all_items'             => __( 'Всі Рішення виконкому', 'text_domain' ),
      'add_new_item'          => __( 'Створити Рішення виконкому', 'text_domain' ),
      'add_new'               => __( 'Створити', 'text_domain' ),
      'new_item'              => __( 'Нове Рішення виконкому', 'text_domain' ),
      'edit_item'             => __( 'Редагувати Рішення виконкому', 'text_domain' ),
      'update_item'           => __( 'Оновити Рішення виконкому', 'text_domain' ),
      'view_item'             => __( 'Переглянути Рішення виконкому', 'text_domain' ),
      'search_items'          => __( 'Шукати Рішення виконкому', 'text_domain' ),
      'not_found'             => __( 'Not found', 'text_domain' ),
      'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
      'featured_image'        => __( 'Зображення', 'text_domain' ),
      'set_featured_image'    => __( 'Встановити головне зображення', 'text_domain' ),
      'remove_featured_image' => __( 'Видалити головне зображення', 'text_domain' ),
      'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
      'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
      'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
      'items_list'            => __( 'Items list', 'text_domain' ),
      'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
      'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
      );
    $rewrite = array(
      'slug'                  => 'rishennyavikon',
      'with_front'            => true,
      'pages'                 => true,
      'feeds'                 => true,
      );
    $args = array(
      'label'                 => __( 'Рішення виконкому', 'text_domain' ),
      'description'           => __( 'Post Type Description', 'text_domain' ),
      'labels'                => $labels,
      'taxonomies'            => array( 'rishennyavikon_category', 'rishennyavikon_tag' ),
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'supports'              => array( 'title', 'thumbnail' ),
      'menu_position'         => 4,
      'menu_icon'             => 'dashicons-media-document',
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => true,
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'rewrite'               => $rewrite,
      'capability_type'       => 'page',
      );
    register_post_type( 'rishennyavikon', $args );

  }
  add_action( 'init', 'rishennyavikon_post_type', 0 );
}

// Register Custom Post Type rishennyaradi
if ( ! function_exists('rishennyaradi_post_type') ) {

  function rishennyaradi_post_type() {
    $labels = array(
      'name'                  => _x( 'Рішення сесій', 'Post Type General Name', 'text_domain' ),
      'singular_name'         => _x( 'Рішення сесій', 'Post Type Singular Name', 'text_domain' ),
      'menu_name'             => __( 'Рішення сесій', 'text_domain' ),
      'name_admin_bar'        => __( 'Рішення сесій', 'text_domain' ),
      'archives'              => __( 'Рішення сесій ', 'text_domain' ),
      'parent_item_colon'     => __( 'Parent Рішення сесії:', 'text_domain' ),
      'all_items'             => __( 'Всі Рішення сесій', 'text_domain' ),
      'add_new_item'          => __( 'Створити Рішення сесії', 'text_domain' ),
      'add_new'               => __( 'Створити', 'text_domain' ),
      'new_item'              => __( 'Нове Рішення сесії', 'text_domain' ),
      'edit_item'             => __( 'Редагувати Рішення сесії', 'text_domain' ),
      'update_item'           => __( 'Оновити Рішення сесії', 'text_domain' ),
      'view_item'             => __( 'Переглянути Рішення сесії', 'text_domain' ),
      'search_items'          => __( 'Шукати Рішення сесії', 'text_domain' ),
      'not_found'             => __( 'Not found', 'text_domain' ),
      'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
      'featured_image'        => __( 'Зображення', 'text_domain' ),
      'set_featured_image'    => __( 'Встановити головне зображення', 'text_domain' ),
      'remove_featured_image' => __( 'Видалити головне зображення', 'text_domain' ),
      'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
      'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
      'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
      'items_list'            => __( 'Items list', 'text_domain' ),
      'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
      'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
      );
    $rewrite = array(
      'slug'                  => 'rishennyaradi',
      'with_front'            => true,
      'pages'                 => true,
      'feeds'                 => true,
      );
    $args = array(
      'label'                 => __( 'Рішення сесій', 'text_domain' ),
      'description'           => __( 'Post Type Description', 'text_domain' ),
      'labels'                => $labels,
      'taxonomies'            => array( 'rishennyaradi_category', 'rishennyaradi_tag' ),
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'supports'              => array( 'title', 'thumbnail' ),
      'menu_position'         => 4,
      'menu_icon'             => 'dashicons-media-spreadsheet',
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => true,
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'rewrite'               => $rewrite,
      'capability_type'       => 'page',
      );
    register_post_type( 'rishennyaradi', $args );

  }
  add_action( 'init', 'rishennyaradi_post_type', 0 );
}

function cptui_register_my_taxes() {

  /**
   * Taxonomy: Категорія.
   */

  $labels = array(
    "name" => __( 'Категорія РГ', 'bs' ),
    "singular_name" => __( 'Категорія РГ', 'bs' ),
  );

  $args = array(
    "label" => __( 'Категорія РГ', 'bs' ),
    "labels" => $labels,
    "public" => true,
    "hierarchical" => true,
    "label" => "Категорія РГ",
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => array( 'slug' => 'rozporyadzhennya_cat', 'with_front' => true, ),
    "show_admin_column" => false,
    'meta_box_cb' => 'post_categories_meta_box', //post_categories_meta_box - показывать как категории; post_tags_meta_box - показывать как метки
    "show_in_rest" => false,
    "rest_base" => "",
    "show_in_quick_edit" => true,
  );
  register_taxonomy( "rozporyadzhennya_cat", array( "rozporyadzhennya" ), $args );

  /**
   * Taxonomy: Категорія.
   */

  $labels = array(
    "name" => __( 'Категорія РВ', 'bs' ),
    "singular_name" => __( 'Категорія РВ', 'bs' ),
  );

  $args = array(
    "label" => __( 'Категорія РВ', 'bs' ),
    "labels" => $labels,
    "public" => true,
    "hierarchical" => true,
    "label" => "Категорія РВ",
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => array( 'slug' => 'rishennyavikon_cat', 'with_front' => true, ),
    "show_admin_column" => false,
    'meta_box_cb' => 'post_categories_meta_box', //post_categories_meta_box - показывать как категории; post_tags_meta_box - показывать как метки
    "show_in_rest" => false,
    "rest_base" => "",
    "show_in_quick_edit" => true,
  );
  register_taxonomy( "rishennyavikon_cat", array( "rishennyavikon" ), $args );

  /**
   * Taxonomy: Категорія.
   */

  $labels = array(
    "name" => __( 'Категорія РС', 'bs' ),
    "singular_name" => __( 'Категорія РС', 'bs' ),
  );

  $args = array(
    "label" => __( 'Категорія РС', 'bs' ),
    "labels" => $labels,
    "public" => true,
    "hierarchical" => true,
    "label" => "Категорія РС",
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => array( 'slug' => 'rishennyaradi_cat', 'with_front' => true, ),
    "show_admin_column" => false,
    'meta_box_cb' => 'post_categories_meta_box', //post_categories_meta_box - показывать как категории; post_tags_meta_box - показывать как метки
    "show_in_rest" => false,
    "rest_base" => "",
    "show_in_quick_edit" => true,
  );
  register_taxonomy( "rishennyaradi_cat", array( "rishennyaradi" ), $args );
}

add_action( 'init', 'cptui_register_my_taxes' );

?>