<?php

get_header();
?>

<div class="container">
  <div class="row">
    <div class="col-3">
    </div>
    <div class="col-9">
      <h4>
        <?php the_title(); ?>
      </h4>
      <img src="<?php the_field('site_image'); ?>" alt="#">

      <p><?php the_content(); ?></p>
    </div>
  </div>


</div>

<?php
get_footer();