<?php 
$testimonials = new WP_Query([
	'post_type' => 'testimonials',
	'posts_per_page' => -1,
	'order' => 'DESC',
	'orderby' => 'ID', 
]); 
wp_reset_postdata();
?>

 <div id="testimonials">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
			    <h2><?php echo pll_e("Trusted by Celebrities"); ?></h2>
				<div class="owl-wrap">
					<a class="prev"><img src="<?php  echo get_bloginfo('template_directory'); ?>/assets/images/left.png"></a>
					<a class="next"><img src="<?php  echo get_bloginfo('template_directory'); ?>/assets/images/right.png"></a>
					<div id="owl-demo" class="owl-carousel owl-theme">
					 <?php while ( $testimonials->have_posts() ) : $testimonials->the_post(); ?>
						<div class="item">
							<div class="owl-t-img">
								<img src="<?php echo the_post_thumbnail_url(); ?>" />
							</div>
							<div class="owl-t-txt">
								<?php the_excerpt(); ?>
							</div>
							<div class="owl-t-name">
								<?php the_title(); ?>
							</div>
							<!-- <img class="testimonials-border" src="<?php  echo get_bloginfo('template_directory'); ?>/assets/images/testimonials-border.png"> -->
						</div>
					<?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>