/**
 * Tourism Website - Main JavaScript
 * Optimized for i18n, Sticky Header, and Interactive Elements
 */

document.addEventListener('DOMContentLoaded', function() {
    // 1. نظام الترجمة واللغات (يجب أن يكون أولاً لضبط اتجاه الصفحة)
    initI18n();
    
    // 2. المكونات التفاعلية
    if (typeof initTabs === 'function') initTabs();
    if (typeof initVideoSlider === 'function') initVideoSlider();
    if (typeof initGalleryThumbnails === 'function') initGalleryThumbnails();
    if (typeof initImageGrid === 'function') initImageGrid();
    if (typeof initPagination === 'function') initPagination();
    if (typeof initFilter === 'function') initFilter();
    if (typeof initMobileMenu === 'function') initMobileMenu();
    if (typeof initCurrencyAndDropdowns === 'function') initCurrencyAndDropdowns(); // دمج وظائف القوائم المنسدلة والعملات
    if (typeof initHeaderEffect === 'function') initHeaderEffect();
});

// --- وظائف التخزين (Helper Functions) ---
function getStoredItem(key) { return window.localStorage.getItem(key); }
function setStoredItem(key, value) { window.localStorage.setItem(key, value); }

/**
 * 1. نظام الترجمة (i18n) المحسن
 */
async function i18nApplyLanguage(lang) {
    const html = document.documentElement;
    const normalized = (lang === 'en') ? 'en' : 'ar';
    const dir = (normalized === 'ar') ? 'rtl' : 'ltr';

    html.setAttribute('lang', normalized);
    html.setAttribute('dir', dir);
    
    // تغيير الكلاسات
    html.classList.remove('lang-en', 'lang-ar');
    html.classList.add(`lang-${normalized}`);

    // جلب ملف الترجمة
    const dict = await loadTranslations(normalized);

    // تطبيق الترجمة
    document.querySelectorAll('[data-i18n]').forEach(el => {
        const key = el.getAttribute('data-i18n');
        if (dict[key]) el.textContent = dict[key];
    });

    document.querySelectorAll('[data-i18n-placeholder]').forEach(el => {
        const key = el.getAttribute('data-i18n-placeholder');
        if (key && dict[key] != null) {
            el.setAttribute('placeholder', dict[key]);
        }
    });

    document.querySelectorAll('[data-i18n-title]').forEach(el => {
        const key = el.getAttribute('data-i18n-title');
        if (key && dict[key] != null) {
            el.setAttribute('title', dict[key]);
        }
    });

    document.querySelectorAll('[data-i18n-aria-label]').forEach(el => {
        const key = el.getAttribute('data-i18n-aria-label');
        if (key && dict[key] != null) {
            el.setAttribute('aria-label', dict[key]);
        }
    });
    //////////////////////////////////////////////

    document.querySelectorAll('[data-city-ar][data-city-en]').forEach(el => {
        const next = (normalized === 'en') ? el.getAttribute('data-city-en') : el.getAttribute('data-city-ar');
        if (next != null) el.textContent = next;
    });
//////////////////////////////////////////////////////
    // تحديث الهيدر العلوي (اللغة)
    const selectedLangLabel = document.getElementById('selected-lang-label') || 
     document.querySelector('.has-dropdown1:last-child .dropdown-trigger');
    if (selectedLangLabel) {
        const langConfigs = { 'ar': '🇸🇦 العربية', 'en': '🇬🇧 ENGLISH' };
        selectedLangLabel.innerHTML = `${langConfigs[normalized]} <i class="fas fa-chevron-down"></i>`;
    }
}

async function loadTranslations(lang) {
    try {
        const scriptEl = document.querySelector('script[src$="assets/js/main.js"], script[src*="/assets/js/main.js"]');
        const scriptUrl = scriptEl ? scriptEl.src : window.location.href;
        const localesBaseUrl = new URL('../locales/', scriptUrl);
        const response = await fetch(new URL(`${lang}.json`, localesBaseUrl).toString());
        if (!response.ok) throw new Error('File not found');
        return await response.json();
    } catch (error) {
        console.warn("Translation not found, using fallback.");
        return {};
    }
}

function initI18n() {
    const initial = getStoredItem('site_lang') || 'ar'; 
    i18nApplyLanguage(initial);

    document.querySelectorAll('[data-lang]').forEach(option => {
        option.addEventListener('click', function(e) {
            e.preventDefault();
            const nextLang = this.getAttribute('data-lang');
            setStoredItem('site_lang', nextLang);
            i18nApplyLanguage(nextLang);
            this.closest('.has-dropdown1')?.classList.remove('is-open');
        });
    });
}

/**
 * 2. نظام العملات والقوائم المنسدلة العلوية (الموحد)
 */
function initCurrencyAndDropdowns() {
    const dropdowns = document.querySelectorAll('.has-dropdown1');
    
    // استرجاع العملة المحفوظة
    const savedCurrency = getStoredItem('site_currency') || 'USD';
    const currencyTrigger = dropdowns[0]?.querySelector('.dropdown-trigger');
    if (currencyTrigger && dropdowns[0]) {
        currencyTrigger.innerHTML = `<i class="fas fa-chevron-down" style="font-size: 0.7rem; margin-right: 5px;"></i> ${savedCurrency}`;
    }

    dropdowns.forEach((dropdown, index) => {
        const trigger = dropdown.querySelector('.dropdown-trigger');
        
        trigger.addEventListener('click', function(e) {
            e.stopPropagation();
            dropdowns.forEach(d => { if (d !== dropdown) d.classList.remove('is-open'); });
            dropdown.classList.toggle('is-open');
        });

        // اختيار عنصر من القائمة
        dropdown.querySelectorAll('.top-dropdown-menu a').forEach(item => {
            item.addEventListener('click', function(e) {
                if (index === 0) { // قائمة العملات
                    const code = this.innerText.split(' - ')[0];
                    setStoredItem('site_currency', code);
                    trigger.innerHTML = `<i class="fas fa-chevron-down" style="font-size: 0.7rem; margin-right: 5px;"></i> ${code}`;
                }
                dropdown.classList.remove('is-open');
            });
        });
    });

    document.addEventListener('click', () => dropdowns.forEach(d => d.classList.remove('is-open')));
}

/**
 * 3. نظام القائمة الجانبية للموبايل (Mobile Menu)
 */
function initMobileMenu() {
    const navLinks = document.querySelectorAll('.has-dropdown > .nav-link');
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            if (window.innerWidth <= 1024) {
                e.preventDefault();
                const parent = this.parentElement;
                
                // إغلاق البقية (Accordion Style)
                document.querySelectorAll('.nav-item').forEach(item => {
                    if (item !== parent) item.classList.remove('active');
                });

                parent.classList.toggle('active');
                
                // تدوير السهم
                const arrow = this.querySelector('.dropdown-arrow');
                if (arrow) {
                    arrow.style.transform = parent.classList.contains('active') ? 'rotate(180deg)' : 'rotate(0deg)';
                }
            }
        });
    });
}

/**
 * 4. تأثير الهيدر عند التمرير (Sticky & Shadow)
 */
function initHeaderEffect() {
    const header = document.querySelector('.header-main');
    if (!header) return;

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.style.backgroundColor = '#ffffff';
            header.style.boxShadow = '0 4px 15px rgba(0,0,0,0.1)';
        } else {
            header.style.backgroundColor = 'transparent';
            header.style.boxShadow = 'none';
        }
    });
}

// ... (باقي وظائف initTabs, initVideoSlider, إلخ تظل كما هي في كودك الأصلي)

