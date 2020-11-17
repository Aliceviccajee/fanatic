<div class="hero">
  <div class="hero-left">
    <div class="hero-text">
      <div class="headings">
        <?php if( get_field('sub_header') ): ?>
            <h4 class="sub-header"><?php the_field('sub_header'); ?></h4>
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
          $link = get_field('cta_button');
          if( $link ): ?>
              <a class="hero-cta" href="<?php echo esc_url( $link ); ?>">CTA Button</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="hero-right">
  <?php  
  $images = get_field('gallery');
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
