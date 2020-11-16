<div class="hero">
  <div class="hero-left">
    <div class="hero-text">
      <?php if( get_field('subheading') ): ?>
          <h4 class="sub-heading"><?php the_field('subheading'); ?></h4>
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
            <a class="hero-cta" href="<?php echo esc_url( $link ); ?>">CTA Button</a>
      <?php endif; ?>
    </div>
  </div>
  
  <div class="hero-right slider">
  <?php 
    $images = get_field('slider_portfolio');
    if( $images ): ?>
    <div class="slider-for">
      <?php foreach( $images as $image ): ?>
      <div class="slick-container">
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      </div>
      <?php endforeach; ?>
      </div>
      <div class="slider-nav">
        <?php foreach( $images as $image ): ?>
        <div>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        </div>
        <?php endforeach; ?>
      </div>
     </div>
  </div>
<?php endif; 