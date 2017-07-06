<?php get_header(); ?>

<?php do_action( 'themerbasic_before_content' ); ?>
	<div class="content-container">
		<?php while ( have_posts() ) : the_post(); ?>
			<div <?php post_class(); ?>><?php the_content(); ?></div>
		<?php endwhile; ?>
	</div>
<?php do_action( 'themerbasic_after_content' ); ?>

<?php get_footer();
