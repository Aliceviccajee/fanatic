<div class="cta">
  <div class="cta-text">
    <?php if( get_field('cta_heading') ): ?>
        <h4 class="cta-heading"><?php the_field('cta_heading'); ?></h4>
    <?php endif; ?>
    <?php if( get_field('cta_subheading') ): ?>
        <h2><?php the_field('cta_subheading'); ?></h2>
    <?php endif; ?>
    <?php if( get_field('cta_paragraph') ): ?>
        <p><?php the_field('cta_paragraph'); ?></p>
  </div>
  <?php endif; ?>
  <div class="button"> 
    <?php 
      $link = get_field('cta_button');
      if( $link ): ?>
          <a class="cta" href="<?php echo esc_url( $link ); ?>">CTA Button</a>
    <?php endif; ?>
      </div>
</div>
