<?php
/**
 * موقع سياحي - الصفحة الرئيسية
 * Travel Website - Home Page
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>موقع سياحي - استكشف أجمل الوجهات السياحية</title>
    <script>
        (function () {
            try {
                var lang = localStorage.getItem('site_lang') || 'ar';
                var html = document.documentElement;
                html.setAttribute('lang', lang);
                html.setAttribute('dir', lang === 'en' ? 'ltr' : 'rtl');
                if (lang === 'en') html.classList.add('lang-en');
                else html.classList.remove('lang-en');
            } catch (e) {}
        })();
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700;900&family=Inter:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="assets/css/style2.css">
    <link rel="stylesheet" href="assets/css/responsive2.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <?php include 'hotel/hotel-details.php'; ?>
    
    <?php include 'includes/footer.php'; ?>
   <script src="assets/js/main2.js" defer></script>
   <script src="assets/js/main.js" defer></script>
    <script src="assets/js/script.js" defer></script>
</body>
</html>
