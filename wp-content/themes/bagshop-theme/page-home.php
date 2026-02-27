
<!-- Template Name: Home Page  -->
<?php get_header(); ?>

<!-- Hero Section -->
<section class="hero">
    <div class="container hero-content">
        <h2>Love. Creation.<br>Gratitude.</h2>
        <a href="#products" class="btn">View Products</a>
    </div>
</section>

<!-- Features Bar -->
<section class="features">
    <div class="container features-grid">
        <div class="feature-item">
            <i class="dashicons dashicons-carrot"></i>
            <h3>Hemp Fiber</h3>
            <p>100% Organic</p>
        </div>
        <div class="feature-item">
            <i class="dashicons dashicons-admin-site-alt3"></i>
            <h3>Eco Friendly</h3>
            <p>Sustainable Production</p>
        </div>
        <div class="feature-item">
            <i class="dashicons dashicons-heart"></i>
            <h3>Handmade</h3>
            <p>Crafted with Love</p>
        </div>
    </div>
</section>

<!-- Products Grid -->
<section id="products" class="container">
    <div class="section-title">
        <h2>Featured Products</h2>
        <div class="divider"></div>
    </div>

    <div class="product-grid">
        <?php
        $args = array('post_type' => 'bags', 'posts_per_page' => 8);
        $query = new WP_Query($args);

        if ($query->have_posts()) : 
            while ($query->have_posts()) : $query->the_post();
            $price = get_post_meta(get_the_ID(), '_bag_price', true);
            ?>

            <div class="product-card">
                <div class="product-image">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('medium'); ?>
                    <?php else : ?>
                        <img src="https://via.placeholder.com/300x300?text=Hemp+Bag" alt="Placeholder">
                    <?php endif; ?>
                </div>
                <div class="product-info">
                    <h3 class="product-title"><?php the_title(); ?></h3>
                    <p class="product-price">Rs. <?php echo esc_html($price); ?></p>
                    <a href="?add_to_cart=<?php the_ID(); ?>" class="btn">Add to Cart</a>
                </div>
            </div>

            <?php endwhile; 
            wp_reset_postdata(); 
        else : ?>
            <p>No bags found. Please add some from the dashboard.</p>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>