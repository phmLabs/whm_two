<?php global $openGraph; ?>
<!DOCTYPE html>
<!--[if lt IE 9]>
    <html class="no-js ie lt-ie9" <?php language_attributes(); ?>>
<![endif]-->
<!--[if gt IE 9]>
    <html class="no-js" <?php language_attributes(); ?>>
<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>

<!-- Isotope,  http://isotope.metafizzy.co/ -->
<script src="<?php  echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script src="<?php  echo get_template_directory_uri(); ?>/assets/js/isotope-master/jquery.isotope.js"></script>

<!-- sticky.js, http://stickyjs.com/ -->
<script src="<?php  echo get_template_directory_uri(); ?>/inc/js/jquery.sticky.js"></script>

<meta property="fb:admins" content="100000130492338" />
<?php if (is_array($openGraph)):?>
  <meta property="og:image" content="<?php echo $openGraph['image']; ?>">
<?php endif; ?>

<?php wp_head(); ?>

<link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/100.css' type='text/css' media='all' />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/inc/css/dynamic.css.php" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/inc/css/whm.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/inc/css/whm-3column.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/inc/css/whm-2column.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/inc/css/whm-1column.css" type="text/css" media="all" />

<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "0a8d16ba-5656-4348-8127-fc28018c5509", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

<script type="text/JavaScript" src="<?php  echo get_template_directory_uri(); ?>/inc/superfish/js/superfish.js"></script>
<script type="text/JavaScript" src="<?php  echo get_template_directory_uri(); ?>/inc/superfish/js/hoverIntent.js"></script>
<link rel="stylesheet" media="screen" href="<?php  echo get_template_directory_uri(); ?>/inc/superfish/css/superfish.css">

</head>
