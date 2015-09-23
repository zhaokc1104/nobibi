
<?php
//注册菜单
register_nav_menus( array(
'top-menu' => 'nobibi top menu'
));

// 添加特色图像功能
add_theme_support('post-thumbnails');
set_post_thumbnail_size(680, 200, true); // 图片宽度与高度

//统计文章访问
function record_visitors(){
    if (is_singular()){
        global $post;
        $post_ID = $post->ID;
        if($post_ID){
            $post_views = (int)get_post_meta($post_ID, 'views', true);
            if(!update_post_meta($post_ID, 'views', ($post_views+1))) {
                add_post_meta($post_ID, 'views', 1, true);
            }
        }
    }
}
add_action('wp_head', 'record_visitors');

//取得文章的阅读次数
function post_views($echo = 1){
    global $post;
    $post_ID = $post->ID;
    $views = (int)get_post_meta($post_ID, 'views', true);
    if ($echo) echo number_format($views);
    else return $views;
}

// 设置摘要长度
function wpdocs_custom_excerpt_length( $length ) {
    return 100;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
?>