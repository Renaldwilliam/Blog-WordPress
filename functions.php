<?php


require_once get_template_directory() . '/inc/customizer/customizer.php';
// load scripts and css
function cgnLoadScripts(){

  //Theme's main styleheet
  wp_enqueue_style( 'cgn-style', get_stylesheet_uri(), array(), '1.0', 'all' );

  /*
  // Import BootStrap CSS, importei o mesmo porem não utilizei prefiro criar o meu CSS
  wp_enqueue_style( 'cgn-bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css', array(), '5.0.0', 'all' );
  // Import BootStrap JS, importei o mesmo porem não utilizei prefiro criar o meu CSS
  wp_enqueue_script( 'cgn-bootstrap-js','https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js', array(), '5.0.0', true );
  */

  /*OWL Carousel */
  wp_enqueue_style( 'owl-carousel-css', get_template_directory_uri() . '/inc/owlCarousel/css/owl.carousel.min.css', array(), '', 'all' );
  wp_enqueue_style( 'owl-carousel-css-2', get_template_directory_uri() . '/inc/owlCarousel/css/owl.theme.default.min.css', array(), '', 'all' );

  wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/inc/owlCarousel/js/owl.carousel.min.js', array(), '', true );

  wp_enqueue_script( 'my-owl-carousel-js', get_template_directory_uri() . '/assets/js/owl.js', array(), '', true );

  //FontAwesome
  wp_enqueue_script( 'cgn-font-awesome', 'https://kit.fontawesome.com/500b5b939a.js', array(), '', true );

}

/* Função responsavel por criar as paginas padroes do site */
function criarPaginasadroes(){

  global $wpdb;

  $tableName =  $wpdb->prefix . 'posts';

  $sql1 = "SELECT post_type, post_name FROM $tableName WHERE post_type = 'page' AND post_name = 'Home'";
  $result1 = $wpdb->get_results($sql1);

  $sql2 = "SELECT post_type, post_name FROM $tableName WHERE post_type = 'page' AND post_name = 'Contato'";
  $result2 = $wpdb->get_results($sql2);

  $sql3 = "SELECT post_type, post_name FROM $tableName WHERE post_type = 'page' AND post_name = 'Equipe'";
  $result3 = $wpdb->get_results($sql3);

  $sql4 = "SELECT post_type, post_name FROM $tableName WHERE post_type = 'page' AND post_title = 'Sobre'";
  $result4 = $wpdb->get_results($sql4);

  if( sizeof($result1) > 0 ) {
          //TODO
  }else {
      $homepage = array(
          'post_type'    => 'page',
          'post_title'    => 'Home',
          'post_content'  => '',
          'post_status'   => 'publish',
          'post_author'   => 1
      ); 
      $homepage_id =  wp_insert_post( $homepage );
  }

  if( sizeof($result2) > 0 ) {
          //TODO
  }else {
      $homepage = array(
          'post_type'    => 'page',
          'post_title'    => 'Contato',
          'post_content'  => '',
          'post_status'   => 'publish',
          'post_author'   => 1
      ); 
      $homepage_id =  wp_insert_post( $homepage );
  }

  if( sizeof($result3) > 0 ) {
          //TODO
  }else {
      $homepage = array(
          'post_type'    => 'page',
          'post_title'    => 'Equipe',
          'post_content'  => '',
          'post_status'   => 'publish',
          'post_author'   => 1
      ); 
      $homepage_id =  wp_insert_post( $homepage );    
  }

  if( sizeof($result4) > 0 ) {
      //TODO
  }else {
      $homepage = array(
          'post_type'    => 'page',
          'post_title'    => 'Sobre',
          'post_content'  => '',
          'post_status'   => 'publish',
          'post_author'   => 1
      ); 
      $homepage_id =  wp_insert_post( $homepage );    
  }


}

function CreateCategory(){

    $categorias = array();

    $my_cat_2 = array('cat_name' => 'Sessão Top', 
    'category_description' => 'Topo',
    'category_nicename' => 'topo',
    'category_parent' => '');

    
    array_push( 
        $categorias, 
        $my_cat_2,
    ); 
    
    for( $i = 0; $i < sizeof( $categorias ); $i++ ) {
        wp_insert_category( $categorias[$i] );
    }

}


/* Configurações do tema Themes Suports e Menus */
function cgnConfigLoad() {

  // This theme uses wp_nav_menu() in two locations.
	register_nav_menus(
		array(
			'cgn_wp_main_menu' 	=> 'Cgn Wp Main Menu',
			'cgn_wp_footer_menu' => 'Cgn Wp Footer Menu',
			'cgn_wp_mobile_menu' => 'Cgn Wp Mobile Menu',
            'cgn_wp_categorias_footer' => 'Cgn Wp Categorias Footer',
            'cgn_wp_categorias_tags' => 'Cgn Wp Tags Footer'
		)
	);

    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array( 'video', 'image', 'audio' ) ); 
    add_theme_support( 'wp-block-styles');
    add_theme_support( 'title-tag' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'custom-logo', array(
		'height' 		=> 100,
		'width'			=> 180,
		'flex-height'	=> true,
		'flex-width'	=> true,
	) );
    
}

function wpdocs_custom_excerpt_length( $length ) {
    return $length;
}

/*HELPS */
function iconsFormatPost($type) {
    switch ($type) {
        case 'video':
            return "fas fa-play-circle";
            break;
        case 'imagem':
            return "far fa-images";
            break;
        case 'audio':
            return "fas fa-microphone-alt";
            break;
        default:
            # code...
            break;
    }
}

/**widgets */
function cgn_sidebars() {
    register_sidebar(
        array(
            'name' => 'Home Page Sidebar',
            'id' => 'sidebar-1',
            'description' => 'Sidebar to be used on Home Page',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'sidebar-2',
            'description' => 'Sidebar to be used on Blog Page',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Services 1',
            'id' => 'services-1',
            'description' => 'Firts Services Area.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Social Icons',
            'id' => 'social-media',
            'description' => 'Place your media icons here',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Services 2',
            'id' => 'services-2',
            'description' => 'Second Services Area.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );


    register_sidebar(
        array(
            'name' => 'Services 3',
            'id' => 'services-3',
            'description' => 'Third Services Area.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
 }


 // engatando minhas configs de load scripts no hooks do wordpress
add_action( 'after_setup_theme', 'cgnLoadScripts' );
add_action( 'after_setup_theme', 'criarPaginasadroes' );
add_action( 'after_setup_theme', 'cgnConfigLoad', 0 );
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length' );
add_action( 'widgets_init', 'cgn_sidebars' );
add_action( 'admin_init','CreateCategory' );

