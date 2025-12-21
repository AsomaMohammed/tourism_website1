<?php
/**
 * Area Details Page - صفحة تفاصيل المنطقة السياحية
 * Displays detailed information about a tourist area
 */

$pageTitle = "برج التوأم كوالالمبور ( البرجين التوأم )";

// Get area ID from URL
$areaId = isset($_GET['id']) ? (int)$_GET['id'] : 1;

// Sample area data (in real application, this would come from database)
$areaData = [
    'id' => 1,
    'name_ar' => 'برج التوأم كوالالمبور ( البرجين التوأم )',
    'name_en' => 'Petronas Towers',
    'location' => 'Petronas Twin Tower, Lower Ground, Kuala Lumpur City Centre, 50088 Kuala Lumpur',
    'short_description' => 'البرجين التوأمين في ماليزيا أو برجا بتروناس التوأم Petronas Twin Towers يقعان في قلب مدينة ...',
    'full_description' => 'البرجين التوأمين في ماليزيا أو برجا بتروناس التوأم Petronas Twin Towers يقعان في قلب مدينة كوالالمبور في ماليزيا حيث كانا يعتبران أطول برجين في العالم منذ عام ١٩٩٨ حتى عام ٢٠٠٤. برجا ماليزيا يعرفان أيضاً باسم منارة بتروناس وذلك نسبة لاسم شركة النفط التي طلبت بناء هذين البرجين التوأمين واللذين يعتبران من أغرب وأكبر الأعمال الهندسية في العالم حيث يبلغ ارتفاع البرجين ٣٧٥ متر إلى الطابق العلوي وارتفاعهما مع الهوائي ٤٥٢ متر. ويعتبر البرجين التوأمين من أهم أماكن السياحة في ماليزيا.',
    'visiting_hours' => 'البرج متاح للزيارة كافة أيام الأسبوع ما عدا يوم الاثنين وأيام العطل الرسمية من الساعة ٩:٠٠ صباحاً حتى الساعة ٢١:٠٠ مساءً.',
    'images' => [
        'images/petronas-1.jpg',
        'images/petronas-2.jpg',
        'images/petronas-3.jpg',
        'images/petronas-4.jpg',
        'images/petronas-5.jpg',
        'images/petronas-6.jpg'
    ],
    'videos' => [
        [
            'title' => 'برج التوأم كوالالمبور ( البرجين التوأم ) - Petronas Towers',
            'subtitle' => 'برجا بتروناس التوأم',
            'thumbnail' => 'images/video-thumb-1.jpg',
            'url' => 'https://www.youtube.com/embed/example1'
        ],
        [
            'title' => 'جولة في برج بتروناس',
            'subtitle' => 'مشاهد من الداخل',
            'thumbnail' => 'images/video-thumb-2.jpg',
            'url' => 'https://www.youtube.com/embed/example2'
        ]
    ],
    'map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.7925!2d101.7117!3d3.1578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc37d12d669c1f%3A0x9e3afdd17c8a9056!2sPetronas%20Twin%20Towers!5e0!3m2!1sen!2smy!4v1234567890',
    'related_articles' => [
        '١٠ من أفضل فنادق كوالالمبور الموصى بها',
        'فنادق كوالالمبور، دليل السكن في كوالالمبور',
        'أفضل ٨ أماكن سياحية في كوالالمبور',
        'أفضل ٦ شقق فندقية في كوالالمبور مجربة',
        'أفضل ١٠ أماكن تسوق في كوالالمبور',
        'أفضل ١٠ من مطاعم كوالالمبور الموصى بها'
    ],
    'similar_hotels' => [
        'فنادق مشابهه في كوالالمبور',
        'فنادق مشابهه في كوالالمبور',
        'فنادق مشابهه في كوالالمبور',
        'فنادق مشابهه في كوالالمبور',
        'فنادق مشابهه في كوالالمبور',
        'فنادق مشابهه في كوالالمبور',
        'فنادق مشابهه في كوالالمبور',
        'فنادق مشابهه في كوالالمبور',
        'فنادق مشابهه في كوالالمبور',
        'فنادق مشابهه في كوالالمبور',
        'فنادق مشابهه في كوالالمبور',
        'فنادق مشابهه في كوالالمبور',
        'فنادق مشابهه في كوالالمبور',
        
    ],
    'similar_articles' => [
        'مقالات قد تهمك مشابهه',
        'مقالات قد تهمك مشابهه',
        'مقالات قد تهمك مشابهه',
        'مقالات قد تهمك مشابهه',
        'مقالات قد تهمك مشابهه',
        'مقالات قد تهمك مشابهه',
        'مقالات قد تهمك مشابهه',
        'مقالات قد تهمك مشابهه',
        'مقالات قد تهمك مشابهه',
        'مقالات قد تهمك مشابهه',
    ]
];


?>

<div class="details-page">
    <!-- Page Title Section -->
    <section class="page-title-section">
        <div class="container">
            <h1 class="page-title-ar"><?php echo $areaData['name_ar']; ?></h1>
            <h2 class="page-title-en"><?php echo $areaData['name_en']; ?></h2>
            <p class="page-location">
                <i class="fas fa-map-marker-alt"></i>
                <?php echo $areaData['location']; ?>
                <a href="#location" style="color: #5966AE;">Show on Map</a>
            </p>
            <p class="page-description"><?php echo $areaData['short_description']; ?> <a href="#" style="color: #3498db;">اقرأ المزيد</a></p>
        </div>
    </section>
    
    <!-- Image Grid -->
    <section class="container">
        <div class="image-grid">
            <div class="image-grid-main">
                <img src="<?php echo $areaData['images'][0]; ?>" 
                     alt="<?php echo $areaData['name_ar']; ?>"
                     onerror="this.src='https://images.unsplash.com/photo-1508804185872-d7badad00f7d?w=600&h=400&fit=crop'">
            </div>
            <div class="image-grid-side">
                <?php for ($i = 1; $i <= 6; $i++): ?>
                <div class="image-grid-item <?php echo $i === 6 ? 'more-images' : ''; ?>">
                    <img src="<?php echo isset($areaData['images'][$i]) ? $areaData['images'][$i] : $areaData['images'][0]; ?>" 
                         alt="صورة <?php echo $i; ?>"
                         onerror="this.src='https://images.unsplash.com/photo-1508804185872-d7badad00f7d?w=200&h=150&fit=crop'">
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>
    
    <div class="content-with-sidebar">
    
    <main class="main-content">
        <div class="details-tabs tabs-container">
            <div class="tabs-header">
                <button class="tab-btn active" data-tab="videos">فيديو و صور</button>
                <button class="tab-btn" data-tab="details">تفاصيل عن المناطق</button>
                <button class="tab-btn" data-tab="location">الموقع</button>
            </div>
            
            <div id="videos" class="tab-content active">
                <div class="video-slider-container">
                    <div class="video-slider">
                        <?php foreach ($areaData['videos'] as $index => $video): ?>
                        <div class="video-slide">
                            <img src="<?php echo $video['thumbnail']; ?>" alt="<?php echo $video['title']; ?>" onerror="this.src='https://images.unsplash.com/photo-1508804185872-d7badad00f7d?w=800&h=400&fit=crop'">
                            <div class="video-overlay">
                                <h3 class="video-title"><?php echo $video['title']; ?></h3>
                                <p class="video-subtitle"><?php echo $video['subtitle']; ?></p>
                            </div>
                            <div class="video-logo">
                                <i class="fas fa-globe"></i> جراند أوشن للسياحة والسفر
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <button class="slider-nav prev"><i class="fas fa-chevron-right"></i></button>
                    <button class="slider-nav next"><i class="fas fa-chevron-left"></i></button>
                    <div class="slider-dots"></div>
                </div>
                
                <div class="gallery-thumbnails-wrapper">
                    <button class="thumbnail-nav prev"><i class="fas fa-chevron-right"></i></button>
                    <div class="gallery-thumbnails">
                        <?php foreach ($areaData['images'] as $index => $image): ?>
                        <div class="thumbnail <?php echo $index === 0 ? 'active' : ''; ?>">
                            <img src="<?php echo $image; ?>" alt="صورة <?php echo $index + 1; ?>" onerror="this.src='https://images.unsplash.com/photo-1508804185872-d7badad00f7d?w=100&h=70&fit=crop'">
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <button class="thumbnail-nav next"><i class="fas fa-chevron-left"></i></button>
                </div>
            </div>
            
            <div id="details" class="tab-content">
                <div class="content-section">
                    <h3 class="section-title2">نبذة عن برجا بتروناس التوأم</h3>
                    <p class="content-text"><?php echo $areaData['full_description']; ?></p>
                    <div class="visiting-hours">
                        <h4><i class="fas fa-clock"></i> أوقات زيارة إلى البرجين</h4>
                        <p><?php echo $areaData['visiting_hours']; ?></p>
                    </div>
                </div>
            </div>
            
            <div id="location" class="tab-content">
                <div class="location-section">
                    <h3 class="location-title"><i class="fas fa-map-marker-alt"></i> الموقع</h3>
                    <div class="map-container">
                        <div class="map-info">
                            <p><strong>Petronas Towers</strong></p>
                            <p>Concourse Level, Petronas Twin Tower, Lower Ground, Kuala Lumpur City Centre, 50088 Kuala Lumpur, Malaysia</p>
                            <p><i class="fas fa-star" style="color: #ffc107;"></i> 4.7 ★★★★★ 87,760+ reviews</p>
                            <p><a href="#" style="color: #3498db;">View larger map</a></p>
                        </div>
                        <div class="map-frame">
                            <iframe src="<?php echo $areaData['map_embed']; ?>" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="related-articles">
            <h3 class="related-title">مقالات قد تهمك أيضاً في كوالالمبور:</h3>
            <div class="related-list">
                <?php foreach ($areaData['related_articles'] as $article): ?>
                <a href="#">• <?php echo $article; ?></a>
                <?php endforeach; ?>
            </div>
        </div>
        
    </main>

    <aside class="sidebar">
        <div class="sidebar-section">
            <h3 class="sidebar-title">فنادق مشابهه في كوالالمبور</h3>
            <ul class="sidebar-list">
                <?php foreach ($areaData['similar_hotels'] as $hotel): ?>
                <li><a href="#"><?php echo $hotel; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="sidebar-section">
            <h3 class="sidebar-title">مقالات قد تهمك مشابهه</h3>
            <ul class="sidebar-list">
                <?php foreach ($areaData['similar_articles'] as $article): ?>
                <li><a href="#"><?php echo $article; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="sidebar-ad">
            <img src="images/summer-ad.jpg" alt="عروض الصيف" onerror="this.style.display='none'">
        </div>
    </aside>

</div>
            
          
        </main>
    </div>
</div>


