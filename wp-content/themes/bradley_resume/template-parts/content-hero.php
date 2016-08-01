<?php $image_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>
<?php if( has_post_thumbnail()) : ?>
	<section class="sections-bg-alt parallax-layer no-margin-bottom padding-bottom-100 background" style="background: url( <?php echo $image_url; ?> ) no-repeat fixed; background-size: contain" data-stellar-background-ratio="0.5">
<?php else: ?>
	<section class="sections-bg-alt parallax-layer parallax-header no-margin-bottom padding-bottom-100 background" data-stellar-background-ratio="0.5">
<?php endif; ?>
	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="min-height: 1px;">

				 <a class="brand-new" href="#"><?php echo get_field( 'first_name'); echo " "; echo get_field( 'last_name' ); ?> </a>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="min-height: 1px;">
				<div class="dropdown pull-right">
					 <button class="btn btn-black dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"><i class="fa fa-bars"></i></button>
					<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
						<li role="presentation">
							<a role="menuitem" tabindex="-1" href="#">Action</a>
						</li>
						<li role="presentation">
							<a role="menuitem" tabindex="-1" href="#">Another action</a>
						</li>
						<li role="presentation">
							<a role="menuitem" tabindex="-1" href="#">Something else here</a>
						</li>
						<li role="presentation" class="divider">
						</li>
						<li role="presentation">
							<a role="menuitem" tabindex="-1" href="#">Separated link</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row text-center">
			<div class="hidden-xs hidden-sm col-md-2 col-lg-2">
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
				<h1 class="page-section text-center margin-top-100" style="color: rgba(250, 250, 250, .99); margin-top: 0px;">
					<strong><?php echo get_field( 'first_name'); echo " "; echo get_field( 'last_name' ); ?> </strong>
				</h1>
				<h2 class="tagline"><?php echo get_post_meta(8, 'Tag Line 1', true); ?></h2>
				<h2 class="tagline"><?php echo get_post_meta(8, 'Tag Line 2', true); ?></h2>
				<a class="btn btn-lg btn-primary margin-top-30" href="#">HIRE ME</a>
			</div>
		</div>
	</div>
</section>
