<?php

$cat = get_category(get_query_var('cat'));

if ( file_exists( $_SERVER["DOCUMENT_ROOT"]."/images/categories/".$cat->slug.".png" )) {

	$header_image = "/images/categories/".$cat->slug.".png";

	$hideDesc = true;

	include "default.php";
}