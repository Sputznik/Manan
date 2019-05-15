<?php get_header();?>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
    <?php if( have_posts() ):?>
      <ul class="sp-posts list-unstyled sp-posts-2">
      <?php while( have_posts() ):the_post();?>
        <li class="sp-post">
          <?php the_post_thumbnail('large');?>
          <div class="sp-post-desc">
            <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
            <p>By <?php the_author();?> on <?php the_date('jS F Y');?></p>
            <hr>
            <p><?php the_excerpt();?></p>
          </div>
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
