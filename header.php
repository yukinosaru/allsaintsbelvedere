<?php
/**
 * The Header for the theme
 * Displays everything up till <div id="container">
 */
?>
 
<!DOCTYPE html>
<html lang="en-GB">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title><?php bloginfo('name'); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel='index' title='All Saints Belvedere' href='http://www.allsaintsbelvedere.com' />
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
<?php add_editor_style( $stylesheet ); ?> 
<?php wp_head(); ?>

<!-- Insert Google Analytics tracking code -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37805258-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</head>

<body>
<div id="header"><a href="<?php  bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
    <a href="http://www.rochester.anglican.org/"><img id="diocese" src="<?php bloginfo( 'template_directory' ); ?>/images/diocese125x60.png" /></a>
    <a href="http://www.churchofengland.org/"><img id="cofe" src="<?php bloginfo( 'template_directory' ); ?>/images/cofe.png" /></a>
</div>

<div id="imagebanner"></div> <!-- Sets up the images -->

<div id="container">

<div><?php include (ABSPATH . '/wp-content/plugins/wp-newsticker/news.php'); ?></div>