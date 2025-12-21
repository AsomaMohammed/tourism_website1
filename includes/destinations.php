<?php
/**
 * قسم الوجهات السياحية - Destinations Section
 */

$destinations = [
    [
        'id' => 1,
        'name' => 'ماليزيا',
        'image' => 'assets/images/malaysia.jpg',
       
    ],
    [
        'id' => 2,
        'name' => 'تايلاند',
        'image' => 'assets/images/thai.jpg',
       
    ],
    [
        'id' => 3,
        'name' => 'اندونيسيا',
        'image' => 'assets/images/malaysia.jpg',
       
    ],
    [
        'id' => 4,
        'name' => 'أذربيجان',
        'image' => 'assets/images/malaysia.jpg',
       
    ],
    [
        'id' => 5,
        'name' => 'تركيا',
        'image' => 'assets/images/malaysia.jpg',
       
    ],
    [
        'id' => 6,
        'name' => 'سنغافورة',
        'image' => 'assets/images/thai.JPG',
       
    ],
    [
        'id' => 7,
        'name' => 'أذربيجان',
        'image' => 'assets/images/malaysia.jpg',
       
    ],
    [
        'id' => 8,
        'name' => 'تركيا',
        'image' => 'assets/images/malaysia.jpg',
       
    ],
    [
        'id' => 9,
        'name' => 'سنغافورة',
        'image' => 'assets/images/thai.JPG',
       
    ]
];
?>

<section class="destinations-section" id="destinations">
          <div class="container">
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

