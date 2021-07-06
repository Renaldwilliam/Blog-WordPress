<?php 

$args = array(
  'orderby'        => 'rand',
  'posts_per_page' => '5',

);
$query = new WP_Query( $args );
$controll  = 0;
?>

<div class="randon-noticias">
  <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
      <aside class="box-noticias-lateral <?php echo $controll == 0 ? 'imagem-full' : 'nada'?>">
        <?php  $type = get_post_format( ); ?>
        <div class="image-maior">
          <div class=" <?php echo $controll == 0 ? 'imagem-full' : 'imagem'?>"" style="background: linear-gradient(to right, rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('<?php echo get_the_post_thumbnail_url(  ); ?>') no-repeat center/cover;"></div>
          <i class="<?php echo  iconsFormatPost(  $type ); ?> "></i> 
        </div>
        <div class="descricao-noticias-lateral">
          <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
          <p><?= get_the_date(); ?></p>
        </div>
      </aside>
  <?php $controll++; endwhile; wp_reset_postdata(); endif; ?>
</div>