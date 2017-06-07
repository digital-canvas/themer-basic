<?php

/**
 * This file should be used to render each module instance.
 * You have access to two variables in this file:
 *
 * $module An instance of your module class.
 * $settings The module's settings.
 *
 * Example:
 */

?>
<blockquote class="fl-quote">
    <div class="fl-quote-quote"><?php echo $settings->quote; ?></div>
    <?php if($settings->source):?>
    <footer class="fl-quote-source"><?php echo esc_html($settings->source); ?></footer>
    <?php endif; ?>
</blockquote>
