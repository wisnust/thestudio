<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<div id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php 

					$image = get_field('background_image');

					if( !empty($image) ): ?>


					<!-- HERO HOME -->
					<section class="hero hero-home" style="background-image: url('<?php echo $image["url"]; ?>')">

					<?php endif; ?>
						<div class="container">
							<h2><?php the_field('heading') ?></h2>
							<p><?php the_field('subheading') ?></p>
							<?php 

							$link = get_field('cta');

							if( $link ): ?>
								
								<a class="btn btn-primary outline" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>

							<?php endif; ?>
						</div>
					</section>

					<!-- SERVICES -->
					<section id="services" class="services">
						<div class="container">
							<div class="section-header">
								<h2><?php the_field('services_heading') ?></h2>
								<p><?php the_field('services_subheading') ?></p>
							</div>
							<div class="content">
								<div class="row">
									<div class="col-md-4">
										<?php
										$services_item_1 = get_field('services_item_1');	

										if( $services_item_1 ): ?>
											<div class="item">
												<div class="image" style="background-image: url(<?php echo $services_item_1['item_image']['url']; ?>)"></div>
												<h3><?php echo $services_item_1['item_heading']; ?></h3>
												<p><?php echo $services_item_1['item_subheading']; ?></p>
											</div>
										<?php endif; ?>
									</div>
									<div class="col-md-4">
										<?php
										$services_item_2 = get_field('services_item_2');	

										if( $services_item_2 ): ?>
											<div class="item">
												<div class="image" style="background-image: url(<?php echo $services_item_2['item_image2']['url']; ?>)"></div>
												<h3><?php echo $services_item_2['item_heading']; ?></h3>
												<p><?php echo $services_item_2['item_subheading']; ?></p>
											</div>
										<?php endif; ?>

									</div>
									<div class="col-md-4">
										<?php
										$services_item_3 = get_field('services_item_3');	

										if( $services_item_3 ): ?>
											<div class="item">
												<div class="image" style="background-image: url(<?php echo $services_item_3['item_image']['url']; ?>)"></div>
												<h3><?php echo $services_item_3['item_heading']; ?></h3>
												<p><?php echo $services_item_3['item_subheading']; ?></p>
											</div>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
					</section>

					<!-- CONTACT -->
					<?php 
					
					$contact = get_field('contact');
					
					if ( $contact ): ?>

					<section id="contact" class="contact" style="background-image: url('<?php echo $contact['background_image']['url'] ?>')">

						<div class="container">
							<div class="section-header">
								<h2><?php echo $contact['contact_heading'] ?></h2>
								<p><?php echo $contact['contact_subheading'] ?></p>
							</div>
							<?php echo do_shortcode( '[contact-form-7 id="60" title="Contact form 1"]' ); ?>
						</div>

						<?php endif; ?>
					</section>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
