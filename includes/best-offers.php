<?php
/**
 * قسم أفضل العروض السياحية - Best Offers Section
 */

$offers = [
    [
        'id' => 1,
        'title' => 'عروض سياحية مميزة في إندونيسيا',
        'description'=> '9 أيام و8 ليال',
        'price' => '2,500',
        'image' => 'assets/images/pic1.jpg'
    ],
    [
        'id' => 2,
        'title' => 'عروض سياحية مميزة في تايلاند',
        'description'=> '9 أيام و8 ليال',
        'price' => '2,000',
        'image' => 'assets/images/pic2.jpg'
    ],
    [
        'id' => 3,
        'title' => 'عروض سياحية مميزة في ماليزيا',
        'description'=> '9 أيام و8 ليال',
        'price' => '2,200',
        'image' => 'assets/images/pic3.jpg'
    ]
];
?>

<section class="best-offers-section" id="offers">
   
        <h2 class="section-title">أفضل العروض السياحية</h2>
        
        <div class="offers-grid">
            <?php foreach ($offers as $offer): ?>
                <div class="offer-card">
                    <div class="offer-image-wrapper">
                        <img src="<?php echo $offer['image']; ?>" 
                             alt="<?php echo $offer['title']; ?>" 
                             class="offer-image">
                    </div>
                    
                    <div class="offer-content">
                        <p class="offer-title"><?php echo $offer['title']; ?></br>
                        <?php echo $offer['description']; ?><br><?php echo $offer['price']; ?> دولار</p>
                      
                                 <div class="button-con"><button class="btn-explore">التفاصيل </button></div>   
                      
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    
</section>
