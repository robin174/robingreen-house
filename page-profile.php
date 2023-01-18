<?php
/**
* Template Name: Page - Profile
* @package robingreenhouse
*/

get_header(); ?>

<section class="org--profile-header" style="background-color: rgba(<?php the_field('profile_header-color'); ?>);">
	<div class="container-fluid">
		<div class="mol--profile-hero d-flex justify-content-center">
			<figure>
				<img class="img-fluid" src="<?php the_field('profile_header-image'); ?>" alt="hero image">
			</figure>
		</div>
	</div>
</section>

<section class="org--profile-columns">
	<div class="container">
		<div class="row justify-content-center">

			<div class="col-12 col-md-12 col-lg-10">
				<div class="row justify-content-center">
					<div class="col-10 col-md-4">
						<div class="mol--profile-secondary">
							<div class="atm--profile-headshot">
								<figure class="atm--headshot">
									<img class="img-fluid" src="<?php the_field('profile_headshot'); ?>" alt="<?php the_field('profile_name'); ?>">
								</figure>
							</div>
							<div class="atm--profile-blockquote">
								<blockquote>
									&ldquo;Technology and design. Fundamental business integer lacinia nisi nec luctus aliquet. Integer sed quam nisi. In non felis nisi. Mauris sagittis euismod faucibus. Sed vestibulum enim at fringilla tempus.&rdquo;
								</blockquote>
							</div>
						</div>
					</div>
					<div class="col-10 col-md-8 col-lg-7 offset-lg-1">
						<div class="mol--profile-primary">
							<h2 class="atm--profile-title"><?php the_field('profile_name'); ?></h2>
							<p class="atm--profile-details"><a href="mailto:robin@designingreen.co.uk" title="Email Robin Green">robin@designingreen.co.uk</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://www.linkedin.com/in/robingreen174/" title="Robin Green on LinkedIn" target="_blank"><i class="fab fa-linkedin fa-lg"></i></a></p>
							<div class="atm--profile-location">
								<h5 class="ut--uc">Location</h5>
								<h4><?php the_field('profile_location'); ?></h4>
							</div>
							<div class="atm--profile-description">
								<p>Robin is a designer, developer and creative technologist. Learning to code was a fundamental step in facilitating a move from traditional graphic design into digital design early on in his career.</p>
								<p>Fascinated by how each and every one of us interacts with technology differently, Robin started delivering workshops on all aspects of the digital spectrum 6 years ago. Current areas of interest include internet of things, blockchain, security and future technologies.</p>
							</div>
							<div class="atm--profile-entities">
								<h5 class="ut--uc">Live projects</h5>
								<div class="mol--entity-wrapper d-flex">
									<div class="atm--entity-logo d-flex align-items-center justify-content-center">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-greenhouse-v2.svg" alt="robingreen.house logo">
									</div>
									<div class="atm--entity-details flex-grow-1">
										<span class="d-block atm--entity-title">robingreen.house</span>
										<span class="d-block atm--entity-desc">Innovation as a Service</span>
									</div>
									<div class="atm--entity-arrow">
										<a class="button atm--button-square-i d-flex align-items-center justify-content-center" href="https://robingreen.house" target="_blank"><i class="fas fa-lg fa-arrow-right"></i></a>
									</div>
								</div>
								<div class="mol--entity-wrapper d-flex">
									<div class="atm--entity-logo d-flex align-items-center justify-content-center">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-greenhouse-v2.svg" alt="robingreen.house logo">
									</div>
									<div class="atm--entity-details flex-grow-1">
										<span class="d-block atm--entity-title">rei•iot</span>
										<span class="d-block atm--entity-desc">Description</span>
									</div>
									<div class="atm--entity-arrow">
										<a class="button atm--button-square-i d-flex align-items-center justify-content-center" href="" target="_blank"><i class="fas fa-lg fa-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>