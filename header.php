<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>mo.kaオフィシャルサイト</title>
	<meta name="description" content="mo.kaのオフィシャルサイト">
	<meta name="keywords" content="mo.ka, モカ, 歌手, シンガーソングライター, 樋口龍乃介">
	<meta property="og:url" content="https://moka-music.work/">
	<meta property="og:title" content="mo.kaのオフィシャルサイト">
	<meta property="og:type" content="website">
	<meta property="og:description" content="mo.ka, moka, モカ, 歌手, シンガーソングライター, 樋口龍乃介">
	<meta property="og:image" content="https://moka-music.work/wp-content/themes/moka/images/ogp.png">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@mkrpso">
	<meta property="og:site_name" content="mo.kaのオフィシャルサイト">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<link rel="apple-touch-icon" sizes="192x192" href="<?php bloginfo('template_url'); ?>/images/common/icon/touch-icon.png">
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/common/icon/touch-icon.png">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-132788262-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-132788262-1');
	</script>
	<?php wp_head(); ?>
</head>

<body>
	<div class="wrapper">
		<div class="menuBtn is-sp-show">
			<a href="#" id="panel-btn"><span id="panel-btn-icon"></span></a>
		</div>
		<header>
			<ul>
				<li class="textUnderLine"><a href="<?php echo home_url(); ?>">TOP</a></li>
				<li class="textUnderLine"><a href="<?php echo home_url('/about/'); ?>">ABOUT</a></li>
				<li class="textUnderLine"><a href="<?php echo home_url('/blog/'); ?>">BLOG</a></li>
				<li class="textUnderLine"><a href="<?php echo home_url('/live/'); ?>">LIVE</a></li>
				<li class="textUnderLine"><a href="<?php echo home_url('/cd/'); ?>">CD</a></li>
				<li class="textUnderLine"><a href="<?php echo home_url('/contact/'); ?>">CONTACT</a></li>
				<li class="textUnderLine"><a href="https://line.me/R/ti/p/%40vts1083c" target="_blank">LINE</a></li>
			</ul>
		</header>