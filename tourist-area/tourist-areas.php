<?php
/**
 * Tourist Areas Page - المناطق السياحية في كوالالمبور
 * Displays grid of tourist attractions with filter
 */

$pageTitle = "المناطق السياحية في كوالالمبور";

// Sample data for tourist areas
$touristAreas = [
    [
        'id' => 1,
        'name_ar' => 'برج التوأم كوالالمبور',
        'name_en' => 'Petronas Towers',
        'image' => 'images/petronas-towers.jpg',
        'category' => 'landmarks'
    ],
    [
        'id' => 2,
        'name_ar' => 'ميدان ميرديكا كوالالمبور',
        'name_en' => 'Merdeka Square',
        'image' => 'images/merdeka-square.jpg',
        'category' => 'landmarks'
    ],
    [
        'id' => 3,
        'name_ar' => 'منارة كوالالمبور',
        'name_en' => 'Menara Kuala Lumpur',
        'image' => 'images/kl-tower.jpg',
        'category' => 'landmarks'
    ],
    [
        'id' => 4,
        'name_ar' => 'حديقة الفراشات كوالالمبور',
        'name_en' => 'Kuala Lumpur Butterfly Park',
        'image' => 'images/butterfly-park.jpg',
        'category' => 'parks'
    ],
    [
        'id' => 5,
        'name_ar' => 'حديقة طيور كوالالمبور',
        'name_en' => 'KL Bird Park',
        'image' => 'images/bird-park.jpg',
        'category' => 'parks'
    ],
    [
        'id' => 6,
        'name_ar' => 'منارة كوالالمبور',
        'name_en' => 'Menara Kuala Lumpur',
        'image' => 'images/kl-tower-2.jpg',
        'category' => 'landmarks'
    ],
    [
        'id' => 7,
        'name_ar' => 'ميدان ميرديكا كوالالمبور',
        'name_en' => 'Merdeka Square',
        'image' => 'images/merdeka-2.jpg',
        'category' => 'landmarks'
    ],
    [
        'id' => 8,
        'name_ar' => 'برج التوأم كوالالمبور',
        'name_en' => 'Petronas Towers',
        'image' => 'images/petronas-2.jpg',
        'category' => 'landmarks'
    ],
    [
        'id' => 9,
        'name_ar' => 'حديقة الفراشات كوالالمبور',
        'name_en' => 'Kuala Lumpur Butterfly Park',
        'image' => 'images/butterfly-2.jpg',
        'category' => 'parks'
    ],
    [
        'id' => 10,
        'name_ar' => 'منارة كوالالمبور',
        'name_en' => 'Menara Kuala Lumpur',
        'image' => 'images/kl-tower-3.jpg',
        'category' => 'landmarks'
    ],
    [
        'id' => 11,
        'name_ar' => 'حديقة طيور كوالالمبور',
        'name_en' => 'KL Bird Park',
        'image' => 'images/bird-park-2.jpg',
        'category' => 'parks'
    ],
    [
        'id' => 12,
        'name_ar' => 'برج التوأم كوالالمبور',
        'name_en' => 'Petronas Towers',
        'image' => 'images/petronas-3.jpg',
        'category' => 'landmarks'
    ],
    [
        'id' => 13,
        'name_ar' => 'ميدان ميرديكا كوالالمبور',
        'name_en' => 'Merdeka Square',
        'image' => 'images/merdeka-3.jpg',
        'category' => 'landmarks'
    ],
    [
        'id' => 14,
        'name_ar' => 'حديقة طيور كوالالمبور',
        'name_en' => 'KL Bird Park',
        'image' => 'images/bird-park-3.jpg',
        'category' => 'parks'
    ],
    [
        'id' => 15,
        'name_ar' => 'حديقة الفراشات كوالالمبور',
        'name_en' => 'Kuala Lumpur Butterfly Park',
        'image' => 'images/butterfly-3.jpg',
        'category' => 'parks'
    ],
    [
        'id' => 16,
        'name_ar' => 'منارة كوالالمبور',
        'name_en' => 'Menara Kuala Lumpur',
        'image' => 'images/kl-tower-4.jpg',
        'category' => 'landmarks'
    ],
    [
        'id' => 17,
        'name_ar' => 'ميدان ميرديكا كوالالمبور',
        'name_en' => 'Merdeka Square',
        'image' => 'images/merdeka-4.jpg',
        'category' => 'landmarks'
    ],
    [
        'id' => 18,
        'name_ar' => 'برج التوأم كوالالمبور',
        'name_en' => 'Petronas Towers',
        'image' => 'images/petronas-4.jpg',
        'category' => 'landmarks'
    ],
];

// Pagination settings
$itemsPerPage = 18;
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$totalItems = count($touristAreas);
$totalPages = ceil($totalItems / $itemsPerPage);
$offset = ($currentPage - 1) * $itemsPerPage;
$currentItems = array_slice($touristAreas, $offset, $itemsPerPage);

// Filter handling
$searchQuery = isset($_GET['search']) ? $_GET['search'] : '';
$categoryFilter = isset($_GET['category']) ? $_GET['category'] : '';


?>

<!-- Hero Banner -->
<section class="tours-hero-section">
    <div class='tours-hero-image'>
    <img src="images/kuala-lumpur-banner.jpg" alt="كوالالمبور" class="tours-hero-img"
         onerror="this.src='https://images.unsplash.com/photo-1596422846543-75c6fc197f07?w=1200&h=400&fit=crop'">
</div>
        </section>

<!-- Filter Wrapper -->
<section class="tours-title-section">
    <div class="title-box">المناطق السياحية في كـــــــوالالمبور
    </div>
</section>
<section class="tours-filter-section">
  
    <form class="filter-wrapper" method="GET" action="">
        <!-- Search Input -->
        <input type="text" class="filter-input"
               name="search" 
               placeholder="اسم المنطقة" 
               value="<?php echo htmlspecialchars($searchQuery); ?>">
        
        <!-- Category Select -->
      <input type="text" class="filter-input"
               name="search" 
               placeholder="المكان" 
               value="<?php echo htmlspecialchars($searchQuery); ?>">
        
        <!-- Filter Button -->
        <button type="submit" class="filter-btn"></button><!--بحث-->
    </form>
</section>

<!-- Gallery Grid -->
<section class="best-offers-section">
    <div class="offers-grid">
        <?php foreach ($currentItems as $area): ?>
        <div class="offer-card" data-category="<?php echo $area['category']; ?>">
            <div class="tour-image-wrapper">
                <img src="<?php echo $area['image']; ?>" 
                     alt="<?php echo $area['name_ar']; ?>" class="tour-image"
                     onerror="this.src='https://images.unsplash.com/photo-1596422846543-75c6fc197f07?w=400&h=300&fit=crop'">
            </div>
            <div class="tour-content">
                <h3 class="card-title-ar"><?php echo $area['name_ar']; ?></h3>
                <p class="card-title-en"><?php echo $area['name_en']; ?></p>
                <form class="subpo" action="area-details.php" method="post" target="_blank">
                <button type="submit" class="btn-explore"> التفاصيل </button></form>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    
    <!-- Pagination -->
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

=
