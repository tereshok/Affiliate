<section style="background-image: url('<?php the_field('hero_section_background', 'option'); ?>');">
  <div class="container_custom">
    <div>
      <div><?php the_field('hero_title', 'option'); ?></div>
      <div><?php the_field('hero_text', 'option'); ?></div>
    </div>
    <div>
      <img src="<?php the_field('hero_sub_title_icon', 'option'); ?>" alt="<?php the_field('hero_sub_title', 'option'); ?>">
      <p><?php the_field('hero_sub_title', 'option'); ?></p>
    </div>
  </div>
</section>