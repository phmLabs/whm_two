<?php


$args = array(
    "posts_per_page" => 5,
    "tag" => "link"
);
$links = new WP_Query($args);

#query_posts($args);

?>

<style>
.linklist ul {
	list-style-type: none;
	padding-left: 0;
	margin-left: 0;
}

.linklist li {
	font-size: 13px;
	background: url(/images/linklist.png) no-repeat 0px 5px;
    padding-left: 30px;
    padding-bottom: 10px;
    margin: 0;
    #font-family: verdana;
    font-size: 12px;
}

.linklist h2 {
	font-family: 'Abel', sans-serif;
	font-size: 18px;
}
</style>

<article class="item">
	<div class="whm-post-info">
		<div class="entry-content">
			<div style="padding-left: 10px;">
				<div class="linklist">
					<h2>Unsere neusten Links</h2>
					<p>Da wir nicht die einzigen sind, die gute Artikel schreiben,
						teilen wir hier unsere Netzfundst&uuml;cke mit euch.</p>
					<ul>
                        <?php while( $links->have_posts() ) : $links->the_post(); ?>
                          <li>
                            <a href="<?php echo get_permalink($links->queried_object_id)?>">
                              <?php echo get_the_title(); ?>
                            </a>
                          </li>
                        <?php endwhile; ?>
                        </ul>

                    <a href="/specials/link"><span
						class="btn btn-small">Zur &Uuml;bersicht</span></a>

					<a href="#" onclick="showLinkSuggestBox()"><span class="btn btn-small">Link vorschlagen</span></a>
				</div>
			</div>
		</div>
	</div>
</article>

<article class="item">
        <div class="whm-post-info" style="background-color: #5a5a26">
		<a href="http://www.livewatch.de/"><img style="padding-left:20px;" src="/images/livewatch.PNG" /></a>
        </div>
</article>


<?php include_once __DIR__.'/addlink_script.php'; ?>

<?php wp_reset_postdata();; ?>
