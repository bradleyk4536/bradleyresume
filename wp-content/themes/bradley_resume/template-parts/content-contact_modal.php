<?php /*TEMPLATE NAME: Contact*/ ?>
<section id="contact">
	<div class="modal fade" id="contact_modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button"  class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">

			<?php if(!empty(get_field( 'modal_icon' ))) : ?>
				<i class="<?php the_field( 'modal_icon' ); ?>"></i>
			<?php endif; ?>
				<?php echo get_field('contact_title'); ?>
				</h4>
			</div>
			<div class="modal-body">
			<?php if(!empty(get_field( 'modal_message' ))) : ?>
				<p><?php the_field( 'modal_message' ); ?></p>
			<?php endif; ?>

			<?php echo get_field('short_code'); ?>
			</div>
		</div>
	</div>
</div>
</section>
