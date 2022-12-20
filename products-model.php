<?php

function getAllProduct()
{
    $db = require 'db-connect.php';
    $sql = 'SELECT *FROM `products`';
    return mysqli_query($db, $sql);
}

function getProduct($id)
{
    $db = require "db-connect.php";
    $sql = "SELECT * FROM `products` WHERE `id` = $id LIMIT 1";
    $result = mysqli_query($db, $sql);
    return mysqli_fetch_assoc($result);
}

function createProduct($name,$price, $category_id)
{
    $db = require 'db-connect.php';
    $sql = "INSERT INTO `products` ( `name` ,`price`, `category_id`) VALUES ( '$name' ,'$price','$category_id')";
    mysqli_query($db, $sql);
    return mysqli_insert_id($db);
//    $stmt = mysqli_prepare($db, "INSERT INTO `products` ( `name`) VALUES (? ,?)");
//    mysqli_stmt_bind_param($stmt, 's', $name);
//    mysqli_stmt_execute($stmt);
//    return mysqli_fetch_assoc($db);
}

function deleteProduct($id)
{
    $db = require 'db-connect.php';
    $sql = "DELETE FROM `products` WHERE `products`.`id`=$id";
    $result = mysqli_query($db, $sql);
    return $result;

}

function updateProduct($id, $name,$price,$category_id)
{
    $db = require 'db-connect.php';
    $sql = "UPDATE `products` SET `name` = '$name'  WHERE `products`.`id` = $id";
    return mysqli_query($db, $sql);


}