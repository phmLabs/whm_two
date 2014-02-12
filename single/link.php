<?php
if (get_field("listenbild") != "") {
  $image = get_field("listenbild");
  $openGraph['image'] = $image["url"];
} else {
  $categories = get_the_category($post_id);
  $category = $categories[0]->slug;
  $openGraph['image'] = '/images/link-' . $category . '.png';
}

$link = get_field("url");
$redirect = get_field("redirect");

if( strpos($link, "https") === 0 || $redirect === "true") {
  header ('HTTP/1.1 301 Moved Permanently');
  header ('Location: '.$link);
  die;
}else if( strpos($link, "http") !== 0 ) {
  $link = "http://" . $link; 
}

?>
<head>
<title>whm empfiehlt: <?php the_title(); ?></title>
<meta property="og:image" content="<?php echo site_url().  $openGraph['image']; ?>">
<script type="text/javascript">//<![CDATA[
            // Google Analytics for WordPress by Yoast v4.3.3 | http://yoast.com/wordpress/google-analytics/
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-45980448-1']);
				            _gaq.push(['_trackPageview']);
            (function () {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();
            //]]></script>
</head>
<style>
#whm-toolbar {
	height: 40px;
	background-color: #222222;
	color: white;
	padding-left: 20px;
	padding-top: 5px;
}

#whm-toolbar a {
	color: #aaaaaa;
	text-decoration: none;
	font-weight: bold;
}

#whm-toolbar #logo {
	float: left;
	margin-right: 20px;
	padding-top: 2px;
}

#whm-toolbar p {
	float: left;
	margin-right: 20px;
	padding-top: 0px;
	margin-top: 0;
	font-size: 12px;
	font-family: verdana;
	color: #aaaaaa;
}

#whm-toolbar #close {
	float: right;
	padding-right: 10px;
	padding-top: 5px;
}

#whm-link-container {
	width: 100%;
	position: relative;
	overflow: hidden;
}

#whm-link-frame {
	height: calc(100% -         44px);
	width: 100%;
}

body {
	padding: 0;
	margin: 0;
	border: 0;
	outline: 0;
	overflow: hidden;
}

.fb-like {
	float: left;
	padding-left: 30px;
	padding-top: 5px;
}
</style>

<body>

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

	<div id="whm-toolbar">
		<a href="/"><img src="/images/logo-link.png" id="logo" /></a>
		<p>
			Dieser Link ist eine Empfehlung von <a href="/">www.thewebhatesme.com</a>.<br />
			F&uuml;r den Inhalt ist die Seite selbst verantwortlich.


		<div class="fb-like"
			data-href="<?php echo site_url(); ?><?php echo $_SERVER["REQUEST_URI"]; ?>"
			data-layout="button_count" data-action="like" data-show-faces="false"
			data-share="false"></div>
		</p>
		<div id="close">
			<a href="<?php echo $link; ?>"><img src="/images/close-link.png"
				width="20px"></a>
		</div>
	</div>

	<div id="whm-link-container">
		<iframe id="whm-link-frame" border="0" frameborder="0" hspace="0"
			vspace="0" marginheight="0" marginwidth="0"
			src="<?php echo $link; ?>"></iframe>
	</div>
</body>
