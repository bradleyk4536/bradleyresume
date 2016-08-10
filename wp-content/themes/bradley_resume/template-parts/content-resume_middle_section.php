<div class="col-sm-8">
	<article>
		<div class="resume">
			<div>
			<h4 class="widget-title">

		<?php if(!empty(get_field('middle_icon'))) : ?>
			<i class="<?php the_field('middle_icon'); ?>" aria-hidden="true"></i>
		<?php endif; ?>

		<?php echo get_field('middle_section_header'); ?></h4>

		<?php $loop = new Wp_Query(array('post_type' => 'military', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
		<?php while($loop->have_posts()) : $loop->the_post();

				$militaryEnd = null;
				$militaryStart = new DateTime(get_field('service_start_date'));

				if(!empty(get_field('service_end_date'))) :
					$militaryEnd = new DateTime(get_field('service_end_date'));
				endif;
		?>
		<div class="military">
		<h5>

		<span class="company"><?php the_title(); ?></span>

		<h6><?php the_field('discharge_type'); ?></h6>

		<span class="startDate"><?php echo $militaryStart->format('m/Y'); ?></span>
		&mdash;
		<span class="endDate"><?php if(!(empty($militaryEnd))) : echo $militaryEnd->format('m/Y'); else: echo 'Present'; endif; ?></span>
		</h5>

		<p><?php the_field('job_description'); ?></p>
		</div>
			<hr>
		<?php endwhile; wp_reset_postdata(); ?>
			</div>
		</div>
	</article>
</div>
