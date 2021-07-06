<footer id="footer">
 <div class="container">
    <div class="logo-footer">
      <?php if ( has_custom_logo() ): ?>
          <?php the_custom_logo(); ?>
      <?php else: ?>
          <a href="/"><h2>Sua logo aqui</h2></a>
      <?php endif; ?>
      <p>criado em 04/07/2021 e cobre a interseção de tecnologia, estilo de vida, negócios, entretenimento e cultura....</p>
      <div class="social-midias">
        <h2>Siga-nos</h2>
        <p>#Todo</p>
      </div>
      <h2>Newslater</h2>
      <div class="newslater">
        <input type="text" placeholder="Seu e-mail">
        <p class="button">Inscrevese</p>
      </div>
      <p>qualquer texto que venha a te interessar colocar aqui</p>
    </div>
    <div class="footer-recent-posts">
      <h2>Recent Posts</h2>
      <?php get_template_part( 'template-parts/content', 'recent-posts' ); ?>
    </div>
    <div class="footer-tags-randon">
      <h2>Random Posts</h2>
      <?php get_template_part( 'template-parts/content', 'randon-one-post' ); ?>
      <h2 class="mt-2">Tags</h2>
      <p>#Todo</p>
    </div>
 </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>