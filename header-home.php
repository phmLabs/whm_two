<?php
  $postCount = wp_count_posts();
  $commentCount = wp_count_comments();
  $userCount = count_users();
?>
<div id="whm2-header">
	<div id="whm2-header-top" class="header-default">
			<a href="/"><img src="/images/whm2-logo.png" alt="the web hates me" /></a>
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
		  Wir sind <strong>the web hates me</strong>. Wir sind <strong><?php echo $postCount->publish ?> </strong> Artikel, <strong> <?php echo $commentCount->approved; ?>
		  </strong> Kommentare und <strong> <?php echo $userCount["total_users"] ?> </strong> Autoren. Auf dieser Webseite findet ihr alles rund um das Thema Webentwicklung mit den Schwerpunkten F&uuml;hrung, Entwicklung und Qualit&auml;t.
		</div>
	</div>
</div>
<?php include "partials/mainmenu.php"; ?>
