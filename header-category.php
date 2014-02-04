<?php
  if (IS_DEV) $_SERVER["DOCUMENT_ROOT"] = $_SERVER["DOCUMENT_ROOT"]."/../100gedanken.local/htdocs/";
?>

<?php
  global $css_category_color;
  $cat = get_category(get_query_var('cat'));
?>

<div id="whm2-header">
<?php if (file_exists($_SERVER["DOCUMENT_ROOT"]."/images/header/".$cat->slug.".png")): ?>
	<div id="whm2-header-top" class="background-color-cat-<?php echo $cat->slug; ?>" style="height: 194px; vertical-align: middle; padding-top: 130px">
			<a href="/"><img src="/images/header/<?php  echo $cat->slug ?>.png" alt="the web hates me" /></a>
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
		<div>
		  <?php echo $cat->category_description; ?>
		</div>
	</div>
</div>

<?php include "partials/mainmenu.php"; ?>
