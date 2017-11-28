<article <?php post_class('h-entry single'); ?> itemid="<?php the_permalink()?>" itemscope itemtype="http://schema.org/BlogPosting">
    <h1 class="p-name entry-title" itemprop="name"><?php the_title() ?></h1>
    <p>
        Published by
        <a class="p-author author h-card" itemprop="author"><?php the_author() ?></a>
        on
        <time class="dt-published published" itemprop="datePublished"
                content="<?php echo get_the_date( 'c' ) ?>"
                datetime="<?php echo get_the_date( 'c' ) ?>"><?php echo get_the_date() ?></time>
    </p>
    <?php if(has_post_thumbnail()):?>
    <div><?php the_post_thumbnail('post-thumbnail', ['itemprop' => 'image', 'class' => 'u-photo']) ?></div>
    <?php endif; ?>
    <div class="e-content entry-content" itemprop="articleBody"><?php the_content(); ?></div>
</article>
