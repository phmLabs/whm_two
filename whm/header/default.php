<style>
.tag-header {
	margin-left: 30px;
	margin-bottom: 30px;
	width: 1119px;
	position: relative;
}

.tag-header h1 {
	font-size: 25px;
	margin-bottom: 0px;
}

.tag-header .title {
	float: left;
	height: 150px;
	padding-right: 30px;
	width: 350px;
	padding-left: 10px;
}

.tag-header .description {
	padding-top: 10px;
	font-size: 12px;
	margin-left: 390px;
}


@media ( max-width: 1523px ) {
	.tag-header {
		padding-top: 40px;
		width: 740px;
		z-index: 5;
    }

    .tag-header .title {
    	height: 200px;
    }
}

@media ( max-width: 900px ) {
	.tag-header {
		width: 80%;
		z-index: 5;
    }

    .tag-header .description {
	margin-left: 0px;
    }

    .tag-header .title {
        padding-left: 0px;
        height: 60px;
        float: none;
    }
}
</style>

<div class="tag-header">
	<img src="<?php echo $header_image; ?>" />
	<?php echo $header_image_html; ?>
	<?php  if ( $hideDesc !== true ) : ?>
	<div style="padding-top: 30px;">
		<div class="title">
			<h1><?php echo $header_title; ?></h1>
			<?php echo $header_kicker; ?>
		</div>
		<div class="description"><?php echo $header_description; ?></div>
	</div>
	<?php endif; ?>
</div>

<div style="clear: both"></div>