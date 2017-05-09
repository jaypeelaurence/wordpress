<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="<?php bloginfo('name'); ?>">
		<meta name="description" content="
			<?php if ( is_home() ) {
			bloginfo('name'); echo " - "; bloginfo('description');
		} elseif ( is_single() ) {
			bloginfo('name'); echo " - "; bloginfo('description');
		} elseif ( is_page() ) {
			bloginfo('name'); echo " - "; bloginfo('description');
		} else {
			bloginfo('name'); echo " - "; bloginfo('description');
		}  ?>" >
		
		<title><?php bloginfo('name'); ?>: <?php bloginfo('description');?></title>
		<link rel="Shortcut Icon" href="<?php echo bloginfo('template_url'); ?>/images/" type="image/x-icon" />
	
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
		<?php wp_head(); ?>
	
	</head>
	<body>
		<div class="navbar navbar-default" role="navigation" style="">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="brand" href="#">Project name</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<?php wp_list_pages(array('title_li' => '', 'exclude' => 4)); ?>
					</ul>
				</div>
			</div>
		</div>