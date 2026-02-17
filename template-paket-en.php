<?php
/*
   Template Name: Paket (EN)
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


<style type="text/css">
  .wp-caption-text.gallery-caption {
    display: block;
  }
  .page-content {
    margin-top: 0 !important;
  }
  .slider-title div.cap-txt {
    color: #e46597;
    /*font-size: 25px;
    line-height: 35px;*/
    text-align: left;
    font-size: 20px;
    line-height: 26px;
}
.slider-title p {
  text-align: left;
}
.cap-txt h2 {
  text-transform: uppercase;
  text-shadow: 0 2px 6px rgb(0 0 0 / 25%);
  color: #fff;
  font-size: 45px;
  font-weight: 900;
  letter-spacing: 1px;
}
@media (max-width: 767px) {
  #homepage-slider .carousel-inner .item img {
      height: auto; 
      min-height: 150px;
  }
  #homepage-slider, .carousel-inner, .carousel-inner .item,
  #homepage-slider, .carousel-inner, .carousel-inner .item {
      height: auto;
     
      max-height: 80Vh;
  }
  .cap-txt h2 {

  font-size: 33px;

}
  .slider-title div.cap-txt {
    font-size: 20px;
    line-height: 28px;
    text-shadow: 0 0px 0px rgb(0 0 0 / 60%);
  }
  .slider-title {
   background: linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.15), transparent, transparent); 
  }
}

</style>
<!-- <div id="homepage-slider" class="carousel slide" data-ride="carousel">

      <div class="carousel-inner" role="listbox">


        <div class="item active">
          <img class="hidden-xs" src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/glow-pc.jpg" alt="Glow paket rea medika">
          <img class="visible-xs" src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/glow-mobile.jpg" alt="Glow paket rea medika">
        </div>

      </div>

    </div> -->

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
                    <!-- <p><?php echo $metaT[0]['dr_title']; ?></p> -->
                  </a>
                </div>
              <?php endwhile; ?>
            </div>
          </div>

          <h2>Pricing</h2>
          <p>The regular value of this package is <strong>90 000 RSD  </strong>. With the
              <strong> Rea Glow promotional offer,</strong> you receive a <strong>20% discount,</strong> bringing the total price to just <strong>72 000 RSD.</strong>  
          </p>
          <h3>Book your appointment</h3>
          <p>
          You can book your appointment by filling out our <a href="https://reamedika.rs/kontakt/" target="_blank" rel="noopener noreferrer">offer</a> or by contacting us directly:
          </p>
          <p>
          📍&nbsp; <strong>Belgrade, Mihajlova Marinčevića 23</strong> - <a href="tel:+381694455601">+381694455601</a><br>
          📍&nbsp; <strong>Belgrade, Gallery Mall</strong>  - <a href="tel:+381644455600">+381644455600</a><br>
          📍&nbsp; <strong>Novi Sad, Kosovska 7B</strong>  - <a href="tel:+381641105020">+381641105020</a>
          </p> 
      </div>
    </div>
  </div>

</div>



<?php get_template_part('footer-en'); ?>