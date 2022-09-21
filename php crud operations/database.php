<?php

$serverName = "localhost";
$userName = "root";
$password = "Aspire@123";
$databaseName = "php_crud";

$connection = new mysqli($serverName, $userName, $password, $databaseName);
if (!$connection) {
    echo "Connection Failed";
}
