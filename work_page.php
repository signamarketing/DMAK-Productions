<?php
/*
Template Name: Work
*/
?>

<?php get_header(); ?>
	
<div id="pageheader-bg" class="bg clear">
	<div id="pageheader" class="container insidepad">
		<h1 class="page-title"><?php the_title(); ?></h1>
		<h2 class="short-description"><?php the_field( "short_description" );  ?></h2>
	</div>
</div>

<?php wp_list_categories( $args ); ?>



<?php get_footer(); ?>