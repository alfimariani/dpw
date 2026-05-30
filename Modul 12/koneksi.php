<?php
$con = new mysqli("localhost","root","1","db_kampus");
if ($con->connect_error) {
    die("Connection failed: ". $con->connect_error);
    }
?>