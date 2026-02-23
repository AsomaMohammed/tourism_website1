/**
 * موقع سياحي - ملف JavaScript الرئيسي
 * Travel Website - Main JavaScript File
 */

document.addEventListener('DOMContentLoaded', function() {
    // ============================================
    // 1. تفعيل الملاحة السلسة
    // ============================================
    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href.startsWith('#')) {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            }
        });
    });
    
    // ============================================
    // 2. تأثير الظهور عند التمرير
    // ============================================
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in-up');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    // مراقبة جميع البطاقات
    const cards = document.querySelectorAll('.destination-card, .offer-card, .testimonial-card');
    cards.forEach(card => {
        observer.observe(card);
    });
    
    // ============================================
    // 3. تفعيل مشغل الفيديو
    // ============================================
    const playButtons = document.querySelectorAll('.play-button');
    playButtons.forEach(button => {
        button.addEventListener('click', function() {
            const video = this.parentElement.querySelector('.testimonial-video');
            if (video) {
                if (video.paused) {
                    video.play();
                    this.style.opacity = '0';
                } else {
                    video.pause();
                    this.style.opacity = '1';
                }
            }
        });
    });
    
    // إظهار زر التشغيل عند إيقاف الفيديو
    const videos = document.querySelectorAll('.testimonial-video');
    videos.forEach(video => {
        video.addEventListener('pause', function() {
            const playButton = this.parentElement.querySelector('.play-button');
            if (playButton) {
                playButton.style.opacity = '1';
            }
        });
    });
    
    // ============================================
    // 4. إضافة تأثيرات عند التمرير على الأزرار
    // ============================================
    const buttons = document.querySelectorAll('.btn-explore');
    buttons.forEach(button => {
        button.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.05)';
        });
        
        button.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    });
    
    // ============================================
    // 5. تأثير التمرير على الصور
    // ============================================
    const images = document.querySelectorAll('.destination-image, .offer-image');
    images.forEach(image => {
        image.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.05)';
        });
        
        image.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    });
    
    // ============================================
    // 6. معالجة وسائل التواصل الاجتماعي
    // ============================================
    const socialLinks = document.querySelectorAll('.social-icon, .social-circle, .social-link');
    socialLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            // يمكن إضافة معالجة مخصصة هنا
            console.log('Social link clicked:', this);
        });
    });
    
    // ============================================
    // 7. تفعيل الملاحة على الهاتف المحمول
    // ============================================
    const hamburger = document.querySelector('.hamburger-menu');
    const navMenu = document.querySelector('.nav-menu');
    
    if (hamburger) {
        hamburger.addEventListener('click', function() {
            navMenu.classList.toggle('active');
            this.classList.toggle('active');
        });
    }
    
    // إغلاق القائمة عند النقر على رابط
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (navMenu) {
                navMenu.classList.remove('active');
            }
            if (hamburger) {
                hamburger.classList.remove('active');
            }
        });
    });
    
    // ============================================
    // 8. تحديث النشط في الملاحة
    // ============================================
    window.addEventListener('scroll', function() {
        updateActiveNavLink();
    });
    
    function updateActiveNavLink() {
        const sections = document.querySelectorAll('section[id]');
        let current = '';
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (pageYOffset >= sectionTop - 200) {
                current = section.getAttribute('id');
            }
        });
        
        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === '#' + current) {
                link.classList.add('active');
            }
        });
    }
    
    // ============================================
    // 9. تأثير الظهور للعناوين
    // ============================================
    const titles = document.querySelectorAll('.section-title, .hero-title');
    titles.forEach(title => {
        observer.observe(title);
    });
    
    // ============================================
    // 10. معالجة الأخطاء والتحقق من التوافق
    // ============================================
    if (!window.IntersectionObserver) {
        console.warn('IntersectionObserver not supported');
        // إضافة polyfill أو بديل
    }
    
    // ============================================
    // 11. تحسين الأداء - Lazy Loading
    // ============================================
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
    
    // ============================================
    // 12. معالج حدث تغيير الحجم
    // ============================================
    let resizeTimer;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            // إعادة حساب التخطيطات إذا لزم الأمر
            console.log('Window resized');
        }, 250);
    });
    
    // ============================================
    // 13. تحسين الأداء - Debounce للتمرير
    // ============================================
    let scrollTimer;
    window.addEventListener('scroll', function() {
        clearTimeout(scrollTimer);
        scrollTimer = setTimeout(function() {
            // معالجة التمرير
        }, 100);
    }, { passive: true });
    
    // ============================================
    // 14. معلومات التطوير
    // ============================================
    console.log('Travel Website Loaded Successfully');
    console.log('Version: 1.0.0');
    console.log('Last Updated: 2024');
});

// ============================================
// 15. دوال مساعدة عامة
// ============================================

/**
 * دالة للتحقق من العنصر في منطقة الرؤية
 */
function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

/**
 * دالة للتمرير السلس إلى عنصر
 */
function smoothScroll(target) {
    const element = document.querySelector(target);
    if (element) {
        element.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
}

/**
 * دالة لإضافة فئة مع تأخير
 */
function addClassWithDelay(element, className, delay = 0) {
    setTimeout(() => {
        element.classList.add(className);
    }, delay);
}

/**
 * دالة لإزالة فئة مع تأخير
 */
function removeClassWithDelay(element, className, delay = 0) {
    setTimeout(() => {
        element.classList.remove(className);
    }, delay);
}

/**
 * دالة للتحقق من الجهاز المحمول
 */
function isMobileDevice() {
    return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
}

/**
 * دالة لتحديث البيانات ديناميكياً
 */
async function fetchData(url) {
    try {
        const response = await fetch(url);
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        return await response.json();
    } catch (error) {
        console.error('Error fetching data:', error);
        return null;
    }
}



function openTab(tabName) {
    var i, tabContent, tabButtons;

    // إخفاء جميع المحتويات
    tabContent = document.querySelectorAll('.tab-pane');
    tabContent.forEach(function(content) {
        content.classList.remove('active');
    });

    // إزالة الكلاس 'active' من جميع الأزرار
    tabButtons = document.querySelectorAll('.tab-button');
    tabButtons.forEach(function(button) {
        button.classList.remove('active');
    });

    // إظهار التاب المختار وإضافة الكلاس 'active' على الزر
    document.getElementById(tabName).classList.add('active');
    var activeButton = document.querySelector(`.tab-button[data-tab="${tabName}"]`);
    activeButton.classList.add('active');
}







    const menuBtn = document.getElementById('mobile-menu-btn');
    const navbar = document.getElementById('navbar');

    menuBtn.addEventListener('click', () => {
        navbar.classList.toggle('active');
    });

    // إغلاق القائمة عند الضغط خارجها
    document.addEventListener('click', (e) => {
        if (!navbar.contains(e.target) && !menuBtn.contains(e.target)) {
            navbar.classList.remove('active');
        }
    });
