<?php get_header(); ?>

<section class="custom-header parallax-header-2 margin-bottom-50" data-stellar-background-ratio="0.5" style="display: block; background-position: 0% 276.233px;">
	<div class="navbar-wrapper">
		<div class="container">
		</div>

	</div>

	<div id="carousel-499677" class="carousel slide">
		<ol class="carousel-indicators">
			<li data-target="#carousel-499677" data-slide-to="0" class="active">
			</li>
			<li data-target="#carousel-499677" data-slide-to="1">
			</li>
			<li data-target="#carousel-499677" data-slide-to="2">
			</li>
		</ol>
		<div class="carousel-inner">
			<div class="item">
<!--			PLACE IMAGE HERE-->
			<?php if(has_post_thumbnail()) : the_post_thumbnail(array(400, 400)); endif; ?>
				<div class="container">
					<div class="carousel-caption">
						<h1>
							Example headline.
						</h1>
						<p>
							Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.
						</p>
						<p>
							<a class="btn btn-lg btn-primary" href="#" role="button">Hire Me</a>
						</p>
					</div>
				</div>
			</div>
			<div class="item">
			<?php if(has_post_thumbnail()) : the_post_thumbnail(array(400, 400)); endif; ?>
				<div class="container">
					<div class="carousel-caption">
						<h1>
							Another example headline.
						</h1>
						<p>
							Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
						</p>
						<p>
							<a class="btn btn-lg btn-primary" href="#" role="button">Hire Me</a>
						</p>
					</div>
				</div>
			</div>
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<h1>
							One more for good measure.
						</h1>
						<p>
							Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
						</p>
						<p>
							<a class="btn btn-lg btn-primary" href="#" role="button">Hire Me</a>
						</p>
					</div>
				</div>
			</div>
		</div> <a class="left carousel-control" href="#carousel-499677" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-499677" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
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
