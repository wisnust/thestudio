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

					<section class="hero hero-home" style="background-image: url('<?php echo $image["url"]; ?>')">

					<?php endif; ?>
						<div class="container">
							<h2><?php the_field('heading') ?></h2>
							<p><?php the_field('subheading') ?></p>
							<?php 

							$link = get_field('cta');

							if( $link ): ?>
								
								<a class="btn btn-primary" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>

							<?php endif; ?>
						</div>
					</section>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
