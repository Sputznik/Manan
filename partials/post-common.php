<div class="sp-post-img"><?php the_post_thumbnail('large');?></div>
<div class="sp-post-desc">
  <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
  <p>By <?php the_author();?> on <?php the_date('jS F Y');?></p>
  <hr>
  <p><?php the_excerpt();?></p>
</div>
