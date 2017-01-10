<?php
?>
<!--<div class="container-fluid contact-page-main">
	<div class="row">
		<div class="col-xs-12 col-md-12 map">
			<div class="row">
				<?php //echo do_shortcode('[put_wpgm id=1]'); ?>
			</div>
		</div>
		<div class="container-fluid contact-section">
			<div class="row">
				<?php //echo the_post();?>
			</div>
		</div>
	</div>
</div>-->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			//if ( is_single() ) {
			//	the_title( '<h1 class="entry-title">', '</h1>' );
			//} else {
			//	the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			//}

		if ( 'post' === get_post_type() ) : ?>
            <!--<div class="entry-meta">
			<?php  ?>
		</div> -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php new_knapsack_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

