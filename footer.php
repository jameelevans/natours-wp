<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package natours
 */

?>
<!--Footer-->
<footer class="footer">
	<div class="footer__logo-box">

		<picture class="footer__logo">
			<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-green-small-1x.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-green-small-2x.png 2x" media="(max-width: 37.5em)">
			<img srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-green-1x.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-green-2x.png 2x" alt="Full logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-green-2x.png">
		</picture>
	</div>

	<div class="row">
		<div class="col-1-of-2">
			<div class="footer__navigation">
				<ul class="footer__list">
					<li class="footer__item"><a href="#" class="footer__link">Company</a></li>
					<li class="footer__item"><a href="#" class="footer__link">Contact Us</a></li>
					<li class="footer__item"><a href="#" class="footer__link">Careers</a></li>
					<li class="footer__item"><a href="#" class="footer__link">Privacy Policy</a></li>
					<li class="footer__item"><a href="#" class="footer__link">Terms</a></li>
				</ul>
			</div>
		</div>
		<div class="col-1-of-2">
			<p class="footer__copyright">
				Built and coded by <a href="#" class="footer__link">Jameel Evans</a>. This website was designed by Jonas Schmedtmann.
			</p>
		</div>
	</div>

</footer>
<div id="popup" class="popup">
	<div class="popup__content">
		<div class="popup__left">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/nat-8.jpg" alt="Tour photo" class="popup__img">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/nat-9.jpg" alt="Tour photo" class="popup__img">
		</div>
		<div class="popup__right">
			<a href="#section-tours" class="popup__close">&times;</a>
			<h2 class="heading-secondary u-margin-bottom-small">Start booking now</h2>
			<h3 class="heading-tertiary u-margin-bottom-small">Important &ndash; Please read these terms before booking</h3>
			<p class="popup__text">Lorem ipsum, dolor rgfae sit amet consectetur adipisicing elit. Blanditiis ullam perferendis, impedit dignissimos libero cum pariatur, modi incidunt magni quia maiores vitae consequatur aperiam quibusdam atque ut? Fugiat, beatae enim. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis ullam perferendis, impedit dignisewfae simos libero cum pariatur, modi incidunt magni quia maiores vitae consequatur aperiam quibusdam atque ut? Fugiat, beatae enim.</p>
			<a href="#" class="btn btn--green">Book now</a>
		</div>
	</div>
</div>


<?php wp_footer(); ?>
</body>
</html>
