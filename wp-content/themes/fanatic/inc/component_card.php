<div class="background">
  <div class="cta-container">
    <div class="grid-container"> 
      <?php if( get_field('card_block') ): ?>
        <?php while( the_repeater_field('card_block') ): ?>
          <div class="card-block">
            <div class="card-info">
              <div class="card-image">
              <?php
                $attachment_id = get_sub_field('image');
                $size = "medium";
                $image = wp_get_attachment_image_src( $attachment_id, $size );
                $alt_text = get_post_meta($attachment_id , ‘_wp_attachment_image_alt’, true);
                ?>
                <img src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>" />
              </div>
              <div class="card-text">
                <h2><?php the_sub_field('heading'); ?></h2>
                <h4><?php the_sub_field('sub_heading'); ?></h4>
                <p><?php the_sub_field('paragraph'); ?></p>
              </div>
              <div class="buttons">
                <?php
                $link = get_sub_field('button');
                ?>
                <a class="button" href="<?php echo $link['url']; ?>" 
                target="<?php echo $link['target']; ?>">
                Find out more
                <div class="icon">
                  <div class="arrow"></div>
                </div>
              </a>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
    </div>
    </div>
  <?php endif;