<?php
/*
   Template Name: Services EN
*/
?>
<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

?>
<?php get_template_part( 'header-en', 'none' ); ?>
<?php 
   $args = array(
        'post_type' => 'services',
        'posts_per_page' => -1,
        'order' => 'ASC',
        'orderby' => 'ID', 
        'tax_query' => array(
            array(
                'taxonomy' => 'service_categories',
                'field' => 'slug',
                'terms' => 'body-surgery',
            )
        )
    );
 $telo = new WP_Query($args); 
wp_reset_postdata();

$argsLice = array(
        'post_type' => 'services',
        'posts_per_page' => -1,
        'order' => 'ASC',
        'orderby' => 'ID', 
        'tax_query' => array(
            array(
                'taxonomy' => 'service_categories',
                'field' => 'slug',
                'terms' => 'face-surgery',
            )
        )
    );
 $lice = new WP_Query($argsLice); 
wp_reset_postdata();

$argsOther = array(
        'post_type' => 'services',
        'posts_per_page' => -1,
        'order' => 'ASC',
        'orderby' => 'ID', 
        'tax_query' => array(
            array(
                'taxonomy' => 'service_categories',
                'field' => 'slug',
                'terms' => 'injectable-cosmetology',
            )
        )
    );
$ostalo = new WP_Query($argsOther); 
wp_reset_postdata();




$argsI = array(
        'post_type' => 'services',
        'posts_per_page' => -1,
        'order' => 'ASC',
        'orderby' => 'ID', 
        'tax_query' => array(
            array(
                'taxonomy' => 'service_categories',
                'field' => 'slug',
                'terms' => 'innovative-methods',
            )
        )
    );
 $inovacije = new WP_Query($argsI); 
wp_reset_postdata();
?>



<div class="page-content services-page" >
  <div class="container">
    <div class="row">
       <div class="col-sm-4">
        <div class="service-list">
          <h2><?php echo pll_e('INJECTABLE COSMETOLOGY'); ?></h2>
          <div class="service-cat-list" style="margin-top:22px;">
            <div class="row">
              <div class="col-sm-12">
                <div class="services-list">
                  <?php while ( $ostalo->have_posts() ) : $ostalo->the_post(); ?>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  <?php endwhile; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="service-list">
          <h2><?php echo pll_e('Innovative Methods'); ?></h2>
          <div class="service-cat-list" style="margin-top:22px;">
            <div class="row">
              <div class="col-sm-12">
                <div class="services-list">
                  <?php while ( $inovacije->have_posts() ) : $inovacije->the_post(); ?>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  <?php endwhile; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="service-list">
          <h1><?php echo pll_e('Surgical Services'); ?></h1>
          <div class="service-cat-list">
            <div class="row">
              <div class="col-sm-12">
                <h3><?php echo pll_e('Body Surgery'); ?>:</h3>
                <div class="services-list">
                  <?php while ( $telo->have_posts() ) : $telo->the_post(); ?>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  <?php endwhile; ?>
                </div>
              </div>
              <div class="col-sm-12">
                <h3><?php echo pll_e('Face Surgery'); ?>:</h3>
                <div class="services-list">
                  <?php while ( $lice->have_posts() ) : $lice->the_post(); ?>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  <?php endwhile; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>


<?php get_template_part( 'footer-en', 'none' ); ?>