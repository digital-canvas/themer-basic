<?php get_header();?>

<?php do_action( 'themerbasic_before_content' ); ?>
<div class="content-container">
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class('h-entry'); ?>>
			<h2 class="p-name entry-title"><a class="u-url" href="<?php the_permalink()?>"><?php the_title()?></a></h2>
			<p>
				Published by <a class="p-author author h-card"><?php the_author() ?></a>
				on <time class="dt-published published" datetime="<?php echo get_the_date('c')?>"><?php echo get_the_date()?></time>
			</p>
			<div class="p-summary entry-summary"><?php the_excerpt();?></div>
		</article>
	<?php endwhile; ?>
</div>

<?php do_action( 'themerbasic_after_content' ); ?>

<?php get_footer();
