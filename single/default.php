<?php
	global $openGraph;
	$listImage = get_field('listenbild');
	if  ($listImage != "") {
		$openGraph["image"] = $listImage["url"];
	}
?>

<?php
  get_header();
?>

<script>
                $(document).ready(function(){
                    $("#facebookfans").sticky({topSpacing:70, className:"sticky"});
                  });
</script>

<div id="whm-content-body">
	<div id="whm-content-inner">
	<div id="whm-content-block" style="">
		<div id="whm-content-article">
			<?php include __DIR__.'/../content-single.php'; ?>
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
                <?php endif; ?>
	</div>
	<div style="float: right" id="whm-content-article-sidebar">
                <?php include __DIR__."/../whm/list/100gedanken.php"; ?>
		<?php include __DIR__."/../whm/list/addlink.php"; ?>
                <?php include __DIR__."/../whm/list/comments-newest.php"; ?>
		<?php include __DIR__."/../whm/list/facebook.php"; ?>
	</div>
</div>

<div style="clear: both"></div>

<?php get_footer(); ?>
