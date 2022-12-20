<?php
if ($_POST) {
    require "categories-model.php";
    updateCategory($_POST['id'],$_POST['name']);
    header('Location: products.php');
    exit();

}