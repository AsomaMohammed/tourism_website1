<?php
/**
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
    <title>موقع سياحي</title>
    <link rel="stylesheet" href="assets/css/style2.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
     <link rel="stylesheet" href="assets/css/responsive2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <?php include 'tourst/tour-details.php'; ?>
    
    <?php include 'includes/footer.php'; ?>
   <script src="assets/js/main2.js" defer></script>
   <script src="assets/js/main.js" defer></script> 
    <script src="assets/js/script.js" defer></script>
</body>
</html>