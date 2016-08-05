<?php /* TEMPLATE NAME: Home Page */

get_header();

?>

<?php get_template_part('template-parts/content', 'hero'); ?>
<?php get_template_part('template-parts/content', 'profile'); ?>
<?php get_template_part('template-parts/content', 'skills'); ?>
<?php get_template_part('template-parts/content', 'training'); ?>
<?php get_template_part('template-parts/content', 'projects'); ?>
<?php get_template_part('template-parts/content', 'contact_modal'); ?>

<?php get_footer(); ?>
