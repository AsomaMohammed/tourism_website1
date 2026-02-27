<?php
/**<link rel="preload" href="fonts/myfont.woff2" as="font" type="font/woff2" crossorigin>
 * موقع سياحي - الصفحة الرئيسية
 * Travel Website - Home Page
 */

require_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>موقع سياحي - استكشف أجمل الوجهات السياحية</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>



</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <?php include 'includes/hero-section.php'; ?>
    
    <?php include 'includes/destinations.php'; ?>
    
    <?php include 'includes/best-offers.php'; ?>
    
    <?php include 'includes/testimonials.php'; ?>
    
    <?php include 'includes/footer.php'; ?>
    
    <script src="assets/js/script.js" defer></script>
    <script src="assets/js/main.js" defer></script>
</body>
</html>
