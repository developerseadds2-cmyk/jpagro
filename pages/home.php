<section class="hero" aria-label="JP Agro Industries introduction">
    <div class="hero-slide hero-main is-visible"></div>
    <div class="hero-slide hero-field"></div>
    <div class="hero-slide hero-workshop"></div>
    <div class="hero-content">
        <div class="eyebrow">Agricultural machinery parts</div>
        <h1>Parts for the machines<br>that keep farms moving.</h1>
        <p>Components for combine harvesters, straw reapers, super seeders and threshers.</p>
        <div class="hero-actions"><a class="button button-light" href="index.php?page=products">Explore products <i
                    class="bi bi-arrow-up-right"></i></a><a class="button" href="<?= e(page_url('contact')) ?>">Get a
                quote <i class="bi bi-arrow-up-right"></i></a></div>
    </div>
    <div class="hero-dots" aria-label="Hero slides"><button class="hero-dot is-active" type="button"
            aria-label="Show slide 1"></button><button class="hero-dot" type="button"
            aria-label="Show slide 2"></button><button class="hero-dot" type="button"
            aria-label="Show slide 3"></button></div>
</section>
<section class="section reveal">
    <div class="container intro-grid">
        <div class="intro-art"><img src="assets/images/about/about.png"
                alt="Agricultural manufacturing landscape illustration" width="900" height="650">
            <div class="art-label">Since 2009</div>
        </div>
        <div>
            <div class="kicker">Focused on agricultural parts</div>
            <h2>Small components. Essential work.</h2>
            <p>Since 2009, JP Agro Industries has worked with agricultural machinery and fabricated components. Our
                product range includes parts for combines, straw reapers, super seeders and threshers.</p>
            <p>Share the machine and component you need, and our team can help clarify the requirement and next steps.
            </p><a class="button button-outline" href="index.php?page=about">Learn more <i
                    class="bi bi-arrow-up-right"></i></a>
            <div class="stats">
                <div class="stat"><strong>15+</strong><span>Years of experience</span></div>
                <div class="stat"><strong>01</strong><span>Focused manufacturing team</span></div>
                <div class="stat"><strong>100%</strong><span>Attention to detail</span></div>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="section features">
    <div class="container">
        <div class="section-head">
            <div>
                <div class="kicker">Parts made with care</div>
                <h2>Consistent work, down to each component.</h2>
            </div>
            <p>Clear requirements, controlled processing and careful checks help keep every part focused on its
                intended application.</p>
        </div>
        <div class="feature-grid">
            <article class="feature-card reveal"><i class="bi bi-buildings feature-icon"></i>
                <h3>Consistent Manufacturing</h3>
                <p>Production methods selected to support repeatable agricultural components.</p>
            </article>
            <article class="feature-card reveal"><i class="bi bi-rulers feature-icon"></i>
                <h3>Part Precision</h3>
                <p>Careful attention to component details, dimensions and fit.</p>
            </article>
            <article class="feature-card reveal"><i class="bi bi-shield-check feature-icon"></i>
                <h3>Quality Checks</h3>
                <p>Material, in-process and final checks are part of the manufacturing process.</p>
            </article>
            <article class="feature-card reveal"><i class="bi bi-people feature-icon"></i>
                <h3>Application Support</h3>
                <p>Clear communication helps us understand the machine and part you are looking for.</p>
            </article>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="section-head">
            <div>
                <div class="kicker">Our parts range</div>
                <h2>Components for working farm machinery.</h2>
            </div><a class="button button-outline" href="index.php?page=products">View all products <i
                    class="bi bi-arrow-up-right"></i></a>
        </div>
        <div class="product-grid">
            <?php foreach (array_slice($products, 0, 4) as $product): ?>
                <article class="product-card reveal">
                    <div class="product-photo-frame"><img class="product-photo" src="<?= asset($product['image']) ?>"
                            alt="<?= e($product['name']) ?>" width="500" height="500" loading="lazy"></div>
                    <div class="product-body">
                        <div class="category">
                            <?= e($product['category']) ?>
                        </div>
                        <h3>
                            <?= e($product['name']) ?>
                        </h3>
                        <p>
                            Contact us for component specifications and availability.
                        </p><a class="button button-outline button-small" href="index.php?page=contact">Enquire now <i
                                class="bi bi-arrow-up-right"></i></a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section class="section capabilities" id="capabilities">
    <div class="container">
        <div class="section-head">
            <div>
                <div class="kicker">Part manufacturing capabilities</div>
                <h2>Support for specific component requirements.</h2>
            </div>
            <p>Laser cutting, CNC turning, press brake work and robotic welding support a range of component needs.</p>
        </div>
        <div class="capability-grid">
            <?php foreach ($capabilities as $capability): ?>
                <div class="capability reveal"><i class="bi <?= e($capability['icon']) ?>"></i>
                    <h3>
                        <?= e($capability['title']) ?>
                    </h3>
                    <p>
                        <?= e($capability['text']) ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section class="section quality-band">
    <div class="container section-head">
        <div>
            <div class="kicker">Our quality promise</div>
            <h2>Quality checks for every component.</h2>
        </div>
        <div>
            <p>Material inspection, controlled processing and final checks support consistent agricultural parts.</p><a
                class="button" href="index.php?page=quality">Explore our standards <i
                    class="bi bi-arrow-up-right"></i></a>
        </div>
    </div>
</section>
<section class="section-tight">
    <div class="container">
        <div class="section-head">
            <div>
                <div class="kicker">Trusted Brands</div>
                <h2>Reliable inputs support dependable parts.</h2>
            </div>
            <p>We work with established industrial brands and supply partners to support our component requirements.</p>
        </div>
        <div class="logo-carousel" data-logo-carousel aria-label="Selected industrial brands">
            <div class="logos-viewport">
                <div class="logos">
                    <span class="logo-chip"><img class="logo-wordmark" src="assets/images/brands/1.png"
                            alt="Brand 1"></span>
                    <span class="logo-chip"><img src="assets/images/brands/2.png" alt="Brand 2"></span>
                    <span class="logo-chip"><img src="assets/images/brands/3.png" alt="Brand 3"></span>
                    <span class="logo-chip"><img class="logo-wordmark" src="assets/images/brands/4.png"
                            alt="Brand 4"></span>
                    <span class="logo-chip"><img src="assets/images/brands/5.png" alt="Brand 5"></span>
                    <span class="logo-chip"><img class="logo-wordmark" src="assets/images/brands/6.png"
                            alt="Brand 6"></span>
                    <span class="logo-chip"><img class="logo-wordmark" src="assets/images/brands/7.png"
                            alt="Brand 7"></span>
                    <span class="logo-chip"><img class="logo-wordmark" src="assets/images/brands/8.png"
                            alt="Brand 8"></span>
                    <span class="logo-chip"><img src="assets/images/brands/9.png" alt="Brand 9"></span>
                    <span class="logo-chip"><img src="assets/images/brands/10.jpg" alt="Brand 10"></span>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="section cta">
    <div class="container">
        <h2>Looking for a particular part?</h2>
        <p>Tell us the machine and component you need, and our team will help with the next step.</p><a
            class="button button-light" href="index.php?page=contact">Contact us <i
                class="bi bi-arrow-up-right"></i></a><a class="button"
            href="https://wa.me/<?= e(WHATSAPP_NUMBER) ?>">WhatsApp us <i class="bi bi-whatsapp"></i></a>
    </div>
</section>