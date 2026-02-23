<?php
/**
 * قسم البطل - Hero Section
 * تم التعديل ليطابق الصورة 111.jpg
 */
?>





<section class="hero-section" id="home">
    <div class="social-sidebar">
   <a href="https://wa.me/60182245600?text=مرحباً، أريد الاستفسار" class="social-circle whatsapp" target="_blank">
   <i class="fab fa-whatsapp"></i>
</a>
       <a href="https://x.com/grand__ocean" target="_blank" class="social-circle x-twitter">
   <i class="fa-brands fa-x-twitter"></i>
</a>          
        <a href="https://www.tiktok.com/@grand_ocean_travel" target="_blank" class="social-circle tiktok">
            <i class="fab fa-tiktok"></i>
        </a>
        <a href="https://www.snapchat.com/add/grand.ocean" target="_blank" class="social-circle snapchat" ><i class="fab fa-snapchat-ghost"></i></a>
        <a href="https://www.instagram.com/grandocean_travel/" target="_blank"  class="social-circle instagram"><i class="fab fa-instagram"></i></a>
        <a href="https://www.facebook.com/%D8%AC%D8%B1%D8%A7%D9%86%D8%AF-%D8%A3%D9%88%D8%B4%D9%86-%D9%84%D9%84%D8%B3%D9%81%D8%B1-Grand-Ocean_Travel-359208708246795/?modal=admin_todo_tour" target="_blank" class="social-circle facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.youtube.com/channel/UCjCbotOUy-kbkaR-byXuTrQ" target="_blank" class="social-circle youtube"><i class="fab fa-youtube"></i></a>
    </div>

    <div class="hero-image-container">
        <img src="assets/images/heroz.png" alt="Tourism Countries" class="hero-img">
        
     <!--  <div class="wave-top-hero">
            <svg viewBox="0 0 1440 120" preserveAspectRatio="none" class="wave-svg">
                <path d="M0,0 L0,60 C250,110 450,110 720,60 C990,10 1190,10 1440,60 L1440,0 Z" fill="#ffffff"></path>
            </svg>
        </div>

        
        <div class="wave-bottom-hero">
            <svg viewBox="0 0 1440 420" preserveAspectRatio="none" class="wave-svg">
                <defs>
                    <linearGradient id="waveGradient" x1="0%" y1="0%" x2="0%" y2="100%">
                        <stop offset="0%" style="stop-color:rgba(255,255,255,0.4)" />
                        <stop offset="100%" style="stop-color:#baddf2" /> </linearGradient>
                </defs>
                
                <path fill="rgba(97, 162, 248, 0.3)" d="M0,192L48,197.3C96,203,192,213,288,229.3C384,245,480,267,576,250.7C672,235,768,181,864,181.3C960,181,1056,235,1152,234.7C1248,235,1344,181,1392,154.7L1440,128L1440,480L1392,420C1344,480,1248,480,1152,480C1056,480,960,480,864,420C768,420,672,480,576,420C480,480,384,480,288,480C192,480,96,480,48,480L0,420Z"></path>
                
                <path fill="url(#waveGradient)" fill-opacity="1" d="M0,224L48,213.3C96,203,192,181,288,181.3C384,181,480,203,576,224C672,245,768,267,864,250.7C960,235,1056,181,1152,170.7C1248,160,1344,192,1392,208L1440,224L1440,420L1392,420C1344,420,1248,420,1152,420C1056,420,960,420,864,420C768,420,672,420,576,420C480,420,384,420,288,420C192,420,96,420,48,420L0,420Z"></path>
            </svg>
            -->
            <div class="hero-title-container">
                <h1 class="hero-title">الدول السياحية</h1>
            </div>
        </div>
    </div>
</section>

<script>
    function(event) {
  var $this = $(this),
    method = $this.data('method'),
    message = $this.data('confirm');

  if (method === undefined && message === undefined) {
    return true;
  }

  if (message !== undefined) {
    $.proxy(pub.confirm, this)(message, function() {
      pub.handleAction($this, event);
    });
  } else {
    pub.handleAction($this, event);
  }
  event.stopImmediatePropagation();
  return false;
}
</script>


