<?php

$post_format = get_post_format( );

if ($post_format === "link") {
	include __DIR__ . "/whm/list/link.php";
} else {
	include __DIR__ . "/whm/list/post.php";
}