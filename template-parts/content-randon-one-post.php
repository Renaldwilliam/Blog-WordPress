<?php 

$args = array(
  'orderby'        => 'rand',
  'posts_per_page' => '1',

);
$query = new WP_Query( $args );

?>

<div class='imagem-randon-post'>
  <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
      <a href="<?php echo get_permalink() ?>">
          <?php the_post_thumbnail('', 'full'); ?>
          <p class=""><?php the_title(); ?></p>
      </a>
  <?php endwhile; wp_reset_postdata(); else: ?>
    <p>Não a Posts para essa sessão</p>
  <?php endif;?>
</div>
