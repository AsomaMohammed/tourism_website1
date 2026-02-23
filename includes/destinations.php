<?php
/**
 * قسم الوجهات السياحية - Destinations Section
 */

$destinations = [
    [
        'id' => 1,
        'name' => 'ماليزيا',
        'image' => 'assets/images/mala.png',
       
    ],
    [
        'id' => 2,
        'name' => 'تايلاند',
        'image' => 'assets/images/22.png',
       
    ],
    [
        'id' => 3,
        'name' => 'اندونيسيا',
        'image' => 'assets/images/33.png',
       
    ],
    [
        'id' => 4,
        'name' => 'أذربيجان',
        'image' => 'assets/images/mmm.png',
       
    ],
    [
        'id' => 5,
        'name' => 'تركيا',
        'image' => 'assets/images/2.png',
       
    ],
    [
        'id' => 6,
        'name' => 'سنغافورة',
        'image' => 'assets/images/3.png',
       
    ],
    [
        'id' => 7,
        'name' => 'أذربيجان',
        'image' => 'assets/images/mmm.png',
       
    ],
    [
        'id' => 8,
        'name' => 'تركيا',
        'image' => 'assets/images/2.png',
       
    ],
    [
        'id' => 9,
        'name' => 'سنغافورة',
        'image' => 'assets/images/3.png',
       
    ]
];
?>

<section class="destinations-section" >
       
        <div class="destinations-grid">
            <?php foreach ($destinations as $destination): ?>
                <div class="destination-card">
                    
                    <div class="destination-image-wrapper">
                        <img src="<?php echo $destination['image']; ?>" 
                             alt="<?php echo $destination['name']; ?>" 
                             class="destination-image">
                    </div>

                    <div class="destination-overlay"></div>

                    <div class="destination-button-wrapper">
                        <button class="destination-button">
                           <span><?php echo $destination['name']; ?></span>
                        </button>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>
    </div>
    
</section>

