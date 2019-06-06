<?php get_header();?>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
    <?php if( have_posts() ):?>
      <ul class="sp-posts list-unstyled sp-posts-2">
      <?php while( have_posts() ):the_post();?>
        <li class="sp-post">
          <?php get_template_part( 'partials/post', 'common'); ?>
        </li>
      <?php endwhile;?>
    </ul>
    <?php else: ?>
      <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif;?>
    </div>
  </div>
</div>
<?php get_footer();?>
