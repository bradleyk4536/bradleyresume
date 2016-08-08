<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bradley_Resume
 */

?>

<?php wp_footer(); ?>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
			</div>
			<div class="footer_nav col-sm-5">

				<?php
wp_nav_menu( array(
	'theme_location'  => 'footer',
	'container' 		=> 'nav',
	'menu_class' 		=> 'list-unstyled list-inline'
));
?>
			</div>
			<div class="col-sm-4">
			<p class=" copy-author">&copy; <?php echo date('Y') . ' '; the_author_meta('user_url'); ?></p>
			</div>
		</div>

	</div>
</footer>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-2.1.1.min.js"><\/script>')</script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script>(function($){if (typeof $().modal != 'function'){document.write('<script src="js/bootstrap.min.js"><\/script>')}})(window.jQuery)</script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.countdown.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.fitvids.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.waitforimages.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.isotope.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/stellar.js" type="text/javascript"></script>
<script>(function($) {$(function() {if ($('body').css('color') !== 'rgb(51, 51, 51)') {$('head').prepend('<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css">');}});})(window.jQuery);</script>
<script>(function($){$('body').append('<div id="check" class="fa">');var check=$('#check');if(check.css('display')!=='inline-block'){$('head').prepend('<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/font-awesome.min.css">');}check.remove();})(window.jQuery)</script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/custom-scripts.js" type="text/javascript"></script>
<script type="text/javascript">(function($){ var clickEvent677443 = false;$('#carousel-677443').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent677443 = true;});$('#carousel-677443').bind('slide.bs.carousel', function (e) {  if (!clickEvent677443) {  var nextLi = $('#carousel-677443').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-677443').find('li.carousel-control').first().addClass('active');  }}  clickEvent677443 = false;}); var clickEvent561863 = false;$('#carousel-561863').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent561863 = true;});$('#carousel-561863').bind('slide.bs.carousel', function (e) {  if (!clickEvent561863) {  var nextLi = $('#carousel-561863').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-561863').find('li.carousel-control').first().addClass('active');  }}  clickEvent561863 = false;}); var clickEvent527138 = false;$('#carousel-527138').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent527138 = true;});$('#carousel-527138').bind('slide.bs.carousel', function (e) {  if (!clickEvent527138) {  var nextLi = $('#carousel-527138').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-527138').find('li.carousel-control').first().addClass('active');  }}  clickEvent527138 = false;}); var clickEvent375731 = false;$('#carousel-375731').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent375731 = true;});$('#carousel-375731').bind('slide.bs.carousel', function (e) {  if (!clickEvent375731) {  var nextLi = $('#carousel-375731').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-375731').find('li.carousel-control').first().addClass('active');  }}  clickEvent375731 = false;}); var clickEvent704837 = false;$('#carousel-704837').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent704837 = true;});$('#carousel-704837').bind('slide.bs.carousel', function (e) {  if (!clickEvent704837) {  var nextLi = $('#carousel-704837').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-704837').find('li.carousel-control').first().addClass('active');  }}  clickEvent704837 = false;}); var clickEvent402281 = false;$('#carousel-402281').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent402281 = true;});$('#carousel-402281').bind('slide.bs.carousel', function (e) {  if (!clickEvent402281) {  var nextLi = $('#carousel-402281').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-402281').find('li.carousel-control').first().addClass('active');  }}  clickEvent402281 = false;}); var clickEvent950349 = false;$('#carousel-950349').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent950349 = true;});$('#carousel-950349').bind('slide.bs.carousel', function (e) {  if (!clickEvent950349) {  var nextLi = $('#carousel-950349').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-950349').find('li.carousel-control').first().addClass('active');  }}  clickEvent950349 = false;}); var clickEvent219227 = false;$('#carousel-219227').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent219227 = true;});$('#carousel-219227').bind('slide.bs.carousel', function (e) {  if (!clickEvent219227) {  var nextLi = $('#carousel-219227').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-219227').find('li.carousel-control').first().addClass('active');  }}  clickEvent219227 = false;}); var clickEvent427243 = false;$('#carousel-427243').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent427243 = true;});$('#carousel-427243').bind('slide.bs.carousel', function (e) {  if (!clickEvent427243) {  var nextLi = $('#carousel-427243').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-427243').find('li.carousel-control').first().addClass('active');  }}  clickEvent427243 = false;}); var clickEvent292412 = false;$('#carousel-292412').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent292412 = true;});$('#carousel-292412').bind('slide.bs.carousel', function (e) {  if (!clickEvent292412) {  var nextLi = $('#carousel-292412').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-292412').find('li.carousel-control').first().addClass('active');  }}  clickEvent292412 = false;}); var clickEvent741585 = false;$('#carousel-741585').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent741585 = true;});$('#carousel-741585').bind('slide.bs.carousel', function (e) {  if (!clickEvent741585) {  var nextLi = $('#carousel-741585').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-741585').find('li.carousel-control').first().addClass('active');  }}  clickEvent741585 = false;}); var clickEvent694782 = false;$('#carousel-694782').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent694782 = true;});$('#carousel-694782').bind('slide.bs.carousel', function (e) {  if (!clickEvent694782) {  var nextLi = $('#carousel-694782').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-694782').find('li.carousel-control').first().addClass('active');  }}  clickEvent694782 = false;}); var clickEvent365827 = false;$('#carousel-365827').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent365827 = true;});$('#carousel-365827').bind('slide.bs.carousel', function (e) {  if (!clickEvent365827) {  var nextLi = $('#carousel-365827').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-365827').find('li.carousel-control').first().addClass('active');  }}  clickEvent365827 = false;}); var clickEvent592868 = false;$('#carousel-592868').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent592868 = true;});$('#carousel-592868').bind('slide.bs.carousel', function (e) {  if (!clickEvent592868) {  var nextLi = $('#carousel-592868').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-592868').find('li.carousel-control').first().addClass('active');  }}  clickEvent592868 = false;});})(window.jQuery)</script>

</body>
</html>
