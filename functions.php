<?php

    //required mysql connection
    require('database/DBController.php');

    //required Product Class
    require('database/Product.php');

    //required Cart Class
    require('database/Cart.php');

    //DBController object
    $db = new DBController();

    //Featured Product object
    $product = new Product($db);

    //Cart object
    $Cart = new Cart($db);

