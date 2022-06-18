<!DOCTYPE html>
<?php
    ob_start();
    //include header.php
    include('header.php');
?>

<?php
    //include shop page-header section
    include('Template/_shop_page_header.php');

    //include products section
    include('Template/_products.php');

    //include pagination section
    include('Template/_pagination.php');

    //include newsletter section
    include('Template/_newsletter.php');
?>

<?php
    //include footer.php
    include('footer.php');
?>
