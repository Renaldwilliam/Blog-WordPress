
<?php get_header( 'home' );?>
  <div class="container">
    <?php the_archive_title( '<h1 class="arquive-title">', '</h1>' );?>
    <section id="pagina-categoria">
      <div class="posts-categoria">
          <?php get_template_part( 'template-parts/content', 'categoria')?>
      </div>
      <div class="sidebar d-none-sm">
         <?php get_sidebar( ); ?>
      </div>
    </section>
  </div>
 <?php get_footer( 'home' ); ?>