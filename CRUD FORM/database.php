<?php

$serverName = "localhost";
$userName = "root";
$password = "Aspire@123";
$databaseName = "registration_form";

$connection = new mysqli($serverName, $userName, $password, $databaseName);
if (!$connection) {
    echo "Connection Failed";
}