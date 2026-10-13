<?php $gallery = [['image' => 'images/hero/hero-workshop.svg', 'title' => 'Production floor', 'category' => 'Manufacturing'], ['image' => 'images/products/chaff-cutter.svg', 'title' => 'Chaff cutter', 'category' => 'Products'], ['image' => 'images/products/thresher.svg', 'title' => 'Multi-crop thresher', 'category' => 'Machinery'], ['image' => 'images/hero/hero-main.svg', 'title' => 'Precision fabrication', 'category' => 'Engineering'], ['image' => 'images/products/implement.svg', 'title' => 'Farm implement', 'category' => 'Products'], ['image' => 'images/about/about.svg', 'title' => 'Built for the field', 'category' => 'Facility']]; ?>
<section class="page-hero"><div class="container"><div class="breadcrumb">Home / Gallery</div><h1>Gallery</h1><p>Illustrations of agricultural machinery, components and the processes behind them.</p></div></section>
<section class="section">
	<div class="container">
		<div class="filter-bar">
			<button class="filter-button is-active" data-filter="all">All</button>
			<?php foreach (['Manufacturing', 'Machinery', 'Engineering', 'Products', 'Facility'] as $category): ?>
				<button class="filter-button" data-filter="<?= e($category) ?>"><?= e($category) ?></button>
			<?php endforeach; ?>
		</div>
		<div class="gallery-grid">
			<?php foreach ($gallery as $item): ?>
				<figure class="gallery-item reveal" data-category="<?= e($item['category']) ?>" data-lightbox="<?= asset($item['image']) ?>" data-alt="<?= e($item['title']) ?>">
					<img src="<?= asset($item['image']) ?>" alt="<?= e($item['title']) ?>" width="900" height="650" loading="lazy">
					<figcaption class="gallery-caption"><?= e($item['title']) ?></figcaption>
				</figure>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<div class="lightbox" role="dialog" aria-modal="true" aria-label="Image preview">
	<button class="lightbox-close" type="button" data-close aria-label="Close image preview"><i class="bi bi-x-lg"></i></button>
	<button class="lightbox-nav lightbox-prev" type="button" data-prev aria-label="Previous gallery image"><i class="bi bi-chevron-left"></i></button>
	<img alt="">
	<button class="lightbox-nav lightbox-next" type="button" data-next aria-label="Next gallery image"><i class="bi bi-chevron-right"></i></button>
</div>
