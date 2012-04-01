<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="http://art.istic.net/iconography/aqcom/logo_64.png"> 
<link rel="apple-touch-icon" href="http://art.istic.net/iconography/aqcom/logo_45.png">
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

<style type="text/css">
<?PHP

$from = time();


$fn = date("Y/m/d", $from).".jpg";
$mn = date("Y/m", $from).".jpg";
$yn = date("Y", $from).".jpg";

if (file_exists("/var/www/hosts/dailyphoto.aquarionics.com/htdocs/".$fn) ) {
  ?>
  body {
    background-image: url("http://dailyphoto.aquarionics.com/<?PHP echo $fn; ?>");
  }
  <?PHP
} elseif (file_exists("/var/www/hosts/dailyphoto.aquarionics.com/htdocs/".$mn) ) {
  ?>
  body {
    background-image: url("http://dailyphoto.aquarionics.com/<?PHP echo $mn; ?>");
  }
  <?PHP
} elseif (file_exists("/var/www/hosts/dailyphoto.aquarionics.com/htdocs/".$yn) ) {
  ?>
  body {
    background-image: url("http://dailyphoto.aquarionics.com/<?PHP echo $yn; ?>");
  }
  <?PHP
}//endif
?>
</style>

</head>
<body <?php body_class(); ?>>
<div id="page">
<div id="header" role="banner">
	<div id="headerimg">
		<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
		<div class="description"><?php bloginfo('description'); ?></div>
	</div>
</div>
