<section class="section_header">
	<div class="container">
		<div class="row divider">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h3 class="text-center profile"><?php echo get_field( 'profile_header' ); ?></h3>
				<?php if(!empty( get_field('profile_statement') )): ?>
				<p class="lead text-center"><?php the_field('profile_statement'); ?></p>
				<?php endif; ?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
<!--			GRAB IMAGE FROM ADVANCED CUSTOM FIELDS	-->
		<?php if(!empty( get_field('profile_image'))) : $image = get_field( 'profile_image');  ?>
			<img class="img-responsive img-center" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		<?php else : ?>
				<img class="img-responsive img-center" src="<?php bloginfo('template_directory'); ?>/assets/images/devices_responsive_2.png" alt="image" />
		<?php endif; ?>
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
<!--			GRABBING DATA FROM CPT UI -->
<?php $loop = new Wp_Query( array('post_type' => 'personal_profile', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>
		<?php while($loop->have_posts()) : $loop->the_post(); ?>
				<h4 class="text-danger"><?php the_title(); ?></h4>
				<p class="margin-top-20"><?php the_content(); ?></p>
				<?php endwhile; wp_reset_postdata(); ?>
				<a href="technical-writer-resume" class="btn btn-info pull-right btn-lg set-button">Technical Writer Resume</a>
			</div>
		</div>
	</div>
</section>
