<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package new_knapsack
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">

            <?php
            /* The footer widget area is triggered if any of the areas
             * have widgets. So let's check that first.
             *
             * If none of the sidebars have widgets, then let's bail early.
             */
            if (    is_active_sidebar( 'footer-1'  )
                &&  is_active_sidebar( 'footer-2' )
                &&  is_active_sidebar( 'footer-3'  )
                &&  is_active_sidebar( 'footer-4' )
            ): {?>

            <div class="fatfooter container-fluid" role="complementary">
                <div class="row">
                    <div class="first col-md-3 col-sm-6 col-xs-12 widget-area">
                        <?php dynamic_sidebar( 'footer-1' ); ?>
                    </div><!-- .first .widget-area -->

                    <div class="second col-md-3 col-sm-6 col-xs-12 widget-area">
                        <?php dynamic_sidebar( 'footer-2' ); ?>
                    </div><!-- .second .widget-area -->

                    <div class="third col-md-3 col-sm-6 col-xs-12 widget-area">
                        <?php dynamic_sidebar( 'footer-3' ); ?>
                    </div><!-- .third .widget-area -->

                    <div class="fourth col-md-3 col-sm-6 col-xs-12 widget-area">
                        <?php dynamic_sidebar( 'footer-4' ); ?>
                    </div><!-- .fourth .widget-area -->
                </div>

            </div>
            <?php }
            elseif ( is_active_sidebar( 'footer-1'  )
            && is_active_sidebar( 'footer-2' )
            && is_active_sidebar( 'footer-3'  )
            && ! is_active_sidebar( 'footer-4' )
            ) : {?>

            <div class="fatfooter container-fluid" role="complementary">
                <div class="row">
                    <div class="first col-md-4 col-sm-4 col-xs-12 widget-area">
                        <?php dynamic_sidebar( 'footer-1' ); ?>
                    </div><!-- .first .widget-area -->

                    <div class="second col-md-4 col-sm-4 col-xs-12 widget-area">
                        <?php dynamic_sidebar( 'footer-2' ); ?>
                    </div><!-- .second .widget-area -->

                    <div class="third col-md-4 col-sm-4 col-xs-12 widget-area">
                        <?php dynamic_sidebar( 'footer-3' ); ?>
                    </div><!-- .third .widget-area -->

                </div>

            </div>


            <?php }
            elseif ( is_active_sidebar( 'footer-1'  )
                && is_active_sidebar( 'footer-2' )
                && !is_active_sidebar( 'footer-3'  )
                && ! is_active_sidebar( 'footer-4' )
            ) : {?>


            <div class="fatfooter container-fluid" role="complementary">
                <div class="row">
                    <div class="first col-md-6 col-sm-6 col-xs-12 widget-area">
                        <?php dynamic_sidebar( 'footer-1' ); ?>
                    </div><!-- .first .widget-area -->

                    <div class="second col-md-6 col-sm-6 col-xs-12 widget-area">
                        <?php dynamic_sidebar( 'footer-2' ); ?>
                    </div><!-- .second .widget-area -->

                </div>

            </div>

            <?php }
            elseif ( is_active_sidebar( 'footer-1'  )
                && !is_active_sidebar( 'footer-2' )
                && !is_active_sidebar( 'footer-3'  )
                && ! is_active_sidebar( 'footer-4' )
            ) : {?>


            <div class="fatfooter container-fluid" role="complementary">
                <div class="row">
                    <div class="first col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-6 col-xs-12 text-center widget-area">
                        <?php dynamic_sidebar( 'footer-1' ); ?>
                    </div><!-- .first .widget-area -->

                </div>

            </div>

            <?php }
                endif;
            ?>



			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'new_knapsack' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'new_knapsack' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'new_knapsack' ), 'new_knapsack', '<a href="http://underscores.me/" rel="designer">Sam</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/custom.css"/>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/script.js"></script>
</body>
</html>
