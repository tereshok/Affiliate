<?php
$query = new WP_Query([ 
  'post_type' => 'post',
]);
  if($query->have_posts()) : ?>
    <div class="container">
      <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <div>
          <img src="<?php the_post_thumbnail('thumbnail'); ?>" alt="<?php the_title(); ?>">
          <h5><?php the_title(); ?></h5>
          <a href="<?php the_permalink(); ?>">READ MORE ></a>
        </div>
      <?php endwhile; ?>
    </div>
  <?php endif; 
wp_reset_query();