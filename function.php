<?php

require_once("./database/DBController.php");
require_once("./database/Product.php");
require_once("./database/Cart.php");

// DB Controller Object
$db = new DBController();

// Product Object
$product = new Product($db);

// Với giá trị table mặc định là product, nhưng có thể truyền vào giá trị bảng khác
// print_r($product->getData($table= 'product')); TEST

// Cart Object

$Cart = new Cart($db);

// $product variable get from function
$productShow = $product->getData();

$Cart = new Cart($db);
// print_r();
// VD
// $arr = array(
//     "user_id"=>1,
//     "item_id"=>2,
// );

// $Cart->inserCart($arr);

?>