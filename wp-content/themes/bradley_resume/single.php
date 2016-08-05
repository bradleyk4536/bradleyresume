<!--MODIFIED TO GO TO SINGLE CUSTOM PAGES-->
<?php if(have_posts()) : the_post(); rewind_posts(); endif; ?>
<?php
	switch(get_post_type()) :
		case 'training':
			include(TEMPLATEPATH . '/single-train.php');
		break;

		case 'projects':
			include(TEMPLATEPATH . '/single-project.php');
		break;
	endswitch;
?>
