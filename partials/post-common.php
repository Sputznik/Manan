<div class="sp-post-img"><a href="<?php the_permalink();?>"><?php the_post_thumbnail('large');?></a></div>
<div class="sp-post-desc">
  <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
  <p>By <?php the_author();?> on <?php the_date('jS F Y');?></p>
  <hr>
  <p><?php the_excerpt();?></p>
  <p><a href="<?php the_permalink();?>">Continue Reading</a></p>
</div>
