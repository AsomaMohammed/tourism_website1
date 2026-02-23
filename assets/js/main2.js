/**
 * Tourism Website - Main JavaScript
 * Handles tabs, sliders, accordion, and interactive elements
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all components
    initTabs();
    initAccordion();
    initVideoSlider();
    initGalleryThumbnails();
    initImageGrid();
    initPagination();
    initFilter();
    initRatingFilter();
    initFavoriteButtons();
    initCompareButtons();
    initGalleryTrigger();
    initCategoryTabs();
    initRoomCarousel();
    
});

/**
 * Tab Navigation System
 */
function initTabs() {
    const tabBtns = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');
    
    if (tabBtns.length === 0) return;
    
    tabBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const targetId = this.getAttribute('data-tab');
            
            // Remove active class from all buttons and contents
            tabBtns.forEach(b => b.classList.remove('active'));
            tabContents.forEach(c => c.classList.remove('active'));
            
            // Add active class to clicked button and target content
            this.classList.add('active');
            const targetContent = document.getElementById(targetId);
            if (targetContent) {
                targetContent.classList.add('active');
            }
        });
    });
}

/**
 * Accordion System
 */
function initAccordion() {
    const accordionItems = document.querySelectorAll('.accordion-item');
    
    if (accordionItems.length === 0) return;
    
    accordionItems.forEach(item => {
        const header = item.querySelector('.accordion-header');
        const content = item.querySelector('.accordion-content');
        
        if (header) {
            header.addEventListener('click', function() {
                const isActive = item.classList.contains('active');
                
                // Close all accordion items
                accordionItems.forEach(accItem => {
                    accItem.classList.remove('active');
                    const accContent = accItem.querySelector('.accordion-content');
                    if (accContent) {
                        accContent.style.display = 'none';
                    }
                });
                
                // Open clicked item if it was closed
                if (!isActive) {
                    item.classList.add('active');
                    if (content) {
                        content.style.display = 'block';
                    }
                }
            });
        }
    });
}

/**
 * Video Slider System
 */
function initVideoSlider() {
    const sliderContainer = document.querySelector('.video-slider-container');
    if (!sliderContainer) return;
    
    const slider = sliderContainer.querySelector('.video-slider');
    const slides = sliderContainer.querySelectorAll('.video-slide');
    const prevBtn = sliderContainer.querySelector('.slider-nav.prev');
    const nextBtn = sliderContainer.querySelector('.slider-nav.next');
    const dotsContainer = sliderContainer.querySelector('.slider-dots');
    
    if (slides.length === 0) return;
    
    let currentSlide = 0;
    const totalSlides = slides.length;
    
    // Create dots
    if (dotsContainer) {
        dotsContainer.innerHTML = '';
        slides.forEach((_, index) => {
            const dot = document.createElement('span');
            dot.classList.add('slider-dot');
            if (index === 0) dot.classList.add('active');
            dot.addEventListener('click', () => goToSlide(index));
            dotsContainer.appendChild(dot);
        });
    }
    
    function updateSlider() {
        slider.style.transform = `translateX(${currentSlide * 100}%)`;
        
        const dots = dotsContainer?.querySelectorAll('.slider-dot');
        dots?.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentSlide);
        });
    }
    
    function goToSlide(index) {
        currentSlide = index;
        updateSlider();
    }
    
    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        updateSlider();
    }
    
    function prevSlide() {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        updateSlider();
    }
    
    if (prevBtn) prevBtn.addEventListener('click', nextSlide);
    if (nextBtn) nextBtn.addEventListener('click', prevSlide);
    
    // Auto-play
    let autoPlayInterval = setInterval(nextSlide, 5000);
    
    sliderContainer.addEventListener('mouseenter', () => {
        clearInterval(autoPlayInterval);
    });
    
    sliderContainer.addEventListener('mouseleave', () => {
        autoPlayInterval = setInterval(nextSlide, 5000);
    });
    
    // Touch support
    let touchStartX = 0;
    let touchEndX = 0;
    
    slider.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
    });
    
    slider.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    });
    
    function handleSwipe() {
        const swipeThreshold = 50;
        const diff = touchStartX - touchEndX;
        
        if (Math.abs(diff) > swipeThreshold) {
            if (diff > 0) {
                prevSlide();
            } else {
                nextSlide();
            }
        }
    }
    
    // Video navigation buttons in accordion
    const videoNavBtns = document.querySelectorAll('.video-nav');
    videoNavBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            showNotification('تنقل الفيديو');
        });
    });
}

/**
 * Gallery Thumbnails System
 */
function initGalleryThumbnails() {
    const thumbnailsWrapper = document.querySelector('.gallery-thumbnails-wrapper');
    if (!thumbnailsWrapper) return;
    
    const thumbnails = thumbnailsWrapper.querySelectorAll('.thumbnail');
    const prevBtn = thumbnailsWrapper.querySelector('.thumbnail-nav.prev');
    const nextBtn = thumbnailsWrapper.querySelector('.thumbnail-nav.next');
    const thumbnailsContainer = thumbnailsWrapper.querySelector('.gallery-thumbnails');
    
    if (thumbnails.length === 0) return;
    
    let currentIndex = 0;
    
    thumbnails.forEach((thumb, index) => {
        thumb.addEventListener('click', function() {
            thumbnails.forEach(t => t.classList.remove('active'));
            this.classList.add('active');
            currentIndex = index;
            
            const videoSlider = document.querySelector('.video-slider');
            if (videoSlider) {
                videoSlider.style.transform = `translateX(${currentIndex * 100}%)`;
                
                const dots = document.querySelectorAll('.slider-dot');
                dots.forEach((dot, i) => {
                    dot.classList.toggle('active', i === currentIndex);
                });
            }
        });
    });
    
    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % thumbnails.length;
            thumbnails[currentIndex].click();
            scrollThumbnails();
        });
    }
    
    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + thumbnails.length) % thumbnails.length;
            thumbnails[currentIndex].click();
            scrollThumbnails();
        });
    }
    
    function scrollThumbnails() {
        const thumbnail = thumbnails[currentIndex];
        if (thumbnail && thumbnailsContainer) {
            thumbnail.scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });
        }
    }
}

/**
 * Room Carousel
 */
function initRoomCarousel() {
    const carouselItems = document.querySelectorAll('.carousel-item');
    
    carouselItems.forEach(item => {
        item.addEventListener('click', function() {
            carouselItems.forEach(ci => ci.classList.remove('active'));
            this.classList.add('active');
        });
    });
}

/**
 * Image Grid Lightbox
 */
function initImageGrid() {
    const gridItems = document.querySelectorAll('.image-grid-item');
    
    if (gridItems.length === 0) return;
    
    gridItems.forEach(item => {
        item.addEventListener('click', function() {
            const img = this.querySelector('img');
            if (img) {
                openLightbox(img.src);
            }
        });
    });
}

/**
 * Lightbox functionality
 */
function openLightbox(imageSrc) {
    const existingLightbox = document.querySelector('.lightbox');
    if (existingLightbox) existingLightbox.remove();
    
    const lightbox = document.createElement('div');
    lightbox.className = 'lightbox';
    lightbox.innerHTML = `
        <div class="lightbox-overlay"></div>
        <div class="lightbox-content">
            <button class="lightbox-close">&times;</button>
            <img src="${imageSrc}" alt="Full size image">
        </div>
    `;
    
    const styleId = 'lightbox-styles';
    if (!document.getElementById(styleId)) {
        const style = document.createElement('style');
        style.id = styleId;
        style.textContent = `
            .lightbox {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                z-index: 9999;
                display: flex;
                justify-content: center;
                align-items: center;
                animation: fadeIn 0.3s ease;
            }
            .lightbox-overlay {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: rgba(0, 0, 0, 0.9);
            }
            .lightbox-content {
                position: relative;
                max-width: 90%;
                max-height: 90%;
            }
            .lightbox-content img {
                max-width: 100%;
                max-height: 90vh;
                object-fit: contain;
                border-radius: 8px;
            }
            .lightbox-close {
                position: absolute;
                top: -45px;
                left: 0;
                background: none;
                border: none;
                color: white;
                font-size: 45px;
                cursor: pointer;
                transition: transform 0.3s ease;
            }
            .lightbox-close:hover {
                transform: scale(1.2);
            }
            @keyframes fadeIn {
                from { opacity: 0; }
                to { opacity: 1; }
            }
        `;
        document.head.appendChild(style);
    }
    
    document.body.appendChild(lightbox);
    document.body.style.overflow = 'hidden';
    
    const closeHandler = () => {
        lightbox.remove();
        document.body.style.overflow = '';
    };
    
    lightbox.querySelector('.lightbox-overlay').addEventListener('click', closeHandler);
    lightbox.querySelector('.lightbox-close').addEventListener('click', closeHandler);
    
    document.addEventListener('keydown', function escHandler(e) {
        if (e.key === 'Escape') {
            closeHandler();
            document.removeEventListener('keydown', escHandler);
        }
    });
}

/**
 * Rating Stars Filter
 */
function initRatingFilter() {
    const ratingFilter = document.getElementById('ratingFilter');
    if (!ratingFilter) return;
    
    const stars = ratingFilter.querySelectorAll('.star');
    let selectedRating = 0;
    
    stars.forEach((star, index) => {
        star.addEventListener('mouseenter', function() {
            highlightStars(index + 1);
        });
        
        star.addEventListener('mouseleave', function() {
            highlightStars(selectedRating);
        });
        
        star.addEventListener('click', function() {
            selectedRating = index + 1;
            highlightStars(selectedRating);
            filterHotelsByRating(selectedRating);
        });
    });
    
    function highlightStars(count) {
        stars.forEach((star, index) => {
            star.classList.toggle('active', index < count);
            star.classList.toggle('filled', index < count);
        });
    }
}

/**
 * Filter Hotels by Rating
 */
function filterHotelsByRating(rating) {
    const hotelCards = document.querySelectorAll('.hotel-card');
    
    hotelCards.forEach(card => {
        const cardRating = card.querySelectorAll('.hotel-rating .star.filled').length;
        
        if (rating === 0 || cardRating >= rating) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}

/**
 * Favorite Buttons
 */
function initFavoriteButtons() {
    const favoriteButtons = document.querySelectorAll('.favorite-btn');
    
    favoriteButtons.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            this.classList.toggle('active');
            
            const svg = this.querySelector('svg');
            if (this.classList.contains('active')) {
                svg.style.fill = '#e74c3c';
                svg.style.stroke = '#e74c3c';
                showNotification('تمت الإضافة إلى المفضلة');
            } else {
                svg.style.fill = 'none';
                svg.style.stroke = 'currentColor';
                showNotification('تمت الإزالة من المفضلة');
            }
        });
    });
}

/**
 * Compare Buttons
 */
function initCompareButtons() {
    const compareButtons = document.querySelectorAll('.compare-btn');
    const compareList = [];
    
    compareButtons.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            this.classList.toggle('active');
            
            const hotelCard = this.closest('.hotel-card');
            const hotelId = hotelCard?.dataset.hotelId || Math.random();
            
            if (this.classList.contains('active')) {
                compareList.push(hotelId);
                showNotification('تمت الإضافة للمقارنة');
            } else {
                const index = compareList.indexOf(hotelId);
                if (index > -1) {
                    compareList.splice(index, 1);
                }
                showNotification('تمت الإزالة من المقارنة');
            }
        });
    });
}

/**
 * Gallery Trigger (View All Images)
 */
function initGalleryTrigger() {
    const galleryTriggers = document.querySelectorAll('.gallery-trigger');
    
    galleryTriggers.forEach(trigger => {
        trigger.addEventListener('click', function() {
            showNotification('عرض جميع الصور');
        });
    });
}

/**
 * Change Main Gallery Image
 */
function changeMainImage(src) {
    const mainImage = document.getElementById('mainGalleryImage');
    if (mainImage) {
        mainImage.src = src;
    }
}

/**
 * Category Tabs (Location Page)
 */
function initCategoryTabs() {
    const categoryBtns = document.querySelectorAll('.category-btn');
    
    categoryBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            categoryBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
        });
    });
}

/**
 * Pagination System
 */
function initPagination() {
    const pagination = document.querySelector('.pagination');
    if (!pagination) return;
    
    const pageLinks = pagination.querySelectorAll('.page-btn');
    
    pageLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            pageLinks.forEach(l => l.classList.remove('active'));
            
            if (!this.classList.contains('prev-btn') && !this.classList.contains('next-btn')) {
                this.classList.add('active');
            }
        });
    });
}

/**
 * Filter System
 */
function initFilter() {
    const filterForm = document.querySelector('.filter-controls');
    const filterBtn = document.querySelector('.btn-filter, .filter-btn');
    
    if (!filterBtn) return;
    
    const searchInput = document.querySelector('.filter-input[name="search"]');
    const categorySelect = document.querySelector('.filter-select[name="category"]');
    
    if (searchInput) {
        searchInput.addEventListener('input', debounce(function() {
            console.log('Search:', this.value);
        }, 300));
    }
    
    if (categorySelect) {
        categorySelect.addEventListener('change', function() {
            console.log('Category changed:', this.value);
        });
    }
}

/**
 * Show Notification
 */
function showNotification(message) {
    const existingNotification = document.querySelector('.notification');
    if (existingNotification) {
        existingNotification.remove();
    }
    
    const notification = document.createElement('div');
    notification.className = 'notification';
    notification.textContent = message;
    notification.style.cssText = `
        position: fixed;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        background-color: #333;
        color: white;
        padding: 12px 24px;
        border-radius: 5px;
        z-index: 10000;
        animation: slideUp 0.3s ease;
        font-family: 'GEDinarTWOMedium', sans-serif;
    `;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.style.animation = 'slideDown 0.3s ease';
        setTimeout(() => notification.remove(), 300);
    }, 3000);
}

// Add notification animation styles
const notificationStyle = document.createElement('style');
notificationStyle.textContent = `
    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateX(-50%) translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateX(-50%) translateY(0);
        }
    }
    
    @keyframes slideDown {
        from {
            opacity: 1;
            transform: translateX(-50%) translateY(0);
        }
        to {
            opacity: 0;
            transform: translateX(-50%) translateY(20px);
        }
    }
`;
document.head.appendChild(notificationStyle);

/**
 * Debounce utility function
 */
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func.apply(this, args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

/**
 * Smooth scroll for anchor links
 */
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        const targetId = this.getAttribute('href');
        if (targetId === '#') return;
        
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
            e.preventDefault();
            targetElement.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

/**
 * Lazy loading for images
 */
if ('IntersectionObserver' in window) {
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                if (img.dataset.src) {
                    img.src = img.dataset.src;
                    img.removeAttribute('data-src');
                }
                observer.unobserve(img);
            }
        });
    });
    
    document.querySelectorAll('img[data-src]').forEach(img => {
        imageObserver.observe(img);
    });
}

/**
 * Gallery Card Hover Effects
 */
document.querySelectorAll('.gallery-card, .hotel-card').forEach(card => {
    card.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-8px)';
    });
    
    card.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0)';
    });
});

/**
 * Header Scroll Effect
 */
let lastScrollTop = 0;
const header = document.querySelector('.header');

if (header) {
    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollTop > 100) {
            header.style.boxShadow = '0 4px 20px rgba(0,0,0,0.15)';
        } else {
            header.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
        }
        
        lastScrollTop = scrollTop;
    });
}

/**
 * Video Action Buttons
 */
document.querySelectorAll('.video-action-btn').forEach(btn => {
    btn.addEventListener('click', function(e) {
        e.stopPropagation();
        const action = this.getAttribute('title');
        showNotification(action === 'Watch later' ? 'تمت الإضافة للمشاهدة لاحقاً' : 'تم نسخ رابط المشاركة');
    });
});

/**
 * Form Submission
 */
const reviewForm = document.querySelector('.review-form');
if (reviewForm) {
    reviewForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const name = this.querySelector('.form-input')?.value;
        const comment = this.querySelector('.form-textarea')?.value;
        
        if (name && comment) {
            showNotification('شكراً لك! تم إرسال تقييمك بنجاح');
            this.reset();
        } else {
            showNotification('الرجاء ملء جميع الحقول');
        }
    });
}
/********************************************************** */
document.addEventListener('DOMContentLoaded', function() {
    const dropdown = document.getElementById('ratingDropdown');
    const header = dropdown.querySelector('.dropdown-header');
    const listItems = dropdown.querySelectorAll('.dropdown-list li');
    const selectedText = document.getElementById('selectedRatingText');

    // فتح وإغلاق القائمة عند الضغط على الرأس
    header.addEventListener('click', () => {
        dropdown.classList.toggle('active');
    });

    // التعامل مع اختيار عنصر من القائمة
    listItems.forEach(item => {
        item.addEventListener('click', function() {
            const value = this.getAttribute('data-value');
            selectedText.innerHTML = this.innerHTML; // تحديث النص الظاهر بالنجوم المختارة
            dropdown.classList.remove('active'); // إغلاق القائمة
            
            // هنا يمكنك استدعاء دالة الفلترة الخاصة بك
            console.log("التقييم المختار:", value);
            // filterHotels(value); 
        });
    });

    // إغلاق القائمة إذا تم الضغط خارجها
    window.addEventListener('click', (e) => {
        if (!dropdown.contains(e.target)) {
            dropdown.classList.remove('active');
        }
    });
});
// Export functions for global use
window.changeMainImage = changeMainImage;
window.openLightbox = openLightbox;
window.showNotification = showNotification;

function scrollCarousel(btn, direction) {
    // الوصول إلى عنصر الصور داخل نفس الـ wrapper
    const container = btn.parentElement.querySelector('.room-carousel');
    // تحديد مسافة القفزة (عرض عنصر واحد + الـ gap)
    const scrollStep = 130; 
    
    container.scrollBy({
        left: direction * scrollStep,
        behavior: 'smooth'
    });
}

const tabs = document.querySelectorAll('.tab-btn');
const indicator = document.querySelector('.tab-indicator');

function moveIndicator(el) {
    const rect = el.getBoundingClientRect();
    const parentRect = el.parentElement.getBoundingClientRect();

    indicator.style.width = rect.width + 'px';
    indicator.style.left = (rect.left - parentRect.left) + 'px';
}

tabs.forEach(tab => {
    tab.addEventListener('click', () => {
        tabs.forEach(t => t.classList.remove('active'));
        tab.classList.add('active');
        moveIndicator(tab);
    });
});

/* تشغيل المؤشر عند التحميل */
window.addEventListener('load', () => {
    const activeTab = document.querySelector('.tab-btn.active');
    moveIndicator(activeTab);
});


