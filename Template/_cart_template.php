
<?php
    $product_shuffle = $product->getData('product');
    shuffle($product_shuffle);
?>
<!-- ----------------------------------------------------------------   cart table Section Start -->

<section id="cart" class="section-p1">
    <table width="100%">
        <thead>
        <tr>
            <td>Remove</td>
            <td>Image</td>
            <td>Product</td>
            <td>Price</td>
            <td>Quantity</td>
            <td>Subtotal</td>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($product->getData('cart') as $item) :
            $cart = $product->getProduct($item['item_id']);
            print_r($cart);
        ?>
        <tr>
            <td><a href="#"><i class="far fa-times-circle"></i></a></td>
            <td><img src="./img/products/f1.jpg" alt=""></td>
            <td>Cartoon Astronaut T-Shirts</td>
            <td>$118.1</td>
            <td><input type="number" value="1"></td>
            <td>$118.1</td>
        </tr>
        <?php
        endforeach;
        ?>
        </tbody>
    </table>

</section>


<!-- ----------------------------------------------------------------   Apply Coupon & Cart Subtotal Section Start -->

<section id="cart-add" class="section-p1">
    <div id="coupon">
        <h3>Apply Coupon</h3>
        <div>
            <input type="text" placeholder="Enter Your Coupon">
            <button class="normal">Apply</button>
        </div>
    </div>
    <div id="subtotal">
        <h3>Cart Totals</h3>
        <table>
            <tr>
                <td>Cart Subtotal</td>
                <td>$ 335</td>
            </tr>
            <tr>
                <td>Shipping</td>
                <td>Free</td>
            </tr>
            <tr>
                <td><strong>Total</strong></td>
                <td><strong>$ 335</strong></td>
            </tr>
        </table>
        <button class="normal">Proceed to Checkout</button>
    </div>
</section>

