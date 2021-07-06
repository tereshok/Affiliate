<?php
/**
 * Template Name: Home page content Template
 *
 */
get_header(); ?>
<div class="container">
  <?php
    get_template_part('template-parts/review/review-section-part');
    
    get_template_part('template-parts/home-page/information-to-bet-part');
    get_template_part('template-parts/home-page/be-a-cool-bettor-part');
    get_template_part('template-parts/home-page/some-couple-row-part');
    get_template_part('template-parts/home-page/asked-questions-part');
  ?>
</div>

<?php
get_footer();