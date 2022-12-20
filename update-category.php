<?php
if ($_POST) {
    require "categories-model.php";
    update($_POST['id'],$_POST['name']);
    header('Location: products.php');
    exit();

}