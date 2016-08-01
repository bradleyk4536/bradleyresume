<section class="section_header">
	<div class="container">
		<div class="row divider">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<hr />
				<h3 class="text-center profile"><?php echo get_field( 'skills_header' ); ?></h3>
				<?php if(!empty(get_field( 'skills_statement' )) ) : ?>
				<p class="lead text-center"><?php the_field('skills_statement'); ?></p>
				<?php endif; ?>
			</div>
		</div>
<?php $loop = new Wp_Query(array('post_type' => 'software', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
		<div class="row">
		<?php while($loop->have_posts()) : $loop->the_post(); ?>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 margin-top-20">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<h3 class="text-info"><?php the_title(); ?></h3>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<p class="text-right margin-top-20 lead text-info"><?php the_field('proficiency')?>%</p>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php the_field('proficiency'); ?>%;">
								<?php the_field('proficiency'); ?>%</div>
						</div>
					</div>
				</div>
			</div>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>
</section>
