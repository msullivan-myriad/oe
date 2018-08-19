<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */


get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

        <div id="home-content-section">

            <div class="intro">

                <div class="wrap">
                    <div class="into-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tincidunt lectus non dui porttitor scelerisque. Curabitur viverra nunc metus, vitae rutrum neque rhoncus pellentesque. Curabitur tempor metus turpis, non hendrerit neque volutpat vitae. Integer molestie, leo cursus tempor dapibus, massa nulla pretium diam, quis pretium orci diam nec quam. Nulla laoreet turpis id tempus luctus. Nunc vitae fermentum turpis, sit amet pellentesque ipsum.</p>
                    </div>
                </div>

            </div><!-- .intro -->

            <div class="order-vs-disorder">
                <div class="wrap">
                    <h2>What is Ordered Eating?</h2>
                    <div class="oe-split">

                        <div class="oe-split-1">
                            <h3>Disorder</h3>
                            <p>A state of confusion, frustration, or dissaray</p>
                        </div><!-- .oe-split-1-->

                        <span>vs</span>

                        <div class="oe-split-2">
                            <h3>Ordered</h3>
                            <p>Controlled, structured, organized, peaceful, and clear</p>
                        </div><!-- .oe-split-2-->

                    </div><!--.oe-split-->
                </div><!--.wrap-->
            </div><!--.order-vs-disorder-->

            <div class="recent-posts">
                <div class="wrap">

                  <?php
                  // the query
                  $the_query = new WP_Query( array(
                    //'category_name' => 'news',
                    'posts_per_page' => 3,
                  ));
                  ?>

                  <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


                    <div class="home-page-post">
                        <a href="<?php the_permalink();?>">
                          <?php the_post_thumbnail(); ?>
                          <h2><?php the_title(); ?></h2>
                          <p><?php the_excerpt(); ?></p>
                        </a>
                    </div>


                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>

                  <?php else : ?>
                      <p><?php __('No News'); ?></p>
                  <?php endif; ?>

                </div>
            </div><!--.recent-posts-->

            <div class="widgets-area">
                <div class="wrap">

                  <?php if ( is_active_sidebar( 'home_widgets' ) ) : ?>
                        <?php dynamic_sidebar( 'home_widgets' ); ?>
                  <?php endif; ?>

                </div><!--.wrapper-->
            </div><!--..widgets-area-->

        </div><!-- #home-content-section -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
