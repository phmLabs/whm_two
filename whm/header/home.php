<?php

$header_image = "/images/categories/home.png";
// header_title = "the web hates me";
// header_kicker = "Erfolgreiche Softwareprojekte im Web";
$header_description = "Wer sind wir?";

$header_image_html = '<div id="home_links" style="position: relative; top: -60px; margin-left: 25px;"><a href="/whm/"><img src="/images/home/projekt.png" style="float: left; padding-right: 10px;"></a><a href="/co-autor-werden/"><img src="/images/home/co-autor.png" style="float: left; padding-right: 10px;"></a><a href="#" onclick="showLinkSuggestBox()"><img src="/images/home/link.png" style="float: left, padding-right: 10px;"></a></div>';

$postCount = wp_count_posts();
$commentCount = wp_count_comments();
$userCount = count_users();

#$header_image_html .= '<div id="home_header_info"><ul><li>'.$postCount->publish.' Artikel ver&ouml;ffentlicht</li><li>'.$commentCount->approved.' Kommentare abgegeben</li><li>'.$userCount["total_users"].' Autoren im Angebot</li></ul></div>';

$header_image_html .= '<div id="home_header_info">Wir sind <strong>the web hates me</strong>. Wir sind <strong>'.$postCount->publish.'</strong> Artikel, <strong>'.$commentCount->approved.'</strong> Kommentare und <strong>'.$userCount["total_users"].'</strong> Autoren. Auf dieser Webseite findet ihr alles rund um das Thema Webentwicklung mit den Schwerpunkten F&uuml;hrung, Entwicklung und Qualit&auml;t.</div>';

$hideDesc = true;

include "default.php";
include_once __DIR__.'/../list/addlink_script.php';