___
<?php
/**
 * بيانات تجريبية لآراء العملاء
 */

$videos = [
    ['id' => 1, 'type' => 'video', 'url' => 'video1.mp4', 'poster' => 'assets/images/video-poster-1.jpg'],
    ['id' => 2, 'type' => 'video', 'url' => 'video2.mp4', 'poster' => 'assets/images/video-poster-2.jpg'],
    ['id' => 3, 'type' => 'video', 'url' => 'video3.mp4', 'poster' => 'assets/images/video-poster-3.jpg'],
    ['id' => 4, 'type' => 'video', 'url' => 'video4.mp4', 'poster' => 'assets/images/video-poster-4.jpg'],
];

$photos = [
    ['id' => 5, 'type' => 'photo', 'url' => 'assets/images/photo-1.jpg'],
    ['id' => 6, 'type' => 'photo', 'url' => 'assets/images/photo-2.jpg'],
    ['id' => 7, 'type' => 'photo', 'url' => 'assets/images/photo-3.jpg'],
    ['id' => 8, 'type' => 'photo', 'url' => 'assets/images/photo-4.jpg'],
];
?>

<section class="testimonials-section">
    
        
        <div class="section-header">
            <h2 class="section-title">آراء العملاء</h2>
        </div>
        
    <div class="tabs">
        <div class="tab-controls-wrapper"> 
            <div class="tab-buttons">
                <button class="tab-button" onclick="openTab('photos')" data-tab="photos">صورة</button>
                <button class="tab-button active" onclick="openTab('videos')" data-tab="videos">فيديو</button> 
            </div>
            <div class="tab-bottom-bar"></div> 
        </div>

            <div class="tab-content-container">
                <div id="photos" class="tab-pane"> <div class="testimonials-grid">
                        <?php foreach ($photos as $photo): ?>
                            <div class="testimonial-card">
                                <div class="video-wrapper"> <img src="<?php echo $photo['url']; ?>" alt="صورة عميل" class="testimonial-image">
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div id="videos" class="tab-pane active"> <div class="testimonials-grid">
                        <?php foreach ($videos as $video): ?>
                            <div class="testimonial-card">
                                <div class="video-wrapper">
                                    <img src="<?php echo $video['poster']; ?>" alt="غلاف فيديو عميل" class="testimonial-video">
                                    <div class="play-button"><i class="fas fa-play"></i></div> </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            
        
       
    </div>
    </div>
    <div class="wa"> <img src="assets/images/wave.svg" alt="الموجة" class="wave-bottom">

    </div>
</section>