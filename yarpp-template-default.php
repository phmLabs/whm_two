<?php
/*
YARPP Template: Simple
Author: mitcho (Michael Yoshitaka Erlewine)
Description: A simple example YARPP template.
*/
?>
<?php if (have_posts()):?>
	<?php while (have_posts()) : the_post(); ?>
      <span id="related-<?php $i++; echo $i;?>"<?php get_template_part( 'content', get_post_format() ); ?></span>
	<?php endwhile; ?>
<?php else: ?>
<?php endif; ?>