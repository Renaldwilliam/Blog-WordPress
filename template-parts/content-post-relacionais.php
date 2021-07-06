<?php 
$slug = $args['slug']; /*pegando args que passei na pagina home */
$args = array(
  'orderby'        => 'rand',
  'category_name' =>  $slug,
  'posts_per_page' => '3',

);
$query = new WP_Query( $args );

?>
<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
  <aside class="box-posts-relacionais">
    <div class="box-image">
      <a href="<?php the_permalink(); ?>">
         <img src="<?php the_post_thumbnail_url(); ?>" alt="imagem">
      </a>
      <a href="<?php the_permalink(); ?>">
        <h2><?php the_title(); ?></h2>  
      </a>
    </div>
  </aside>
<?php endwhile; wp_reset_postdata(); endif; ?>
