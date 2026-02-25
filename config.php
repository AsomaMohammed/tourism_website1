<?php
/**
 * ملف الإعدادات - Configuration File
 * يحتوي على جميع الإعدادات الأساسية للموقع
 */

// ============================================
// 1. معلومات الموقع الأساسية
// ============================================
define('SITE_NAME', 'دليل السفر - موقع سياحي');
define('SITE_DESCRIPTION', 'استكشف أجمل الوجهات السياحية في العالم');
define('SITE_URL', 'http://localhost/website_project');
define('SITE_LANGUAGE', 'ar');
define('SITE_CHARSET', 'UTF-8');

// ============================================
// 2. معلومات التواصل
// ============================================
define('CONTACT_EMAIL', 'info@travel.com');
define('CONTACT_PHONE', '+966 12 345 6789');
define('CONTACT_ADDRESS', 'الرياض، المملكة العربية السعودية');

// ============================================
// 3. إعدادات الصور
// ============================================
define('IMAGES_PATH', 'assets/images/');
define('VIDEOS_PATH', 'assets/videos/');
define('FONTS_PATH', 'assets/fonts/');

// ============================================
// 4. إعدادات الأداء
// ============================================
define('ENABLE_CACHE', true);
define('CACHE_DURATION', 3600); // ثانية واحدة = 1 ساعة
define('ENABLE_COMPRESSION', true);

// ============================================
// 5. إعدادات الأمان
// ============================================
define('ENABLE_HTTPS', false); // غيّر إلى true في الإنتاج
define('ENABLE_SECURITY_HEADERS', true);

// ============================================
// 6. إعدادات قاعدة البيانات (للمستقبل)
// ============================================
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'travel_website');

// ============================================
// 7. إعدادات الوسائط الاجتماعية
// ============================================
$social_media = [
    'facebook' => 'https://facebook.com/travel',
    'twitter' => 'https://twitter.com/travel',
    'instagram' => 'https://instagram.com/travel',
    'youtube' => 'https://youtube.com/travel',
    'tiktok' => 'https://tiktok.com/@travel',
    'whatsapp' => 'https://wa.me/966123456789'
];

// ============================================
// 8. إعدادات الوجهات السياحية
// ============================================
$destinations_config = [
    'items_per_row' => 3,
    'enable_lazy_loading' => true,
    'image_quality' => 85
];

// ============================================
// 9. إعدادات العروض السياحية
// ============================================
$offers_config = [
    'items_per_page' => 3,
    'show_price' => true,
    'enable_filters' => true
];

// ============================================
// 10. إعدادات آراء العملاء
// ============================================
$testimonials_config = [
    'items_per_row' => 4,
    'enable_video_autoplay' => false,
    'show_rating' => true
];

// ============================================
// 11. دالة للحصول على إعدادات الموقع
// ============================================
function get_site_config($key = null) {
    $config = [
        'site_name' => SITE_NAME,
        'site_description' => SITE_DESCRIPTION,
        'site_url' => SITE_URL,
        'contact_email' => CONTACT_EMAIL,
        'contact_phone' => CONTACT_PHONE,
        'contact_address' => CONTACT_ADDRESS,
    ];
    
    if ($key && isset($config[$key])) {
        return $config[$key];
    }
    
    return $config;
}

// ============================================
// 12. دالة للحصول على مسار الملف
// ============================================
function get_asset_path($type, $filename) {
    $paths = [
        'image' => IMAGES_PATH,
        'video' => VIDEOS_PATH,
        'font' => FONTS_PATH,
    ];
    
    if (isset($paths[$type])) {
        return $paths[$type] . $filename;
    }
    
    return $filename;
}

// ============================================
// 13. دالة للحصول على وسائل التواصل
// ============================================
function get_social_media($platform = null) {
    global $social_media;
    
    if ($platform && isset($social_media[$platform])) {
        return $social_media[$platform];
    }
    
    return $social_media;
}

// ============================================
// 14. إعدادات الخطأ والتسجيل
// ============================================
error_reporting(E_ALL);
ini_set('display_errors', 0); // لا تعرض الأخطاء للمستخدمين
ini_set('log_errors', 1);
$__logs_dir = __DIR__ . DIRECTORY_SEPARATOR . 'logs';
if (!is_dir($__logs_dir)) {
    mkdir($__logs_dir, 0755, true);
}
ini_set('error_log', $__logs_dir . DIRECTORY_SEPARATOR . 'error.log');

// ============================================
// 15. تعيين المنطقة الزمنية
// ============================================
date_default_timezone_set('Asia/Riyadh');

// ============================================
// 16. بدء الجلسة
// ============================================
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!headers_sent()) {
    if (defined('ENABLE_SECURITY_HEADERS') && ENABLE_SECURITY_HEADERS) {
        header('X-Content-Type-Options: nosniff');
        header('X-Frame-Options: SAMEORIGIN');
        header('Referrer-Policy: strict-origin-when-cross-origin');
        header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
    }

    if (defined('ENABLE_CACHE') && ENABLE_CACHE && isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'GET') {
        header('Cache-Control: private, max-age=' . (defined('CACHE_DURATION') ? (int)CACHE_DURATION : 0));
        header('Expires: ' . gmdate('D, d M Y H:i:s', time() + (defined('CACHE_DURATION') ? (int)CACHE_DURATION : 0)) . ' GMT');
    }
}

if (defined('ENABLE_COMPRESSION') && ENABLE_COMPRESSION) {
    if (!headers_sent() && !ini_get('zlib.output_compression') && extension_loaded('zlib') && ob_get_level() === 0) {
        ob_start('ob_gzhandler');
    } elseif (ob_get_level() === 0) {
        ob_start();
    }
}

// ============================================
// 17. دالة للتحقق من الطلب
// ============================================
function is_request_method($method) {
    return $_SERVER['REQUEST_METHOD'] === strtoupper($method);
}

// ============================================
// 18. دالة للحصول على البيانات بأمان
// ============================================
function get_post_data($key, $default = null) {
    return isset($_POST[$key]) ? htmlspecialchars($_POST[$key]) : $default;
}

function get_get_data($key, $default = null) {
    return isset($_GET[$key]) ? htmlspecialchars($_GET[$key]) : $default;
}

// ============================================
// 19. دالة لتسجيل الأخطاء
// ============================================
function log_error($message, $level = 'ERROR') {
    $log_dir = 'logs';
    if (!is_dir($log_dir)) {
        mkdir($log_dir, 0755, true);
    }
    
    $log_file = $log_dir . '/error.log';
    $timestamp = date('Y-m-d H:i:s');
    $log_message = "[$timestamp] [$level] $message\n";
    
    error_log($log_message, 3, $log_file);
}

// ============================================
// 20. دالة لإعادة التوجيه الآمنة
// ============================================
function safe_redirect($url) {
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        header('Location: ' . $url);
        exit;
    }
}

?>
