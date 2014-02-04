<?php
  if (IS_DEV) $_SERVER["DOCUMENT_ROOT"] = $_SERVER["DOCUMENT_ROOT"]."/../100gedanken.local/htdocs/";
?>

<style>
  .search-field {
  	width: 500px;
  }

  #whm2-header {
  	color: white;
  }
</style>


<div id="whm2-header">
	<div id="whm2-header-top" class="header-cover" style="background-color: #FFC045; height: 314px">
			<div style="padding-top: 70px;"><h2>Suche</h2><?php include 'searchform.php';?></div>
			<div style="color: #333333">Die Suche nach dem Begriff <strong>"<?php echo esc_attr( get_search_query() ); ?>"</strong> ergab folgende Treffer.</div>
	</div>
	<div id="whm2-header-kicker">
		<img src="/images/whm2-header-kicker.png"
			alt="Erfolgreiche Softwareprojekte im Web" />
	</div>
</div>

<?php include "partials/mainmenu.php"; ?>