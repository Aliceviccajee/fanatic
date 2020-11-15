<div class="hero">
  <div class="section"> </div>
    <?php if( get_field('subheading') ): ?>
        <h4><?php the_field('subheading'); ?></h4>
    <?php endif; ?>
    <?php if( get_field('heading') ): ?>
        <h2><?php the_field('heading'); ?></h2>
    <?php endif; ?>
    <?php if( get_field('paragraph') ): ?>
        <p><?php the_field('paragraph'); ?></p>
    <?php endif; ?>
    <?php 
      $link = get_field('cta');
      if( $link ): ?>
          <a class="button" href="<?php echo esc_url( $link ); ?>">CTA</a>
    <?php endif; ?>
  </div>
</div>