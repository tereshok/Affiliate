<section>
<div class="container_custom">
  <div class="heading_title-block">
    <h5 class="heading_title"><?php the_field('heading_title'); ?></h5>
    <p class="heading_text"><?php the_field('heading_text'); ?></p>
  </div>
  <div class="row">
    <?php if( have_rows('heading_block') ): ?>
        <?php while( have_rows('heading_block') ) : the_row(); ?>
          <div class="col-6 block_heading">
            <h5 class="block_heading_title"><?php the_sub_field('block_heading_title'); ?></h5>
            <p class="block_heading_text"><?php the_sub_field('block_heading_text'); ?></p>
            <a href="<?php the_sub_field('block_heading_link'); ?>" class="block_heading_link"><?php the_sub_field('block_heading_link_title'); ?></a>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
  </div>
</div>
</section>