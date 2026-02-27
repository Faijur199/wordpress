<?php get_header(); ?>

<div class="container" style="padding: 60px 0;">
    <div class="section-title">
        <h2>Your Shopping Cart</h2>
        <div class="divider"></div>
    </div>

    <div class="cart-table">
        <?php if (!empty($_SESSION['cart'])) : ?>
            <div style="background: white; padding: 30px; border: 1px solid #eee;">
                <?php 
                $total = 0;
                foreach ($_SESSION['cart'] as $id => $qty) : 
                    $price = (float)get_post_meta($id, '_bag_price', true);
                    $subtotal = $price * $qty;
                    $total += $subtotal;
                ?>
                    <div style="display: flex; justify-content: space-between; align-items: center; padding: 15px 0; border-bottom: 1px solid #f9f9f9;">
                        <div>
                            <h4 style="margin: 0;"><?php echo get_the_title($id); ?></h4>
                            <p style="color: #666; font-size: 0.9rem;">Qty: <?php echo $qty; ?> | Rs. <?php echo $price; ?></p>
                        </div>
                        <div style="text-align: right;">
                            <p style="font-weight: 700; color: #467C45;">Rs. <?php echo $subtotal; ?></p>
                            <a href="?remove=<?php echo $id; ?>" style="color: #F88379; font-size: 0.8rem;">Remove</a>
                        </div>
                    </div>
                <?php endforeach; ?>

                <div style="margin-top: 30px; text-align: right; border-top: 2px solid #eee; padding-top: 20px;">
                    <h3 style="margin-bottom: 20px;">Total: Rs. <?php echo $total; ?></h3>
                    <a href="/checkout" class="btn">Proceed to Checkout</a>
                </div>
            </div>
        <?php else : ?>
            <div style="text-align: center; padding: 40px; background: #f9f9f9;">
                <p>Your cart is empty.</p>
                <a href="/" class="btn" style="margin-top: 20px;">Go to Shop</a>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>