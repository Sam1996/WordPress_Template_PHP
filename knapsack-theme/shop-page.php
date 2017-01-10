<?php
/**
 * Template Name:Shop Page
 *
 * 
 */
?>
<?php get_header();?>

<div class="container-fluid">
	<div class="page-thumbnail">
        <?php
        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
            the_post_thumbnail();
        }
        ?>
    </div>

	<?php if(is_active_sidebar('shop-1')):?>

		<div class="row">
			<div class="col-xs-12 <?php if(is_active_sidebar('sidebar-2')): echo"col-md-9"; endif; ?>">
				<?php
					dynamic_sidebar('shop-1');
				?>
			</div>
			<?php if(is_active_sidebar('sidebar-2')): ?>
			<div class="col-xs-12 col-md-3">
				<?php
					dynamic_sidebar('sidebar-2');
				endif;?>
			</div>
		</div>
		<?php endif;?>	

	<?php get_footer();?>
</div>
