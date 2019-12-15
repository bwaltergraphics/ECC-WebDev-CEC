<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <title><?php bloginfo('name'); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i|Solway:400,700&display=swap" rel="stylesheet">

        <?php wp_enqueue_style( 'style', get_stylesheet_uri() );

        wp_head();
        ?>

    </head>

    <body <?php body_class(); ?>>
        <div class="container">

                <!--site header-->

                <header class="site-header">
                <nav class="site-nav">
                        <?php
                        $args = array(
                            'theme_location' => 'primary'
                        );

                        ?>


                        <?php wp_nav_menu( $args ); ?>

                    </nav>
                <div class="header-logo">
                       <?php 
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    ?>
                     <a href="<?php echo home_url(); ?>"><img src="<?php echo $image[0]; ?>" alt=""></a>
                    <h1><?php bloginfo('name'); ?></h1>
                    <hr class="title-break-line" />
                    <div class="header-desc"><h3><?php bloginfo('description'); ?></h3><div>

                    

                </header><!--/site-header-->
        
    


    
