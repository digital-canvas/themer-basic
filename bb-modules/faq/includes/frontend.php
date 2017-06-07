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
<dl class="fl-faq">
    <?php foreach($settings->items as $item):?>
        <dt class="fl-faq-question"><?php echo esc_html($item->question); ?></dt>
        <dd class="fl-faq-answer"><?php echo $item->answer; ?></dd>
    <?php endforeach; ?>
</dl>
