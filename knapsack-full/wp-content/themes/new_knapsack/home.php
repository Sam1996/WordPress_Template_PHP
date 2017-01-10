<?php
/**
 * Template Name: Home Page
 *
 * 
 */
?>
<!-- HEADER -->
<?php
get_header();
?>
<div class="container-fluid">
	

	<?php if(is_active_sidebar('slider')):?>
	<div class="container-fluid">
		<div class="row slider">
			<?php
				dynamic_sidebar('slider');
			?>
		</div>
	</div>
	<?php endif;?>


	<?php if(is_active_sidebar('extra-1')):?>
		<div class="container-fluid">
			<div class="row extra">
				<?php
					dynamic_sidebar('extra-1');
				?>
			</div>
		</div>
	<?php endif;?>


<!-- FOOTER -->

	<?php get_footer();?>


</div>