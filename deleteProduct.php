<?php
if ($_REQUEST) {
    require "products-model.php";
    deleteProduct($_REQUEST['id']);
    header('Location: products.php');
    exit();
}