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
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 text-center">
						<div class="thumbnail relative">
						<?php if(has_post_thumbnail()) : ?>
		<!--			GIVE A FEATURE IMAGE A CLASS						-->
							<?php the_post_thumbnail('thumbnail', array('class' => 'img-responsive img-center')); ?>
						<?php else : ?>
							<img class="img-responsive img-center" src="<?php bloginfo('template_directory'); ?>/assets/images/img-member-thumb.jpg" alt="thumb" />
						<?php endif; ?>

							<div class="box-wrap">
								<h4><?php the_title(); ?>
								<?php if(!empty(get_field( 'additional_description' ))) : ?>
									<br /><small><?php the_field( 'additional_description' ); ?></small>
								<?php endif; ?>
								</h4>
								<ul class="list-inline">

								<?php if(!empty(get_field( 'github_url' )) && get_field('show_github_link') === 'true') : ?>
									<li>
										<a class="circle-icon-bg" href="<?php the_field( 'github_url' ); ?>"><i class="fa fa-github-alt"></i></a>
									</li>
								<?php endif; ?>


								<?php if(get_field('show_details_description') === 'true') : ?>
									<li>
										<a class="circle-icon-bg" href="<?php the_permalink(); ?>"><i class="fa fa-book"></i></a>
									</li>
								<?php endif; ?>
								</ul>
								<p><?php the_excerpt(); ?></p>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
				</div>
			</div>
		<!--		ANOTHER LOOP FOR MORE PROJECTS NORMAL DISPLAY IS FOUR ACROSS			-->
<?php if($counter === 4 && $counter < 8) : ?>
<div class="item">
	<div class="row">
		<?php while($loop->have_posts()) : $loop->the_post(); $counter++; ?>
			<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 text-center">
				<div class="thumbnail relative">
				<?php if(has_post_thumbnail()) : ?>
<!--			GIVE A FEATURE IMAGE A CLASS						-->
					<?php the_post_thumbnail('thumbnail', array('class' => 'img-responsive img-center')); ?>
				<?php else : ?>
					<img class="img-responsive img-center" src="<?php bloginfo('template_directory'); ?>/assets/images/img-member-thumb.jpg" alt="thumb" />
				<?php endif; ?>
					<div class="box-wrap">
						<h4><?php the_title(); ?>
						<?php if(!empty(get_field( 'additional_description' ))) : ?>
							<br /><small><?php the_field( 'additional_description' ); ?></small>
						<?php endif; ?>
						</h4>
						<ul class="list-inline">
						<?php if(!empty(get_field( 'github_url' )) && get_field('show_github_link') === 'true') : ?>
							<li>
								<a class="circle-icon-bg" href="<?php the_field( 'github_url' ); ?>"><i class="fa fa-github-alt"></i></a>
							</li>
						<?php endif; ?>
						<?php if(get_field('show_details_description') === 'true') : ?>
							<li><a class="circle-icon-bg" href="<?php the_permalink(); ?>"><i class="fa fa-book"></i></a></li>
						<?php endif; ?>
						</ul>
						<p><?php the_excerpt(); ?></p>
					</div>
				</div>
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
