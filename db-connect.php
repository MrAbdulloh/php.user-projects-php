<?php
$conn = mysqli_connect('localhost','root','','php.user-product');
if (!$conn) {
    die( 'file not connected '. mysqli_connect_error());
}
return $conn;
