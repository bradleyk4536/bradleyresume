<?php /* TEMPLATE NAME: Hire Me Page */ ?>
<?php get_header(); ?>
<section class="sections-bg-alt parallax-layer parallax-header no-margin-bottom padding-bottom-100 background what" data-stellar-background-ratio="0.5">

	<div class="container">

		<div class="row text-center">
			<div class="hidden-xs hidden-sm col-md-2 col-lg-2">
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
				<h1 class="page-section text-center margin-top-100" style="color: rgba(250, 250, 250, .8); margin-top: 0px;">
				<?php bloginfo('name'); ?>
				</h1>
				<h2 class="tagline"><?php bloginfo('description'); ?></h2>
			</div>
		</div>
	</div>
</section>
<section id="item_detail">
	<div>
		<div class="container">
		<div class="row divider">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<hr />
				<h3 class="page-section text-center profile"><?php the_title(); ?></h3>
<!--				TEMP NOTE-->
			<?php if(!empty(get_field('contact_statement'))) : ?>
				<p class="lead text-center"><?php the_field('contact_statement'); ?></p>
			<?php endif; ?>
			</div>
		</div>
			<div class="row">
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2" style="min-height: 1px;">
					<?php echo get_field('contact_short_code'); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
