<?php $image_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>
<?php if( has_post_thumbnail()) : ?>
	<section class="sections-bg-alt parallax-layer no-margin-bottom padding-bottom-100 background" style="background: url( <?php echo $image_url; ?> ) no-repeat fixed; background-size: cover" data-stellar-background-ratio="0.5">
<?php else: ?>
	<section class="sections-bg-alt parallax-layer parallax-header no-margin-bottom padding-bottom-100 background what" data-stellar-background-ratio="0.5">
<?php endif; ?>
	<div class="container">

		<div class="row text-center">
			<div class="hidden-xs hidden-sm col-md-2 col-lg-2">
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
				<h1 class="page-section text-center margin-top-100" style="color: rgba(250, 250, 250, .8); margin-top: 0px;">
					<strong><?php echo get_field( 'first_name'); echo " "; echo get_field( 'last_name' ); ?> </strong>
				</h1>
				<h2 class="tagline"><?php bloginfo('description'); ?></h2>
				<h2 class="tagline"><?php echo get_post_meta(8, 'Tag Line 2', true); ?></h2>
				<a class="btn btn-lg btn-primary margin-top-30" href="#" data-toggle="modal" data-target="#contact_modal">HIRE ME</a>
			</div>
		</div>
	</div>
</section>
