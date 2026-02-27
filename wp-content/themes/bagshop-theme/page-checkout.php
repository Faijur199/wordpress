<?php get_header(); ?>

<div class="container" style="padding: 60px 0;">
    <div class="checkout-form" style="background: white; padding: 40px; border: 1px solid #eee; max-width: 600px;">
        <div class="section-title" style="margin-top: 0;">
            <h2>Checkout</h2>
            <div class="divider"></div>
        </div>

        <?php if (isset($_POST['order'])) : ?>
            <div style="background: #e8f5e9; padding: 20px; border-radius: 4px; border: 1px solid #c8e6c9; text-align: center; margin-bottom: 30px;">
                <h3 style="color: #2e7d32; margin-bottom: 10px;">Order Placed Successfully!</h3>
                <p>Thank you for shopping with Hemp House Nepal. We will contact you shortly.</p>
                <a href="/" class="btn" style="margin-top: 20px;">Back to Shop</a>
            </div>
            <?php $_SESSION['cart'] = []; ?>
        <?php else : ?>
            <form method="post">
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" name="name" placeholder="Enter your full name" required>
                </div>
                
                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" name="phone" placeholder="Enter your phone number" required>
                </div>
                
                <div class="form-group">
                    <label>Delivery Address</label>
                    <textarea name="address" placeholder="Enter your full address" rows="4" required></textarea>
                </div>

                <div style="background: #fdfdfd; padding: 20px; border: 1px solid #f0f0f0; margin-bottom: 25px;">
                    <p><strong>Payment Method:</strong> Cash on Delivery (COD)</p>
                </div>

                <input type="submit" name="order" value="Place Order Now" class="btn">
            </form>
        <?php endif; ?>
    </div>
</div>

<style>
    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        font-size: 0.9rem;
    }
    .checkout-form .divider {
        width: 50px;
        height: 3px;
        background: var(--primary-color);
        margin: 10px 0 30px;
    }
</style>

<?php get_footer(); ?>