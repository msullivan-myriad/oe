<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="custom-header">

		<div class="custom-header-media">
        <?php


          if (twentyseventeen_is_frontpage()) {
                  the_custom_header_markup();
          }

          else {
              ?>
                <img src="<?php echo get_stylesheet_directory_uri() . '/images/ordered-eating-berries.jpg'; ?>"/>
              <?php
          }

            ?>

		</div>

	<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>

</div><!-- .custom-header -->
