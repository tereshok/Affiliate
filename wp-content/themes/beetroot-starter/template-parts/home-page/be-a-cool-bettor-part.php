<section>
<div class="container">
  <h2><?php the_field('bettor_title'); ?></h2>
  <p><?php the_field('bettor_text'); ?></p>
  <div class="row">
    <?php if( have_rows('better_block') ): ?>
      <?php while( have_rows('better_block') ) : the_row(); ?>
        <div class="col-4">
          <img src="<?php the_sub_field('block_better_icon'); ?>" alt="<?php the_sub_field('block_better_title'); ?>">
          <h5><?php the_sub_field('block_better_title'); ?></h5>
          <p><?php the_sub_field('block_better_text'); ?></p>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>
</section>