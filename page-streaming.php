<?php
/* Template Name: Streaming */
get_header();
//wp_nav_menu( array( 'theme_location' => 'footer-schedule', 'container_class' => 'content subnav cf' ) );
?>
<section class="content grid">
<div class="col-left">
<h1><?php pll_e('Streaming') ?></h1>

<?php
if (!empty($_GET['track'])) {
?>
<div class="videoWrapper">
	<iframe src="/stream/index.php?track=<?php echo htmlspecialchars($_GET['track']); ?>" allowfullscreen>
		<p>Your browser does not support iframes</p>
	</iframe>
</div>
<?php
}
?>

<?php
if ( have_posts() ) : 
	while ( have_posts() ) : the_post();
		the_content();
	endwhile;
endif;
?>

</div>
<?php
	get_sidebar();
?>
</section>

<?php echo do_shortcode( '[transport]' ); ?>

<?php get_footer(); ?>
