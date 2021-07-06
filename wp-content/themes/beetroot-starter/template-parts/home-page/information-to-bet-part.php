<section>
  <h2><?php the_field('information_to_bet_title'); ?></h2>
  <div class="row">
    <?php if( have_rows('information_to_bet_block') ): ?>
      <?php while( have_rows('information_to_bet_block') ) : the_row(); ?>
        <div class="col-6">
          <h5><?php the_sub_field('bet_sub_title'); ?></h5>
          <p><?php the_sub_field('bet_sub_start_text'); ?></p>
        </div>
        <div class="col-6">
          <p><?php the_sub_field('bet_sub_end_text'); ?></p>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>
