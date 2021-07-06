<section id="sidebar">
  <div class="input-pesquisa">
    <i class="fas fa-search"></i>
    <input type="text">
  </div>

  <div class="title-categoria">
      <p>Random Posts</p>
  </div>
  <?php get_template_part( 'template-parts/content', 'randon-posts-sidebar' ); ?>
  
  <div class="title-categoria">
      <p>Propaganda</p>
  </div>

  <div class="ads-laterla mt-2">
    <img src="<?php echo get_template_directory_uri(  ) . '/assets/img/ads-lateral.png' ?>" alt="anuncio lateral">
  </div>
</section>