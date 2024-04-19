<?php

$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "db.artikel";

function connect()
{
    $connection = mysqli_connect("localhost", "root", "", "db.artikel");
    return $connection;
}
