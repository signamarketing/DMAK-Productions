<?php
/*
Template Name: Success page
*/
?>

<?php get_header(); ?>
	


<div id="midcontainer" class="bg clear">
	<div id="workexperience" class="container insidepad">
    <?php  while (have_posts()) : the_post(); ?>
    
<?php the_content(); ?>
<?php endwhile; ?>
	</div>
</div>


<?php get_footer(); ?>