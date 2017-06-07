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
.fl-node-<?php echo $id; ?> .fl-quote {
<?php if($settings->border_color):?>
    border-color: #<?php echo esc_attr($settings->border_color); ?>;
    <?php endif; ?>
    <?php if($settings->border_type == 'left'):?>
    border-left-width: 5px;
    margin-left: 20px;
    <?php endif; ?>
    <?php if($settings->border_type == 'right'):?>
    border-right-width: 5px;
    margin-right: 20px;
    <?php endif; ?>
    <?php if($settings->border_type == 'all'):?>
    border-width: 5px;
    <?php endif; ?>
}
.fl-node-<?php echo $id; ?> .fl-quote .fl-quote-source {
    text-align: <?php echo esc_attr($settings->source_alignment); ?>;
    <?php if($settings->source_color):?>
        color: #<?php echo esc_attr($settings->source_color); ?>;
    <?php endif; ?>
}
.fl-node-<?php echo $id; ?> .fl-quote .fl-quote-quote {
    <?php if($settings->quote_color):?>
    color: #<?php echo esc_attr($settings->quote_color); ?>;
    <?php endif; ?>
}
