<?php
/**
 * رأس الموقع - Header
 */
?>
<header class="header" dir="rtl">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' - ' : ''; ?>جراند أوشن للسياحة والسفر</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <div class="header-gradient-bar"></div>

    <div class="header-main">
        
            <div class="header-content">
                
                <div class="logo-section">
                    <div class="logo">
                        <a href="index.php" class="logo-link">
                            <img src="assets/images/logo.png" alt="شعار الموقع" class="logo-image">
                        </a>
                    </div>
                </div>

                <nav class="navbar">
                    <ul class="nav-menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <img src="assets/images/home.png" class="nav-icon-img" alt="icon">
                                الرئيسيــة
                            
                             <span class="dropdown-arrow">▼</span></a>
                              <ul class="dropdown-menu">
                            <li class="dropdown-item"><a href="#" class="dropdown-link">.....</a></li>
                            <li class="dropdown-item"><a href="#" class="dropdown-link">...</a></li>
                            <li class="dropdown-item"><a href="#" class="dropdown-link">...</a></li>
                            <li class="dropdown-item"><a href="#" class="dropdown-link">.....</a></li>
                        </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <img src="assets/images/na2.png" class="nav-icon-img" alt="icon">
                                العروض السياحية
                           
                             <span class="dropdown-arrow">▼</span> </a>
                              <ul class="dropdown-menu">
                            <li class="dropdown-item"><a href="#" class="dropdown-link">444</a></li>
                            <li class="dropdown-item"><a href="#" class="dropdown-link">33</a></li>
                            <li class="dropdown-item"><a href="#" class="dropdown-link">44</a></li>
                           
                        </ul>
                        </li>
                         <li class="nav-item">
                            <a href="#" class="nav-link">
                                <img src="assets/images/hotel.png" class="nav-icon-img" alt="icon">
                                الفنــادق
                           
                             <span class="dropdown-arrow">▼</span> </a>
                              <ul class="dropdown-menu">
                            <li class="dropdown-item"><a href="#" class="dropdown-link">استشارات </a></li>
                            <li class="dropdown-item"><a href="#" class="dropdown-link"> عامة</a></li>
                            <li class="dropdown-item"><a href="#" class="dropdown-link"> 24 ساعة</a></li>
                            <li class="dropdown-item"><a href="#" class="dropdown-link">000 </a></li>
                        </ul>
                        </li>
                        <li class="nav-item">
                            <a href="tourist-areas.php" class="nav-link">
                                <img src="assets/images/nav8.png" class="nav-icon-img" alt="icon">
                           المناطق السياحية    
                          
                             <span class="dropdown-arrow">▼</span>  </a>
                              <ul class="dropdown-menu">
                            <li class="dropdown-item"><a href="#" class="dropdown-link">12345 </a></li>
                            <li class="dropdown-item"><a href="#" class="dropdown-link"> عامة</a></li>
                            <li class="dropdown-item"><a href="#" class="dropdown-link">888</a></li>
                            <li class="dropdown-item"><a href="#" class="dropdown-link"> 1230</a></li>
                        </ul>
                        </li>
                        <li class="nav-item">
                            <a href="Tours_P.php" class="nav-link">
                                <img src="assets/images/nav6.png" class="nav-icon-img" alt="icon">
                                الجـولات السياحية
                            
                             <span class="dropdown-arrow">▼</span></a>
                              <ul class="dropdown-menu">
                            <li class="dropdown-item"><a href="Tours_P.php" class="dropdown-link">123 </a></li>
                            <li class="dropdown-item"><a href="#" class="dropdown-link">78 </a></li>
                            <li class="dropdown-item"><a href="#" class="dropdown-link"> 24 </a></li>
                            <li class="dropdown-item"><a href="#" class="dropdown-link">21 </a></li>
                        </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <img src="assets/images/na7.png" class="nav-icon-img" alt="icon">
                                مقــالات
                            
                             <span class="dropdown-arrow">▼</span></a>
                              <ul class="dropdown-menu">
                            <li class="dropdown-item"><a href="#" class="dropdown-link"></a></li>
                            <li class="dropdown-item"><a href="#" class="dropdown-link">....</a></li>
                            
                        </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <img src="assets/images/nav5.png" class="nav-icon-img" alt="icon">
                                من نحن
                           
                             <span class="dropdown-arrow">▼</span> </a>
                              <ul class="dropdown-menu">
                            <li class="dropdown-item"><a href="#" class="dropdown-link"></a></li>
                            <li class="dropdown-item"><a href="#" class="dropdown-link"></a></li>
                            
                        </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <img src="assets/images/nav4.png" class="nav-icon-img" alt="icon">
                                التراخيــص
                            
                             <span class="dropdown-arrow">▼</span></a>
                              <ul class="dropdown-menu">
                            <li class="dropdown-item"><a href="#" class="dropdown-link">ترخيص1 </a></li>
                            <li class="dropdown-item"><a href="#" class="dropdown-link">ترخيص12 </a></li>
                          
                        </ul>
                        </li>
                         
                    </ul>
                </nav>

                <div class="header-actions">
                    <a href="#" class="btn-booking">
                          <span class="booking-text">للحجز والاستفسار</span>
                        <span class="booking-icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                      
                    </a>
                </div>

           
        </div>
    </div>
</header>