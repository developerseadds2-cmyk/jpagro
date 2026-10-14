<section class="page-hero">
    <div class="container">
        <div class="breadcrumb">Home / Products</div>
        <h1>Products</h1>
        <p>Browse parts for combine harvesters, straw reapers, super seeders and threshers. Contact us to discuss
            specifications and fitment.</p>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="filter-bar" aria-label="Filter products"><button class="filter-button is-active"
                data-filter="all">All products</button><button class="filter-button" data-filter="Combine Parts">Combine
                Parts</button><button class="filter-button" data-filter="Straw Reaper Parts">Straw Reaper
                Parts</button><button class="filter-button" data-filter="Super Seeder Parts">Super Seeder
                Parts</button><button class="filter-button" data-filter="Thresher Parts">Thresher Parts</button></div>
        <div class="product-grid"><?php foreach ($products as $product): ?>
                <article class="product-card reveal" data-category="<?= e($product['category']) ?>">
                    <div class="product-photo-frame<?= !empty($product['hover_image']) ? ' has-hover-image' : '' ?>"><img class="product-photo" src="<?= asset($product['image']) ?>"
                            alt="<?= e($product['name']) ?>" width="500" height="500" loading="lazy"><?php if (!empty($product['hover_image'])): ?>
                            <img class="product-photo-hover" src="<?= asset($product['hover_image']) ?>" alt="" aria-hidden="true" width="500" height="500" loading="lazy"><?php endif; ?></div>
                    <div class="product-body">
                        <div class="category"><?= e($product['category']) ?></div>
                        <h3><?= e($product['name']) ?></h3>
                        <p>Contact us for specifications, fitment and current availability.</p><a
                            class="button button-outline button-small" href="index.php?page=contact">Enquire now <i
                                class="bi bi-arrow-up-right"></i></a>
                    </div>
                </article><?php endforeach; ?>
        </div>
    </div>
</section>
<section class="section features" id="capabilities">
    <div class="container">
        <div class="section-head">
            <div>
                <div class="kicker">Custom component requirements</div>
                <h2>Parts shaped around the application.</h2>
            </div>
            <p>For a specific component, share its name and machine details so our team can understand your requirement.
            </p>
        </div>
        <div class="capability-grid"><?php foreach ($capabilities as $capability): ?>
                <div class="capability reveal"><i class="bi <?= e($capability['icon']) ?>"></i>
                    <h3><?= e($capability['title']) ?></h3>
                    <p><?= e($capability['text']) ?></p>
                </div><?php endforeach; ?>
        </div>
    </div>
</section>
<section class="section cta">
    <div class="container">
        <h2>Have a specific requirement?</h2>
        <p>Send us the details and our team will come back with the right next step.</p><a class="button button-light"
            href="index.php?page=contact">Start an enquiry <i class="bi bi-arrow-up-right"></i></a>
    </div>
</section>