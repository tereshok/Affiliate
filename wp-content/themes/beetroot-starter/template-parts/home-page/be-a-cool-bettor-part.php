<section>
<div class="container_custom bettor_block">
  <?php if(get_field('bettor_title')) : ?>
    <h2 class="bettor_title"><?php the_field('bettor_title'); ?></h2>
    <p class="bettor_text"><?php the_field('bettor_text'); ?></p>
  <?php endif; ?>
  <div class="row">
    <?php if( have_rows('better_block') ): ?>
      <?php while( have_rows('better_block') ) : the_row(); ?>
        <div class="col-4">
          <img src="<?php the_sub_field('block_better_icon'); ?>" alt="<?php the_sub_field('block_better_title'); ?>">
          <h5 class="block_better_title"><?php the_sub_field('block_better_title'); ?></h5>
          <p class="block_better_text"><?php the_sub_field('block_better_text'); ?></p>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>
</section>