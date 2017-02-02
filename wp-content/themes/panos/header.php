<!DOCTYPE html>
<html>
    <head>
    <?php wp_head(); ?>

        <title><?php bloginfo('name'); ?> <?php wp_title();
        ?></title>

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
        
        <link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_url'); ?>/styles/styles.less" />
        
        <script src="<?php bloginfo('template_url'); ?>/js/less.js" type="text/javascript"></script>

    </head>
    <body>
        
        <div id="wrapper">
            
            <nav id="main-nav" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <a class="navbar-brand" href="<?php bloginfo('url') ?>"><?php bloginfo('name') ?> </a>
                    </div><!-- end navbar-header -->
                    <?php
                    $defaults = array(
                    'theme_location' => 'mainNav',
                    'menu' => 'Main Navigation',
                    'container' => 'div',
                    'container_class' => 'menu collapse navbar-collapse',
                    'container_id' => 'collapse',
                    'menu_class' => 'nav navbar-nav navbar-right',
                    'menu_id' => '',
                    'echo' => true,
                    'fallback_cb' => 'wp_page_menu',
                    'before' => '',
                    'after' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth' => 0,
                    'walker' => ''
                    );
                    wp_nav_menu( $defaults );
                    ?>
                </div><!-- .container -->
            </nav>