<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="container header-container">
        <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <h1>JIYA BAG SHOP</h1>
            </a>
        </div>
        
        <nav class="main-nav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'nav-links',
                'fallback_cb' => false
            ));
            ?>
        </nav>

        <div class="header-actions">
            <div class="header-search">
                <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
                    <input type="search" class="search-field" placeholder="Search bags..." value="<?php echo get_search_query(); ?>" name="s" />
                    <button type="submit" class="search-submit"><i class="dashicons dashicons-search"></i></button>
                    <input type="hidden" name="post_type" value="bags" />
                </form>
            </div>
            <a href="/cart" class="cart-icon">
                <span class="cart-count"><?php echo isset($_SESSION['cart']) ? array_sum($_SESSION['cart']) : 0; ?></span> Items
            </a>
        </div>
    </div>
</header>
<main>