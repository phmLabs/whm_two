<? global $facebookCount, $rssCount, $googleCount, $twitterCount; ?>
<div class="social">
	<a href="http://www.facebook.com/thewebhatesme"><img
		src="/images/social/facebook.png" /></a> <a
		href="http://www.twitter.com/phphatesme"><img
		src="/images/social/twitter.png" /></a> <a
		href="https://plus.google.com/108642409585315188185"><img
		src="/images/social/google.png" /></a> <a href="/feed/"><img
		src="/images/social/rss.png" style="margin-right: 0px;"/></a>
	<br />
	<div id="social-count">
    	<div style="width: 48px; padding-left: 20px; padding-right: 17px; float: left;"><?php echo $facebookCount; ?></div>
    	<div style="width: 48px; padding-right: 20px; float: left;"><?php echo $twitterCount; ?></div>
    	<div style="width: 48px; padding-right: 20px; float: left;"><?php echo $googleCount; ?></div>
    	<div style="width: 48px; padding-right: 10px; float: left;" class="last-img"><?php echo $rssCount; ?></div>
	</div>
</div>
