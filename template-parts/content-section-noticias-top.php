<?php 
  
  /* logo abaixo estou usando o WP_query para pegar os posts da categoria que quero */
  $argsGetNoticias = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'category_name' => 'topo',
  );
  $noticiasTopo = new WP_Query(  $argsGetNoticias );

  $arrayNoticias = $noticiasTopo->posts; // pegando só os posts para distribuir
?>

<?php if( sizeof( $arrayNoticias ) < 3 ): ?>
  <h3>é necessario 3 Posts na categoria Sessão Top para habilitar essa parte</h3>
<?php else: ?>
<div class="n-principal" style="background: linear-gradient(to right, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('<?php echo get_the_post_thumbnail_url( $arrayNoticias[0]->ID )?>') no-repeat center/cover;">
  <?php  $type = get_post_format( $arrayNoticias[0]->ID );?>
  <div class="icons-format">
    <i class="<?php echo  iconsFormatPost(  $type );  ?>"></i>
  </div>
  <div class="descricao">
      <div class="categoria">
        <a href="<? get_permalink( $arrayNoticias[0]->ID )?>"><?php echo get_the_category(  $arrayNoticias[0]->ID )[0]->name; ?></a>
      </div>
      <div class="titulo">
        <a href="<? echo get_permalink( $arrayNoticias[0]->ID )?>">
          <h1><?php echo $arrayNoticias[0]->post_title ?></h1>
        </a>
      </div>
      <div class="more">
        <a href="<?php echo get_author_posts_url( $arrayNoticias[0]->post_author ); ?>">
          <p>Postado por: <?php echo get_the_author_meta('nickname', $arrayNoticias[0]->post_author ); ?></p>
        </a>
        <p><?php echo get_the_date('', $arrayNoticias[0]->ID ) ?></p>
      </div>
  </div>
</div>

<div class="n-lateral d-none-sm">
    <?php for( $i = 1;  $i <= 2 ; $i++ ): ?>
      <div class="box-noticia"
          style="background: linear-gradient(to right, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('<?php echo get_the_post_thumbnail_url( $arrayNoticias[$i]->ID ); ?>') no-repeat center/cover;">
        <?php  $type = get_post_format( $arrayNoticias[$i]->ID );?>
        <div class="icons-format">
          <i class="<?php echo  iconsFormatPost(  $type );  ?>"></i>
        </div>
        <div class="descricao">
          <div class="categoria">
            <a href=""><?php echo get_the_category(  $arrayNoticias[$i]->ID )[0]->name; ?></a>
          </div>
          <div class="titulo">
            <a href="<? echo get_permalink( $arrayNoticias[$i]->ID )?>">
              <h1><?php echo $arrayNoticias[$i]->post_title ?></h1>
            </a>
          </div>
          <div class="more">
            <a href="<?php echo get_author_posts_url( $arrayNoticias[0]->post_author ); ?>">
              <p>Postado por: <?php echo get_the_author_meta('nickname', $arrayNoticias[$i]->post_author ); ?></p>
            </a>
            <p><?php echo get_the_date('', $arrayNoticias[$i]->ID ) ?></p>
          </div>
        </div>
      </div>
    <?php endfor; ?>
</div>
<?php endif;?>

