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
	<?php while($loop->have_posts()) : $loop->the_post();

//		FORMAT START DATE
		$formatStart = new DateTime(get_field('education_start'));

//    FORMAT END DATE
		$formatEnd = null;
		if (!empty(get_field('education_end'))) :
			$formatEnd = new DateTime(get_field('education_end'));
		endif;
	?>
		<div class="education">
		<h5>

		<span class="company"><?php the_title(); ?></span>

		<span class="city"><?php the_field('education_city'); ?></span>,
		<span class="state"><?php the_field('education_state'); ?></span>

		</h5>

		<h6><?php the_field('study'); ?></h6>

		<span class="startDate"><?php echo $formatStart->format('m/Y'); ?> &mdash; </span>

		<span class="endDate"><?php if(!(empty($formatEnd))) : echo $formatEnd->format('m/Y'); else: echo 'Present'; endif; ?></span>

			<?php the_field('education_description'); ?>

		</div>
	<?php endwhile; wp_reset_postdata(); ?>
	</div>
		</div>
	</article>
</div>
