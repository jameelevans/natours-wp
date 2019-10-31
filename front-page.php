<?php

get_header();

?>
<main>
	<section id="about" class="section-about">
		<div class="u-center-text u-margin-bottom-big">
			<h2 class="heading-secondary">
				Exciting tours for adventurous people
			</h2>
		</div>

		<div class="row">
			<div class="col-1-of-2">
				<h3 class="heading-tertiary u-margin-bottom-small">You're going to fall in love with nature</h3>
				<p class="paragraph">
					Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci ducimus numquam exercitationem
					officiis accusamus harum magnam, veritatis quasi doloremque similique minima asperiores id voluptas
					praesentium quos dolorum. Eaque, aspernatur nihil?
				</p>

				<h3 class="heading-tertiary u-margin-bottom-small">Live adventures like you never have before</h3>
				<p class="paragraph">
					Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci ducimus numquam exercitationem
					officiis accusamus harum magnam, veritatis
				</p>

				<a href="#" class="btn-text">Learn More &rarr;</a>
			</div>
			<div class="col-1-of-2">
				<div class="composition">
					<img srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/nat-1.jpg 300w, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/nat-1-large.jpg 1000w"
					sizes="(max-width: 56.25em) 20vw, (max-width: 600px) 30vw, 300px"
					alt="Photo 1"
					class="composition__photo composition__photo--p1"
					src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/nat-1-large.jpg">

					<img srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/nat-2.jpg 300w, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/nat-2-large.jpg 1000w"
					sizes="(max-width: 56.25em) 20vw, (max-width: 600px) 30vw, 300px"
					alt="Photo 2"
					class="composition__photo composition__photo--p2"
					src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/nat-2-large.jpg">

					<img srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/nat-3.jpg 300w, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/nat-3-large.jpg 1000w"
					sizes="(max-width: 56.25em) 20vw, (max-width: 600px) 30vw, 300px"
					alt="Photo 3"
					class="composition__photo composition__photo--p3"
					src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/nat-3-large.jpg">
				</div>
			</div>
		</div>
	</section>

	<section id="benifits" class="section-features">


		<div class="row">
			<div class="col-1-of-4">
				<div class="feature-box">
					<i class="feature-box__icon icon icon-world"></i>
					<h3 class="heading-tertiary u-margin-bottom-small">Explore the world</h3>
					<p class="feature-box__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta,
						repellendus officia! Animi earum enim </p>
				</div>
			</div>

			<div class="col-1-of-4">
				<div class="feature-box">
					<i class="feature-box__icon icon icon-nature"></i>
					<h3 class="heading-tertiary u-margin-bottom-small">Explore the world</h3>
					<p class="feature-box__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta,
						repellendus officia! Animi earum enim </p>
				</div>
			</div>

			<div class="col-1-of-4">
				<div class="feature-box">
					<i class="feature-box__icon icon icon-map"></i>
					<h3 class="heading-tertiary u-margin-bottom-small">Explore the world</h3>
					<p class="feature-box__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta,
						repellendus officia! Animi earum enim </p>
				</div>
			</div>

			<div class="col-1-of-4">
				<div class="feature-box">
					<i class="feature-box__icon icon icon-heart"></i>
					<h3 class="heading-tertiary u-margin-bottom-small">Explore the world</h3>
					<p class="feature-box__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta,
						repellendus officia! Animi earum enim </p>
				</div>
			</div>
		</div>
	</section>

	<section id="tours" class="section-tours">
		<div class="u-center-text u-margin-bottom-big">
			<h2 class="heading-secondary">
				Most popular tours
			</h2>
		</div>
		<div class="row">
			<div class="col-1-of-3">
				<div class="card">
					<div class="card__side card__side--front">
						<div class="card__picture card__picture--1">
							&nbsp;
						</div>

						<h4 class="card__heading">
							<span class="card__heading-span card__heading-span--1">The Sea Exporler</span>
						</h4>

						<div class="card__details">
							<ul>
								<li>3 Day Tour</li>
								<li>Up to 30 people</li>
								<li>2 Tour guides</li>
								<li>Sleep in cozy hotels</li>
								<li>Difficulty: easy</li>
							</ul>
						</div>
					</div>
					<div class="card__side card__side--back card__side--back-1">
						<div class="card__cta">
							<div class="card__price-box">
								<div class="card__price-only">Only</div>
								<div class="card__price-value">$297</div>
							</div>
							<a class="btn btn--white" href="#popup">Book now!</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-1-of-3">
				<div class="card">
					<div class="card__side card__side--front">
						<div class="card__picture card__picture--2">
							&nbsp;
						</div>

						<h4 class="card__heading">
							<span class="card__heading-span card__heading-span--2">The Forest Hiker</span>
						</h4>

						<div class="card__details">
							<ul>
								<li>7 Day Tour</li>
								<li>Up to 40 people</li>
								<li>6 Tour guides</li>
								<li>Sleep in cozy hotels</li>
								<li>Difficulty: medium</li>
							</ul>
						</div>
					</div>
					<div class="card__side card__side--back card__side--back-2">
						<div class="card__cta">
							<div class="card__price-box">
								<div class="card__price-only">Only</div>
								<div class="card__price-value">$497</div>
							</div>
							<a class="btn btn--white" href="#popup">Book now!</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-1-of-3">
				<div class="card">
					<div class="card__side card__side--front">
						<div class="card__picture card__picture--3">
							&nbsp;
						</div>

						<h4 class="card__heading">
							<span class="card__heading-span card__heading-span--3">The Snow Adventurer</span>
						</h4>

						<div class="card__details">
							<ul>
								<li>5 Day Tour</li>
								<li>Up to 15 people</li>
								<li>3 Tour guides</li>
								<li>Sleep in provided tents</li>
								<li>Difficulty: hard</li>
							</ul>
						</div>
					</div>
					<div class="card__side card__side--back card__side--back-3">
						<div class="card__cta">
							<div class="card__price-box">
								<div class="card__price-only">Only</div>
								<div class="card__price-value">$897</div>
							</div>
							<a class="btn btn--white" href="#popup">Book now!</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="u-center-text u-margin-top-huge">
			<a href="#" class="btn btn--green">Discover all tours</a>
		</div>

	</section>

	<section id="stories" class="section-stories">
		<div class="bg-video">
			<video class="bg-video__content" autoplay muted loop>
				<source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/video.mp4" type="video/mp4"> 
				<source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/video.webm" type="video/webm"> 
				Your browser is not supported! Please upgrade to a modern browser.
			</video>
		</div>

		<div class="u-center-text u-margin-bottom-big">
			<h2 class="heading-secondary">
				We make people genuinely happy
			</h2>
		</div>

		<div class="row">
			<div class="story">
				<figure class="story__shape">
					<img class="story__image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/nat-8.jpg" alt="Person on a tour">
					<figcaption class="story__caption">Mary Smith</figcaption>
				</figure>
				<div class="story__text">
					<h3 class="heading-tertiary u-margin-bottom-small">I had the best week ever with my family</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia error ratione culpa iusto repudiandae recusandae officia voluptatem dolore ducimus impedit maiores quae nam eum, repellat est laborum laboriosam aut ex?  maiores quae nam eum, repellat est laborum laboriosam aut ex?</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="story">
				<figure class="story__shape">
					<img class="story__image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/nat-9.jpg" alt="Person on a tour">
					<figcaption class="story__caption">Jack Wilson</figcaption>
				</figure>
				<div class="story__text">
					<h3 class="heading-tertiary u-margin-bottom-small">WOW! My life is completly different now.</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia error ratione culpa iusto repudiandae recusandae officia voluptatem dolore ducimus impedit maiores quae nam eum, repellat est laborum laboriosam aut ex?  maiores quae nam eum, repellat est laborum laboriosam aut ex?</p>
				</div>
			</div>
		</div>

		<div class="u-center-text u-margin-top-huge">
			<a href="#" class="btn-text">Read all stories &rarr;</a>
		</div>

	</section>

	<section id="book" class="section-book">
		<div class="row">
			<div class="book">
				<div class="book__form">
					<form action="#" class="form">
					<div class="u-margin-bottom-medium">
						<h2 class="heading-secondary">
							Start booking now
						</h2>
					</div>

						<div class="form__group">
							<input type="text" class="form__input" placeholder="Full Name" id="name" autocomplete="off" required>
							<label for="name" class="form__label">Full Name</label>
						</div>

						<div class="form__group">
							<input type="email" class="form__input" placeholder="Email address" id="email" autocomplete="off" required>
							<label for="email" class="form__label">Email address</label>
						</div>

						<div class="form__group  u-margin-bottom-medium">
							<div class="form__radio-group">
								<input id="small" type="radio" class="form__radio-input" name="size">
								<label for="small" class="form__radio-label">
									<span class="form__radio-button"></span>
									Small tour group
								</label>
							</div>

							<div class="form__radio-group">
								<input id="large" type="radio" class="form__radio-input" name="size">
								<label for="large" class="form__radio-label">
									<span class="form__radio-button"></span>	
									Large tour group
								</label>
							</div>
							
						</div>
						<div class="form__group">
								<button class="btn btn--green">Next step &rarr;</button>
							</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</main>
<!--<section class="grid-test">
		<div class="row">
			<div class="col-1-of-2">
				col 1 of 2
			</div>
			<div class="col-1-of-2">
				col 1 of 2
			</div>
		</div>

		<div class="row">
			<div class="col-1-of-3">
				col 1 of 3
			</div>
			<div class="col-1-of-3">
				col 1 of 3
			</div>
			<div class="col-1-of-3">
				col 1 of 3
			</div>
		</div>

		<div class="row">
			<div class="col-1-of-3">
				col 1 of 3
			</div>
			<div class="col-2-of-3">
				col 2 of 3
			</div>
		</div>

		<div class="row">
			<div class="col-1-of-4">
				col 1 of 4
			</div>
			<div class="col-1-of-4">
				col 1 of 4
			</div>
			<div class="col-1-of-4">
				col 2 of 4
			</div>
			<div class="col-1-of-4">
				col 1 of 4
			</div>
		</div>

		<div class="row">
			<div class="col-1-of-4">
				col 1 of 4
			</div>
			<div class="col-1-of-4">
				col 1 of 4
			</div>
			<div class="col-2-of-4">
				col 2 of 4
			</div>
		</div>
	</section>-->


<?php get_footer(); ?>
