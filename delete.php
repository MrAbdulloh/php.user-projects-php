<?php
if ($_REQUEST) {
    require 'categories-model.php';
    deleteCategory($_REQUEST['id']);
    header("Location: products.php");
    exit();
}