<?php /* Template Name: Home */
get_header();
while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'inc/hero' ); ?>

<?php
$thecontent = get_the_content();
if(!empty($thecontent)) { ?>
<section class="page">
  <div class="container">
    <div class="content twelve">
      <?php the_content(); ?>
    </div>
  </div>
</section>
<?php } ?>

<?php get_template_part( 'inc/components' ); ?>
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>