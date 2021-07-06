<?php
$query = new WP_Query([ 
  'post_type' => 'site-review',
  'posts_per_page' => 9,]);
if($query->have_posts()) : ?>
<div class="container">
  <?php while ( $query->have_posts() ) : $query->the_post(); ?>
    <div>
      <img src="<?php the_field('site_image'); ?>" alt="<?php the_title(); ?>">
    </div>
    <div>
      <h5><?php the_title(); ?></h5>
      <p>
        <?php  $colors = get_field('site_type');
   foreach( $colors as $color ){
     echo $color; 
   }?>
      </p>
      <p><?php the_field('site_rating'); ?></p>
    </div>
    <div>
    <?php ?>
    </div>
    <div>
      <?php 
      $terms = get_field('site_payment_system');
      if( $terms ){ 
        foreach( $terms as $term ){
         echo esc_url( get_term_link( $term ) ); 
          }
        }
      ?>
    </div>
    <div>
      <?php the_field('site_status'); ?>
    </div>
    <div>
      <a href="<?php the_permalink(); ?>"> > Open</a>
      <a href="<?php the_field('affiliate_link'); ?>"></a>
    </div>
    
<?php endwhile; ?>
</div>
<?php endif; 
wp_reset_query();