<?php
/**
 * The template for displaying the header
 *
 * @package Vtrois
 * @version 1.1
 */
?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
	<title><?php wp_title( '-', true, 'right' ); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Cache-Control" content="no-transform" />  
	<meta http-equiv="Cache-Control" content="no-siteapp" />  
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="<?php snape_description(); ?>" />
	<meta name="keywords" content="<?php snape_keywords();?>" />
	<?php wp_head(); ?>

	<?php if ( snape_option( 'site_bw' )==1 ) : ?>
	<style type="text/css">
	html{filter: grayscale(100%);-webkit-filter: grayscale(100%);-moz-filter: grayscale(100%);-ms-filter: grayscale(100%);-o-filter: grayscale(100%);filter: progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);filter: gray;-webkit-filter: grayscale(1); }
	</style>
	<?php endif; ?>
</head>

<?php flush(); ?>

<?php
$background_color = snape_option('background_color');
$background_image = snape_option('background_image');
?>

<body data-spy="scroll" data-target=".scrollspy"  style="<?php echo (!snape_option('background_image')) ? 'background:' . $background_color  :'background-image: url('. $background_image .'); background-position: center 0; background-attachment: fixed; background-size: cover; background-repeat: no-repeat;' ; ?>">

	<!-- navbar -->
	<nav class="top-bar navbar">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand title-noimg" href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#top-menu"><i class="fa fa-bars"></i></button>
			</div>
			<div id="top-menu" class="collapse navbar-collapse">
				<div class="blog-description hidden-xs hidden-sm"><?php echo get_bloginfo ( 'description' );  ?></div>
				<?php wp_nav_menu(array('theme_location' => 'header_menu', 'container' => 'div', 'container_id' => 'navbar-menu', 'menu_class' => 'nav navbar-nav navbar-right','walker' => new wp_bootstrap_navwalker)); ?>
			</div>
		</div>
	</nav>