<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

	<head profile="http://gmpg.org/xfn/11">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<title>
			<?php if (is_home()) { echo bloginfo('name');
			} elseif (is_404()) {
			echo '404 Not Found';
			} elseif (is_category()) {
			echo 'Category:'; wp_title('');
			} elseif (is_search()) {
			echo 'Search Results';
			} elseif ( is_day() || is_month() || is_year() ) {
			echo 'Archives:'; wp_title('');
			} else {
			echo wp_title('');
			}
			?> - <?php bloginfo('description'); ?>
		</title>
		<?php if(is_search()) { ?><meta name="robots" content="noindex, nofollow" /><?php }?>
		<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css' />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="shortcut icon" href="https://charles-harvey.co.uk/wp-content/themes/blacknorange/images/favicon.png" type="image/x-icon" /> 

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<?php wp_head(); ?>

	</head>
	<body>
	<div id="header">
		<ul id="nav" class="wrap">
			<li class="home"><?php if (is_single() || is_page()) { echo '<h2>';} else { echo '<h1>';}; ?><a href="http://charles-harvey.co.uk/"><?php bloginfo('name'); ?> | <?php bloginfo('description') ?></a><?php if (is_single() || is_page()){ echo '</h2>';} else { echo '</h1>';}; ?></li>
			<li class="blog"><a href="http://charles-harvey.co.uk/">blog</a></li>
			<li class="about"><a href="http://charles-harvey.co.uk/about">about</a></li>
			<li class="contact"><a href="http://charles-harvey.co.uk/contact">contact</a></li>
	</li>

		</ul>
	
	</div>	
		<div class="wrap">