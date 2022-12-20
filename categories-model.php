<?php
function getAllCategory()
{
    $db = require 'db-connect.php';
    $sql = 'SELECT *FROM `categories`';
    return   mysqli_query($db, $sql);
}

function getCategory($id)
{
    $db = require "db-connect.php";
    $sql = "SELECT * FROM `categories` WHERE `id` = $id LIMIT 1";
    $result = mysqli_query($db, $sql);
    return mysqli_fetch_assoc($result);
}

function createCategory($name)
{
    $db = require 'db-connect.php';
    $sql = "INSERT INTO `categories` ( `name`) VALUES ( '$name')";
    mysqli_query($db, $sql);
    return mysqli_insert_id($db);
//    $stmt = mysqli_prepare($db, "INSERT INTO `categories` ( `name`) VALUES (? ,?)");
//    mysqli_stmt_bind_param($stmt, 's', $name);
//    mysqli_stmt_execute($stmt);
//    return mysqli_fetch_assoc($db);
}

function delete($id)
{
    $db = require 'db-connect.php';
    $sql = "DELETE FROM `categories` WHERE `categories`.`id`=$id";
    $result = mysqli_query($db, $sql);
    return $result;

}