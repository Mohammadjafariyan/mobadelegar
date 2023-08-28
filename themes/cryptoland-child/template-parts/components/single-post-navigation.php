<?php
$previous_arrow = is_rtl() ? twenty_twenty_one_get_icon_svg('ui', 'arrow_left') : twenty_twenty_one_get_icon_svg('ui', 'arrow_right');
$next_arrow = is_rtl() ? twenty_twenty_one_get_icon_svg('ui', 'arrow_right') : twenty_twenty_one_get_icon_svg('ui', 'arrow_left');

$twentytwentyone_next_label = esc_html__('Next post', 'twentytwentyone');
$twentytwentyone_previous_label = esc_html__('Previous post', 'twentytwentyone');

$prev_post = get_previous_post();
$id = $prev_post->ID;
$permalink = get_permalink($id);
$next_post = get_next_post();
$nid = $next_post->ID;
$permalink = get_permalink($nid);
?>


<div class="row justify-content-between">

    <div class="col next-timeline">
        <?php next_post_link('%link', '<div class="col meta-nav">'.$next_arrow . $twentytwentyone_next_label  .   '</div><div class="post-title">%title</div>', 'twentyeleven'); ?>
        <!--<h2><a href="<?php /*echo $permalink; */?>"><?php /*echo $next_post->post_title; */?></a></h2>-->
    </div>
    <div class="col previous-timeline">
        <?php previous_post_link('%link', '<div class="col meta-nav">'  . $twentytwentyone_previous_label .$previous_arrow. '</div><div class="post-title">%title</div>', 'twentyeleven'); ?>
        <!--<h2><a href="<?php /*echo $permalink; */?>"><?php /*echo $prev_post->post_title; */?></a></h2>-->
    </div>
</div>

