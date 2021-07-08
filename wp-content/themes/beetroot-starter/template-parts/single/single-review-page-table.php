<div class="single_info--table">
  <?php if(get_field('main_site_link')) : ?>
    <div class="single_info--table_line">
      <div>
        <img src="<?php echo get_template_directory_uri();?>/assets/images/website.png" class="single_info--table_icon">
        <span class="single_info--table_title"><?php _e('Website', 'affiliate'); ?></span>
      </div>
      <div>
        <a href="<?php the_field('main_site_link'); ?>" class="single_info--web_link"><?php the_field('main_site_link'); ?></a>
        <img src="<?php echo get_template_directory_uri();?>/assets/images/link.png">
      </div>
    </div>
  <?php endif; ?>  
  <?php if(get_field('main_site_bonus')) : ?>  
    <div class="single_info--table_line">
      <div>
        <img src="<?php echo get_template_directory_uri();?>/assets/images/bonusblack.png" class="single_info--table_icon">
        <span class="single_info--table_title"><?php _e('Bonus', 'affiliate'); ?></span>
      </div>
      <div>
        <a href="<?php the_field('affiliate_link'); ?>" class="single_info--affiliate_link">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/bonuswhite.png" class="single_info--bonus_icon">
          <span class="single_info--bonus"><?php the_field('main_site_bonus'); ?> ></span>
        </a>
      </div>
    </div>
  <?php endif; ?>  
  <?php if(get_field('main_site_licence')) : ?>
    <div class="single_info--table_line">
      <div>
        <img src="<?php echo get_template_directory_uri();?>/assets/images/licence.png" class="single_info--table_icon">
        <span class="single_info--table_title"><?php _e('License', 'affiliate'); ?></span>
      </div>
      <div>
        <span class="single_info--licence"><?php the_field('main_site_licence'); ?></span>
      </div>
    </div>
  <?php endif; ?>  
  <?php if(get_field('contact_phone') || get_field('contact_mobile_phone') || get_field('contact_email')) : ?>
    <div class="single_info--table_line">
      <div>
        <img src="<?php echo get_template_directory_uri();?>/assets/images/contacts.png" class="single_info--table_icon">
        <span class="single_info--table_title"><?php _e('Customer Support', 'affiliate'); ?></span>
      </div>
      <div>
        <?php if(get_field('contact_phone')) : ?>
        <span class="single_info--collapse" data-toggle="collapse" href="#collapsephone" role="button" aria-expanded="false" aria-controls="collapsephone">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/phone.png">
          <p class="collapse single_info--collapse_text" id="collapsephone"><?php the_field('contact_phone')?></p>
        </span>
        <?php endif; ?>
        <?php if(get_field('contact_mobile_phone')) : ?>  
        <span class="single_info--collapse" data-toggle="collapse" href="#collapsemobile" role="button" aria-expanded="false" aria-controls="collapsemobile">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/mobile.png">
          <p class="collapse single_info--collapse_text" id="collapsemobile"><?php the_field('contact_mobile_phone')?></p>
        </span>
        <?php endif; ?>  
        <?php if(get_field('contact_email')) : ?>  
        <span class="single_info--collapse" data-toggle="collapse" href="#collapsemail" role="button" aria-expanded="false" aria-controls="collapsemail">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/mail.png">
          <p class="collapse single_info--collapse_text" id="collapsemail"><?php the_field('contact_email')?></p>
        </span>
        <?php endif; ?>
      </div>
    </div>
  <?php endif; ?> 
  <?php if(get_field('apple_app_link') || get_field('androin_app_link')) : ?>
    <div class="single_info--table_line">
      <div>
        <img src="<?php echo get_template_directory_uri();?>/assets/images/device.png" class="single_info--table_icon">
        <span class="single_info--table_title"><?php _e('Application', 'affiliate'); ?></span>
      </div>
      <div>
        <?php if(get_field('apple_app_link')) : ?>
        <span class="single_info--collapse" data-toggle="collapse" href="#collapseapple" role="button" aria-expanded="false" aria-controls="collapseapple">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/apple.png">
          <p class="collapse single_info--collapse_text" id="collapseapple"><?php the_field('apple_app_link')?></p>
        </span>
        <?php endif; ?>
        <?php if(get_field('androin_app_link')) : ?>
        <span class="single_info--collapse" data-toggle="collapse" href="#collapseandroid" role="button" aria-expanded="false" aria-controls="collapseandroid">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/android.png">
          <p class="collapse single_info--collapse_text" id="collapseandroid"><?php the_field('androin_app_link')?></p>
        </span>
        <?php endif; ?>
      </div>
    </div>
  <?php endif; ?>
  <?php if(get_field('main_site_minimum_deposit')) : ?>
    <div class="single_info--table_line">
      <div>
        <img src="<?php echo get_template_directory_uri();?>/assets/images/deposit.png" class="single_info--table_icon">
        <span class="single_info--table_title"><?php _e('Minimum Deposit', 'affiliate'); ?></span>
      </div>
      <div>
        <span class="single_info--minimum_deposit"><?php the_field('main_site_minimum_deposit'); ?></span>
      </div>
    </div>
  <?php endif; ?> 
  <?php if(get_field('site_payment_system')) : ?> 
    <div class="single_info--table_line">
      <div>
        <img src="<?php echo get_template_directory_uri();?>/assets/images/valet.png" class="single_info--table_icon">
        <span class="single_info--table_title"><?php _e('Payment Methods', 'affiliate'); ?></span>
      </div>
      <div>
      <?php 
          $terms = get_field('site_payment_system');
          $terms_count = count($terms);
          $terms_iteration = 0;
        ?>
        <?php if( $terms ) : ?>
        <?php foreach( $terms as $term ) : ?>
          <?php $terms_iteration++; ?>
          <?php if($terms_iteration >= 6){
            $terms_remnant = $terms_count - $terms_iteration;
              if($terms_remnant != 0){
                $terms_remnant_indicator = '<p class="table-remnant_indicator">' . '+' . $terms_remnant . '</p>';  
                echo $terms_remnant_indicator;
              }
            break;
          }?>
            <a href="<?php echo esc_url( get_term_link( $term ) ); ?>">
              <img src="<?php the_field('payment_icon', 'payment_' . $term); ?>">
            </a>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>
  <?php endif; ?>
  <?php if(get_field('main_site_minimum_serve')) : ?>
    <div class="single_info--table_line">
      <div>
        <img src="<?php echo get_template_directory_uri();?>/assets/images/minimumserve.png" class="single_info--table_icon">
        <span class="single_info--table_title"><?php _e('Minimum serve', 'affiliate'); ?></span>
      </div>
      <div>
        <span class="single_info--minimum_serve"><?php the_field('main_site_minimum_serve'); ?></span>
      </div>
    </div>
  <?php endif; ?> 
</div>  