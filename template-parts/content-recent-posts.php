<?php 

$recent_posts = wp_get_recent_posts(array(
  'numberposts' => 4,
  'post_status' => 'publish',
));

?>

<?php if( sizeof( $recent_posts ) ==  0 ) : ?>
    <p>Não ha posts nessa sessão</p>
<?php else: ?> 
    <ul id="list-recent-post">
        <?php foreach( $recent_posts as $post_item ) : ?>
            <li>
                <a href="<?php echo get_permalink($post_item['ID']) ?>">
                    <?php echo get_the_post_thumbnail($post_item['ID'], 'full'); ?>
                    <p class=""><?php echo $post_item['post_title'] ?></p>
                </a>
            </li>
            <hr>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>