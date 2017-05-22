<?php get_header();?>

<?php do_action('themerbasic_before_content'); ?>
<?php while ( have_posts() ) : the_post(); ?>
    <?php the_content();?>
<?php endwhile; ?>
<?php do_action('themerbasic_after_content'); ?>

<?php get_footer();?>
