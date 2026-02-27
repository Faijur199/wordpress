<?php get_header(); ?>

<div class="container" style="padding: 60px 0;">
    <div class="section-title">
        <h2>Search Results for: <?php echo get_search_query(); ?></h2>
        <div class="divider"></div>
    </div>

    <div class="product-grid">
        <?php
        if (have_posts()) : 
            while (have_posts()) : the_post();
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
        else : ?>
            <div style="text-align: center; width: 100%; padding: 40px;">
                <p>No bags found matching your search. Please try a different keyword.</p>
                <a href="/" class="btn" style="margin-top: 20px;">Back to Shop</a>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
