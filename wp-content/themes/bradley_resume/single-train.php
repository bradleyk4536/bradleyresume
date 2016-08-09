<?php get_header(); ?>
	<section class="sections-bg-alt parallax-layer parallax-header no-margin-bottom padding-bottom-100 background what" data-stellar-background-ratio="0.5">

	<div class="container">

		<div class="row text-center">
			<div class="hidden-xs hidden-sm col-md-2 col-lg-2">
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
				<h1 class="page-section text-center margin-top-100" style="color: rgba(250, 250, 250, .8); margin-top: 0px;">
				</h1>
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<h2 class="tagline"><?php the_title(); ?></h2>
			</div>
		</div>
	</div>
</section>
<section id="item_detail">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<article>
				<div class="project_summary left_top_radius">
					<div>
					<h4 class="widget-title">Course Summary</h4>
					</div>
					<div class="text-center">
						<?php if(has_post_thumbnail()) : the_post_thumbnail(array(400, 400)); endif; ?>
						<hr>
						</div>
						<div>
							<p><?php the_content(); ?></p>
						</div>
				</div>
				<?php endwhile; endif; wp_reset_postdata(); ?>
				</article>
			</div>
			<aside class="col-sm-4">
				<?php dynamic_sidebar('sidebar-2'); ?>
			</aside>
		</div>
	</div>
</section>
<?php get_footer(); ?>
