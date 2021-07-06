<?php 

$categoria = $args['categoria']; /*pegando args que passei na pagina home */
$argsGetNoticias = array(
  'post_type' => 'post',
  'posts_per_page' => 10,
  'category_name' => $categoria,
);

$noticiasSlide = new WP_Query(  $argsGetNoticias );

?>


<div class="owl-carousel">

  <?php if ($noticiasSlide->have_posts()) : while ($noticiasSlide->have_posts()) : $noticiasSlide->the_post(); ?>
  <?php  $type = get_post_format( ); ?>
    <div class="box-noticias-slide-top" 
        style="background: linear-gradient(to right, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('<?php the_post_thumbnail_url();?>') no-repeat center/cover;">
        <div class="icons-format">
            <i class="<?php echo  iconsFormatPost(  $type ); ?> "></i>
        </div>
        <div class="descricao">
          <div class="categoria">
            <a href=""><?php the_category( ' / ' ); ?></a>
          </div>
          <div class="titulo">
            <a href="<?php the_permalink(); ?>">
              <h1><?php the_title(); ?></h1>
            </a>
          </div>
          <div class="more">
            <a href="">
              <p>Postado por:<?php the_author_posts_link(); ?></p>
            </a>
            <p><?= get_the_date(); ?></p>
          </div>
        </div>
    </div>
    <?php endwhile; wp_reset_postdata(); endif; ?>
</div>