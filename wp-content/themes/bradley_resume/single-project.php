<?php get_header(); ?>

<section class="custom-header parallax-header-2 margin-bottom-30 fix-section" data-stellar-background-ratio="0.5" style="display: block; background-position: 0% 276.233px;">
	<div id="carousel-499677" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
		<?php if(have_posts()) : while(have_posts()) : the_post(); $image1 = get_field('image_1'); $image2 = get_field('image_2'); $image3 = get_field('image_3'); $image4 = get_field('image_4');?>
			<li data-target="#carousel-499677" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-499677" data-slide-to="1"></li>
			<li data-target="#carousel-499677" data-slide-to="2"></li>
			<li data-target="#carousel-499677" data-slide-to="3"></li>
		</ol>
		<div class="carousel-inner">

			<h2 class="slider_header"><?php the_title(); ?></h2>
<!--			SLIDE 1-->
			<div class="item active">
				<div class="carousel-caption">
    				 <h3 class="slider_tagline"><?php echo get_field('image_1_tag_line'); ?></h3>
   				 <p class="slider_description"><?php echo get_field('description_1')?></p>
  				</div>
				<img class="image-responsive center-block" src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>">
			</div>

<!--			SLIDE 2-->
			<div class="item">
					<div class="carousel-caption">
    				 <h3 class="slider_tagline"><?php echo get_field('image_2_tag_line'); ?></h3>
   				 <p class="slider_description"><?php echo get_field('description_2')?></p>
  				</div>
				<img class="image-responsive center-block" src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>">
			</div>

<!--			SLIDE 3-->
			<div class="item">
					<div class="carousel-caption">
    				 <h3 class="slider_tagline"><?php echo get_field('image_3_tag_line'); ?></h3>
   				 <p class="slider_description"><?php echo get_field('description_3')?></p>
  				</div>
				<img class="image-responsive center-block" src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>">

			</div>

<!--			SLIDE 4-->
			<div class="item">
					<div class="carousel-caption">
    				 <h3 class="slider_tagline"><?php echo get_field('image_4_tag_line'); ?></h3>
   				 <p class="slider_description"><?php echo get_field('description_4')?></p>
  				</div>
				<img class="image-responsive center-block" src="<?php echo $image4['url']; ?>" alt="<?php echo $image4['alt']; ?>">

			</div>

	<?php endwhile; endif; ?>
		</div>
		<a class="left carousel-control" href="#carousel-499677" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-499677" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	</div>
</section>

<section id="item_detail">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<article>
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
					<div class="dish_image">
						<div class="thumbnail">
						<?php if(has_post_thumbnail()) : the_post_thumbnail(array(400, 400)); endif; ?>
						<hr>
						<p><?php the_content(); ?></p>
						</div>
					</div>

				<?php endwhile; endif; wp_reset_postdata(); ?>
				</article>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
