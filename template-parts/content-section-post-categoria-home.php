<?
$categoria = $args['categoria']; /*pegando args que passei na pagina home */

$argsGetNoticiaMaior = array(
  'post_type' => 'post',
  'posts_per_page' => 1,
  'category_name' => $categoria,
);

$noticiasMaior = new WP_Query( $argsGetNoticiaMaior );

$argsGetNoticiaMais = array(
  'post_type' => 'post',
  'offset' => 1,
  'posts_per_page' => 4,
  'category_name' => $categoria,
);
$noticiasMais = new WP_Query( $argsGetNoticiaMais );

?>

<div class="noticia-maior">
  <?php if ($noticiasMaior->have_posts()) : while ($noticiasMaior->have_posts()) : $noticiasMaior->the_post(); ?>
    <?php  $type = get_post_format( ); ?>
    <div class="capa-noticia-maior">
      <img src="<?php the_post_thumbnail_url(); ?>" alt="imagem">
      <i class="<?php echo  iconsFormatPost(  $type ); ?> "></i>
    </div>
    <div class="desc">
      <a href="<?php the_permalink(); ?>">
        <h1><?php the_title(); ?></h1>
      </a>
      <div class="por">
        <a href="">
          <p>Postado Por:<?php the_author_posts_link(); ?></p>
        </a>
        <p><?= get_the_date(); ?></p>
      </div>
    </div>
    <div class="resumo">
      <a href="<?php the_permalink(); ?>">
        <p><?php the_excerpt(35); ?></p>
      </a>
    </div>
  <?php endwhile; wp_reset_postdata(); endif; ?>
</div>


<div class="list-noticias">
  <ul>
  <?php if ($noticiasMais->have_posts()) : while ($noticiasMais->have_posts()) : $noticiasMais->the_post(); ?>
  <?php  $type = get_post_format( ); ?>

    <li>
      <div class="box-foto-texto">
        <div class="box-image-list">
          <img src="<?php the_post_thumbnail_url(); ?>" alt="imagem">
          <i class="<?php echo  iconsFormatPost(  $type ); ?> "></i>
        </div>
        <div>
          <a href="<?php the_permalink(); ?>">
            <p class="titulo-section-categoria"><?php the_title(); ?></p>
          </a>
        </div>
      </div>
      <div class="postado-por">
            <p>Postado por:<?php the_author_posts_link(); ?></p>
          <small><?= get_the_date(); ?></small>
      </div>
    </li>
  <?php endwhile; wp_reset_postdata(); endif; ?>
  </ul>
</div>