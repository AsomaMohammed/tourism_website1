<?php
/**
 * صفحة الجولات السياحية - Tours Page
 */

$tours = [
    [
        'id' => 1,
        'title' => 'استقبال من المطار',
        
        'image' => 'assets/images/tour-11.png',
        'price' => '150'
    ],
    [
        'id' => 2,
        'title' => 'استقبال من والى المطار',
        
        'image' => 'assets/images/tour-11.png',
        'price' => '200'
    ],
    [
        'id' => 3,
        'title' => 'استقبال من المطار',
       
        'image' => 'assets/images/tour-11.png',
        'price' => '150'
    ],
    [
        'id' => 4,
        'title' => 'ماليزيا جولة سياحية 2',
        
        'image' => 'assets/images/tour-11.png',
        'price' => '250'
    ],
    [
        'id' => 5,
        'title' => 'ماليزيا جولة سياحية 2',
       
        'image' => 'assets/images/tour-11.png',
        'price' => '250'
    ],
    [
        'id' => 6,
        'title' => 'ماليزيا جولة سياحية',
       
        'image' => 'assets/images/tour-12.png',
        'price' => '250'
    ],
    [
        'id' => 7,
        'title' => 'كوالالمبور - ماليزيا جولة سياحية 2',
        
        'image' => 'assets/images/tour-12.png',
        'price' => '300'
    ],
    [
        'id' => 8,
        'title' => 'كوالالمبور - ماليزيا جولة سياحية 2',
      
        'image' => 'assets/images/indonisa.jpg',
        'price' => '300'
    ],
    [
        'id' => 9,
        'title' => 'كوالالمبور - ماليزيا جولة سياحية 2',
       
        'image' => 'assets/images/thai.jpg',
        'price' => '300'
    ],
    [
        'id' => 10,
        'title' => 'كوالالمبور - ماليزيا جولة سياحية 2',
    
        'image' => 'assets/images/malaysia.jpg',
        'price' => '300'
    ],
    [
        'id' => 11,
        'title' => 'كوالالمبور - ماليزيا جولة سياحية 2',
    
        'image' => 'assets/images/tour-11.jpg',
        'price' => '300'
    ],
    [
        'id' => 12,
        'title' => 'كوالالمبور - ماليزيا جولة سياحية 2',
       
        'image' => 'assets/images/tour-12.png',
        'price' => '300'
    ],
    [
        'id' => 13,
        'title' => 'كوالالمبور - ماليزيا جولة سياحية 2',
      
        'image' => 'assets/images/malaysia.png',
        'price' => '300'
    ],
    [
        'id' => 14,
        'title' => 'كوالالمبور - ماليزيا جولة سياحية 2',
       
        'image' => 'assets/images/tour-11.png',
        'price' => '300'
    ],
    [
        'id' => 15,
        'title' => 'كوالالمبور - ماليزيا جولة سياحية 2',
       
        'image' => 'assets/images/tour-12.png',
        'price' => '300'
    ]
];
?>

<!-- قسم البطل -->
<!-- HERO -->
<section class="tours-hero-section">
    <div class="tours-hero-image">
        <img src="assets/images/tour.png" alt="الجولات السياحية" class="tours-hero-img">
    </div>
</section>

<!-- TITLE -->
<section class="tours-title-section">
    <div class="title-box">
        الجــــولات السياحيــــة في كــــوالالمبور
    </div>
</section>

<!-- FILTER -->
<section class="tours-filter-section">
    
        <div class="filter-wrapper">

            <input type="text"class="filter-input"  placeholder="البلد">
            <input type="text"class="filter-input"  placeholder="المدينة" >

            <button class="filter-btn"></button><!--بحث-->

        </div>
    
</section>




<!-- شبكة الجولات -->
<section class="best-offers-section">
    
        <div class="offers-grid">
            <?php foreach ($tours as $tour): ?>
                <div class="offer-card">
                    <div class="tour-image-wrapper">
                        <img src="<?php echo $tour['image']; ?>" alt="<?php echo $tour['title']; ?>" class="tour-image">
                    </div>
                    <div class="tour-content">
                        <p class="tour-title"><?php echo $tour['title']; ?></p>
                        <form  class='subpo'action="tourdetails.php" method="post" target="-blank">
                        <button type="submit" class="btn-explore1">التفاصيــل</button></form>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- الترقيم -->
        <div class="pagination">
            <a href="#" class="pagination-prev">
                <span>❮</span>
            </a>
            <?php for ($i = 8; $i >= 1; $i--): ?>
                <a href="#" class="pagination-number <?php echo $i === 1 ? 'active' : ''; ?>">
                    <?php echo $i; ?>
                </a>
            <?php endfor; ?>
            <a href="#" class="pagination-next">
                <span>❯</span>
            </a>
        </div>
    
</section>

<?php

?>
