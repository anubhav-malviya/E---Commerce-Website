

<!-- ----------------------------------------------------------------   Product Details Section Start -->

<?php
    $item_id = $_GET['item_id'] ?? 1;
    foreach ($product->getData('product') as $item) :
    if ($item['item_id'] == $item_id) :
?>

<section id="prodetails" class="section-p1">
    <div class="single-pro-image">
        <img src="<?php echo $item['item_image'] ?? "./img/products/f1.jpg"; ?>" width="100%" id="MainImg" alt="">
    </div>

    <div class="single-pro-details">
        <h6><?php echo $item['item_brand'] ?? "Brand"; ?></h6>
        <h4><?php echo $item['item_name'] ?? "Unknown"; ?></h4>
        <h2>Rs. <?php echo $item['item_price'] ?? '0'; ?></h2>
        <select>
            <option>Select Size</option>
            <option>XL</option>
            <option>XXL</option>
            <option>Small</option>
            <option>Large</option>
        </select>
        <input type="number" value="1">
        <button class="normal">Add To Cart</button>
        <h4>Product Details</h4>
        <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias molestiae dolorem illum asperiores quidem nihil eos rerum omnis ducimus cupiditate soluta qui odio temporibus, voluptates voluptatum quod repellendus quos tenetur, minus nemo consequatur saepe, natus magnam. Animi ducimus nam culpa quasi dolore architecto laboriosam facilis repellendus aperiam alias nihil labore enim dolorum impedit, velit aliquam qui cum sit quam nemo soluta consequatur excepturi! Alias ratione magnam cupiditate ad corrupti hic consequatur accusamus quis rerum eligendi?</span>
    </div>
</section>

<?php
    endif;
    endforeach;
?>