<!DOCTYPE html>
<html <?php language_attributes( ); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>

</head>
<body <?php body_class(  ); ?>>

<?php $corPrincipal = get_theme_mod( 'set_color');  $corPrincipal == '' ? $corPrincipal = '#ea0a3e' : $corPrincipal = $corPrincipal ?>
<style>
  :root {
    --principal: <?php echo  $corPrincipal ?> !important;
  }
</style>

  <header class="container d-flex space-between aling-items-center logo-ads">
    <div class="logo">
      <?php if ( has_custom_logo() ): ?>
          <?php the_custom_logo(); ?>
      <?php else: ?>
        <a href="/" class="title-site">
          <h1 class="title-init">News</h1>
          <h1 class="title-end">Center</h1>
        </a>
      <?php endif; ?>
    </div>
    <div class="ads-top d-none-sm">
      <a href="">
        <img src="<?php echo get_template_directory_uri() . '/assets/img/anuncioTop.png'; ?>" alt="">
      </a>
    </div>
  </header>
  <main class="d-none-sm">
    <section id="menu-top">
      <nav >
        <?php 
          wp_nav_menu( 
              array( 
                  'theme_location' => 'cgn_wp_main_menu',
                  'container_class' => 'main-nav',
              ) 
          ); 
        ?>
      </nav>
    </section>
  </main>

