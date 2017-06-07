/**
 * This file should contain frontend styles that
 * will be applied to individual module instances.
 *
 * You have access to three variables in this file:
 *
 * $module An instance of your module class.
 * $id The module's ID.
 * $settings The module's settings.
 *
 * Example:
 */

.fl-node-<?php echo $id; ?> .fl-faq dt {
    <?php if($settings->header_font['family'] != 'Default'):?>
        font-family: <?php echo esc_attr($settings->header_font['family'])?>;
        font-weight: <?php echo esc_attr($settings->header_font['weight'])?>;
    <?php endif; ?>
}

.fl-node-<?php echo $id; ?> .fl-faq dd {
    <?php if($settings->border_type !== 'none'):?>
    border-bottom: <?php echo esc_attr($settings->border_type); ?> <?php echo esc_attr($settings->border_width); ?>px #<?php echo esc_attr($settings->border_color); ?>;
    <?php else: ?>
    border-bottom: none;
    <?php endif; ?>
}
.fl-node-<?php echo $id; ?> .fl-faq dd:last-child {
    border-bottom: none;
}

