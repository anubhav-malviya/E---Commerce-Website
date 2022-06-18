<?php
    ob_start();
    //include header.php
    include('header.php');
?>

<?php
    //include hero section
    include('Template/_hero.php');

    //include features section
    include('Template/_features.php');

    //include featured products section
    include('Template/_featured_products.php');

    //include banner section
    include('Template/_banner.php');

    //include new arrivals section
    include('Template/_new_arrivals.php');

    //include banner2 section
    include('Template/_banner2.php');

    //include banner3 section
    include('Template/_banner3.php');

    //include newsletter section
    include('Template/_newsletter.php');
?>

<?php
    //include footer.php
    include('footer.php');
?>


