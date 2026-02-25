<?php

/**
 * التذييل - Footer
 * تم تعديله بدقة عالية لتطابق التصميم
 */
?>
<footer class="footer" id="contact">
    <div class="footer-background">
        <img src="assets/images/footerr.png" alt="خلفية التذييل" class="footer-bg-image">
    </div>

    <div class="footer-content">
       
            <div class="footer-grid">
                <div class="footer-column">
                    <h3 class="footer-title">المناطق السياحية</h3>
                    <ul class="footer-links">
                        <li><a href="#">ماليزيا</a></li>
                        <li><a href="#">إندونيسيا</a></li>
                        <li><a href="#">سنغافورة</a></li>
                        <li><a href="#">تايلاند</a></li>
                        <li><a href="#">سيريلانكا</a></li>
                        <li><a href="#">تركيا</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3 class="footer-title">العروض السياحية</h3>
                    <ul class="footer-links">
                        <li><a href="#">ماليزيا</a></li>
                        <li><a href="#">إندونيسيا</a></li>
                        <li><a href="#">سنغافورة</a></li>
                        <li><a href="#">تايلاند</a></li>
                        <li><a href="#">سيريلانكا</a></li>
                        <li><a href="#">تركيا</a></li>
                    </ul>
                </div>
                
                </div>
        </div>
    </div>
    
    <div class="footer-bottom">
      
            <div class="footer-bottom-content">
                <p class="copyright">Ä﹤﹤ &copy; ocean travel.com 2016. All rights reserved.</p>
                <div class="social-icons-footer">
                    <a href="http://ocean-malaysia.com" target="_blank" class="social-link" title="Share">
                        <i class="fas fa-share-alt"></i> </a>
                    <a href="https://www.facebook.com/%D8%AC%D8%B1%D8%A7%D9%86%D8%AF-%D8%A3%D9%88%D8%B4%D9%86-%D9%84%D9%84%D8%B3%D9%81%D8%B1-Grand-Ocean_Travel-359208708246795/?modal=admin_todo_tour" target="_blank" class="social-link" title="Facebook">
                         <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.youtube.com/channel/UCjCbotOUy-kbkaR-byXuTrQ" class="social-link" target="_blank" title="YouTube">
                        <i class="fa-brands  fa-youtube"></i>
                    </a>
                    <a href="https://www.snapchat.com/add/grand.ocean" class="social-link" target="_blank" title="Snapchat">
                        <i class="fab fa-snapchat-ghost"></i>
                    </a>
                    <a href="https://www.instagram.com/grandocean_travel/" class="social-link"  target="_blank"title="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://x.com/grand__ocean" class="social-link"  target="_blank"title="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://wa.me/60182245600?text=مرحباً، أريد الاستفسار" class="social-link" target="_blank" title="whatsup">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            
        </div>
        <a href="#top" class="scroll-to-top" title="العودة للأعلى">
            <i class="fas fa-chevron-up"></i>
        </a>
       

</footer>



<script>
    document.addEventListener('click', function(event) {
      if (typeof window.$ === 'undefined' || typeof window.pub === 'undefined') {
        return;
      }

      var $target = window.$(event.target);
      var $this = $target.closest('[data-method], [data-confirm]');
      if (!$this.length) {
        return;
      }

      var method = $this.data('method');
      var message = $this.data('confirm');

      if (method === undefined && message === undefined) {
        return;
      }

      if (message !== undefined) {
        window.$.proxy(window.pub.confirm, $this.get(0))(message, function() {
          window.pub.handleAction($this, event);
        });
      } else {
        window.pub.handleAction($this, event);
      }

      event.stopImmediatePropagation();
      event.preventDefault();
    }, true);
</script>