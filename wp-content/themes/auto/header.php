<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>
    
<!--=============== Start Header Section ===============-->
<!--=============== Start Header Section ===============-->
<header class="speedyui speedyui-header position-absolute w-100">
    <nav class="navbar navbar-expand-lg nav-bg py-4">
        <div class="container">
            <!-- Логотип -->
            <div class="logo-wrapper">
                <?php the_custom_logo(); ?>
            </div>
            
            <!-- Меню -->
            <div class="navbar-collapse justify-content-center" id="navbarToggler">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'navbar-nav',
                    'container'      => false,
                    'fallback_cb'    => false,
                    'depth'          => 2,
                ) );
                ?>
            </div>
        </div>
    </nav>
</header>
<!--=============== End Header Section ===============-->
<!--=============== End Header Section ===============-->
<!-- остальной контент -->