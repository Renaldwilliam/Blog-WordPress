<article <?php post_class(); ?>>
	<h1><?php the_title(); ?></h1>
	<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( '', array( 'class' => 'image-lateral') ); ?></a>
	<div class="meta-info">
		<p><?php echo 'Published in'; ?> <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
		<p><?php echo 'Categories:'?> <?php the_category( ' ' ); ?></p>
		<p><?php the_tags(  'Tags: ', ', ' ); ?></p>
	</div>
  <div class="conteudo">
    <?php the_content(); ?>
  </div>
</article>