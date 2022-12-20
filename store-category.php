<?php
// bu usul mvc uchu n ishlatiladi.
//require 'categories-model.php';
//switch ($_REQUEST['method']) {
//    case 'store':
//        if ($_POST['name']) {
//            if (createCategory($_POST['name'])) {
//                header('Location: products.php');
//            }
//        }
//            break;
//}
if ($_POST) {
    require 'categories-model.php';
    createCategory($_POST['name']);
    header('Location: products.php');
    exit();
}