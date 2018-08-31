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
                        <p>Welcome to Ordered Eating, a website dedicated to helping people improve their health.  The resources here have an singular theme, moving towards control in our dietary habits. </p>
                        <a href="/disordered-eating-epidemic/" class="oe-button">Learn More</a>
                    </div>
                </div>

            </div><!-- .intro -->

            <div class="order-vs-disorder">
                <div class="wrap">
                    <div class="oe-split">

                        <div class="oe-split-1 split">
                            <h2>Disordered</h2>
                            <p>A state of confusion, frustration, or disarray</p>
                        </div><!-- .oe-split-1-->

                        <span class="versus">vs.</span>

                        <div class="oe-split-2 split">
                            <h2>Ordered</h2>
                            <p>Controlled, structured, organized, peaceful, and clear</p>
                        </div><!-- .oe-split-2-->

                    </div><!--.oe-split-->
                </div><!--.wrap-->
            </div><!--.order-vs-disorder-->

            <div class="recent-posts">
                <div class="wrap">
                    <h1>Recent Posts</h1>

                    <div class="posts-section">

                      <?php
                      // the query
                      $the_query = new WP_Query( array(
                        'posts_per_page' => 3,
                      ));
                      ?>

                      <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <div class="home-page-post">
                            <a href="<?php the_permalink();?>">
                                <div class="thumbnail-image" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
                              <h3><?php the_title(); ?></h3>
                            </a>
                        </div>

                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>

                      <?php else : ?>
                      <?php endif; ?>

                    </div><!--.posts-section-->
                </div><!--.wrap-->
            </div><!--.recent-posts-->

            <div class="get-started">
                <div class="wrap">
                    <div class="oe-split">
                       <div class="oe-split-3 split entry-content">
                           <h2>Welcome new readers!</h2>
                           <p>Take a look around, I hope you can find something that resonates with you.  If you're not sure where to get started I recommend checking out <a href="/category/diet/">these posts</a> and finding something that interests you.</p>
                           <p>For the more ambitious start with the <a href="/disordered-eating-epidemic/">first post</a> and work your way up to the most recent.</p>
                           <p></p>
                       </div><!--.oe-split-1-->
                       <div class="oe-split-4 split">
                           <p>Check out some of the main topics:</p>

                            <label>
                                <a href="/tag/weight-loss/">Weight Loss</a>
                            </label>

                           <label>
                               <a href="/tag/food-addiction/">Food Addiction</a>
                           </label>

                           <label>
                               <a href="/tag/intermittent-fasting/">Intermittent Fasting</a>
                           </label>

                           <label>
                               <a href="/tag/self-reflection/">Self Reflection</a>
                           </label>

                           <label>
                               <a href="/tag/sugar/">Sugar</a>
                           </label>

                           <label>
                               <a href="/tag/fad-diets/">Fad Dieting</a>
                           </label>

                       </div><!--.oe-split-2-->
                    </div><!--.oe-splits-->

                </div>
            </div>

            <div class="widgets-area">
                <div class="wrap">
                    <div class="widget-container">
                        <h1>Keep in Touch</h1>
                        <p>Fresh content is coming out all the time, subscribe to the newsletter and make sure you hear about it.</p>
                      <?php if ( is_active_sidebar( 'home_widgets' ) ) : ?>
                        <?php dynamic_sidebar( 'home_widgets' ); ?>
                      <?php endif; ?>

                    </div><!--.widget-container-->

                </div><!--.wrapper-->
            </div><!--..widgets-area-->

        </div><!-- #home-content-section -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
