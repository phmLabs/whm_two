<script>

		(function($){
			$(document).ready(function(){
				$('#mainmenu').superfish({
				});
			});
		})(jQuery);

		$(document).ready(function(){
		    $("#mainmenu-box").sticky({topSpacing:0, className:"sticky"});
		  });

</script>
<div id="mainmenu-box">
	<div id="mainmenu-deco-line"></div>
	<div id="mainmenu-box-inner">
		<div id="stickylogo" style="float: left">
			<a href="/">the web hates me</a>
		</div>
		<div style="width: 900px;">
		  <ul class="sf-menu" id="mainmenu">
                        <li class="first-level"><img src="/images/whm2-mainmenu-down.png"
                                style="padding-right: 8px;" />Kategorien
                                <?php wp_nav_menu( array('container' => '', 'menu' => 'Kategorien', "before" => "<div class='list-box'></div>" )); ?>
                        </li>

			<li class="first-level"><img src="/images/whm2-mainmenu-down.png"
				style="padding-right: 8px;" /> Kolumnen
				<?php wp_nav_menu( array('container' => '', 'menu' => 'Kolumnen' )); ?>
			</li>
			<li class="first-level"><img src="/images/whm2-mainmenu-down.png"
				style="padding-right: 8px;" /> whm
				<?php wp_nav_menu( array('container' => '', 'menu' => 'whm' )); ?>
			</li>
		  </ul>
		</div>
		<div id="mainmenu-search">
			<?php include __DIR__ ."/../searchform.php"; ?>
		</div>
	</div>
</div>
