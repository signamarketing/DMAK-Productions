<?php
/*
Template Name: Work Post
*/
?>

<?php get_header(); ?>
	
<div id="workpageheader-bg" class="bg clear">
	<div id="workpageheader" class="container insidepad">
		<!-- <h2 class="super-title"><?php the_field( "sub_title" );  ?></h1> -->
		<h1 class="page-title"><?php the_title(); ?></h1>
		<p id="breadcrumbs"><a href="<?php echo get_option('home'); ?>/videos/">Home</a>&nbsp;&nbsp;»&nbsp;&nbsp;<a href="<?php echo get_option('home'); ?>/videos/">Work</a>&nbsp;&nbsp;»&nbsp;&nbsp;<?php the_title(); ?>
	</div>
</div>

<div id="workpagevideo-bg" class="bg clear">
	<div id="workpagevideo" class="container insidepad">
		<?php echo do_shortcode('[fve]'. get_field('video_section') .'[/fve]'); ?>
	</div>
</div>

<div id="workpagedescription-bg" class="bg clear">
<div id="workpagedescription" class="container insidepad">
		<div class="workdescription">
			<?php the_field( "video_description" );  ?>
		</div>
		<div class="workmeta">
			<span class="filed-under">Filed under: <?php the_terms('', 'work_categories'); ?></span>
			<span class="workpage-share">Share on:
				<a href="https://twitter.com/share?url=<?php echo the_permalink(); ?>&lang=en&text=<?php bloginfo('name'); ?> » <?php the_title(); ?> #dmakproductions" target="_blank">Twitter</a>
				<a href="javascript:var d%3Ddocument,f%3D%27http://www.facebook.com/share%27,l%3Dd.location,e%3DencodeURIComponent,p%3D%27.php%3Fsrc%3Dbm%26v%3D4%26i%3D1368731927%26u%3D%27%2Be(l.href)%2B%27%26t%3D%27%2Be(d.title)%3B1%3Btry%7Bif (!/%5E(.*%5C.)%3Ffacebook%5C.%5B%5E.%5D*%24/.test(l.host))throw(0)%3Bshare_internal_bookmarklet(p)%7Dcatch(z) %7Ba%3Dfunction() %7Bif (!window.open(f%2B%27r%27%2Bp,%27sharer%27,%27toolbar%3D0,status%3D0,resizable%3D1,width%3D626,height%3D436%27))l.href%3Df%2Bp%7D%3Bif (/Firefox/.test(navigator.userAgent))setTimeout(a,0)%3Belse%7Ba()%7D%7Dvoid(0)" data-url="<?php the_permalink(); ?>">Facebook</a>
				<a href="https://plus.google.com/share?url=<?php echo the_permalink(); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">Google +</a>
			</span>
		</div>

	</div>
</div>

<div id="pagination-bg" class="bg clear">
	<div id="pagination" class="container insidepad">
	<div id="pagination-links">
			<div class="alignleft"><?php previous_post('%', 'Last project:</br>'); ?></div>
			<div class="alignright"><?php next_post('%', 'Next project:</br>'); ?></div>
		</div>
	</div>
</div>
<div id="ready-to-get-started-banner" class="bg clear">
	<div class="container insidepad">
		<div id="ready-to-get-started-banner-container">
		<div><h2>Ready to Get Your Project Started?</h2></div>
			<div style="min-width:0;max-width:  100%;"><a href="/contact/">Contact Us Now</a>
		</div>
		</div>
	</div>
</div>
<?php get_template_part( 'instagram-section', '' ); ?>
<?php get_footer(); ?>