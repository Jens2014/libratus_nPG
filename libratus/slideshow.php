<?php
// force UTF-8
if (!defined('WEBPATH'))
	die();
if (function_exists('printSlideShow')) {
	?>
	<!DOCTYPE html>
	<html>
		<head>
			<?php npgFilters::apply('theme_head'); ?>
			<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
			<title><?php printBareGalleryTitle(); ?> <?php echo gettext("Slideshow"); ?></title>
			<link rel="stylesheet" href="<?php echo $_themeroot; ?>/css/style.css" type="text/css" />
			<link rel="stylesheet" href="<?php echo $_themeroot; ?>/css/slideshow.css" type="text/css" />
		</head>
		<body id="slideshow-page">
			<?php npgFilters::apply('theme_body_open'); ?>
			<?php printSlideShow(true, true); ?>
			<?php npgFilters::apply('theme_body_close'); ?>
		</body>
	</html>
	<?php
} else {
	include(SERVERPATH . '/' . CORE_FOLDER . '/404.php');
}
?>