<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <?php wp_enqueue_style( 'style', get_stylesheet_uri() );
            wp_head();
        ?>
        <title><?php bloginfo('name'); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i|Solway:400,700&display=swap" rel="stylesheet">
        <meta charset="utf-8">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <script>
            /* calls for conditional to hide li if screen smaller than desktop size (800px) */
                $(document).ready(function(){
                    if ($(window).width() < 800){
                        $('li').hide();
                    }
                
            /* Mobile menu functionality */
                $("button").click(function(){
                    if($("button").text() == '\u2716'){
                        $("button").text('\u2630');
                        }else{
                        $("button").text('\u2716');
                        }
                        $("li").toggle("slow");
                        });
                        });
                        $(function(){
                        $('.site-header').data('size','big');
                });
            
            /* Scroll position function to change transparency and add styling on scroll */
                $(document).ready(function(){       
                    var scroll_pos = 0;
                    $(document).scroll(function() { 
                        scroll_pos = $(this).scrollTop();
                        if(scroll_pos > 100 && $(window).width() > 800) {
                            $(".site-header").css('background-color', '#d5effc80');
                            $('.site-header').css("box-shadow","2px 2px 4px #000");
                        } else {
                            $(".site-header").css('background-color', '#d5effc');
                            $('.site-header').css("box-shadow","");
                        }
                    });
                });

            /* Jquery calling for resizing based on scroll position */
                $(window).scroll(function(){
                    if($(document).scrollTop() > 0 && $(window).width() > 800){
                        if($('.site-header').data('size') == 'big'){
                            $('.site-header').data('size','small');
                            $('.site-header').stop().animate({
                            height:'70px'
                            },600);
                            $('.site-header nav ul li').data('size','small'); 
                            }
                            }
                        else {
                            if($('.site-header').data('size') == 'small')
                            {
                            $('.site-header').data('size','big');
                            $('.site-header').stop().animate({
                            height:'150px'
                            },50);
                            }  
                            }
                            }); 

                /* Jquery for resizing main logo on scroll */
                    $(document).scroll(function() {
                        $('.header-logo img').css({width: $(this).scrollTop() > 90? "50%":"100%"});
                        });
        </script>
    </head>

    <body <?php body_class(); ?>>
        <div class="container">
                <!--site header-->
            <header class="site-header">
                <!--mobile logo properties -->
                <div class="mobile-logo-container">
                 <!--mobile logo image -->  
                    <div class="mobile-logo">
                        <?php 
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); 
                        ?>
                        <a href="<?php echo home_url(); ?>"><img src="<?php echo $image[0]; ?>" alt=""></a>
                    </div>
                </div>
                <!-- mobile nav buttons-->
                <div class="nav-button" ><button> &#9776 </button></div>
                <!-- desktop menu/nav content-->
                <nav class="site-nav desktop-menu">
                    <div class="header-logo">
                        <?php 
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); 
                        ?>
                        <a href="<?php echo home_url(); ?>"><img src="<?php echo $image[0]; ?>" alt=""></a>
                    </div>
                        <?php
                        $args = array(
                            'theme_location' => 'primary'
                        );
                        ?>
                        <?php wp_nav_menu( $args );
                /* The below code checks if a mobile-menu is set from the backend in the menu settings. If a menu has been set it will be displayed in the header. Or else, a menu has not been set then display a message.*/
                        ?>
                </nav>
                <nav><?php
                    if ( function_exists('has_nav_menu') && has_nav_menu('mobile-menu') ) {
                            wp_nav_menu( array(
                            'depth' => 6,
                            'sort_column' => 'menu_order',
                            'container' => 'ul',
                            'menu_id' => 'main-nav',
                            'menu_class' => 'nav mobile-menu',
                            'theme_location' => 'mobile-menu'
                            ) );
                            } else {
                            echo "<ul class='nav mobile-menu'> <font style='color:red'>Mobile Menu has not been set</font> </ul>";
                        } ?>
                </nav>
            </header><!--/site-header-->
              


    
