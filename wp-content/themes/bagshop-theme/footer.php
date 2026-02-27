</main>

<footer class="site-footer">
    <div class="container footer-grid">
        <!-- Column 1: Logo and Bio -->
        <div class="footer-col footer-about">
            <div class="footer-logo-circle">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-logo.png" alt="Bag Shop Logo" onerror="this.src='https://via.placeholder.com/100?text=LOGO'">
            </div>
            <p class="footer-bio">
                Premium collection of handcrafted bags designed for every occasion. We blend tradition with modern aesthetics to bring you the finest quality bags.
            </p>
        </div>
        
        <!-- Column 2: Links and Contact -->
        <div class="footer-col">
            <h4>Links</h4>
            <ul class="footer-links">
                <li><a href="#">Frequently Asked Questions</a></li>
                <li><a href="#">Terms and Conditions</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
            <div class="footer-contact-info">
                <p>Address: Mid-Baneshwor, Kathmandu</p>
                <p>Mobile: 9805672420</p>
            </div>
        </div>
        
        <!-- Column 3: Bag Categories -->
        <div class="footer-col">
            <h4>Bag Categories</h4>
            <ul class="footer-links">
                <li><a href="#">Travel Bags</a></li>
                <li><a href="#">Laptop Bags</a></li>
                <li><a href="#">Backpacks</a></li>
                <li><a href="#">Handbags</a></li>
                <li><a href="#">Tote Bags</a></li>
            </ul>
        </div>

        <!-- Column 4: Collections -->
        <div class="footer-col">
            <h4>Our Collections</h4>
            <ul class="footer-links">
                <li><a href="#">Summer Collection</a></li>
                <li><a href="#">Leather Series</a></li>
                <li><a href="#">Eco-Friendly Bags</a></li>
                <li><a href="#">Office Essentials</a></li>
                <li><a href="#">Signature Edition</a></li>
            </ul>
        </div>
    </div>
    
    <div class="container footer-bottom">
        <p>Copyright &copy; <?php echo date('Y'); ?> Bag Shop Nepal Pvt. Ltd. All Rights Reserved.</p>
    </div>
</footer>

<!-- WhatsApp Floating Button -->
<a href="https://wa.me/9779800000000" class="whatsapp-float" target="_blank">
    <i class="dashicons dashicons-whatsapp"></i>
    <span>Chat with us</span>
</a>

<?php wp_footer(); ?>
</body>
</html>