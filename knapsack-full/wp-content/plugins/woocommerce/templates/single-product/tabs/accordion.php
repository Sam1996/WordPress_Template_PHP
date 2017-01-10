<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	https://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $tabs ) ) : ?>
<div class="container-fluid">
	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
	<?php foreach ( $tabs as $key => $tab ) : ?>
		<div class="panel panel-default">
		<div class="panel-heading <?php echo esc_attr( $key ); ?>_tab" role="tab" id="heading_<?php echo $key ?>">
	      <h4 class="panel-title">
	        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_<?php echo $key ?>" aria-expanded="true" aria-controls="collapseOne">
	          <?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', esc_html( $tab['title'] ), $key ); ?>
	        </a>
	      </h4>
	    </div>
	    <div id="collapse_<?php echo $key ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_<?php echo $key ?>">
	      <div class="panel-body">
	        <?php call_user_func( $tab['callback'], $key, $tab ); ?>
	      </div>
	    </div>			
		</div>
		<?php endforeach; ?>
	</div>
</div>
<?php endif; ?>
