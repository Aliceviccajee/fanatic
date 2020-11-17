<?php if( get_field('cta_block') ): ?>
    <?php while( the_repeater_field('cta_block') ): ?>
      <div class="cta-blocks">
        <div class="cta-info">
          <div class="cta-text">
            <h2><?php the_sub_field('cta_header'); ?></h2>
            <h4><?php the_sub_field('cta_subheading'); ?></h4>
            <p><?php the_sub_field('cta_paragraph'); ?></p>
          </div>
          <div class="buttons">
          <?php
            $link = get_sub_field('button_dark');
            
            ?>
            <a class="button-dark" href="<?php echo $link['url']; ?>" 
            target="<?php echo $link['target']; ?>">
            <?php echo $link['title']; ?></a>
          <?php
            $link = get_sub_field('button_light');
            ?>
            <a class="button-light" href="<?php echo $link['url']; ?>" 
            target="<?php echo $link['target']; ?>">
            <?php echo $link['title']; ?></a>
          </div>
        </div>
        <div class="cta-image">
        <?php
          $attachment_id = get_sub_field('cta_image');
          $size = "medium";
          $image = wp_get_attachment_image_src( $attachment_id, $size );
          $alt_text = get_post_meta($attachment_id , ‘_wp_attachment_image_alt’, true);
          ?>
          <img src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>" />
        </div>
      </div>
    <?php endwhile; ?>
 <?php endif;