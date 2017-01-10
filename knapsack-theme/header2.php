<?php


?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/layouts/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/custom.css"/>
<?php //wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site container">

    <!--Top Navigation bar -->
    <div class="container-fluid">
        <div class="row topNav">
            <div class="col-md-6 col-sm-6 col-xs-12 social-division">
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location'    =>  'tertiary',
                            'menu_id'           =>  'secondaryMenu',
                            'menu_class'        =>  'list-inline',
                            'walker'            =>  new wp_bootstrap_navwalker()
                        )
                    );
                    ?>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 nav-division">
                <div class="navigation">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location'    =>  'secondary',
                            'menu_id'           =>  'secondaryMenu',
                            'menu_class'        =>  'nav navbar-nav navbar-right secNavList',
                            'walker'            =>  new wp_bootstrap_navwalker()
                        )
                    );
                    ?>
                </div>
            </div>
        </div>
        <div class="row header">
            <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Logo" />
                </a>
            </div>
        </div>
        <div class="row">
            <nav id="site-navigation" class="navbar" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle btn-default" data-toggle="collapse" data-target="#main-navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="main-navbar-collapse">
                        <?php wp_nav_menu( array(
                            'theme_location' 	=> 'primary',
                            'container' 		=> 'false',
                            'menu_class'      	=> 'primaryMenu text-center',
                            'menu_id'         	=> 'primaryMenu',
                            'echo'            	=> true,
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'walker'          	=> new wp_bootstrap_navwalker()
                        )); ?>
                    </div>
            </nav>
        </div>
       <div class="row">
            <?php
                if(!is_home() && is_shop()):
                get_template_part('banner',get_post_format());

            endif;
            ?>
        </div>
    </div>

<div id="content" class="site-content">
