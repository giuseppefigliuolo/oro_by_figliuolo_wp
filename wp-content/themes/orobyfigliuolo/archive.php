<?php 
get_header();
?>

<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		get_template_part('template-parts/archive/content');
	}
} else {
	get_template_part('template-parts/archive/empty');
}
?>

<?php
get_footer();
?>