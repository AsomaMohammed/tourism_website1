<?php
/**
 * بيانات العينة - Sample Data
 * يحتوي على بيانات تجريبية للموقع
 */

// ============================================
// بيانات الوجهات السياحية
// ============================================
$sample_destinations = [
    [
        'id' => 1,
        'name' => 'إندونيسيا',
        'image' => 'assets/images/destination-1.jpg',
        'color' => '#FF6B9D',
        'description' => 'جزيرة بالي الخلابة مع شواطئ جميلة وطبيعة ساحرة'
    ],
    [
        'id' => 2,
        'name' => 'تايلاند',
        'image' => 'assets/images/destination-2.jpg',
        'color' => '#FFA500',
        'description' => 'معابد تايلاند الرائعة والثقافة الآسيوية الأصيلة'
    ],
    [
        'id' => 3,
        'name' => 'ماليزيا',
        'image' => 'assets/images/destination-3.jpg',
        'color' => '#00BCD4',
        'description' => 'ناطحات السحاب والطبيعة الخضراء الخلابة'
    ],
    [
        'id' => 4,
        'name' => 'أذربيجان',
        'image' => 'assets/images/destination-4.jpg',
        'color' => '#FF1493',
        'description' => 'مدينة باكو الحديثة والمناظر الطبيعية الرائعة'
    ],
    [
        'id' => 5,
        'name' => 'تركيا',
        'image' => 'assets/images/destination-5.jpg',
        'color' => '#4169E1',
        'description' => 'إسطنبول العريقة والطبيعة الخلابة'
    ],
    [
        'id' => 6,
        'name' => 'سنغافورة',
        'image' => 'assets/images/destination-6.jpg',
        'color' => '#00CED1',
        'description' => 'مدينة حديثة متقدمة مع حدائق جميلة'
    ]
];

// ============================================
// بيانات أفضل العروض السياحية
// ============================================
$sample_offers = [
    [
        'id' => 1,
        'title' => 'عروض سياحية مميزة في إندونيسيا',
        'description' => 'استمتع برحلة لا تنسى إلى جزيرة بالي الخلابة مع أفضل العروض والأسعار المنخفضة. تشمل الرحلة الفندق والمواصلات والجولات السياحية.',
        'price' => '2,500',
        'currency' => 'ريال',
        'image' => 'assets/images/offer-1.jpg',
        'duration' => '7 أيام',
        'rating' => 4.8
    ],
    [
        'id' => 2,
        'title' => 'عروض سياحية مميزة في تايلاند',
        'description' => 'اكتشف معابد تايلاند الرائعة وتمتع بالثقافة الآسيوية الأصيلة. رحلة شاملة تتضمن الإقامة والطعام والجولات المنظمة.',
        'price' => '2,000',
        'currency' => 'ريال',
        'image' => 'assets/images/offer-2.jpg',
        'duration' => '5 أيام',
        'rating' => 4.7
    ],
    [
        'id' => 3,
        'title' => 'عروض سياحية مميزة في ماليزيا',
        'description' => 'استكشف ناطحات السحاب في كوالالمبور والطبيعة الخضراء الخلابة في ماليزيا. عرض شامل يشمل جميع المتطلبات.',
        'price' => '2,200',
        'currency' => 'ريال',
        'image' => 'assets/images/offer-3.jpg',
        'duration' => '6 أيام',
        'rating' => 4.6
    ]
];

// ============================================
// بيانات آراء العملاء
// ============================================
$sample_testimonials = [
    [
        'id' => 1,
        'name' => 'أحمد محمد',
        'video' => 'assets/videos/testimonial-1.mp4',
        'rating' => 5,
        'comment' => 'تجربة رائعة جداً، الخدمة ممتازة والسعر مناسب'
    ],
    [
        'id' => 2,
        'name' => 'فاطمة علي',
        'video' => 'assets/videos/testimonial-2.mp4',
        'rating' => 5,
        'comment' => 'أفضل موقع سياحي استخدمته، ينصح به بشدة'
    ],
    [
        'id' => 3,
        'name' => 'محمود حسن',
        'video' => 'assets/videos/testimonial-3.mp4',
        'rating' => 4,
        'comment' => 'جيد جداً، لكن يحتاج لبعض التحسينات'
    ],
    [
        'id' => 4,
        'name' => 'سارة خالد',
        'video' => 'assets/videos/testimonial-4.mp4',
        'rating' => 5,
        'comment' => 'رحلة لا تنسى، شكراً على الخدمة الممتازة'
    ]
];

// ============================================
// بيانات الفئات
// ============================================
$sample_categories = [
    ['id' => 1, 'name' => 'شواطئ'],
    ['id' => 2, 'name' => 'جبال'],
    ['id' => 3, 'name' => 'مدن'],
    ['id' => 4, 'name' => 'ثقافة'],
    ['id' => 5, 'name' => 'مغامرات']
];

// ============================================
// بيانات الفنادق
// ============================================
$sample_hotels = [
    [
        'id' => 1,
        'name' => 'فندق الفخامة الذهبي',
        'location' => 'بالي، إندونيسيا',
        'rating' => 5,
        'price_per_night' => '500',
        'image' => 'assets/images/hotel-1.jpg'
    ],
    [
        'id' => 2,
        'name' => 'فندق بانكوك الملكي',
        'location' => 'بانكوك، تايلاند',
        'rating' => 4.5,
        'price_per_night' => '350',
        'image' => 'assets/images/hotel-2.jpg'
    ],
    [
        'id' => 3,
        'name' => 'فندق كوالالمبور الحديث',
        'location' => 'كوالالمبور، ماليزيا',
        'rating' => 4.8,
        'price_per_night' => '400',
        'image' => 'assets/images/hotel-3.jpg'
    ]
];

// ============================================
// دالة للحصول على البيانات النموذجية
// ============================================
function get_sample_data($type) {
    global $sample_destinations, $sample_offers, $sample_testimonials;
    global $sample_categories, $sample_hotels;
    
    $data = [
        'destinations' => $sample_destinations,
        'offers' => $sample_offers,
        'testimonials' => $sample_testimonials,
        'categories' => $sample_categories,
        'hotels' => $sample_hotels
    ];
    
    return isset($data[$type]) ? $data[$type] : [];
}

?>
