<?php /* TEMPLATE NAME: Technical Writer */ ?>
<?php get_header(); ?>
<section class="sections-bg-alt parallax-layer parallax-header no-margin-bottom padding-bottom-100 background what" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row text-center">
			<div class="hidden-xs hidden-sm col-md-2 col-lg-2">
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
				<h1 class="page-section text-center margin-top-100" style="color: rgba(250, 250, 250, .8); margin-top: 0px;">
				</h1>
				<h2 class="tagline"><?php the_title(); ?></h2>
			</div>
		</div>
	</div>
</section>
<section id="item_detail">
	<div class="container">
		<div class="row">
			<?php get_template_part('template-parts/content', 'resume_top_section'); ?>
			<aside class="col-sm-4"><?php dynamic_sidebar('sidebar-2'); ?></aside>
			<?php get_template_part('template-parts/content', 'resume_middle_section'); ?>
			<?php get_template_part('template-parts/content', 'resume_bottom_section'); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>
