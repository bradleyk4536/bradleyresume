<?php /* TEMPLATE NAME: Technical Writer */ ?>
<?php get_header(); ?>
<section id="item_detail">
	<div class="container">
		<div class="row">

			<?php get_template_part('template-parts/content', 'resume_top_section'); ?>

			<aside class="col-sm-4"><?php dynamic_sidebar('sidebar-2'); ?></aside>

			<?php get_template_part('template-parts/content', 'resume_middle_section'); ?>

			<?php get_template_part('template-parts/content', 'resume_bottom_section'); ?>


		</div>

	</div>
</section>
<?php get_footer(); ?>
