<?php


?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!--<header class="entry-header">
		<?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
    <div class="page-thumbnail">
        <?php
        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
            the_post_thumbnail();
        }
        ?>
    </div>
    <div class="row">
    <?php if(!is_front_page()):?>
        <div class="entry-content <?php if(is_active_sidebar('sidebar-2')&& !is_front_page()&& !is_page('Contact') && !is_page('Cart') && !is_page('Checkout') ): echo "col-md-9 col-sm-9 col-xs-12"; endif;?>">
            <?php

                the_content(); ?>
             <?php
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'new_knapsack' ),
                    'after'  => '</div>',
                ) );
            ?>
        </div><!-- .entry-content -->
       
        <aside >
            <div class="entry-content widget-area sidebar-widget-style-2 <?php if(is_active_sidebar('sidebar-2')&& !is_front_page()): echo "col-md-3 col-sm-3 col-xs-12"; endif;?>" role="complimentary">
                <?php
                if(is_active_sidebar('sidebar-2')&& !is_front_page() && !is_page('Contact') && !is_page('Cart') && !is_page('Checkout')):
                    ?>
                    <div class="sidebar-widget-container">
                        <?php
                            dynamic_sidebar('sidebar-2');
                        ?>
                    </div>
                <?php
                    endif;

                ?>
                
            </div>
        </aside>
    <?php endif;?>
    </div>
    <?php
        if(is_front_page()):
            get_template_part('slider',get_post_format());
            get_template_part('home_page_category',get_post_format());
            get_template_part('featured-products',get_post_format());
            get_template_part('home_page_recent_product',get_post_format());
            get_template_part('extra_widget',get_post_format());
            get_template_part('testimonial',get_post_format());
        endif;
    ?>


	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'new_knapsack' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
