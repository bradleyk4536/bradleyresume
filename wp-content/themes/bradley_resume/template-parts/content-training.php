<section class="section_header">
	<div class="container">
		<div class="row divider">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<hr />
				<h3 class="page-section text-center profile"><?php echo get_field( 'training_header'); ?></h3>
			<?php if(!empty(get_field( 'training_statement' ))) : ?>
				<p class="lead text-center"><?php the_field('training_statement'); ?></p>
			<?php endif; ?>
			</div>
		</div>

		<div class="row margin-top-20">
	<?php $loop = new Wp_Query(array('post_type' => 'training', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
		<?php while($loop->have_posts()) : $loop->the_post(); $excerpt = get_the_excerpt(); ?>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<div class="row">
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 hidden-xs text-center">
						<span class="icon-mail margin-top-20"></span>
					</div>
					<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
						<h4 class="text-info"><?php the_title(); ?></h4>
						<p><?php echo substr($excerpt, 0, 75); ?><a href="<?php echo the_permalink(); ?>">...continued &raquo;</a></p>
					</div>
				</div>
			</div>
		<?php endwhile; wp_reset_postdata(); ?>

		</div>
	</div>
</section>
