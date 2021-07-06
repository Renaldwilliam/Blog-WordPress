<?php get_header();?>

    <section id="page-person" class="container mt-2">
        <div class="conteudo-page-person">
            <?php if( have_posts() ): while( have_posts() ): the_post();?>
                <?php the_content(); ?>
            <?php endwhile; wp_reset_postdata(); endif;?>
        </div>
        <section class="sidebar d-none-sm">
            <?php get_sidebar(); ?>
        </section>
    </section>

<?php get_footer( );?>