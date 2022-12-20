<?php
if ($_REQUEST) {
    require 'categories-model.php';
    delete($_REQUEST['id']);
    header("Location: products.php");
    exit();
}