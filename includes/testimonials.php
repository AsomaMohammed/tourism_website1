
<?php
/**
 * بيانات تجريبية لآراء العملاء
 */

$videos = [
    ['id' => 1, 'type' => 'video', 'url' => 'https://www.youtube.com/watch?v=f-vdax69Ts4', 'poster' => 'assets/images/poster11.png'],
    ['id' => 2, 'type' => 'video', 'url' => 'https://www.youtube.com/watch?v=uP-FZMZE11A', 'poster' => 'assets/images/poster11.png'],
    ['id' => 3, 'type' => 'video', 'url' => 'https://www.youtube.com/watch?v=wPuuc0XE5-U', 'poster' => 'assets/images/poster11.png'],
    ['id' => 4, 'type' => 'video', 'url' => 'https://www.youtube.com/watch?v=BP4XFBmksD0', 'poster' => 'assets/images/poster11.png'],
];

$photos = [
    ['id' => 5, 'type' => 'photo', 'url' => 'assets/images/poster11.png'],
    ['id' => 6, 'type' => 'photo', 'url' => 'assets/images/22.png'],
    ['id' => 7, 'type' => 'photo', 'url' => 'assets/images/22.png'],
    ['id' => 8, 'type' => 'photo', 'url' => 'assets/images/22.png'],
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
                                <div class="video-wrapper"> <img src="<?php echo $photo['url']; ?>" alt="صورة عميل" class="testimonial-video">
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

          <div id="videos" class="tab-pane active">
    <div class="testimonials-grid">
        <?php foreach ($videos as $video): ?>
            <div class="testimonial-card">
                <div class="video-wrapper" id="player-container-<?php echo $video['id']; ?>">
                    
                    <img src="<?php echo $video['poster']; ?>" alt="غلاف فيديو" class="testimonial-video">
                    
                    <div class="play-button" onclick="playInPlace(<?php echo $video['id']; ?>, '<?php echo $video['url']; ?>')">
                        <i class="fas fa-play"></i>
                    </div>

                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</div>

<div id="videoModal" class="video-modal" onclick="closeVideoModal()">
    
    <div class="modal-content" onclick="event.stopPropagation()">
        <div id="modalBody"></div>
    </div>
</div>
            </div>
            
   
    <div class="wa"> <img src="assets/images/wave.svg" alt="الموجة" class="wave-bottom">

    </div>
</section>


<script>
  function playInPlace(id, url) {
    const wrapper = document.getElementById('player-container-' + id);
    let htmlContent = '';

    // تحديد نوع الفيديو (يوتيوب أم ملف مباشر)
    if (url.includes('youtube.com') || url.includes('youtu.be')) {
        let videoId = '';
        if (url.includes('v=')) {
            videoId = url.split('v=')[1].split('&')[0];
        } else if (url.includes('embed/')) {
            videoId = url.split('embed/')[1];
        } else {
            videoId = url.split('/').pop();
        }
        // إضافة autoplay=1 ليبدأ التشغيل فوراً
        htmlContent = `<iframe src="https://www.youtube.com/embed/${videoId}?autoplay=1" allow="autoplay; encrypted-media" allowfullscreen></iframe>`;
    } else {
        htmlContent = `<video controls autoplay style="width:100%; height:100%; object-fit:cover;">
                        <source src="${url}" type="video/mp4">
                      </video>`;
    }

    // استبدال محتويات الـ wrapper بالفيديو
    wrapper.innerHTML = htmlContent;
}
</script>