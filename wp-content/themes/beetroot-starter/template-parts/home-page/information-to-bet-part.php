<section>
<div class="container_custom">
  <?php if(get_field('information_to_bet_title')) : ?>
    <h2 class="information_to_bet_title"><?php the_field('information_to_bet_title'); ?></h2>
  <?php endif; ?>
  <div class="row">
    <?php if( have_rows('information_to_bet_block') ): ?>
      <?php while( have_rows('information_to_bet_block') ) : the_row(); ?>
        <div class="col-12">
          <img src="<?php echo get_template_directory_uri();?>../assets/images/check.png" class="bet_sub_title-icon">
          <h5 class="bet_sub_title"><?php the_sub_field('bet_sub_title'); ?></h5>
        </div>
        <div class="col-6">
          <p class="bet_sub_text"><?php the_sub_field('bet_sub_start_text'); ?></p>
        </div>
        <div class="col-6">
          <p class="bet_sub_text"><?php the_sub_field('bet_sub_end_text'); ?></p>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>
</section>
