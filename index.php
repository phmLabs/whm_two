<?php get_header(); ?>

<div id="whm2-content-body">
	<div id="whm2-content-list">

	<?php
$specialElements = whm_getSpecialElements();
$i = 0;
?>

				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>
                        <?php $i++; ?>
                        <?php

        if (array_key_exists($i, $specialElements))
          include __dir__ . "/whm/list/" . $specialElements[$i];
        do_action('show_special_element');
        ?>
						<?php get_template_part( 'content', get_post_format() ); ?>


					<?php endwhile; ?>

				<?php else : ?>

					<?php get_template_part( 'no-results', 'index' ); ?>

				<?php endif; ?>

				</div>

</div>
</div>

<div id="pagination-box">
  <div id="pagination">
                <div class="nav-previous">
                        <?php if ( get_next_posts_link() ) : ?>
                                <?php next_posts_link( __( '<span class="meta-nav btn"><i class="icon-chevron-left"></i></span>', 'dw-minion' ) ); ?>
                        <?php else: ?>
                                <span class="btn disabled"><i class="icon-chevron-left"></i></span>
                        <?php endif; ?>
                </div>
		<div class="nav-status">
			<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				echo 'Seite ' . $paged . ' von ' . $wp_query->max_num_pages; ?>
		</div>
                <div class="nav-next">
                        <?php if ( get_previous_posts_link() ) : ?>
                                <?php previous_posts_link( __( '<span class="meta-nav btn"><i class="icon-chevron-right"></i></span>', 'dw-minion' ) ); ?>
                        <?php else: ?>
                                <span class="btn disabled"><i class="icon-chevron-right"></i></span>
                        <?php endif; ?>
                </div>
    <?php #wp_pagenavi(); ?>
  </div>
</div>

			</div>
	</div>
	<script>

var $container = $('#whm2-content-list');

$container.imagesLoaded(function() {
    $container.isotope({
      itemSelector: '.item',
      layoutMode : 'masonry'
    });
});

</script>
<?php get_footer(); ?>
