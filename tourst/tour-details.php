<?php
/**
 * صفحة تفاصيل الجولة - Tour Details Page
 */


// بيانات الجولة
$tour = [
    'id' => 1,
    'title' => 'برج التوأم كوالالمبور - ماليزيا جولة سياحية',
    'image' => 'assets/images/tour-details-hero.jpg',
    'video' => 'https://www.youtube.com/embed/VIDEO_ID',
    'description' => 'اكتشف جمال برج التوأم في كوالالمبور مع جولة سياحية شاملة تشمل زيارة أهم المعالم السياحية والمتاحف والمطاعم الشهيرة.',
    'price' => '250',
    'duration' => '8 ساعات',
    'group_size' => '1-10 أشخاص'
];

$hotels = [
    'فندق مشابه في كوالالمبور',
    'فندق مشابه في كوالالمبور',
    'فندق مشابه في كوالالمبور',
    'فندق مشابه في كوالالمبور',
    'فندق مشابه في كوالالمبور',
    'فندق مشابه في كوالالمبور',
    'فندق مشابه في كوالالمبور',
    'فندق مشابه في كوالالمبور',
    'فندق مشابه في كوالالمبور',
    'فندق مشابه في كوالالمبور',
    'فندق مشابه في كوالالمبور',
    'فندق مشابه في كوالالمبور',
];

$gallery = [
    'assets/images/malaysia.jpg',
    'assets/images/thai.jpg',
    'assets/images/indonisa.jpg',
    'assets/images/hero.jpg'
];
?>

<!-- قسم البطل -->
<section class="tour-details-hero-section">
    <div class="tour-details-hero-image">
        <img src="<?php echo $tour['image']; ?>" alt="<?php echo $tour['title']; ?>" class="tour-details-hero-img">
    </div>
</section>

<!-- المحتوى الرئيسي -->
<section class="tour-details-section">
    <div class="container tour-details-container">
        <!-- الشريط الجانبي الأيسر -->
        <aside class="tour-details-sidebar-left">
            <div class="sidebar-section">
                <h3 class="sidebar-title">فنادق مشابهة في كوالالمبور</h3>
               <ul class="hotels-list">
<?php foreach ($hotels as $hotel): ?>
    <li class="hotel-item">
        <a href="hotel-details.php"><?php echo $hotel; ?></a>
    </li>
<?php endforeach; ?>
</ul>

            </div>
        </aside>

        <!-- المحتوى الرئيسي -->
        <main class="tour-details-main">
            <!-- العنوان -->
            <h1 class="tour-details-title"><?php echo $tour['title']; ?></h1>

            <!-- الفيديو -->
           <aside class="tour-details-sidebar-right">

    <div class="sidebar-video">
        <iframe src="<?php echo $tour['video']; ?>" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="sidebar-gallery">
        <?php foreach ($gallery as $image): ?>
            <img src="<?php echo $image; ?>" alt="">
        <?php endforeach; ?>
    </div>

</aside>

            <!-- الصور الإضافية -->
            <div class="tour-details-gallery">
                <div class="gallery-slider">
                    <button class="gallery-arrow gallery-prev">❮</button>
                    <div class="gallery-container">
                        <?php foreach ($gallery as $image): ?>
                            <img src="<?php echo $image; ?>" alt="صورة الجولة" class="gallery-image">
                        <?php endforeach; ?>
                    </div>
                    <button class="gallery-arrow gallery-next">❯</button>
                </div>
            </div>

            <!-- الوصف -->
            <div class="tour-details-description">
                <p><?php echo $tour['description']; ?></p>
            </div>

          <div class="tour-accordion">
    <div class="accordion-item" onclick="toggleAccordion(this)">
        منارة كوالالمبور
    </div>
    <div class="accordion-content">
        معلومات عن منارة كوالالمبور
    </div>

    <div class="accordion-item" onclick="toggleAccordion(this)">
        اكواريوم عالم البحار
    </div>
    <div class="accordion-content">
        تفاصيل الزيارة
    </div>
</div>


            <!-- زر الحجز -->
            <button class="tour-details-booking-btn">احجز الآن</button>
        </main>

        <!-- الشريط الجانبي الأيمن -->
        <aside class="tour-details-sidebar-right">
            <div class="sidebar-section">
                <h3 class="sidebar-title">معلومات إضافية</h3>
                <ul class="info-list">
                    <li>معلومة إضافية 1</li>
                    <li>معلومة إضافية 2</li>
                    <li>معلومة إضافية 3</li>
                </ul>
            </div>
        </aside>
    </div>
</section>

<?php

?>
