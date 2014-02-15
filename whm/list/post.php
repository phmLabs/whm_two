<?php

    if ( get_field( 'artikeltyp' ) == "teaserartikel" ) {
	echo get_the_content();
    }else{

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
            <h2 class="entry-title" style="margin-bottom: 0"><a href="<?php echo $post_url; ?>" rel="bookmark style="margin-bottom: 0"><?php the_title(); ?></a></h2>
            	<div style="font-size: 11px; margin-bottom: 20px; color: #BDBDBD"><?php the_time('j. F  Y'); ?>. <?php the_author(); ?>.</div>
		<div class="entry-content">
			<p>
        			<?php echo whm_shortenText(get_the_content( ), 200); ?>
			</p>
            <a href="<?php echo $post_url; ?>"><span class="btn btn-small" style="padding-bottom: 5px; margin-bottom: 0px">Weiterlesen</span></a>
            </p></div>
       	</div>
    	<div class="postcat background-color-cat-<?php echo $categories[0]->slug ?>"></div>
</article>
<?php } ?>
