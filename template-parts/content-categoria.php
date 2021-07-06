<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article <?php post_class("box-noticias-pagina-categoria"); ?>>
    <a href="<?php the_permalink() ?>">
      <div class="box-image-categoria">
        <?php the_post_thumbnail( '' ); ?>
      </div>
      <div class="more-categoria">
        <h1><?php the_title(); ?></h1>
        <p>Postado por: <?php the_author_posts_link(); ?></p>
        <p>data: <?php echo get_the_date(); ?></p>
      </div>    
    </a>	
  </article>
<?php endwhile;
   the_posts_pagination( array (
    'prev_text' => 'Previuos',
    'next_text' => 'Next',
    )
);
  wp_reset_postdata(); 
  endif; 
?>
