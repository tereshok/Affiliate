<section>
<div class="container_custom">
  <div>
    <h5><?php the_field('heading_title'); ?></h5>
    <p><?php the_field('heading_text'); ?></p>
  </div>
  <div class="row">
    <?php if( have_rows('heading_block') ): ?>
        <?php while( have_rows('heading_block') ) : the_row(); ?>
          <div class="col-6">
            <h5><?php the_sub_field('block_heading_title'); ?></h5>
            <p><?php the_sub_field('block_heading_text'); ?></p>
            <a href="<?php the_sub_field('block_heading_link'); ?>"><?php the_sub_field('block_heading_link_title'); ?></a>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
  </div>
</div>
</section>