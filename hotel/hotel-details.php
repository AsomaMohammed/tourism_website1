<?php
$page_title = "فندق جراند حياة في كوالالمبور";


// بيانات الفندق
$hotel = [
    'id' => 1,
    'name_ar' => 'فندق جراند حياة في كوالالمبور',
    'name_en' => 'Grand Hyatt Kuala Lumpur',
    'rating' => 5,
    'address' => '12, Jalan Pinang, Kuala Lumpur, 50450 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur',
    'brief' => 'يعتبر فندق جراند حياة من احدث الفنادق في كوالالمبور ويقع بالقرب من البرجين التوأم.الالمبور للمؤتمرات (كيه إل سي سي). ويتميز الفندق بمسبح في الهواء الطلق، ويمكن للضيوف الاستمتاع بوجبات الطعام في 3 مطاعم في الموقع أو تناول مشروب في البار الذي يطل على برجي بتروناس التوأم. كما تتوفر خدمة الواي فاي مجاناً في جميع أنحاء مكان الإقامة.الالمبور للمؤتمرات (كيه إل سي سي). ويتميز الفندق بمسبح في الهواء الطلق، ويمكن للضيوف الاستمتاع بوجبات الطعام في 3 مطاعم في الموقع أو تناول مشروب في البار الذي يطل على برجي بتروناس التوأم. كما تتوفر خدمة الواي فاي مجاناً في جميع أنحاء مكان الإقامة.',
'brief_en' => 'The Grand Hyatt is one of Kuala Lumpurs newest hotels and is located near the Petronas Twin Towers (KLCC). The hotel features an outdoor pool, and guests can enjoy meals at one of the three on-site restaurants or have a drink at the bar overlooking the Petronas Twin Towers. Free Wi-Fi is available throughout the property',
    'description' => 'يقع جراند الالمبور للمؤتمرات (كيه إل سي سي). ويتميز الفندق بمسبح في الهواء الطلق، ويمكن للضيوف الاستمتاع بوجبات الطعام في 3 مطاعم في الموقع أو تناول مشروب في البار الذي يطل على برجي بتروناس التوأم. كما تتوفر خدمة الواي فاي مجاناً في جميع أنحاء مكان الإقامة.حياة كوالالمبور الفاخر ذو الـ 5 نجوم بجوار مركز كو',
    'full-decription'=>'يقع مكان الإقامة على بعد 400 متر من مركز بافيليون للتسوق وعلى مسافة 500 متر من برجي بتروناس التوأم. ويقع على بعد 10 دقائق بالسيارة من الأوركسترا الفيلهارمونية الماليزية. بينما يقع مطار كوالالمبور الدولي على مسافة 68.6 كم. ويمكن ترتيب خدمات نقل المطار مقابل تكلفة إضافية.
يمكنك تناول العشاء في مطعم الفندق THIRTY8 المميز، والذي يقدم مجموعة مختارة من المأكولات الصينية واليابانية والغربية. ويتميز JP teres بمنطقة داخلية مريحة لتناول الطعام وتراس خارجي كبير مع بار جزيرة محاط بمناظر طبيعية خضراء مورقة. ويقدم Poolhouse إمكانية تناول الطعام طوال اليوم مع المأكولات المحلية والعالمية، وهو عبارة عن منزل زجاجي بجانب المسبح ويتميز بأجواء الهواء الطلق.

يمكن للضيوف التوجه إلى مكتب الاستقبال الذي يعمل على مدار الساعة لمساعدتهم في خدمات تحويل العملات وخدمة تخزين الأمتعة والكونسيرج. ويحتوي الفندق على مركز أعمال وغرف اجتماعات مجهزة بالكامل لتلبية الاحتياجات المهنية للضيوف. كما يتوفر مركز للياقة البدنية في الموقع يعمل على مدار الساعة. وبدلًا من ذلك، يمكن للضيوف الاستمتاع بمجموعة متنوعة من علاجات السبا في سبا Essa.',
    'images' => [
        'https://images.unsplash.com/photo-1566073771259-6a8506099945?w=600',
        'https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?w=300',
        'https://images.unsplash.com/photo-1582719508461-905c673771fd?w=300',
        'https://images.unsplash.com/photo-1564501049412-61c2a3083791?w=300',
        'https://images.unsplash.com/photo-1571896349842-33c89424de2d?w=300',
        'https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?w=300',
        'https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?w=300'
    ]
];

// أنواع الغرف
$rooms = [
    [
        'id' => 1,
        'name_ar' => 'غرفة ديلوكس جراند',
        'name_en' => 'Grand Deluxe',
        'size' => '٦٥م²',
        'description' => 'أسرّة مريحة وتتميز الغرفة بالمساحة الممتازة وبصالة صغيرة متصلة، وتضم سرائر منفصلة ويمكن طلب سرير كبير، واريكة جلوس ومكتب عمل وتلفزيون بشاشة مسطحة ومرافق لصنع الشاي والقهوة ويحتوي الحمام الداخلي على مرافق دش ومجفف الشعر ولوازم استحمام مجانية.',
        'amenities' => ['65 متر مربع','تكييف', 'حمام خاص','تلفزيون بشاشة مسطحة','واي فــاي', 'مسبح مع إطلالة', 'عــازل للصــوت','ميني بار'],
        'note' => 'لا يسمح بالتدخين في الغرفة',
        'video' => 'https://www.youtube.com/embed/lDM_yqYLSTo',
      
        'images' => [
            'https://images.unsplash.com/photo-1590490360182-c33d57733427?w=400',
            'https://images.unsplash.com/photo-1566665797739-1674de7a421a?w=400',
            'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?w=400',
            'https://images.unsplash.com/photo-1590490360182-c33d57733427?w=400',
            'https://images.unsplash.com/photo-1566665797739-1674de7a421a?w=400'
        ]
    ],
    [
        'id' => 2,
        'name_ar' => 'جناح جراند',
        'name_en' => 'Grand Club',
        'size' => '85 متر مربع',
        'description' => 'جناح فاخر مع غرفة معيشة منفصلة وإطلالة بانورامية على المدينة.',
        'amenities' => ['واي فــاي', 'تكييف', 'حمام خاص', 'تلفزيون بشاشة مسطحة', 'ميني بار', 'مسبح مع إطلالة'],
        'note' => '',
        'video' => 'https://www.youtube.com/embed/lDM_yqYLSTo',
        'images' => []
    ],
    [
        'id' => 3,
        'name_ar' => 'سويت جراند',
        'name_en' => 'Grand Suit',
        'size' => '120 متر مربع',
        'description' => 'سويت رئاسي مع جميع وسائل الراحة والرفاهية.',
        'amenities' => ['واي فــاي', 'تكييف', 'حمام خاص', 'تلفزيون بشاشة مسطحة', 'ميني بار'],
        'note' => '',
        'video' => '',
        'images' => []
    ],
    [
        'id' => 4,
        'name_ar' => 'غرفة ديلوكس جراند',
        'name_en' => 'Grand Deluxe',
        'size' => '65 متر مربع',
        'description' => 'أسرّة مريحة وتتميز الغرفة بالمساحة الممتازة وبصالة صغيرة متصلة، وتضم سرائر منفصلة ويمكن طلب سرير كبير، واريكة جلوس ومكتب عمل وتلفزيون بشاشة مسطحة ومرافق لصنع الشاي والقهوة ويحتوي الحمام الداخلي على مرافق دش ومجفف الشعر ولوازم استحمام مجانية.',
        'amenities' => ['65 متر مربع','تكييف', 'حمام خاص','تلفزيون بشاشة مسطحة','واي فــاي', 'مسبح مع إطلالة', 'عــازل للصــوت','ميني بار'],
        'note' => 'لا يسمح بالتدخين في الغرفة',
        'video' => 'https://www.youtube.com/embed/lDM_yqYLSTo',
        'images' => [
            'https://images.unsplash.com/photo-1590490360182-c33d57733427?w=400',
            'https://images.unsplash.com/photo-1566665797739-1674de7a421a?w=400',
            'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?w=400',
            'https://images.unsplash.com/photo-1590490360182-c33d57733427?w=400',
            'https://images.unsplash.com/photo-1566665797739-1674de7a421a?w=400'
        ]
    ]
    
];

// دالة لعرض النجوم
function renderStars($rating) {
    $stars = '';
    for ($i = 1; $i <= 5; $i++) {
        $filled = $i <= $rating ? 'filled' : '';
        $stars .= "<span class=\"star $filled\">★</span>";
    }
    return $stars;
}

?>

<!-- Page Title Section -->
<section class="page-title-section hotel-title-section">
    <h1 class="page-title-ar page-title-arabic"><?php echo $hotel['name_ar']; ?></h1>
    <h2 class="page-title-en"><?php echo $hotel['name_en']; ?></h2>
    
    <!-- Rating Stars -->
    <div class="hotel-stars">
        <?php echo renderStars($hotel['rating']); ?>
    </div>
    
    <!-- Location -->
    <div class="page-location">
        
       <img src="assets/images/location.png" class="imgio"><?php echo $hotel['address']; ?>
        <a href="#location-tab" class="show-map-link">Show on Map</a>
    </div>
    
    <!-- Brief Description -->
  

<p class="page-description hotel-brief" style="display: block;">
    <span class="content-ar">
        <span class="visible-text"><?php echo mb_substr($hotel['brief'], 0, 74, "UTF-8"); ?></span>
        <span class="dots">...</span>
        <span class="moreText" style="display: none;"><?php echo mb_substr($hotel['brief'], 74, null, "UTF-8"); ?></span>
        <a href="javascript:void(0);" onclick="toggleText(this)" class="readMoreBtn read-more-link">اقرأ المزيد</a>
    </span>

    <span class="content-en">
        <span class="visible-text"><?php echo mb_substr($hotel['brief_en'], 0, 64, "UTF-8"); ?></span>
        <span class="dots">...</span>
        <span class="moreText" style="display: none;"><?php echo mb_substr($hotel['brief_en'], 64, null, "UTF-8"); ?></span>
        <a href="javascript:void(0);" onclick="toggleText(this)" class="readMoreBtn read-more-link1">Read more</a>
    </span>
</p>
</section>

<!-- Image Gallery Section -->
<section class="hotel-gallery-section">
    <div class="container">
        <div class="hotel-image-gallery">
            <!-- Main Featured Image -->
            <div class="gallery-featured">
                <img src="<?php echo $hotel['images'][0]; ?>" alt="<?php echo $hotel['name_ar']; ?>" id="mainGalleryImage">
            </div>
            
            <!-- Side Images Grid -->
            <div class="gallery-side-grid">
                <?php for ($i = 1; $i < min(7, count($hotel['images'])); $i++): ?>
                <div class="gallery-side-item <?php echo ($i == 6) ? 'gallery-trigger' : ''; ?>" onclick="changeMainImage('<?php echo $hotel['images'][$i]; ?>')">
                    <img src="<?php echo $hotel['images'][$i]; ?>" alt="صورة <?php echo $i; ?>">
                    <?php if ($i == 6): ?>
                    <div class="gallery-overlay">
                        <span class="gallery-icon">📷</span>
                        <span class="gallery-text">شاهد كل الصور</span>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>

<!-- Main Content with Sidebar -->
<section class="hotel-content-section">
    <div class="container">
        <div class="content-with-sidebar hotel-layout">
            <!-- Sidebar -->
            <aside class="sidebar hotel-sidebar">
                <!-- Similar Hotels -->
                <div class="sidebar-section">
                    <div class="sidebar-title" data-i18n="hotels_s">فنادق مشابهه في كوالالمبور</div>
                    <ul class="sidebar-list">
                        <?php for ($i = 0; $i < 6; $i++): ?>
                        <li><a href="#" data-i18n="hotels_s">فنادق مشابهه في كوالالمبور</a></li>
                        <?php endfor; ?>
                    </ul>
                </div>
                
                <!-- Related Articles -->
                <div class="sidebar-section">
                    <div class="sidebar-title2" data-i18n="Articles_s">مقالات قد تهمك مشابهه</div>
                    <ul class="sidebar-list">
                        <?php for ($i = 0; $i < 8; $i++): ?>
                        <li><a href="#" data-i18n="Articles_s">مقالات قد تهمك مشابهه</a></li>
                        <?php endfor; ?>
                    </ul>
                </div>
                
                <!-- Promotional Banner -->
                <div class="sidebar-ad promotional-banner">
                    <img src="assets/images/ad.png" alt="Hello Summer">
                  
                </div>
            </aside>
            
            <!-- Main Content -->
            <div class="main-content hotel-main-content">
                <!-- Tabs System -->
                <div class="tabs-container hotel-tabs">
                    <div class="tabs-header">
                        
                        <button class="tab-btn active" data-tab="rooms" data-i18n="t-room">أنواع الغرف</button>
                        <button class="tab-btn" data-tab="about" data-i18n="hotel-d">نبذة عن الفندق</button>
                        <button class="tab-btn " data-tab="location-tab" data-i18n="loc">الموقع</button>
                        <button class="tab-btn special-btn" data-tab="reviews" data-i18n="reviews">التقييم</button>
                    </div>
                    

                    
                    
                    <!-- Tab Content: Rooms -->
                    <div class="tab-content  " id="rooms">
                        <div class="accordion-container">
                            <?php foreach ($rooms as $index => $room): ?>
                            <div class="accordion-item <?php echo ($index == 0) ? 'active' : ''; ?>">
                                <div class="accordion-header">
                                    <span class="accordion-title"><?php echo $room['name_ar']; ?> - <?php echo $room['name_en']; ?></span>
                                    <button class="accordion-toggle">
                                        <i class="fas fa-chevron-down toggle-icon"></i>
                                    </button>
                                </div>
                                <div class="accordion-content" <?php echo ($index == 0) ? 'style="display: block;"' : ''; ?>>
                                    <!-- Room Video and Gallery -->
                                    <?php if (!empty($room['video'])): ?>
                                    <div class="room-media">
                                        <div class="video-container">
                                            <div class="video-header">
                                                <span class="video-title"><?php echo $hotel['name_en']; ?> [GOFT&T]</span>
                                                <div class="video-actions">
                                                    <button class="video-action-btn" title="Watch later">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                            <circle cx="12" cy="12" r="10"></circle>
                                                            <polyline points="12 6 12 12 16 14"></polyline>
                                                        </svg>
                                                        <span>Watch later</span>
                                                    </button>
                                                    <button class="video-action-btn" title="Share">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                            <circle cx="18" cy="5" r="3"></circle>
                                                            <circle cx="6" cy="12" r="3"></circle>
                                                            <circle cx="18" cy="19" r="3"></circle>
                                                            <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                                            <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                                        </svg>
                                                        <span>Share</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="video-wrapper">
                                              
                                                <iframe id="player" src="<?php echo $room['video']; ?>" frameborder="0" allowfullscreen></iframe>
                                               
                                               <button class="video-nav prev" onclick="rewind(10)">⏭</button>
        <button class="video-nav next" onclick="forward(10)">⏮</button>
                                            </div>
                                            
                                        </div>
                                        
                                        <!-- Room Images Carousel -->                                      

                                       <?php if (!empty($room['images'])): ?>
                                        <div class="carousel-wrapper" >
                                        <div class="room-carousel">
                                               <?php foreach ($room['images'] as $img): ?>
                                            <div class="carousel-item">
                                                <img src="<?php echo $img; ?>" alt="صورة الغرفة">
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                     
                                        <button class="nav-btn prev-btn" onclick="scrollCarousel(this, 1)">&#10095;</button>
                                        <button class="nav-btn next-btn" onclick="scrollCarousel(this, -1)">&#10094;</button>
                                   </div>
                                        <?php endif; ?>
                                    </div>
                                    <?php endif; ?>
                                   

                               
                                    <!-- Room Details Section -->
                                    <div class="room-details-section">
                                        <div class="room-details-header">
                                            <span class="ribbon" data-i18n="room-de" >تفاصيل عن الغرفة</span>
                                        </div>
                                        <div class="nearby-wrapper">
                                        
                                        <!-- Amenities Icons -->
                                        <div class="amenities-grid">
    <?php foreach ($room['amenities'] as $amenity): ?>
    <div class="amenity-item">
       
            <?php
            // استبدل الأسماء بأسماء ملفات الصور الموجودة في مجلدك
            $icons = [
                '65 متر مربع'=> 'space.png',
                'تكييف' => 'fan.png',
                'حمام خاص' => 'shower.png',
                'واي فــاي' => 'wifi.png',
                'تلفزيون بشاشة مسطحة' => 'tv.png',
                'مسبح مع إطلالة' => 'pool.png',
                'عــازل للصــوت' => 'sound.png',
                'ميني بار' => 'bar.png'
                
            ];

            // التحقق مما إذا كانت الأيقونة موجودة، وإلا نضع أيقونة افتراضية
            $icon_file = isset($icons[$amenity]) ? $icons[$amenity] : 'default.png';
            ?>
            
            <img src="assets/images/<?php echo $icon_file; ?>" alt="<?php echo $amenity; ?>" class="amenity-img">
        
        <span class="amenity-text"><?php echo $amenity; ?></span>
    </div>
    <?php endforeach; ?>
</div>

                                        
                                        <!-- Room Description -->
                                        <div class="room-description">
                                            <p class="room-size">مساحة الغرفة <?php echo $room['size']; ?></p>
                                            <p class="room-text"><?php echo $room['description']; ?></p>
                                            <?php if (!empty($room['note'])): ?>
                                            <p class="room-note">* ملاحظة: <?php echo $room['note']; ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <?php endforeach; ?>
                            
                            <!-- Additional room items -->
                            <?php for ($i = 0; $i < 3; $i++): ?>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <span class="accordion-title">سويت جراند - Grand Suit</span>
                                    <button class="accordion-toggle">
                                         <i class="fas fa-chevron-down toggle-icon"></i>
                                    </button>
                                </div>
                                <div class="accordion-content">
                                    <p>محتوى الغرفة...</p>
                                </div>
                            </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                    
                    <!-- Tab Content: About -->
                     
                    <div class="tab-content" id="about">
                    


                 
                        <div class="accordion-container">
                        
                            <div class="accordion-item ">
                                <div class="accordion-header">
                                    <span class="accordion-title"><?php echo $hotel['name_ar']; ?> (<?php echo $hotel['name_en']; ?>)</span>
                                    <button class="accordion-toggle">
                                          <i class="fas fa-chevron-down toggle-icon"></i>
                                    </button>
                                </div>
                       
                                
                            
                         
                        <div class="about-hotel-content">
                           
                            
                            <!-- Hotel Hero Image -->
                            <div class="about-hero-image">
                                <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?w=800" alt="<?php echo $hotel['name_ar']; ?>">
                            </div>
                            
                            <!-- About Section with Ribbon -->
                            <div class="about-section">
                                
                                <div class="section-ribbon">
                            <!--ribbon-text تم تغيير الكلاس-->    <span class="ribbon" data-i18n="hotel-d">نبـذة عن الفنـــدق</span>
                                </div>
                                <div class="nearby-wrapper">
                                <div class="about-text-content">
                                    <p><?php echo $hotel['description']; ?></p>
                                    <p>يمكن للضيوف الاستمتاع بإطلالات على الحديقة والمدينة من الغرفة من خلال النوافذ من الأرض حتى السقف. وتتوفر أيضاً آلة صنع القهوة وتلفزيون بشاشة مسطحة 42 بوصة. كما تشتمل الحمامات الداخلية على حوض استحمام ودش بمياه ساخنة على مدار الساعة.</p>
                                    <p><?php echo $hotel['full-decription']; ?></p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                            </div>
                            </div>
                    
                    <!-- Tab Content: Location -->
                    <div class="tab-content active" id="location-tab">

                      <div class="accordion-item ">
                                <div class="accordion-header">
                                    <span class="accordion-title"><?php echo $hotel['name_ar']; ?> (<?php echo $hotel['name_en']; ?>)</span>
                                    <button class="accordion-toggle">
                                         <i class="fas fa-chevron-down toggle-icon"></i>
                                    </button>
                                </div>
                            </div>

                            
                        <div class="location-content">
                            
                            <!-- Location Header with Ribbon -->
                            
                            <!-- Map -->
                            <div class="map-container full-width">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.7919722039!2d101.71168931475882!3d3.1516373977044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc362b7c1e76c7%3A0x4c0c4f4e4e4e4e4e!2sGrand%20Hyatt%20Kuala%20Lumpur!5e0!3m2!1sen!2smy!4v1620000000000!5m2!1sen!2smy" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                            
                            <!-- Nearby Attractions -->
                            <div class="nearby-section">
                                <div class="nearby-header">
                                    <span class="ribbon" data-i18n="top_att">أفضل المعالم السياحية</span>
                                </div>
                                <div class="nearby-wrapper">
                                <div class="nearby-grid">
                                    <div class="nearby-item">
                                        <span class="nearby-name">مركز مدينة كوالا لمبور كي ال سي سي</span>
                                        <span class="nearby-distance">0.3 كلم</span>
                                    </div>
                                    <div class="nearby-item">
                                        <span class="nearby-name">برجا بتروناس التوأم</span>
                                        <span class="nearby-distance">0.5 كلم</span>
                                    </div>
                                    <div class="nearby-item">
                                        <span class="nearby-name">برج منارة كي ال</span>
                                        <span class="nearby-distance">1 كلم</span>
                                    </div>
                                    <div class="nearby-item">
                                        <span class="nearby-name">شارع بينتانغ</span>
                                        <span class="nearby-distance">2 كلم</span>
                                    </div>
                                    <div class="nearby-item">
                                        <span class="nearby-name">حطة الترام المعلق بوكيت بينتانغ</span>
                                        <span class="nearby-distance">0.9 كلم</span>
                                    </div>
                                </div>
                                </div>
                            </div>
                            
                            <!-- Nearby Places Categories -->
                            <div class="nearby-categories">
                                <div class="category-header">
                                    <span class="ribbon" data-i18n="NEARBY">الاماكن القريبة</span>
                                </div>
                                <div class="nearby-wrapper">

                                <div class="category-tabs">

                                   <div class="category-item">
                <input type="radio" name="nearby" id="cat1" class="category-input" checked>
                <label for="cat1" class="category-label">
                    <span class="text">مــولات</span>
                    <span class="radio-circle"></span>
                </label>
            </div>
                                                      <div class="category-item">
                <input type="radio" name="nearby" id="cat2" class="category-input" checked>
                <label for="cat2" class="category-label">
                    <span class="text">مطاعم</span>
                    <span class="radio-circle"></span>
                </label>
            </div>
                                                       <div class="category-item">
                <input type="radio" name="nearby" id="cat3" class="category-input" checked>
                <label for="cat3" class="category-label">
                    <span class="text">آلة صرف</span>
                    <span class="radio-circle"></span>
                </label>
            </div>
                                                       <div class="category-item">
                <input type="radio" name="nearby" id="cat4" class="category-input" checked>
                <label for="cat4" class="category-label">
                    <span class="text">حدائــق</span>
                    <span class="radio-circle"></span>
                </label>
            </div>
                                                      <div class="category-item">
                <input type="radio" name="nearby" id="cat5" class="category-input" checked>
                <label for="cat5" class="category-label">
                    <span class="text">مساجد</span>
                    <span class="radio-circle"></span>
                </label>
            </div>
                                                     <div class="category-item">
                <input type="radio" name="nearby" id="cat6" class="category-input" checked>
                <label for="cat6" class="category-label">
                    <span class="text">سوبر ماركت</span>
                    <span class="radio-circle"></span>
                </label>
            </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Tab Content: Reviews -->
                    <div class="tab-content" id="reviews">
                     
                        <div class="reviews-content">
                               <div class="nearby-wrapper1">
                            <div class="review-form-section">
                                <div class="review-header">
                                    <span class="ribbonop" ></span><!--رأيك يهمنا-->
                                </div>
                                
                                <form class="review-form">
                                    <div class="form-group">
                                        <input type="text" class="form-input" data-i18n-placeholder="reviews.name_placeholder" placeholder="ادخل اسمك">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-textarea" data-i18n-placeholder="reviews.comment_placeholder" placeholder="شاركنا تعليقك" rows="5"></textarea>
                                    </div>
                                  <button type="submit" class="submit-btn dynamic-btn" data-i18n="reviews.submit">
    </button>
  </form>
                               
                            </div>
                        </div>
                                </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Back to Hotels Link -->


<script>
function toggleText(btn) {
    const container = btn.parentElement;
    const moreText = container.querySelector(".moreText");
    const dots = container.querySelector(".dots");

    if (moreText.style.display === "none") {
        moreText.style.display = "inline"; // التأكد أنها inline للبقاء في نفس السطر
        dots.style.display = "none";
        btn.innerHTML = (document.documentElement.dir === "ltr") ? "Read Less" : "عرض أقل";
    } else {
        moreText.style.display = "none";
        dots.style.display = "inline";
        btn.innerHTML = (document.documentElement.dir === "ltr") ? "Read more" : "اقرأ المزيد";
    }
}






    var player;

    // هذه الوظيفة يتم استدعاؤها تلقائياً عند تحميل مكتبة يوتيوب
    function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
            events: {
                'onReady': onPlayerReady
            }
        });
    }

    function onPlayerReady(event) {
        console.log("مشغل يوتيوب جاهز للتحكم!");
    }

    // تقديم الفيديو 10 ثواني
    function seekForward() {
        if (player && player.getCurrentTime) {
            var currentTime = player.getCurrentTime();
            player.seekTo(currentTime + 10, true);
        }
    }

    // تأخير الفيديو 10 ثواني
    function seekBackward() {
        if (player && player.getCurrentTime) {
            var currentTime = player.getCurrentTime();
            player.seekTo(currentTime - 10, true);
        }
    }

    // تحميل مكتبة يوتيوب API
    var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
</script>