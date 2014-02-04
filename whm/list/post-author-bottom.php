<?php
    $listImage = get_field('listenbild');

    $post_format = get_post_format();

    if( !is_array($listImage)) $listImage["url"] = '/images/nolistimage.png';
    $categories = get_the_category( $post_id );

    if( get_post_format() == "gallery") {
    	$tags = get_the_terms(get_post(), "post_tag");
    	foreach( $tags as $tag ) {
    		if( $tag->term_id != "53" ) {
    			$post_url = get_tag_link($tag);
    		}
    	}
    }else{
    	$post_url = esc_url( apply_filters( 'the_permalink', get_permalink() ) );
    }
?>

<article id="post-<?php the_ID(); ?>" class="item">
        <a href="<?php echo $post_url ?>" rel="bookmark"><img src="<?php echo $listImage["url"]; ?>" width="100%"></a>
        <div class="whm-post-info">
            <h2 class="entry-title"><a href="<?php echo $post_url; ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            <div class="entry-content">
			<p>
        			<?php echo whm_shortenText(get_the_content( ), 200); ?>
			</p>
            <a href="<?php echo $post_url; ?>"><span class="btn btn-small">Weiterlesen</span></a>

            <div style="border-top: 1px solid #d7d7d7; padding-top: 10px;">
                <div style="float:left; padding-right: 20px;"><a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>">
                    <img src="/images/autoren/<?php the_author_firstname(); ?>-<?php the_author_lastname(); ?>-small.png"/>
                </a>
                </div>
                <span class="posted-on" style="font-family: verdana; font-size: 12px"><i class="icon-calendar-empty" style="padding-right: 10px; font-size: 14px"></i><?php the_time('j. F Y'); ?></span><br />
                <span class="comments-link" style="font-family: verdana; font-size: 12px"><i class="icon-comment-alt" style="font-size: 14px; padding-right: 10px;"></i><a href="<?php echo $post_url; ?>#respond"><?php comments_number( 'keine Kommentare', '1 Kommentar', '% Kommentare' ); ?></a></span>
            </div>

            </div>
       	</div>
    	<div class="postcat postcat-<?php echo $categories[0]->slug ?>"></div>
</article>
