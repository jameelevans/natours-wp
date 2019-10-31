<?php
/**
 * The main header for my theme
 *
 * @package natours
 */
?>
	<!doctype html>
	<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<?php wp_head(); ?>
	</head>

	<body>

		<div class="navigation">
			<input id="navi-toggle" type="checkbox" class="navigation__checkbox">

			<label for="navi-toggle" class="navigation__button">
				<span class="navigation__icon">&nbsp;</span>
			</label>
			<div class="navigation__background">&nbsp;</div>
			<nav class="navigation__nav">
				<ul class="navigation__list">
					<li class="navigation__item"><a href="#about" class="navigation__link"><span>01</span>About Natours</a></li>
					<li class="navigation__item"><a href="#benifits" class="navigation__link"><span>02</span>Your Benifits</a></li>
					<li class="navigation__item"><a href="#tours" class="navigation__link"><span>03</span>Popular Tours</a></li>
					<li class="navigation__item"><a href="#stories" class="navigation__link"><span>04</span>Stories</a></li>
					<li class="navigation__item"><a href="#book" class="navigation__link"><span>05</span>Book Now</a></li>
				</ul>
			</nav>
		</div>

		<header class="header">
			<div class="header__logo-box">
				<?php
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
					if ( has_custom_logo() ) {
							echo '<img class="header__logo" src="' . esc_url( $logo[0] ) . '"' . 'alt="' . get_bloginfo( 'name' ) . '">';
					} else {
							echo '';
					}
				?>
			</div>

			<div class="header__textbox">
				<h1 class="heading-primary">
					<span class="heading-primary--main">Outdoors</span>
					<span class="heading-primary--sub">is where life happens</span>
				</h1>

				<a class="btn btn--white btn--animated" href="#tours">Discover our tours</a>
			</div>
		</header>	

		

