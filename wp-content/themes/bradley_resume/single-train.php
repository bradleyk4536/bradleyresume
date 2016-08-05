<?php get_header(); ?>
<?php $image_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>
<?php if( !has_post_thumbnail()) : ?>
	<section class="sections-bg-alt parallax-layer no-margin-bottom padding-bottom-100 background" style="background: url( <?php echo $image_url; ?> ) no-repeat fixed; background-size: cover" data-stellar-background-ratio="0.5">
<?php else: ?>
	<section class="sections-bg-alt parallax-layer parallax-header no-margin-bottom padding-bottom-100 background what" data-stellar-background-ratio="0.5">
<?php endif; ?>
	<div class="container">

		<div class="row text-center">
			<div class="hidden-xs hidden-sm col-md-2 col-lg-2">
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
				<h1 class="page-section text-center margin-top-100" style="color: rgba(250, 250, 250, .8); margin-top: 0px;">
					<strong><?php echo get_field( 'first_name'); echo " "; echo get_field( 'last_name' ); ?> </strong>
				</h1>
				<h2 class="tagline"><?php bloginfo('description'); ?></h2>
				<h2 class="tagline"><?php echo get_post_meta(8, 'Tag Line 2', true); ?></h2>
				<a class="btn btn-lg btn-primary margin-top-30" href="#" data-toggle="modal" data-target="#contact_modal">HIRE ME</a>
			</div>
		</div>
	</div>
</section>

<section id="item_detail">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<article>
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
					<div class="dish_image">
						<div class="thumbnail">
						<?php if(has_post_thumbnail()) : the_post_thumbnail(array(400, 400)); endif; ?>
						<hr>
						<p><?php the_content(); ?></p>
						</div>
					</div>

				<?php if(!empty(get_field('header_1')) && !empty(get_field('instruction_1'))) : ?>
					<div class="directions">
						<h3><?php the_field('header_1'); ?></h3>
						<?php the_field('instruction_1'); ?>
					</div>
				<?php endif; ?>
				<?php if(!empty(get_field('header_2')) && !empty(get_field('instruction_2'))) : ?>
					<div class="directions">
						<h3><?php the_field('header_2'); ?></h3>
						<?php the_field('instruction_2'); ?>
					</div>
				<?php endif; ?>

				<?php if(!empty(get_field('header_3')) && !empty(get_field('instruction_3'))) : ?>
					<div class="cooking">
						<h3><?php the_field('header_3'); ?></h3>
						<?php the_field('instruction_3'); ?>
					</div>
				<?php endif; ?>

				<?php if(!empty(get_field('header_4')) && !empty(get_field('instruction_4'))) : ?>
					<div class="serving">
						<h3><?php the_field('header_4'); ?></h3>
						<?php the_field('instruction_4'); ?>
					</div>
				<?php endif; ?>

				<?php endwhile; endif; wp_reset_postdata(); ?>
				</article>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
