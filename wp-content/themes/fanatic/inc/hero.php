<div class="hero">
  <div class="hero-left">
    <div class="hero-text">
      <div class="headings">
        <?php if( get_field('subheading') ): ?>
            <h4 class="sub-heading"><?php the_field('subheading'); ?></h4>
        <?php endif; ?>
        <?php if( get_field('heading') ): ?>
            <h2><?php the_field('heading'); ?></h2>
        <?php endif; ?>
        <?php if( get_field('paragraph') ): ?>
            <p><?php the_field('paragraph'); ?></p>
      </div>
      <?php endif; ?>
      <div class="button"> 
        <?php 
          $link = get_field('cta');
          if( $link ): ?>
              <a class="hero-cta" href="<?php echo esc_url( $link ); ?>">CTA Button</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="hero-right">
    <?php echo do_shortcode('[metaslider id="49"]'); ?>
  </div>
</div>
