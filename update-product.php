<?php
if ($_POST) {
    require "products-model.php";
    updateProduct($_POST['id'],$_POST['name']);
    header('Location: products.php');
    exit();

}