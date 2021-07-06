<?php 
  function cgnCustomizer( $wp_customize ) {
    /*  inicio Core principal */ 
  $wp_customize->add_section(
      'sec_copyright', array(
          'title' => 'Copyright Settings',
          'description' => 'Copyright Section',
          'priority' => '160',
      )
    );

  $wp_customize->add_setting(
      'set_color', array(
          'type' => 'theme_mod',
          'default' => '#CCCCCC',
          'sanitize_callback' => 'sanitize_hex_color'
      )
    );

  $wp_customize->add_control(
      new WP_Customize_Color_Control(
          $wp_customize,
          'set_color', array(
              'label' => 'Cor do tema',
              'section' => 'sec_copyright'
          )
      )
   );

    /*  Fim Core principal */ 

    /*  inicio Categorias Pagina Inicial */ 
  $wp_customize->add_section(
      'sec_copyright', array(
          'title' => 'Exibição de Notícias',
          'description' => 'Escolha qual categoria de noticia quer exibir na página inicial.',
          'priority' => '160',
      )
    );

  $wp_customize->add_setting(
      'set_noticia_carousel_top', array(
          'type' => 'theme_mod',
          'default' => '',
          'sanitize_callback' => 'sanitize_text_field'
      )
    );

  $wp_customize->add_control(
    'set_noticia_carousel_top' , array(
        'label' => 'Escolha a categoria para exibir no 1 carousel to topo',
        'description' => 'digite o slug da categoria',
        'section' => 'sec_copyright',
        'type' => 'text'
      )
    );

    /** */

    $wp_customize->add_setting(
      'set_noticia_primeira_sec', array(
          'type' => 'theme_mod',
          'default' => '',
          'sanitize_callback' => 'sanitize_text_field'
      )
    );

  $wp_customize->add_control(
    'set_noticia_primeira_sec' , array(
        'label' => 'Escolha a categoria para exibir na 1 sessão de Notícias',
        'description' => 'digite o slug da categoria',
        'section' => 'sec_copyright',
        'type' => 'text'
      )
    );

    /** */

  $wp_customize->add_setting(
      'set_noticia_segunda_sec', array(
          'type' => 'theme_mod',
          'default' => '',
          'sanitize_callback' => 'sanitize_text_field'
      )
    );

  $wp_customize->add_control(
    'set_noticia_segunda_sec' , array(
        'label' => 'Escolha a categoria para exibir na 2 sessão de Notícias',
        'description' => 'digite o slug da categoria',
        'section' => 'sec_copyright',
        'type' => 'text'
      )
    );

    /** */

    $wp_customize->add_setting(
      'set_noticia_carousel_seg', array(
          'type' => 'theme_mod',
          'default' => '',
          'sanitize_callback' => 'sanitize_text_field'
      )
    );

  $wp_customize->add_control(
    'set_noticia_carousel_seg' , array(
        'label' => 'Escolha a categoria para exibir no 2 carousel to topo',
        'description' => 'digite o slug da categoria',
        'section' => 'sec_copyright',
        'type' => 'text'
      )
    );


  }

  add_action( 'customize_register', 'cgnCustomizer' ); 
?>