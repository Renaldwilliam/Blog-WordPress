<?php 

$categoriaPrimerioCaroul = get_theme_mod( 'set_noticia_carousel_top');
$categoriaPrimerioSec = get_theme_mod( 'set_noticia_primeira_sec');
$categoriaSegundaSec = get_theme_mod( 'set_noticia_segunda_sec');
$categoriaSegundoCaroul = get_theme_mod( 'set_noticia_carousel_seg');


?>
<?php get_header(); ?>
  <div class="container">

    <section id="noticias-topo">
      <?php get_template_part( 'template-parts/content', 'section-noticias-top' ); ?>
    </section>

    <div class="title-categoria">
        <p>Destaques</p>
    </div>

    <section id="noticias-slide-top">
      <?php get_template_part( 'template-parts/content', 'section-slide-destaque', array( 'categoria' => $categoriaPrimerioCaroul ) ); ?>
    </section>

    <div class="title-categoria">
        <p><?php echo $categoriaPrimerioSec?></p>
    </div>

    <section id="destaques">
      <div class=news>
        <?php get_template_part( 'template-parts/content', 'section-post-categoria-home', array( 'categoria' => $categoriaPrimerioSec ) ); ?>

        <div id="carousel-no-meio-das-noticias" class="carousel-noticias">
          <div class="title-categoria">
            <p><?php echo $categoriaSegundoCaroul; ?></p>
          </div>
          <?php get_template_part( 'template-parts/content', 'section-slide-destaque', array( 'categoria' => $categoriaSegundoCaroul ) ); ?>
          
          <div class="title-categoria mb-2">
            <p><?php echo $categoriaSegundaSec; ?></p>
          </div>

        </div>
        
        <?php get_template_part( 'template-parts/content', 'section-post-categoria-home', array( 'categoria' => $categoriaSegundaSec ) ); ?>
      </div>

      <div class="sidebar d-none-sm">
        <?php get_sidebar( ); ?>
      </div>

    </section>
   
  </div>
<?php get_footer(); ?>