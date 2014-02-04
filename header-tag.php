<?php
  if (IS_DEV) $_SERVER["DOCUMENT_ROOT"] = $_SERVER["DOCUMENT_ROOT"]."/../100gedanken.local/htdocs/";
?>

<?php
   $tag = get_tag(get_query_var('tag_id'));
?>
<div id="whm2-header">
<?php if (file_exists($_SERVER["DOCUMENT_ROOT"]."/images/header/specials/".$tag->slug.".png")): ?>
   <?php if (file_exists($_SERVER["DOCUMENT_ROOT"]."/images/header/specials/".$tag->slug."-background.png")) {
     $headerBackground = "background-image: url('/images/header/specials/".$tag->slug."-background.png');background-size: 100% 100%";
   }else if (file_exists($_SERVER["DOCUMENT_ROOT"]."/images/header/specials/".$tag->slug."-background.cover.png")) {
     $headerBackground = "background-image: url('/images/header/specials/".$tag->slug."-background.cover.png');";
   }
?>

	<div id="whm2-header-top" class="header-cover" style="<?php echo $headerBackground ?>; min-height: 324px">
			<a href="/"><img src="/images/header/specials/<?php  echo $tag->slug ?>.png" alt="the web hates me" /></a>
<?php else: ?>
	<div id="whm2-header-top" class="header-default">
			<a href="/"><img src="/images/whm2-logo.png" alt="the web hates me" /></a>
<?php endif; ?>
	</div>
	<div id="whm2-header-kicker">
		<img src="/images/whm2-header-kicker.png"
			alt="Erfolgreiche Softwareprojekte im Web" />
	</div>
</div>

<div id="whm2-content-header">
	<div id="whm2-page-info">
        <?php include "partials/social.php" ?>
		<div id="whm2-page-description">
		  <?php echo $tag->description; ?>
		</div>
	</div>
</div>
<?php include "partials/mainmenu.php"; ?>
