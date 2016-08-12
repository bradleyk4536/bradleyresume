<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Bradley_Resume
 */
get_header(); ?>
	<section error-404 not-found id="hero" class="sections-bg-alt parallax-layer parallax-header no-margin-bottom padding-bottom-100 background what" data-stellar-background-ratio="0.5">
		<div class="container">
		<div class="row text-center">
			<div class="hidden-xs hidden-sm col-md-2 col-lg-2">
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
				<h1 class="page-section text-center margin-top-100" style="color: rgba(250, 250, 250, .8); margin-top: 0px;">
				<?php esc_html_e('Oops 404 Error Page'); ?>
				</h1>
				<h3 class="tagline"><?php esc_html_e('WE CAN NOT SEEM TO FIND THAT PAGE'); ?></h3>
			</div>
		</div>
	</div>
	</section><!-- .error-404 -->
	<section id="item_detail">
	<div class="container">
		<div class="row divider">
				<h2>Don't panic, stay calm and lets get you back on track!</h2>
				<p class="lead text-center">Were you looking for any of the following:</p>
		</div>
		<div class="container">
			<div class="row" id="primary">
				<main id="content" class="col-sm-12" role="main">
					<div class="col-sm-8 ">
	<article>
		<div class="resume left_top_radius">
			<div>
			<h4 class="widget-title">Technical Writer Resume</h4>
			</div>
			<p>Were you looking for my technical writer resume. If so just click on the button below.</p>
			<hr>
			<p class="text-center"><a href="technical-writer-resume" class="btn btn-ghost">Technical Writer Resume</a></p>

			<br>
		</div>
		<div class="resume left_top_radius">
			<div>
			<h4 class="widget-title">Web Development Training</h4>
			</div>
			<p>Were you looking for a particular training course summary. If so just click on one of the buttons below.</p>
			<hr>
<?php $loop = new Wp_Query(array('post_type' => 'training', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
		<?php while($loop->have_posts()) : $loop->the_post(); ?>
			<span style="padding: 0 0 0px 10px; display:inline-block; margin-bottom: 10px;"><a href="<?php the_permalink(); ?>" class="btn btn-ghost"><?php the_title(); ?></a></span>
		<?php endwhile; wp_reset_postdata(); ?>
			<p>&emsp;</p>
		</div>
		<div class="resume left_top_radius">
			<div>
			<h4 class="widget-title">Projects</h4>
			</div>
			<p>Were you looking for one of my projects. If so just click one of the buttons below.</p>
			<hr>
<?php $loop = new Wp_Query(array('post_type' => 'projects', 'orderby' => 'post_id', 'order' => 'ASC'));?>
		<?php while($loop->have_posts()) : $loop->the_post(); ?>
			<span style="padding-left: 10px;"><a href="<?php the_permalink(); ?>" class="btn btn-ghost"><?php the_title(); ?></a></span>
		<?php endwhile; wp_reset_postdata(); ?>
			<p>&emsp;</p>
		</div>
	</article>
</div>
<!--				SIDE BAR-->
					<aside class="col-sm-4">
						<?php dynamic_sidebar('sidebar-2'); ?>
					</aside>
				</main>
			</div>
			</div>
		</div>
</section>
<?php get_footer();
