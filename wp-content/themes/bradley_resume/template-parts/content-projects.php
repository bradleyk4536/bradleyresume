<section class="section_header">
	<div class="container">
		<div class="row divider">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<hr />
				<h3 class="page-section text-center profile"><?php echo get_field('project_header'); ?></h3>
<!--				TEMP NOTE-->
			<?php if(!empty(get_field('project_statement'))) : ?>
				<p class="lead text-center"><?php the_field('project_statement'); ?></p>
			<?php endif; ?>
			</div>
		</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div id="carousel-347740" class="carousel slide custom-controls-slider">
			<div class="carousel-inner">
			<div class="item active">
				<div class="row">
		<?php $counter = 0; ?>
		<?php $loop = new Wp_Query(array('post_type' => 'projects', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
				<?php while($loop->have_posts() && $counter < 4) : $loop->the_post(); $counter++; ?>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 text-center">
						<?php get_template_part('template-parts/content', 'projects_html'); ?>
					</div>
				<?php endwhile; ?>
				</div>
			</div>
		<!--		ANOTHER LOOP FOR MORE PROJECTS NORMAL DISPLAY IS FOUR ACROSS			-->
<?php if($counter === 4 && $counter < 8) : ?>
<div class="item">
	<div class="row">
		<?php while($loop->have_posts()) : $loop->the_post(); $counter++; ?>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 text-center">
				<?php get_template_part('template-parts', 'projects_html'); ?>
		<?php endwhile; ?>
	</div>
</div>
</div>
<?php endif; ?>
</div>
<?php if($counter > 4) :  ?>
			 <a class="left carousel-control" href="#carousel-347740" data-slide="prev"><i class="fa fa-angle-left fa-4x"></i></a> <a class="right carousel-control" href="#carousel-347740" data-slide="next"><i class="fa fa-angle-right fa-4x"></i></a>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
		</div>
	</div>
</div>
	</div>
</section>
