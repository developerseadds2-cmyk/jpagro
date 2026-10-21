</main>
<footer class="site-footer">
    <div class="container footer-grid">
        <div class="footer-brand">
            <img src="assets/images/logo/jp-logo.png" alt="JP Agro Industries logo">
            <p>Engineering agricultural machinery and fabricated components with care, discipline and a practical
                understanding of the field.</p>
            <div class="social-links" aria-label="Social media links">
                <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
            </div>
        </div>
        <div>
            <h3>Explore</h3>
            <a href="index.php?page=about">About Us</a><a href="index.php?page=products">Products</a><a
                href="index.php?page=quality">Quality</a><a href="index.php?page=gallery">Gallery</a>
        </div>
        <div>
            <h3>Capabilities</h3>
            <a href="index.php?page=products#capabilities">Precision Fabrication</a><a
                href="index.php?page=quality">Quality Control</a><a href="index.php?page=contact">Custom
                Requirements</a><a href="index.php?page=contact">Request a Quote</a>
        </div>
        <div class="footer-contact">
            <h3>Contact</h3>
            <p><i class="bi bi-geo-alt"></i> <?= e(COMPANY_ADDRESS) ?></p>
            <a href="tel:<?= e(preg_replace('/[^0-9+]/', '', PHONE_NUMBER)) ?>"><i class="bi bi-telephone"></i>
                <?= e(PHONE_NUMBER) ?></a>
               
                <a href="tel:9781200555"><i class="bi bi-telephone"></i>+91 9781200555</a>
            <a href="mailto:<?= e(CONTACT_EMAIL) ?>"><i class="bi bi-envelope"></i> <?= e(CONTACT_EMAIL) ?></a>
            <a href="mailto:jpagroindustries55@gmail.com"><i class="bi bi-envelope"></i> jpagroindustries55@gmail.com</a>

        </div>
    </div>
    <div class="container footer-bottom">
        <span class="footer-credit">
            &copy; <?= date('Y') ?> <?= e(SITE_NAME) ?>. All rights reserved. Designed and developed by
            <a href="https://punjabit.co/">PunjabIT</a>
        </span>
        <span class="footer-legal-links">
            <a href="index.php?page=privacy">Privacy Policy</a>
            <a href="index.php?page=terms">Terms &amp; Conditions</a>
        </span>
    </div>
</footer>
<a class="whatsapp-float" href="https://wa.me/<?= e(WHATSAPP_NUMBER) ?>" target="_blank" rel="noopener"
    aria-label="Chat with us on WhatsApp"><i class="bi bi-whatsapp"></i><span>Chat with us</span></a>
<script src="assets/js/main.js?v=<?= filemtime(__DIR__ . '/../assets/js/main.js') ?>"></script>
</body>

</html>
