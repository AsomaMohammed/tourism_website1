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
    'short_description' => 'نبذة عن برجـا بتروناس التــوأم    ',
    'full_description' => 'البرجين التوأمين في ماليزيا أو برجا بتروناس التوأم Petronas Twin Towers يقعان في قلب مدينة كوالالمبور في ماليزيا حيث كانا يعتبران أطول برجين في العالم منذ عام ١٩٩٨ حتى عام ٢٠٠٤.
    </br> برجا ماليزيا يعرفان أيضاً باسم منارة بتروناس وذلك نسبة لاسم شركة النفط التي طلبت بناء هذين البرجين التوأمين واللذين يعتبران من أغرب وأكبر الأعمال الهندسية في العالم حيث يبلغ ارتفاع البرجين ٣٧٥ متر إلى الطابق العلوي وارتفاعهما مع الهوائي ٤٥٢ متر. ويعتبر البرجين التوأمين من أهم أماكن السياحة في ماليزيا.',
    'visiting_hours' => 'البرج متاح للزيارة كافة أيام الأسبوع ما عدا يوم الاثنين وأيام العطل الرسمية من الساعة ٩:٠٠ صباحاً حتى الساعة ٢١:٠٠ مساءً.',
   'videos' =>'https://www.youtube.com/embed/X81s1HdSLpY?si=49xIdGo_CutTRAah',
    'map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.7925!2d101.7117!3d3.1578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc37d12d669c1f%3A0x9e3afdd17c8a9056!2sPetronas%20Twin%20Towers!5e0!3m2!1sen!2smy!4v1234567890',
    'visiting_time'=>'البرج متاح للزيارة كافة أيام الاسبوع ماعدا الاثنين وأيام العطل الرسمية من الساعة 9:00 صباحًا حتى الساعة 21:00 مساءً.',
    'images' => [
        'https://images.unsplash.com/photo-1508804185872-d7badad00f7d?w=600&h=400&fit=crop',
        'https://images.unsplash.com/photo-1528605248644-14dd04022da1?w=200&h=150&fit=crop',
        'https://images.unsplash.com/photo-1528605248644-14dd04022da1?w=200&h=150&fit=crop',
        'https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?w=200&h=150&fit=crop',
        'https://images.unsplash.com/photo-1512453979798-5ea266f8880c?w=200&h=150&fit=crop',
       'https://images.unsplash.com/photo-1508804185872-d7badad00f7d?w=200&h=150&fit=crop',
       'https://images.unsplash.com/photo-1528605248644-14dd04022da1?w=200&h=150&fit=crop'
          ],
            'related_articles' => [
        '١٠ من أفضل فنادق كوالالمبور الموصى بها',
        'فنادق كوالالمبور، دليل السكن في كوالالمبور',
        'أفضل ٨ أماكن سياحية في كوالالمبور',
        'أفضل ٦ شقق فندقية في كوالالمبور مجربة',
        'أفضل ١٠ أماكن تسوق في كوالالمبور',
        'أفضل ١٠ من مطاعم كوالالمبور الموصى بها'
    ]
          ];
  
   
     

?>
    <!-- Page Title Section -->
  <section class="page-title-section hotel-title-section">
    
            <h1 class="page-title-ar"><?php echo $areaData['name_ar']; ?></h1>
            <h2 class="page-title-en"><?php echo $areaData['name_en']; ?></h2>

            <p class="page-location">
               <img src="assets/images/location.png" class="imgio"><?php echo $areaData['location']; ?>
                <a href="#location-tab" class="show-map-link">Show on Map</a>
            </p>
           
    
 <p class="page-description hotel-brief">
    <span><?php echo mb_substr($areaData['full_description'], 0, 74, "UTF-8"); ?></span>
    
    <span id="dots">...</span>
    <span id="moreText" style="display: none;">
        <?php echo mb_substr($areaData['full_description'], 74, null, "UTF-8"); ?>
    </span>

    <a href="javascript:void(0);" onclick="toggleText()" id="readMoreBtn" class="read-more-link">اقرأ المزيد</a>
</p>
</section>
    
    <!-- Image Grid -->
   <section class="hotel-gallery-section">
    <div class="container">
        <div class="hotel-image-gallery">
            <!-- Main Featured Image -->
            <div class="gallery-featured">
                <img src="<?php echo $areaData['images'][0]; ?>" alt="<?php echo $areaData['name_ar']; ?>" id="mainGalleryImage">
            </div>
            
            <!-- Side Images Grid -->
            <div class="gallery-side-grid">
                <?php for ($i = 1; $i < min(7, count($areaData['images'])); $i++): ?>
                <div class="gallery-side-item <?php echo ($i == 6) ? 'gallery-trigger' : ''; ?>" onclick="changeMainImage('<?php echo $areaData['images'][$i]; ?>')">
                    <img src="<?php echo $areaData['images'][$i]; ?>" alt="صورة <?php echo $i; ?>">
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
   <section class="hotel-content-section">
    <div class="container"> 
     <div class="content-with-sidebar hotel-layout">
     <aside class="sidebar hotel-sidebar">
                <!-- Similar Hotels -->
                <div class="sidebar-section">
                    <div class="sidebar-title">فنادق مشابهه في كوالالمبور</div>
                    <ul class="sidebar-list">
                        <?php for ($i = 0; $i < 6; $i++): ?>
                        <li><a href="#">فنادق مشابهه في كوالالمبور</a></li>
                        <?php endfor; ?>
                    </ul>
                </div>
                
                <!-- Related Articles -->
                <div class="sidebar-section">
                    <div class="sidebar-title2">مقالات قد تهمك مشابهه</div>
                    <ul class="sidebar-list">
                        <?php for ($i = 0; $i < 8; $i++): ?>
                        <li><a href="#">مقالات قد تهمك مشابهه</a></li>
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
                <button  ></button>
                <button class="tab-btn active" data-tab="videos" data-i18n="videosphotos">فيديو و صور</button>
                 <button class="tab-btn" data-tab="details" data-i18n="descrip">تفاصيل عن المناطــق</button>
                 <button class="tab-btn" data-tab="location" data-i18n="loc">الموقــع</button>
            </div>
          
                    <!-- Tab Content: image and video -->
                    <div class="tab-content active" id="videos">
                        <div class="accordion-container">
                         
                            <div class="accordion-item <?php echo ($index == 0) ? 'active' : ''; ?>">
                                <div class="accordion-header">
                                    <span class="accordion-title"><?php echo $areaData['name_ar']; ?> - <?php echo $areaData['name_en']; ?></span>
                                    <button class="accordion-toggle">
                                        <i class="fas fa-chevron-down toggle-icon"></i>
                                    </button>
                                </div>
                              <!--  Video and Gallery -->
                                    
                                            <div class="video-wrapper">
                                              
                                                <iframe id="player" src="<?php echo $areaData['videos']; ?>" frameborder="0" allowfullscreen></iframe>
                                               
                                               <button class="video-nav prev" onclick="seekBackward()">⏭</button>
        <button class="video-nav next" onclick="seekForward()">⏮</button>
                                            </div>
                                            
                                        </div>
                                        
                                        <!--  Images Carousel -->                                      

                                       <?php if (!empty($areaData['images'])): ?>
                                        <div class="carousel-wrapper" >
                                        <div class="room-carousel">
                                               <?php foreach ($areaData['images'] as $img): ?>
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
                             
     
                                    </div>
                          
                    
                    <!-- Tab Content: About -->
                    <div class="tab-content " id="details">
                      <div class="accordion-container">
                            <div class="accordion-item ">
                                <div class="accordion-header">
                                    <span class="accordion-title"><?php echo $areaData['name_ar']; ?> (<?php echo $areaData['name_en']; ?>)</span>
                                    <button class="accordion-toggle">
                                          <i class="fas fa-chevron-down toggle-icon"></i>
                                    </button>
                                </div>
                       
                        <div class="about-hotel-content">
                                   
                            <!-- About Section with Ribbon -->
                            <div class="about-section">
                                
                                <div class="section-ribbon">
                                    <span class="ribbon-text"><?php echo $areaData['short_description']; ?>  </span>
                                </div>
                                
                                <div class="about-text-content">
                                    <p><?php echo $areaData['full_description']; ?></p>
                                    <p class="vtime" >أوقات زيارة الى البرجين </p>
                                    <p><?php echo $areaData['visiting_time']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                            </div>
                            </div>
                    
                    <!-- Tab Content: Location -->
                    <div class="tab-content " id="location">
                      <div class="accordion-item ">
                                <div class="accordion-header">
                                    <span class="accordion-title"><?php echo $areaData['name_ar']; ?> (<?php echo $areaData['name_en']; ?>)</span>
                                    <button class="accordion-toggle">
                                         <i class="fas fa-chevron-down toggle-icon"></i>
                                    </button>
                                </div>
                            </div>

                            
                        <div class="location-content">
                            
                            <!-- Location Header with Ribbon -->
                            
                            <!-- Map -->
                            <div class="map-container full-width">
                                <iframe src="<?php echo $areaData['map_embed']; ?>" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                            
                           
                            
                               </div>
                                </div>
                            </div>
                              <div class="related-articles">
            <a class="related-title">مقالات قد تهمك أيضاً في كوالالمبور:</a>
            <div class="related-list">
                <?php foreach ($areaData['related_articles'] as $article): ?>
                <a href="#"> <?php echo $article; ?></a>
                <?php endforeach; ?>
            </div>
        </div>
                        </div>

                                              
                    
</section>
   

<!-- Back to Hotels Link -->


<script>
function toggleText() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("moreText");
    var btnText = document.getElementById("readMoreBtn");

    if (dots.style.display === "none") {
        // حالة الإغلاق (عرض أقل)
        dots.style.display = "inline";
        btnText.innerHTML = "اقرأ المزيد";
        moreText.style.display = "none";
    } else {
        // حالة الفتح (اقرأ المزيد)
        dots.style.display = "none";
        btnText.innerHTML = "عرض أقل";
        moreText.style.display = "inline";
    }
}

</script>



<script>
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



