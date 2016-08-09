<div class="col-sm-8">
	<article>
		<div class="resume left_bottom_radius">
			<div>
			<h4 class="widget-title">

		<?php if(!empty(get_field('bottom_icon'))) : ?>
			<i class="<?php the_field('bottom_icon'); ?>" aria-hidden="true"></i>
		<?php endif; ?>

			  <?php echo get_field('bottom_section_header'); ?></h4>

<?php $loop = new Wp_query(array('post_type' => 'education', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
	<?php while($loop->have_posts()) : $loop->the_post(); ?>
		<div>
		<h5><span><?php the_field('education_start'); ?></span><span><?php the_field('education_end'); ?></span> <?php the_title(); ?><span><?php the_field('education_city'); ?></span>&emsp;<span><?php the_field('education_state'); ?></span></h5>
		<h6><?php the_field('study'); ?></h6>
			<p><?php the_field('degree_or_certificate'); ?> <?php the_field('grade_point_average'); ?></p>
			<p><?php the_field('education_description'); ?></p>
		</div>
			<hr>
	<?php endwhile; wp_reset_postdata(); ?>
	</div>
		</div>
	</article>
</div>
