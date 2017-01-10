<?php
if (    is_active_sidebar( 'testimonial'  )): {?>

<div class="container-fluid testimonial" role="complementary">
    <div class="row">
        <div class="first col-md-12 col-sm-12 col-xs-12 widget-area">
            <center><?php dynamic_sidebar( 'testimonial' ); ?></center>
        </div><!-- .first .widget-area -->
    </div>

</div>
<?php
}
    endif;
    ?>