<section>
  <h2><?php the_field('asked_questions_title'); ?></h2>
    <?php if( have_rows('asked_questions_block') ): ?>
    <?php $i=0; ?>
      <?php while( have_rows('asked_questions_block') ) : the_row(); ?>
        <div class="accordion" id="accordion">
          <div class="card">
            <div class="card-header" id="heading<?php echo $i; ?>">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>">
                  <?php the_sub_field('block_asked_questions_title'); ?>
                </button>
              </h2>
            </div>
            <div id="collapse<?php echo $i; ?>" class="collapse" aria-labelledby="heading<?php echo $i; ?>" data-parent="#accordion">
              <div class="card-body">
                <p><?php the_sub_field('block_asked_questions_text'); ?></p>
              </div>
            </div>
          </div>
        </div>
        <?php $i++ ;?>      
      <?php endwhile; ?>
    <?php endif; ?>
</section>