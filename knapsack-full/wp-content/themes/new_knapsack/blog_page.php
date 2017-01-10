<?php
/**
* template name: Blog page
*/
?>

<div class="container-fluid">
    <div class="row">
        <div class="container wrap">

<?php


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php query_posts('post_type=post&post_status=publish&posts_per_page=6&paged='. get_query_var('paged')); ?>
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			while ( have_posts() ) : the_post();


				get_template_part( 'template-parts/content-three-column', get_post_format() );

			endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
		<?php wp_reset_query(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
?>
        </div>
    </div>
</div>

