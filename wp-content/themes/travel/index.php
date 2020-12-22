<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('title') ?></title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<?php wp_head(); ?>
</head>
<body class="<?php body_class(); ?>">
	<h1><?php bloginfo('title') ?></h1>
	<h2>Welcome to Our Community <span><?php bloginfo('name') ?></span></h2>
	<?php wp_footer(); ?>
</body>
</html>