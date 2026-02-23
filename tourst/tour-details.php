<?php
/**
 * صفحة تفاصيل الجولة - Tour Details Page
 */
$tourr=['id'=>1,
 'related_articles' => [
        'اهم مدن ماليزيا',
        'دليل السياحة في ماليزيا ',
        'كوالالمبور | سيلانحـــور',
        'بينانــــج | لنكــــاوي',
]
    ];
// 1. تصحيح مصفوفة الجولات (مصفوفة داخل مصفوفة)
$tours = [
    [
        'id' => 1,
        'title' => ' ﺑﺮج اﻟﺘﻮأم ﻛﻮاﻻﻟﻤﺒﻮر (اﻟﺒﺮﺟﻴﻦ اﻟﺘﻮأم) ',
        'image' => 'assets/images/tourdbac.png',
        'video' => 'https://www.youtube.com/embed/VIDEO_ID1',
        'description' => 'برجا بتروناس التوأم يقعان في العاصمه الماليزيه كوالالمبور. كانا أطول برجين في العالم منذ عام ۱۹۹۸ حتى عام .۲۰۰٤ يبلغ ارتفاع البرجين إلى الطابق العلوي
۳۷٥٫۰ متر, وأما ارتفاعهما الهوائي فيصل إلى ٤٥۲٫۰ متر (۱,٤۸۲٫۹ قدم). يوجد بكلا البرجين ۸۸ طابق و۷۸ مصعد , وتبلغ المساحة الإجمالية لهذا المعلم
٥۰۰٫۱۹۷ الف متر مربع وتعتبر مواد الخرسانة الكونكريت والفولاذ والستيل من المواد الاساسية في البناء اما مواد التلبيس فهي الالمنيوم والستانلس ستيل. وتستغرق
الرحلة من قاعدة المبنى إلى قمته ۹۰ ثانية فقط داخل المصعد ويحتوي على ۳۲ ألف نافذة. اذا ما رغبت بالصعود للجسر المعلق بين البرجين فعليك القدوم الساعة
السادسة صباحا والانتظار حتى يحين دورك مع العلم أنه مجاني. داخل البرجين مركز تسوق ضخم مكون من خمس طوابق. يتبع البرجين حديقة خلفهما وتحتوي علي
بحيرة نوافير راقصة وحديقة جميلة وكبيرة وهي حديقة جميلة التنسيق تضم تقريبا ۱۹۰۰ شجرة طبيعية وتضم بجوار أشجارها الكثيفة وأماكن الجلوس الرائعة مسارا
مطاطي للرياضة وحديقة ألعاب خفيفة للأطفال وكذلك مسبح للأطفال ومسجد الشاكرين . تتخلل مسطحاتها المياه الجميلة والتي تزينها نافورة ملونة تتراقص مع أنغام
الموسيقى والتي تكون منظرها في المساء رائع جدا',
        'price' => '250',
        'duration' => '8 ساعات',
        'group_size' => '1-10 أشخاص',
        'images' => [
            'assets/images/td1.png',
            'assets/images/td2.png',
            'assets/images/td1.png',
           'assets/images/td2.png'
        ]
    ],
    [
        'id' => 2,
        'title' => 'ﻣﻨﺎرة ﻛﻮاﻻﻟﻤﺒﻮر',
        'image' => 'assets/images/tour.png',
        'video' => 'https://www.youtube.com/embed/VIDEO_ID2',
        'description' => 'وصف الجولة الثانية...',
        'price' => '300',
        'duration' => '6 ساعات',
        'group_size' => '1-5 أشخاص',
        'images' => [
            'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?w=400'
        ]
    ],
    [
        'id' => 3,
        'title' => 'ﻛﻮارﻳﻮم ﻋﺎﻟﻢ اﻟﺒﺤﺎر',
        'image' => 'assets/images/tour.png',
        'video' => 'https://www.youtube.com/embed/VIDEO_ID2',
        'description' => 'وصف الجولة الثانية...',
        'price' => '300',
        'duration' => '6 ساعات',
        'group_size' => '1-5 أشخاص',
        'images' => [
            'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?w=400'
        ]
    ],
    [
        'id' => 4,
        'title' => 'ﺣﺪﻳﻘﺔ اﻟﻔﺮاﺷﺎت',
        'image' => 'assets/images/tour.png',
        'video' => 'https://www.youtube.com/embed/VIDEO_ID2',
        'description' => 'وصف الجولة الثانية...',
        'price' => '300',
        'duration' => '6 ساعات',
        'group_size' => '1-5 أشخاص',
        'images' => [
            'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?w=400'
        ]
    ],
 [    'id' => 5,
        'title' => 'ﺣﺪﻳﻘﺔ ﺑﺮداﻧﺎ',
        'image' => 'assets/images/tour.png',
        'video' => 'https://www.youtube.com/embed/VIDEO_ID2',
        'description' => 'وصف الجولة الثانية...',
        'price' => '300',
        'duration' => '6 ساعات',
        'group_size' => '1-5 أشخاص',
        'images' => [
            'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?w=400'
        ]
]
];

// نختار أول جولة لعرض بياناتها في الهيرو كافتراض
$mainTour = $tours[0]; 
?>
<section class="tour-details-hero-section">
    <div class="tour-details-hero-image">

    <img src="<?php echo $mainTour['image']; ?>" alt="<?php echo $mainTour['title']; ?>" class="tour-details-hero-img">
    </div>
</section>

<section class="hotel-content-section">
    <div class="container">
        <div class="content-with-sidebar hotel-layout">
            <aside class="sidebar hotel-sidebar">
                <div class="sidebar-section">
                    <div class="sidebar-title">فنادق مشابهه في كوالالمبور</div>
                    <ul class="sidebar-list">
                        <?php for ($i = 0; $i < 6; $i++): ?>
                        <li><a href="#">فنادق مشابهه في كوالالمبور</a></li>
                        <?php endfor; ?>
                    </ul>
                </div>
                
                <div class="sidebar-section">
                    <div class="sidebar-title2">مقالات قد تهمك مشابهه</div>
                    <ul class="sidebar-list">
                        <?php for ($i = 0; $i < 8; $i++): ?>
                        <li><a href="#">مقالات قد تهمك مشابهه</a></li>
                        <?php endfor; ?>
                    </ul>
                </div>
                
                <div class="sidebar-ad promotional-banner">
                    <img src="assets/images/ad.png" alt="Hello Summer">
                </div>
            </aside>

            <div class="main-content hotel-main-content">
                <div class="tabs-container hotel-tabs">
                    <div class="tabs-header">
                        <button class="tab-btn active" data-tab="rooms">تفاصيل الجولة السياحية</button>
                    </div>

                    <div class="tab-content active" id="rooms">
                        <?php foreach ($tours as $index => $tour): ?>
                        <div class="accordion-item <?php echo ($index == 0) ? 'active' : ''; ?>">
                            <div class="accordion-header">
                                <span class="accordion-title"><?php echo $tour['title']; ?></span>
                                <button class="accordion-toggle">
                                    <i class="fas fa-chevron-down toggle-icon"></i>
                                </button>
                            </div>
                            <div class="accordion-content" <?php echo ($index == 0) ? 'style="display: block;"' : ''; ?>>
                                
                                <?php if (!empty($tour['video'])): ?>
                                <div class="room-media">
                                    <div class="video-container">
                                        <div class="video-wrapper">
                                            <iframe src="<?php echo $tour['video']; ?>" frameborder="0" allowfullscreen></iframe>
                                        </div>
                                    </div>

                                    <?php if (!empty($tour['images'])): ?>
                                    <div class="carousel-wrapper">
                                        <div class="room-carousel">
                                            <?php foreach ($tour['images'] as $img): ?>
                                            <div class="carousel-item">
                                                <img src="<?php echo $img; ?>" alt="صورة الجولة">
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                        <button class="nav-btn prev-btn" onclick="scrollCarousel(this, 1)">&#10095;</button>
                                        <button class="nav-btn next-btn" onclick="scrollCarousel(this, -1)">&#10094;</button>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <?php endif; ?>
                                
                                <div class="tour-description">
                                    <span><?php echo mb_substr($tour['description'], 0, 740, "UTF-8"); ?></span>
                                    <span id="dots">...</span>
                                    <span id="moreText" style="display: none;">
                                        <?php echo mb_substr($tour['description'], 740, null, "UTF-8"); ?>
                                    </span>
                                    <a href="javascript:void(0);" onclick="toggleText()" id="readMoreBtn" class="read-more-link">للمزيد من التفاصيل </a>
                                </div>
                            </div> 
                        </div> 
                        <?php endforeach; ?>
                    </div> </div> <div class="related-articles">
                    <a class="related-title" href="#">اهم مدن ماليزيا</a><br>
                    <a class="related-title" href="#">دليل السياحة في ماليزيا</a><br>
                    <a class="related-title" href="#">كوالالمبور | سيلانحـــور</a><br>
                    <a class="related-title" href="#">بينانــــج | لنكــــاوي</a>
                </div>

            </div> </div> </div> </section>
<script>
function toggleText() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("moreText");
    var btnText = document.getElementById("readMoreBtn");

    if (dots.style.display === "none") {
        // حالة الإغلاق (عرض أقل)
        dots.style.display = "inline";
        btnText.innerHTML ="للمزيد من التفاصيل ";
        moreText.style.display = "none";
    } else {
        // حالة الفتح (اقرأ المزيد)
        dots.style.display = "none";
        btnText.innerHTML = "عرض أقل";
        moreText.style.display = "inline";
    }
}

</script>