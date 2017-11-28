<?php get_header(); ?>

<?php do_action( 'themerbasic_before_content' ); ?>
    <div class="content-container">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part('templates/content', 'post'); ?>
        <?php endwhile; ?>
    </div>
<?php do_action( 'themerbasic_after_content' ); ?>

<?php get_footer();
