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
<div class="container">
	<header class="header">
	
			<div class="row">
				<?php if ( has_custom_logo() ) : ?>
				<div class="site-logo"><?php the_custom_logo(); ?></div>
			<?php endif; ?>
					

						<?php if (has_nav_menu('menu')): ?>
				<nav class="menu">
					<?php
					wp_nav_menu([
						'theme_location' => 'menu'
					]);
					// ?>
				</nav>
			<?php endif ?>

						</div>
	</div>
</div>
				</div>
	</header>
