<section class="hero_section" style="background-image: url('<?php the_field('hero_section_background', 'option'); ?>');">
  <div class="container_custom">
    <div class="hero_content">
      <h1 class="hero_content--title"><?php the_field('hero_title', 'option'); ?></h1>
      <div class="hero_content--text"><?php the_field('hero_text', 'option'); ?></div>
    </div>
    <div class="hero_sub_content">
      <img src="<?php the_field('hero_sub_title_icon', 'option'); ?>" alt="<?php the_field('hero_sub_title', 'option'); ?>" class="hero_sub_title_icon">
      <p class="hero_sub_title"><?php the_field('hero_sub_title', 'option'); ?></p>
    </div>
  </div>
</section>