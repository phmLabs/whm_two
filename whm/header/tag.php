<?php

    $tag = get_tag(get_query_var('tag_id'));

    $file = __DIR__."/tags/".$tag->slug.".php";
    if(file_exists($file)) {
    	include $file;
    }else {

    }