<?php
// Theme Setup
function bagshop_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'bagshop'),
    ));
}
add_action('after_setup_theme', 'bagshop_theme_setup');

// Enqueue Styles
function bagshop_theme_scripts() {
    wp_enqueue_style('bagshop-style', get_stylesheet_uri(), array(), '1.1');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap', array(), null);
    
    // Swiper.js
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.0.0');
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.0.0', true);
}
add_action('wp_enqueue_scripts', 'bagshop_theme_scripts');

// Start session
add_action('init', function () {
    if (!session_id()) {
        session_start();
    }
});

// Create Custom Post Type
function create_bag_post_type() {
    register_post_type('bags',
        array(
            'labels' => array(
                'name' => 'Bags',
                'singular_name' => 'Bag'
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-products'
        )
    );
}
add_action('init', 'create_bag_post_type');

// Add Price Field
function add_bag_price_meta_box() {
    add_meta_box('bag_price', 'Bag Price', 'bag_price_callback', 'bags');
}
add_action('add_meta_boxes', 'add_bag_price_meta_box');

function bag_price_callback($post) {
    $price = get_post_meta($post->ID, '_bag_price', true);
    echo '<input type="number" name="bag_price" value="'.$price.'" />';
}

function save_bag_price($post_id) {
    if (isset($_POST['bag_price'])) {
        update_post_meta($post_id, '_bag_price', $_POST['bag_price']);
    }
}
add_action('save_post', 'save_bag_price');

// Add to Cart
add_action('init', function () {
    if (isset($_GET['add_to_cart'])) {
        $id = (int)$_GET['add_to_cart'];
        $_SESSION['cart'][$id] = ($_SESSION['cart'][$id] ?? 0) + 1;
        wp_redirect(remove_query_arg('add_to_cart'));
        exit;
    }
});

// Remove from Cart
add_action('init', function () {
    if (isset($_GET['remove'])) {
        $id = (int)$_GET['remove'];
        unset($_SESSION['cart'][$id]);
        wp_redirect(remove_query_arg('remove'));
        exit;
    }
});