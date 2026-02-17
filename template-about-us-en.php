<?php
/*
   Template Name: About US (EN)
*/
?>
<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

?>
<?php get_template_part('header-en'); ?>
<?php 
   $args = array(
        'post_type' => 'team',
        'posts_per_page' => -1,
        'order' => 'ASC',
        'orderby' => 'ID', 
    );
 $team = new WP_Query($args); 
wp_reset_postdata();

?>



<div class="page-content about-page" style="margin-top:50px;">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
          <?php while ( have_posts() ) : the_post(); ?>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            <h1><?php the_title(); ?></h1>
            <div class="txt">

            <?php the_content(); ?>
            </div>
          <?php endwhile; ?>

          <div class="team-members">
            <div class="row">
              <div class="col-sm-12">
                <h2><?php echo pll_e('Professional Team'); ?></h2>
              </div>
              <?php while ( $team->have_posts() ) : $team->the_post(); ?>
                <?php 
                  $metaT = get_post_meta($post->ID, 'title');
                  //var_dump($metaT);
                 ?>
                <div class="col-md-3 col-sm-6">
                  <a href="<?php the_permalink(); ?>" class="team-item">
                    <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    <h3><?php the_title(); ?></h3>
                    <p><?php echo $metaT[0]['dr_title']; ?></p>
                  </a>
                </div>
              <?php endwhile; ?>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>



<?php get_template_part('footer-en'); ?>