<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>


</div><!-- #page we need this extra closing tag here -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/headroom/0.9.4/headroom.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/headroom/0.9.4/jQuery.headroom.min.js"></script>

<?php wp_footer(); ?>

</body>

</html>

