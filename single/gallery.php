<?php

$tags = get_the_terms ( get_post (), "post_tag" );

foreach ( $tags as $tag ) {
  if ($tag->term_id != "53") {
    $specialUrl = get_tag_link ( $tag );
  }
}

header("Location: $specialUrl", TRUE, 302);
die();