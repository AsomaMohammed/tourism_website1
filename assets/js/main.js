/**
 * Tourism Website - Main JavaScript
 * Handles tabs, sliders, and interactive elements
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all components
    initTabs();
    initVideoSlider();
    initGalleryThumbnails();
    initImageGrid();
    initPagination();
    initFilter();
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
        // RTL: use positive translateX for RTL direction
        slider.style.transform = `translateX(${currentSlide * 100}%)`;
        
        // Update dots
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
    
    // Event listeners for navigation (swapped for RTL)
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
    
    // Thumbnail click handler
    thumbnails.forEach((thumb, index) => {
        thumb.addEventListener('click', function() {
            // Update active state
            thumbnails.forEach(t => t.classList.remove('active'));
            this.classList.add('active');
            currentIndex = index;
            
            // Update main video slider if exists
            const videoSlider = document.querySelector('.video-slider');
            if (videoSlider) {
                videoSlider.style.transform = `translateX(${currentIndex * 100}%)`;
                
                // Update dots
                const dots = document.querySelectorAll('.slider-dot');
                dots.forEach((dot, i) => {
                    dot.classList.toggle('active', i === currentIndex);
                });
            }
        });
    });
    
    // Navigation buttons (swapped for RTL)
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
    // Remove existing lightbox if any
    const existingLightbox = document.querySelector('.lightbox');
    if (existingLightbox) existingLightbox.remove();
    
    // Create lightbox elements
    const lightbox = document.createElement('div');
    lightbox.className = 'lightbox';
    lightbox.innerHTML = `
        <div class="lightbox-overlay"></div>
        <div class="lightbox-content">
            <button class="lightbox-close">&times;</button>
            <img src="${imageSrc}" alt="Full size image">
        </div>
    `;
    
    // Add styles
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
    
    // Close handlers
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
 * Pagination System
 */
function initPagination() {
    const pagination = document.querySelector('.pagination');
    if (!pagination) return;
    
    const pageLinks = pagination.querySelectorAll('a[data-page]');
    
    pageLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            // Allow default behavior for actual navigation
            // Or prevent and use AJAX for dynamic loading
        });
    });
}

/**
 * Filter System
 */
function initFilter() {
    const filterForm = document.querySelector('.filter-controls');
    const filterBtn = document.querySelector('.btn-filter');
    
    if (!filterBtn) return;
    
    // Form submission
    if (filterForm) {
        filterForm.addEventListener('submit', function(e) {
            // Allow form submission for server-side filtering
            // Or prevent and filter client-side
        });
    }
    
    // Real-time filter (optional)
    const searchInput = document.querySelector('.filter-input[name="search"]');
    const categorySelect = document.querySelector('.filter-select[name="category"]');
    
    if (searchInput) {
        searchInput.addEventListener('input', debounce(function() {
            // Optional: Implement live search
            console.log('Search:', this.value);
        }, 300));
    }
    
    if (categorySelect) {
        categorySelect.addEventListener('change', function() {
            // Optional: Auto-submit on category change
            // filterForm.submit();
        });
    }
}

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
document.querySelectorAll('.gallery-card').forEach(card => {
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
document.addEventListener('DOMContentLoaded', function() {
    const dropdown = document.getElementById('ratingDropdown');
    const header = dropdown.querySelector('.dropdown-header');
    const listItems = dropdown.querySelectorAll('.dropdown-list li');
    const selectedText = document.getElementById('selectedRatingText');

    // تبديل ظهور القائمة عند الضغط على الهيدر
    header.addEventListener('click', function(e) {
        dropdown.classList.toggle('active');
        e.stopPropagation(); // منع إغلاق القائمة فوراً
    });

    // تغيير النص عند اختيار تقييم وإغلاق القائمة
    listItems.forEach(item => {
        item.addEventListener('click', function() {
            selectedText.innerHTML = this.innerHTML;
            dropdown.classList.remove('active');
        });
    });

    // إغلاق القائمة عند الضغط في أي مكان خارجها
    document.addEventListener('click', function() {
        dropdown.classList.remove('active');
    });
});



document.addEventListener('DOMContentLoaded', function() {
    const dropdowns = document.querySelectorAll('.has-dropdown1');

    dropdowns.forEach(dropdown => {
        const trigger = dropdown.querySelector('.dropdown-trigger');

        trigger.addEventListener('click', function(e) {
            e.stopPropagation(); // منع انتشار الحدث للأعلى
            
            // إغلاق أي قائمة أخرى مفتوحة
            dropdowns.forEach(d => {
                if (d !== dropdown) d.classList.remove('is-open');
            });

            // فتح أو إغلاق القائمة الحالية
            dropdown.classList.toggle('is-open');
        });
    });

    // إغلاق القوائم عند الضغط في أي مكان خارجها
    document.addEventListener('click', function() {
        dropdowns.forEach(d => d.classList.remove('is-open'));
    });
});
 /* function(event) {
  var $this = $(this),
    method = $this.data('method'),
    message = $this.data('confirm');

  if (method === undefined && message === undefined) {
    return true;
  }

  if (message !== undefined) {
    $.proxy(pub.confirm, this)(message, function() {
      pub.handleAction($this, event);
    });
  } else {
    pub.handleAction($this, event);
  }
  event.stopImmediatePropagation();
  return false;
}*/
/****لتعديل القائمة  */
// البحث عن الزر والقائمة
document.querySelectorAll('.has-dropdown > .nav-link').forEach(link => {
    link.addEventListener('click', function(e) {
        if (window.innerWidth <= 1024) {
            e.preventDefault(); // منع الرابط من الانتقال لصفحة أخرى عند فتح المنيو
            
            const parent = this.parentElement;
            
            // إغلاق أي قائمة أخرى مفتوحة (اختياري - لجعله مثل Accordion)
            document.querySelectorAll('.nav-item').forEach(item => {
                if (item !== parent) item.classList.remove('active');
            });

            // فتح أو إغلاق القائمة الحالية
            parent.classList.toggle('active');
        }
    });
});
document.querySelectorAll('.has-dropdown > .nav-link').forEach(link => {
    link.addEventListener('click', function(e) {
        if (window.innerWidth <= 1024) {
            e.preventDefault();
            const parent = this.parentElement;
            
            // تبديل الكلاس للعنصر المفتوح
            parent.classList.toggle('active');
            
            // تدوير السهم الخاص بهذا العنصر فقط
            const arrow = this.querySelector('.dropdown-arrow');
            if (parent.classList.contains('active')) {
                arrow.style.transform = 'rotate(180deg)';
            } else {
                arrow.style.transform = 'rotate(0deg)';
            }
        }
    });
});