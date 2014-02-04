<?php include_once 'addlink_script.php' ;?>

<article class="item">
        <div class="whm-post-info">
            <div class="entry-content">
                <div style="padding-left: 10px;">
                    <div class="entry-content">
                        <h2>Unsere neusten Kommentare</h2>


<?php
$query = "SELECT * from $wpdb->comments WHERE comment_approved= '1'
ORDER BY comment_date DESC LIMIT 0 ,5";
$comments = $wpdb->get_results($query);

if ($comments) {
    echo '<ul style="padding-left: 0; margin-left: 18px; font-family: verdana">';
    foreach ($comments as $comment) {
	$title = get_the_title($comment->comment_post_ID);
        $url = '<a href="'. get_permalink($comment->comment_post_ID).'#comment-'.$comment->comment_ID .'" title="'.$comment->comment_author .' | '.$title.'">';
        echo '<li>';
        echo '<div class="img">';
        echo $url;
        #echo get_avatar( $comment->comment_author_email, $img_w);
        echo '</a></div>';

        echo '<div class="txt" style="font-size: 11px;">';
        echo $url;
        echo $comment->comment_author;
	echo ' in "'.$title.'"';
        echo '</a></div>';
        echo '</li>';
    }
    echo '</ul>';
}
?>  
                    </div>
                </div>
            </div>
        </div>
</article>
