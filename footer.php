
</div>
</div>
</div>
</div>
</div>

<style>

</style>

<footer id="whm2-footer-box">
	<div id="whm2-footer-inner">
		<div id="whm2-footer-logo">
			<a href="/"><img src="/images/whm2-footer-logo.png" alt="whm Footer Logo" /></a>
		</div>
		<div id="whm2-footer-categories">
			<img src="/images/whm2-footer-kategorien.png" alt="Kategorien" />
			<?php wp_nav_menu( array('menu_id' => 'cat-list', 'container' => '', 'menu' => 'Kategorien', 'depth' => '1'  )); ?>
		</div>
		<div id="whm2-footer-columns">
		    <img src="/images/whm2-footer-kolumnen.png" alt="Kolumnen" />
			<?php wp_nav_menu( array('menu_id' => "cat-list", 'container' => '', 'menu' => 'Kolumnen' )); ?>
		</div>
		<div id="whm2-footer-whm">
			<img src="/images/whm2-footer-whm.png" alt="the web hates me" />
			<?php wp_nav_menu( array('menu_id' => "cat-list", 'container' => '', 'menu' => 'whm' )); ?>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
