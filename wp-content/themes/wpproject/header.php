<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<header class="header">
		<div class="container">
        <a href="/"><img src="<?= get_stylesheet_directory_uri() . "/images/bbc_logo.png" ?>" /></a>
			<ul>
				<li><a href="#">Corona Updates</a></li>
				<li><a href="#">Politics</a></li>
				<li><a href="#">Business</a></li>
				<li><a href="#">Sports</a></li>
				<li><a href="#">World</a></li>
                <li><a href="#">Travel</a></li>
                <li><a href="#">Podcasts</a></li>
                <li><a href="#"><i class="fas fa-angle-double-right" aria-hidden="false"></i></li>
                <li><a href="#"><i class="fa fa-user-alt" aria-hidden="false"></i></li>
                <li><a href="#"><i class="fas fa-search" aria-hidden="false"></i></li>
                <li><a href="#"><i class="fas fa-bars" aria-hidden="false"></i></li>

			</ul>
		</div>
	</header>
