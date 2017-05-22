<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php do_action('themerbasic_head_open'); ?>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
<?php do_action('themerbasic_head_close'); ?>
</head>
<body <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">
<?php do_action('themerbasic_body_open'); ?>

<?php do_action('themerbasic_before_header'); ?>
<?php do_action('themerbasic_header'); ?>
<?php do_action('themerbasic_after_header'); ?>
