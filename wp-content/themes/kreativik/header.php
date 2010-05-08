<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"  />
<title><?php if (is_home () || is_page('Home')) { bloginfo('name'); echo " - "; bloginfo('description'); 
} elseif (is_category() ) {single_cat_title(); echo " - "; bloginfo('name');
} elseif (is_single() || is_page() ) {single_post_title(); echo " - "; bloginfo('name');
} elseif (is_search() ) {bloginfo('name'); echo " search results: "; echo wp_specialchars($s);
} else { wp_title('',true); }?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<meta name="robots" content="follow, all" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<?php if(!is_page('Home')): ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/inner.css" type="text/css" media="screen" />
<?php endif; ?>

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Blog RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
<!--[if IE]>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
<![endif]-->
<!--[if IE 7]>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie7.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
<![endif]-->
<!--[if IE 6]>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie6.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
<![endif]-->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.cycle.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>
<!-- Icons from the excellent Function Icon Set found at: http://wefunction.com/2008/07/function-free-icon-set -->
</head>

<body>
	<!-- start outer wrapper, in some cases this will create shadow over bg -->
	<div id="wrapper-shadow">
		<!-- start main wrapper -->
		<div id="wrapper">
			
			<!-- start header -->
			<div id="header">
				<div style="color: #CCC; position: fixed; top: 10px; right: 10px;">under construction</div>
				<!-- start the logo part of the header -->
				<div id="heading">
					<!-- <h1 id="headtext"><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
									<h3><?php bloginfo('description'); ?></h3> -->
					<img src="<?php bloginfo('template_url'); ?>/images/skllogo.png" alt="" />
				</div>
				<!-- end logo part of the header -->
				
				<!-- start menu part of the header -->
				<div id="menu">
					<ul id="nav">
						<?php wp_list_pages('depth=1&title_li=0&sort_column=menu_order'); ?>
					</ul>
				</div>
				<!-- end menu part of the header -->
				<div class="clear"></div>
			</div>
