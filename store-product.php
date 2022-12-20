<?php
if ($_POST) {
    require "products-model.php";
    createProduct($_POST['name'],$_POST['price'], $_POST['category_id']);
    header('Location: products.php');
}