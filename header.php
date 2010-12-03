<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="language" content="es" />
	<title>
		<?php bloginfo('name'); ?>
		<?php wp_title(); ?>
	</title>
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
	<style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?> );
	</style>
	<!--link href="style.css" rel="stylesheet" type="text/css"-->
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
	<script type="text/javascript">
	$(function() {
		$('.content').css('height', $('.column2').height() + 'px');
	});
	</script>
</head>

<body>

	<div class="container">
		<header>
			<a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a>
		</header>
  
		<nav>
			<ul>
				<?php if ( is_home() ) : ?>
				<li class="page_item current_page_item"><a href="<?php echo get_settings('home');?>">Inicio</a></li>
				<?php else : ?>
				<li class="page_item"><a href="<?php echo get_settings('home');?>">Inicio</a></li>
				<?php endif; ?>
				<?php wp_list_pages('title_li='); ?>
			</ul>
			<div id="search">
				<form id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
					<input type="text" name="s" id="s" />
				</form>
			</div>
		</nav>