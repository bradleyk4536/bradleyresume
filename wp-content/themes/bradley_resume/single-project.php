<?php get_header(); ?>
<section class="custom-header parallax-header-2 margin-bottom-50" data-stellar-background-ratio="0.5" style="display: block; background-position: 0% 276.233px;">
	<?php if(have_posts()) : while(have_posts()) : the_post(); $image1 = get_field('image_1'); $image2 = get_field('image_2'); $image3 = get_field('image_3'); $active_image = get_field('active_image')?>
	<div id="carousel-499677" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carousel-499677" data-slide-to="0" class="medium-editor-placeholder <?php if($active_image === '0') : echo 'active'; endif; ?>">
			</li>
			<li data-target="#carousel-499677" data-slide-to="1" class="medium-editor-placeholder <?php if($active_image === '1') : echo 'active'; endif; ?>">
			</li>
			<li data-target="#carousel-499677" data-slide-to="2" class="medium-editor-placeholder <?php if($active_image === '2') : echo 'active'; endif; ?>">
			</li>
		</ol>
		<div class="carousel-inner">
			<div class="item <?php if($active_image === '0') : echo 'active'; endif; ?>">
				<div class="container">
					<div class="carousel-caption">
						<h1 class="slider_header"><?php the_title(); ?></h1>

				<?php if(!empty(get_field('image_1_tag_line'))) : ?>
						<h2 class="slider_tagline"><?php the_field('image_1_tag_line'); ?></h2>
				<?php endif; ?>
				<?php if(!empty(get_field('description_1'))) : ?>
						<p class="slider_description"><?php the_field('description_1'); ?></p>
				<?php endif; ?>

						<img class="slider_image img-responsive center-block" src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>">
					</div>
				</div>
			</div>
			<div class="item <?php if($active_image === '1') : echo 'active'; endif; ?>">
				<div class="container">
					<div class="carousel-caption">
						<h1 class="slider_header"><?php the_title(); ?></h1>

				<?php if(!empty(get_field('image_2_tag_line'))) : ?>
						<h2 class="slider_tagline"><?php the_field('image_2_tag_line'); ?></h2>
				<?php endif; ?>
				<?php if(!empty(get_field('description_2'))) : ?>
						<p class="slider_description"><?php the_field('description_2'); ?></p>
				<?php endif; ?>

						<img class="slider_image img-responsive center-block" src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>">
					</div>
				</div>
			</div>
			<div class="item <?php if($active_image === '2') : echo 'active'; endif; ?>">
				<div class="container">
					<div class="carousel-caption">
						<h1 class="slider_header"><?php the_title(); ?></h1>

				<?php if(!empty(get_field('image_3_tag_line'))) : ?>
						<h2 class="slider_tagline"><?php the_field('image_3_tag_line'); ?></h2>
				<?php endif; ?>
				<?php if(!empty(get_field('description_3'))) : ?>
						<p class="slider_description"><?php the_field('description_3'); ?></p>
				<?php endif; ?>

						<img class="slider_image img-responsive center-block" src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>">
					</div>
				</div>
			</div>
		</div>

		<a class="left carousel-control" href="#carousel-499677" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-499677" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	</div>
</section>
<section id="item_detail">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<article>
					<div class="project_summary left_top_radius">
						<div>
						<h4 class="widget-title">Summary</h4>
						<p><?php the_content(); ?></p>
						</div>
					</div>

			<?php if(get_field('show_website_link') === 'true' && !empty(get_field('website_url'))) :	?>
					<div class="site_button"><a href="<?php the_field('website_url'); ?>" class="btn btn-ghost form-control">Visit Site</a></div>
			<?php endif; ?>

				<?php endwhile; endif; wp_reset_postdata(); ?>
				</article>
			</div>
			<aside class="col-sm-4"><?php get_sidebar(); ?></aside>
		</div>
	</div>
</section>
<?php get_footer(); ?>
