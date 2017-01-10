<div class="container-fluid">
    <div class="row extra-widget-area">
        <?php
            if( is_active_sidebar('extra-1')){
                dynamic_sidebar('extra-1');
            }
            else{
                ?>  
                    <div class="container-fluid portfolio-heading">
                        <h4 class="title">About Us</h4>
                    </div>
                    <div class="row portfolio">
                        
                        <div class="col-sm-6 col-xs-12 portfolio-container">
                            <a href=" http://localhost/education/index.php/about/">
                                <img src="<?php bloginfo('template_directory'); ?>/images/workshop.jpg" alt="workshop"/>
                                <h4 class="title portfolio-title">WORKSHOP</h4>
                            </a>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <a href=" http://localhost/education/index.php/our-showroom/ ">
                                <img src="<?php bloginfo('template_directory'); ?>/images/showroom.jpg" alt="showroom"/>
                                <h4 class="title portfolio-title">SHOWROOM</h4>
                            </a>
                        </div>
                    </div>
            
        <?php
        }
        ?>
    </div>
</div>