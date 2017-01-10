<?php

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-4 col-sm-4 col-xs-12'); ?>>
	<div class="container-fluid  blog-post">
	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title blog-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				?>
				<div class="row blog-thumbnail">
					<?php
					the_post_thumbnail( 'post-page-thumbnail' );
					?>
				</div>
			<?php
			}
		?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_excerpt();?>
		<?php
			//the_content( sprintf(
				/* translators: %s: Name of current post. */
			//	wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'runway' ), array( 'span' => array( 'class' => array() ) ) ),
			//	the_title( '<span class="screen-reader-text">"', '"</span>', false )

			//) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'new_knapsack' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php
	if ( 'post' === get_post_type() ) : ?>
            <div class="entry-meta blog-entry-meta">
            	<p class="pull-left read-more-text"><a href="<?php esc_url( the_permalink() ) ?>" rel="bookmark">Read more...</a></p>
				<p class="pull-right publication"><?php  new_knapsack_posted_on(); ?></p>
			</div> 
		<?php
		endif; ?>

	</div>

</article><!-- #post-## -->
