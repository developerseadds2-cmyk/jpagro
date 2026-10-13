document.addEventListener('DOMContentLoaded', () => {
    const preloader = document.querySelector('#site-preloader');
    const header = document.querySelector('.site-header');
    const menuToggle = document.querySelector('.menu-toggle');
    const navigation = document.querySelector('.navigation-wrap');
    const slides = [...document.querySelectorAll('.hero-slide')];
    const dots = [...document.querySelectorAll('.hero-dot')];
    const logoCarousel = document.querySelector('[data-logo-carousel]');
    const logoTrack = logoCarousel?.querySelector('.logos');
    const logoItems = [...(logoCarousel?.querySelectorAll('.logo-chip') || [])];
    const logoPrev = logoCarousel?.querySelector('.logo-carousel-prev');
    const logoNext = logoCarousel?.querySelector('.logo-carousel-next');
    let slideIndex = 0;

    const hidePreloader = () => {
        if (!preloader) return;
        preloader.classList.add('is-hidden');
        window.setTimeout(() => preloader.remove(), 650);
    };
    hidePreloader();

    const updateHeader = () => header?.classList.toggle('scrolled', window.scrollY > 12);
    updateHeader();
    window.addEventListener('scroll', updateHeader, { passive: true });

    menuToggle?.addEventListener('click', () => {
        const isOpen = navigation.classList.toggle('is-open');
        menuToggle.setAttribute('aria-expanded', String(isOpen));
        menuToggle.innerHTML = isOpen ? '<i class="bi bi-x-lg"></i>' : '<i class="bi bi-list"></i>';
    });

    const showSlide = (index) => {
        slides.forEach((slide, itemIndex) => slide.classList.toggle('is-visible', itemIndex === index));
        dots.forEach((dot, itemIndex) => dot.classList.toggle('is-active', itemIndex === index));
    };
    if (slides.length) {
        showSlide(0);
        dots.forEach((dot, index) => dot.addEventListener('click', () => { slideIndex = index; showSlide(slideIndex); }));
        if (slides.length > 1) window.setInterval(() => { slideIndex = (slideIndex + 1) % slides.length; showSlide(slideIndex); }, 6000);
    }

    if (logoCarousel) {
        logoItems.forEach(item => logoTrack.appendChild(item.cloneNode(true)));
        logoCarousel.classList.add('is-looping');
        const setLogoWidths = () => {
            const visibleCount = window.innerWidth <= 680 ? 1 : window.innerWidth <= 900 ? 4 : 5;
            const cardGap = 16;
            const cardWidth = (logoCarousel.querySelector('.logos-viewport').clientWidth - (cardGap * (visibleCount - 1))) / visibleCount;
            logoTrack.querySelectorAll('.logo-chip').forEach(item => item.style.setProperty('--logo-card-width', `${cardWidth}px`));
        };
        setLogoWidths();
        window.addEventListener('resize', setLogoWidths);
        logoPrev?.addEventListener('click', () => logoCarousel.classList.toggle('is-paused'));
        logoNext?.addEventListener('click', () => logoCarousel.classList.toggle('is-paused'));
    }

    document.querySelectorAll('.filter-button').forEach(button => button.addEventListener('click', () => {
        document.querySelectorAll('.filter-button').forEach(item => item.classList.remove('is-active'));
        button.classList.add('is-active');
        const filter = button.dataset.filter;
        document.querySelectorAll('.product-card[data-category], .gallery-item[data-category]').forEach(card => {
            card.classList.toggle('is-hidden', filter !== 'all' && card.dataset.category !== filter);
            card.style.display = filter !== 'all' && card.dataset.category !== filter ? 'none' : '';
        });
    }));

    let lastScrollY = window.scrollY;
    let scrollDirection = 'down';
    window.addEventListener('scroll', () => {
        scrollDirection = window.scrollY >= lastScrollY ? 'down' : 'up';
        lastScrollY = window.scrollY;
    }, { passive: true });

    const observer = new IntersectionObserver(entries => entries.forEach(entry => {
        entry.target.classList.toggle('is-visible', entry.isIntersecting);
        if (entry.isIntersecting) {
            entry.target.classList.toggle('reveal-from-up', scrollDirection === 'up');
            entry.target.classList.toggle('reveal-from-down', scrollDirection !== 'up');
        }
    }), { threshold: .12 });
    document.querySelectorAll('.reveal').forEach(element => observer.observe(element));

    const lightbox = document.querySelector('.lightbox');
    const lightboxImage = lightbox?.querySelector('img');
    const lightboxItems = [...document.querySelectorAll('[data-lightbox]')];
    let lightboxIndex = -1;
    const getVisibleLightboxItems = () => lightboxItems.filter(item => item.style.display !== 'none');
    const showLightboxItem = index => {
        const visibleItems = getVisibleLightboxItems();
        if (!visibleItems.length || !lightboxImage) return;
        lightboxIndex = (index + visibleItems.length) % visibleItems.length;
        const item = visibleItems[lightboxIndex];
        lightboxImage.src = item.dataset.lightbox;
        lightboxImage.alt = item.dataset.alt || '';
    };

    lightboxItems.forEach(item => item.addEventListener('click', () => {
        if (!lightbox) return;
        showLightboxItem(getVisibleLightboxItems().indexOf(item));
        lightbox.classList.add('is-open');
    }));
    lightbox?.querySelector('[data-prev]')?.addEventListener('click', () => showLightboxItem(lightboxIndex - 1));
    lightbox?.querySelector('[data-next]')?.addEventListener('click', () => showLightboxItem(lightboxIndex + 1));
    lightbox?.addEventListener('click', event => {
        if (event.target === lightbox || event.target.closest('[data-close]')) lightbox.classList.remove('is-open');
    });
    document.addEventListener('keydown', event => {
        if (!lightbox?.classList.contains('is-open')) return;
        if (event.key === 'Escape') lightbox.classList.remove('is-open');
        if (event.key === 'ArrowLeft') showLightboxItem(lightboxIndex - 1);
        if (event.key === 'ArrowRight') showLightboxItem(lightboxIndex + 1);
    });
});
