<?php
/**
 * Template Name:Custom Page
 *
 * 
 */
?>
<?php

get_header(); ?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="page-thumbnail">
        <?php
        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
            the_post_thumbnail();
        }
        ?>
    </div>
    <div class="row">
        <div class="entry-content <?php if(is_active_sidebar('sidebar-2')): echo "col-md-9 col-sm-9 col-xs-12"; endif;?>">
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
            <div class="entry-content widget-area sidebar-widget-style-2 <?php if(is_active_sidebar('sidebar-2')): echo "col-md-3 col-sm-3 col-xs-12"; endif;?>" role="complimentary">
                    <div class="sidebar-widget-container">
                        <?php if(is_active_sidebar('sidebar-2')){
                            dynamic_sidebar('sidebar-2');
                        }
                        ?>
                    </div>
                
            </div>
        </aside>
    </div>


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
<?php
get_footer();
