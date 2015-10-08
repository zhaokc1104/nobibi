<?php
/*
Template Name:content-list
*/
?>

<li>
    <div class="p-title">
        <p class="p-title-text"><a href="<?php echo get_permalink()?>"><?php the_title()?></a></p>
        <p class="p-title-info">
            <span><?php the_author()?>&nbsp;发表于</span>
            <span>
                <?php
                 the_date();
                 echo '&nbsp;';
                 the_time();
                ?>
            </span>
        </p>
    </div>
    <?php if (has_post_thumbnail()) {the_post_thumbnail();}?>

    <p class="p-ahead">
        <?php the_excerpt();?>
    </p>

    <div class="p-go">
        <a href="<?php echo get_permalink()?>">继续阅读</a>
        <span><i class="iconfont icon-yulan"></i><?php post_views();?>&nbsp;&nbsp;<i class="iconfont icon-pinglun"></i><?php echo $post->comment_count ?></span>
    </div>
</li>