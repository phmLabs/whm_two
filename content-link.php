<?php

    $listImage = get_field('listenbild');

    $categories = get_the_category( $post_id );
    $category = $categories[0]->slug;

    if( !is_array($listImage)) {
      $hasListImage = true;
      $listImage["url"] = '/images/link-'.$category.'.png';
    }else{
      $hasListImage = false;
    }

?>

<article id="post-<?php the_ID(); ?>" class="item link">
       <div class="whm-post-info">
        <a href="<?php the_permalink() ?>" rel="bookmark">
  	    <img src="/images/whm2-link.png" class="background-color-cat-<?php echo $category; ?>" width="72px" style="float:left; margin-right: 10px;"></a>
            <h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php echo get_the_title() ?></a></h2>
	 </div>
</article>