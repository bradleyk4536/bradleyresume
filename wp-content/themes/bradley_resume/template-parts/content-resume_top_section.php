<div class="col-sm-8 ">
	<article>
		<div class="resume left_top_radius">
			<div>
			<h4 class="widget-title">
		<?php if(!empty(get_field('top_icon'))) : ?>
			<i class="<?php the_field('top_icon'); ?>" aria-hidden="true"></i>
		<?php endif; ?>

		<?php echo get_field('top_section_header'); ?></h4>
		<?php $loop = new Wp_query(array('post_type' => 'work_experience', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
			<?php while($loop->have_posts()) : $loop->the_post();

				$workEnd = null;
				$workStart = new DateTime(get_field('start_date'));

				if(!empty(get_field('end_date'))) :
					$workEnd = new DateTime(get_field('end_date'));
				endif;
			?>
		<div class="work">
		<h5>

		<span class="company"><?php the_title(); ?></span>


		<span class="city"><?php the_field('company_city'); ?></span>,

		<span class="state"><?php the_field('company_state'); ?></span>

		</h5>
		<h6><?php the_field('job_title'); ?></h6>

		<span class="startDate"><?php echo $workStart->format('m/Y'); ?> &mdash; </span>

		<span class="endDate"><?php if(!(empty($workEnd))) : echo $workEnd->format('m/Y'); else: echo 'Present'; endif; ?></span>

			 <?php the_field('description'); ?>
		</div>

		<?php endwhile; wp_reset_postdata(); ?>
			</div>
		</div>
	</article>
</div>
