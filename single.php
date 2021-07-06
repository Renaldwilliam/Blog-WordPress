<?php 
  $category = get_the_category();
?>
<?php get_header( 'home' );?>
  <div class="container">
    <section id="post-individual">
      <div class="corpo">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php get_template_part( 'template-parts/content', get_post_format( ) ); ?>
            <?php
                if( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
            ?>
        <?php endwhile; wp_reset_postdata(); endif; ?>

        <h1>Posts Relacionais</h1>

        <div class="post-relacionais">
          <?php get_template_part( 'template-parts/content', 'post-relacionais', array('slug' => $category[0]->slug) ); ?>
        </div>
      </div>
      <div class="sidebar d-none-sm">
         <?php get_sidebar( ); ?>
      </div>
    </section>
  </div>
 <?php get_footer( 'home' ); ?>