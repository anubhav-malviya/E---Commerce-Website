
<!-- ----------------------------------------------------------------   Featured Product Section Start -->

<?php
    $product_shuffle = $product->getDataUsingItemType('featured_product');
    shuffle($product_shuffle);

    // request method post
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if (isset($_POST['featured_products_submit'])){
            // call method addToCart
            $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
        }
    }
?>

<section id="product1" class="section-p1">
    <h2>Featured Product</h2>
    <p>New Products For This Summer</p>
    <div class="pro-container">
        <?php foreach($product_shuffle as $item) { ?>
        <div class="pro" onclick="window.location.href='<?php printf('%s?item_id=%s', 'sproduct.php',  $item['item_id']); ?>';">
            <img src="<?php echo $item['item_image'] ?? "./img/products/f1.jpg"; ?>" alt="">
            <div class="description">
                <span><?php echo $item['item_brand'] ?? "Brand"; ?></span>
                <h5><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>Rs. <?php echo $item['item_price'] ?? '0'; ?></h4>
            </div>
            <form method="post">
                <input type="hidden" name="item_id" value="<?php echo $item['item_id']??'1';?>">
                <input type="hidden" name="user_id" value="<?php echo 1;?>">
                <button type="submit" name="featured_products_submit" class="normal"><i class="fal fa-shopping-cart cart"> </i></button>
            </form>
<!--            <a href="#"><i class="fal fa-shopping-cart cart"></i></a>-->
        </div>
        <?php } //closing for each loop ?>
    </div>
</section>

