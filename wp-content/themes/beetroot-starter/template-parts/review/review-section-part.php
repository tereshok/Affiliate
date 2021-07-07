<?php
$query = new WP_Query([ 
  'post_type' => 'site-review',
  'posts_per_page' => 9,
]);
if($query->have_posts()) : ?>
<div class="container_custom">
  <?php while ( $query->have_posts() ) : $query->the_post(); ?>
    <div class="review_block">
      <div class="review_block--image">
        <img src="<?php the_field('site_image'); ?>" alt="<?php the_title(); ?>">
      </div>
      <div class="review_block--info">
        <div class="review_block--titletype">
          <div class="review_block--title">
            <h5><?php the_title(); ?></h5>
          </div>
          <div class="review_block--sitetype">
            <?php $site_type = get_field('site_type'); ?>
            <?php if(get_field('site_type')) : ?>
              <?php foreach( $site_type as $type ) : ?>
                <?php if($type == 'casino') : ?>
                  <img src="<?php echo get_template_directory_uri();?>../assets/images/dice.png">
                <?php elseif($type == 'betting') : ?>
                  <img src="<?php echo get_template_directory_uri();?>../assets/images/ball.png">
                <?php endif; ?>  
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
        </div>
        <div class="review_block--rating">
          <?php ratingIcon(); ?>
          <p class="review_block--rating_p"><?php the_field('site_rating');?>/5</p>
        </div>
        <div class="review_block--compare">
          <input type="checkbox" name="compare" id="compare">
          <p><?php _e('compare', 'affiliate'); ?></p>
        </div>
      </div>
      <div class="review_block--bonus">
        <?php if(have_rows('site_bonus_info')) : ?>
          <?php while( have_rows('site_bonus_info') ) : the_row() ?>
            <div class="review_block--bonus_list">
              <img src="<?php echo get_template_directory_uri();?>../assets/images/greencheck.png" class="review_block--bonus_img">
              <p class="review_block--bonus_p"><?php the_sub_field('bonus_info') ?></p>
            </div>
          <?php endwhile;?>
        <?php endif; ?>
      </div>
      <div class="review_block--payment">
        <?php 
          $terms = get_field('site_payment_system');
          $terms_count = count($terms);
          $terms_iteration = 0;
        ?>

        <?php if( $terms ) : ?>
        <?php foreach( $terms as $term ) : ?>
          <?php $terms_iteration++; ?>
          <?php if($terms_iteration >= 6){
            $terms_remnant = $terms_count - $terms_iteration;
              if($terms_remnant == 0){
                echo '';
              } else {
                $terms_remnant_indicator = '<p class="remnant_indicator">' . '+' . $terms_remnant . '</p>';  
                echo $terms_remnant_indicator;
              }
            break;
          }?>
            <a href="<?php echo esc_url( get_term_link( $term ) ); ?>">
              <img src="<?php the_field('payment_icon', 'payment_' . $term); ?>">
            </a>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
      <div class="review_block--certificate">
        <?php if(get_field('site_certificate')) : ?>
          <img src="<?php echo get_template_directory_uri();?>../assets/images/cerfyes.png">
        <?php else : ?>
          <img src="<?php echo get_template_directory_uri();?>../assets/images/cerfno.png">
        <?php endif; ?>
      </div>
      <div class="review_block--link">
        <a href="<?php the_field('affiliate_link'); ?>"><?php _e('OPEN', 'affiliate'); ?> ></a>
        <a href="<?php the_permalink(); ?>"><?php _e('REVIEW', 'affiliate'); ?></a>
      </div>
    </div>
<?php endwhile; ?>
</div>
<?php endif; 
wp_reset_query();