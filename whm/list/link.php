<?php
    $listImage = get_field('listenbild');

    $categories = get_the_category( $post_id );
    $category = $categories[0]->slug;

    if( !is_array($listImage)) $listImage["url"] = '/images/link-'.$category.'.png';

?>

<article id="post-<?php the_ID(); ?>" class="item">
        <a href="<?php echo $post_url ?>" rel="bookmark"><img src="<?php echo $listImage["url"]; ?>" width="100%"></a>
        <div class="whm-post-info">
            Link!
            <div class="autor">
                <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>">
                    <img src="/images/autoren/<?php the_author_firstname(); ?>-<?php the_author_lastname(); ?>-small.png" />
                </a>
            </div>
            <div class="date" style="font-size: 12px">
	      <div>
            <span class="posted-on"><i class="icon-calendar-empty" style="padding-right: 10px; font-size: 14px"></i><?php the_date(); ?></span>
            <?php if ( get_comments_number() > 0 ): ?>
            	<span class="comments-link"><i class="icon-comment-alt" style="font-size: 14px; padding-right: 10px; padding-left: 10px"></i><a href="<?php echo $post_url; ?>#respond"><?php comments_number( 'keine Kommentare', '1 Kommentar', '% Kommentare' ); ?></a></span>
            <?php endif; ?>
	      </div>
	    </div>
            <?php if( ! has_post_format('quote') ) : ?><h2 class="entry-title"><a href="<?php echo $post_url; ?>" rel="bookmark"><?php the_title(); ?></a></h2><?php endif; ?>
            <div class="entry-content">
			<p>
        			<?php echo whm_shortenText(get_the_content( ), 600); ?>
			</p>
                <a href="<?php echo $post_url; ?>"><span class="btn btn-small">Weiterlesen</span></a>
            </div>
       	</div>
    	<div class="postcat postcat-<?php echo $category ?>"></div>
</article>
