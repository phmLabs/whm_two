<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if( has_post_thumbnail() ) : ?>

	<div class="article-thumb">
		<? // php the_post_thumbnail(); ?>
<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
<img src="<?php echo $url; ?>" longdesc="URL_2" alt="Text_2" width="100%"/>

	</div>
	<?php endif; ?>

	<div class="left one-column" id="article-social-count">
		<?php $socialCount = whm_getSocialCount( ); ?>
		<div class="socialCountBox"><div style="float:left; width: 250px; padding-top: 5px;">Facebook</div><div class="socialCount background-color-cat-entwicklung"><?php echo $socialCount["Facebook"]; ?></div></div>
		<div class="socialCountBox"><div style="float:left; width: 250px; padding-top: 5px">Twitter</div><div class="socialCount background-color-cat-allgemein"><?php echo $socialCount["Twitter"]; ?></div></div>
		<div class="socialCountBox"><div style="float:left; width: 250px; padding-top: 5px;">Google+</div><div class="socialCount background-color-cat-qualitaet"><?php echo $socialCount["GooglePlusOne"]; ?></div></div>
		<div class="socialCountBox"><div style="float:left; width: 250px; padding-top: 5px;">Kommentare</div><div class="socialCount background-color-cat-whm-on-tour"><?php comments_number( '0', '1', '%' ); ?></div></div>
	</div>
	<div class="two-column" id="article-content">
	<header class="entry-header">
		<?php if( ! has_post_format('quote') ) : ?><h1 class="entry-title"><?php the_title(); ?></h1><?php endif; ?>
		<?php dw_minion_entry_meta(); ?>
	</header>
	<?php if ( is_search() ) : ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>
	<?php else : ?>
	<div class="entry-content">
		<?php the_content( __( 'Weiterlesen <span class="meta-nav">&rarr;</span>', 'dw-minion' ) ); ?>
		<?php
		wp_link_pages ( array (
				'before' => '<div class="page-links">',
				'after' => '</div>',
				'link_before' => '<span class="btn btn-small">',
				'link_after' => '</span>'
		) );
		?>
	</div>

<?php if ( get_field("slideshare_id" )): ?>
<iframe src="http://www.slideshare.net/slideshow/embed_code/<?php echo get_field("slideshare_id") ?>" width="425" height="355" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC;border-width:1px 1px 0;margin-bottom:5px" allowfullscreen> </iframe>
<?php endif; ?>

<div id="article-social" style="margin-top: 20px;">

<div style="width: 120px; float: left">
	<div class="fb-like" data-href="<?php echo site_url(); ?><?php echo $_SERVER["REQUEST_URI"]; ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
</div>

<div style="width: 120px; float: left;">
<a href="https://twitter.com/share" class="twitter-share-button" data-lang="de" data-hashtags="whm">Twittern</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</div>

<style>
 iframe[id^="oauth2relay"] { left: auto !important; display: none; right: -100px !important; }
</style>


<!-- Füie dieses Tag an der Stelle ein, an der die +1-Schaltfläe erscheinen soll. -->
<div class="g-plusone"></div>

<!-- Füie dieses Tag nach dem letzten +1-Schaltfläe-Tag ein. -->
<script type="text/javascript">
  window.___gcfg = {lang: 'de'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script> 
</div>
	<?php endif; ?>
	<footer class="entry-footer">
		<?php
		$tags_list = get_the_tag_list ( '', __ ( '', 'dw-minion' ) );
		if ($tags_list) :
			?>
		<div class="entry-tags">
			<span class="tags-title"><?php _e('Tags','dw-minion') ?></span> <span
				class="tags-links">
				<?php printf( __( '%1$s', 'dw-minion' ), $tags_list ); ?>
			</span>
		</div>
		<?php endif; ?>
	</footer>
	</div>
</article>
