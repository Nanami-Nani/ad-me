<?php
	$url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$tokens = explode('/', $url);
	$lastdir = $tokens[sizeof($tokens)-2];
	$root = "";
?>
<head>
	<link href="<?php echo $root; ?>imgs/favicon.png?v=<?php echo $version; ?>" rel="shortcut icon" type="image/x-icon" />
	<title>HOTEL MONTEVIDEO<?php if($language != "es"){ echo $page[0]; }else{ echo $page[1]; }; ?></title>
	<meta http-equiv="Content-Type" content="text/html, charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="title" content="Hotel Montevideo<?php if($language != "en"){ echo $page[0]; }else{ echo $page[1]; }; ?>">
	<meta name="description" content="Hotel Montevideo  - The Leading Hotels of the World. Special rates for direct reservations. 5 star hotel in the heart of Montevideo">
	<meta name="keywords" content="">
	<link href="https://www.hotelmvd.com/imgs/banner.jpg" rel="image_src">
	<meta itemprop="name" content="Hotel Montevideo">
	<meta property="og:title" content="Hotel Montevideo<?php if($language != "en"){ echo $page[0]; }else{ echo $page[1]; }; ?>">
	<meta property="og:url" content="https://www.hotelmvd.com">
	<meta property="og:image" content="https://www.hotelmvd.com/imgs/banner.jpg">
	<meta property="og:site_name" content="Hotel Montevideo<?php if($language != "en"){ echo $page[0]; }else{ echo $page[1]; }; ?>">
	<meta property="og:description" content="Hotel Montevideo  - The Leading Hotels of the World. Special rates for direct reservations. 5 star hotel in the heart of Montevideo">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="Hotel Montevideo<?php if($language != "en"){ echo $page[0]; }else{ echo $page[1]; }; ?>">
	<meta name="twitter:description" content="Hotel Montevideo  - The Leading Hotels of the World. Special rates for direct reservations. 5 star hotel in the heart of Montevideo">
	<meta name="twitter:image" content="https://www.hotelmvd.com/imgs/banner.jpg">
	<meta name="Generator" content="Coda 2.6.9">
	<meta name="Language" content="<?php echo $language; ?>">
	<meta name="Distribution" content="Global">
	<meta name="Robots" content="All">
	<meta name="viewport" content="width=device-width, maximum-scale=1.0, initial-scale=1.0, user-scalable=no">
	<link href="<?php echo $root; ?>css/jquery.custom-scrollbar.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo $root; ?>css/style.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo $root; ?>css/social.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css" />
	<script src="https://kit.fontawesome.com/af1cde827e.js" crossorigin="anonymous"></script>
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9035780560703580" crossorigin="anonymous"></script>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-W4CLFGK');</script>
	<!-- End Google Tag Manager -->
</head>
