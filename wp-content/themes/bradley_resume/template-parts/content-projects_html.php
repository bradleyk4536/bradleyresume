<div class="thumbnail relative">
	<?php if(has_post_thumbnail()) : ?>
<!--			GIVE A FEATURE IMAGE A CLASS						-->
		<?php the_post_thumbnail('thumbnail', array('class' => 'img-responsive img-center')); ?>
	<?php else : ?>
		<img class="img-responsive center-block" src="<?php bloginfo('template_directory'); ?>/assets/images/img-member-thumb.jpg" alt="thumb" />
	<?php endif; ?>
		<div class="box-wrap">
			<h4><?php the_title(); ?>
			<?php if(!empty(get_field( 'additional_description' ))) : ?>
				<br /><small><?php the_field( 'additional_description' ); the_excerpt(); ?></small>
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
		</div>
</div>
