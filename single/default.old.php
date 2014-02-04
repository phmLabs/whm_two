<?php
  get_header();
?>

<div id="whm-content-body">
	<div id="whm-content-inner">
		<div id="whm-content-article">
			<?php include __DIR__.'/../content-single.php'; ?>
		</div>
		<div id="whm-content-sidebar">
			<?php include __DIR__."/../whm/list/addlink.php"; ?>
			<?php include __DIR__."/../whm/list/facebook.php"; ?>
			<?php include __DIR__."/../whm/list/adsense.php"; ?>
			<?php include __DIR__."/../whm/list/comments-newest.php"; ?>
		</div>
		<div style="clear: both"></div>
		<?php if ( function_exists("related_posts")): ?>
		<div class="relateds">
		  <?php related_posts() ?>
		</div>
		<div style="clear: both"></div>
		<?php endif; ?>
		<?php if ( comments_open() ): ?>
		  <div class="two-column boxed" id="article-comments">
		    <div class="headline">Kommentare</div>
		    <?php comments_template(); ?>
		  </div>
		  <div style="float: right">
			<?php include __DIR__."/../whm/list/comments-newest.php"; ?>
		  </div>
		<?php endif; ?>
	</div>
</div>

<div style="clear: both"></div>

<?php get_footer(); ?>
