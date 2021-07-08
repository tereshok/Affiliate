<?php

get_header();
?>

<div class="container_custom single_site--body">
  <div class="row">
    <div class="col-3">
    </div>
    <div class="col-9 single_site--content">
      <div class="single_site--promo" style="background-image: url('<?php the_field('main_site_promo_image'); ?>');">
        <div>
          <h3 class="single_site--promo-title"><?php the_field('main_site_promo_title'); ?></h3>
        </div>
        <div class="single_site--promo-block">
          <img src="<?php the_field('site_image'); ?>" class="single_site--promo-block_img">
          <div class="single_site--rating">
            <?php ratingIcon(); ?>
            <p class="single_site--rating_p"><?php the_field('site_rating');?>/5</p>
          </div>
        <div class="single_site--compare">
          <input type="checkbox" name="compare" id="compare">
          <p class="single_site--compare_p"><?php _e('compare', 'affiliate'); ?></p>
        </div>
        </div>
      </div>
      <?php get_template_part('template-parts/single/single-review-page-table'); ?>   
    
      <p><?php the_content(); ?></p>
    </div>
  </div>
</div>

<?php
get_footer();